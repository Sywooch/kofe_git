<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;
use SimpleXMLElement;
use app\components\JSMin;

/**
 * Site controller
 */
class PageController extends CController {

    public $services;

    public function actionSend() {
        if (Yii::$app->request->isAjax && isset($_POST['phone']) && isset($_POST['title'])) {
            //self::sendToRoistat($_POST['phone'], $_POST['title']);
            Yii::$app->end();
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionGetCss($file, $cache = 0) {
        $siteConfig = self::getSiteConfig();
        $cssPath = Yii::getAlias('@frontend') . '/web' . $file;
        $cachedFile = $cssPath . '-cache.css';
        if ($cache == 1 && is_file($cachedFile)) {
            header("Content-Type: text/css");
            echo str_replace('../', $siteConfig['sitePrefix'] . '/', file_get_contents($cachedFile));
            Yii::$app->end();
        }
        $css = file_get_contents($cssPath);
        $oParser = new \Sabberworm\CSS\Parser($css);
        $oCss = $oParser->parse();
        foreach ($oCss->getAllDeclarationBlocks() as $oBlock) {
            foreach ($oBlock->getSelectors() as $oSelector) {
                if (strpos($oSelector->getSelector(), '.') !== false && (strpos($oSelector->getSelector(), 'ui-') === false)) {
                    $s = $oSelector->getSelector();
                    $s = str_replace('.', '.' . $siteConfig['sitePrefix'], $s);
                    $oSelector->setSelector($s);
                }
            }
        }
        $css = $oCss->render(\Sabberworm\CSS\OutputFormat::createCompact());
        file_put_contents($cachedFile, $css);
        echo str_replace('../', $siteConfig['sitePrefix'] . '/', $css);
        Yii::$app->end();
    }

    private function minifyJs($file) {
        // setup the URL, the JavaScript and the form data
        $url = 'https://javascript-minifier.com/raw';
        $js = file_get_contents($file);
        if (strpos($file, 'main.js') !== false) {
            $siteConfig = self::getSiteConfig();
            $classes = [
                '.logos', '.spb-contact', '.otziv', '.v-msk', '.all-contact', '.more', '.phone', '.popup-zakaz', '.active-bg', '.nav', '.mobile-menu', '.nav-icon2', '.close', '.popup',
                '.zakrit', '.punkt', '.forma', '.regions', '.select-region', '.modelslider'
            ];
            foreach ($classes as $cl) {
                $repClasses[] = '.' . $siteConfig['sitePrefix'] . ltrim($cl, '.');
            }
            $rep = ["'open'", '"active"', '"open"', "'active'"];
            $js = str_replace($rep, ["'" . $siteConfig['sitePrefix'] . "open'", '"' . $siteConfig['sitePrefix'] . 'active"', '"' . $siteConfig['sitePrefix'] . 'open"', "'" . $siteConfig['sitePrefix'] . "active'"], $js);
            $js = str_replace($classes, $repClasses, $js);
        }
        // init the request, set some info, send it and finally close it
//        $ch = curl_init($url);
//        curl_setopt_array($ch, [
//            CURLOPT_URL => $url,
//            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_POST => true,
//            CURLOPT_HTTPHEADER => ["Content-Type: application/x-www-form-urlencoded"],
//            CURLOPT_POSTFIELDS => http_build_query(["input" => $js])
//        ]);
//        $minified = curl_exec($ch);
//        curl_close($ch);
        // output the $minified
        $minified = JSMin::minify($js);
        return $minified;
    }

    private function minifyCss($file) {
        $url = 'https://cssminifier.com/raw';
        $css = file_get_contents($file);
        // init the request, set various options, and send it
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => ["Content-Type: application/x-www-form-urlencoded"],
            CURLOPT_POSTFIELDS => http_build_query(["input" => $css])
        ]);
        $minified = curl_exec($ch);
        // finally, close the request
        curl_close($ch);
        // output the $minified css
        return $minified;
    }

    private function minify($siteConfig) {
        $allcssFiles = [
            '/allcss/main' . (isset($siteConfig['spb']) ? '_1' : (isset($siteConfig['spb-multi']) || in_array($siteConfig['category_id'], [1, 2, 3, 4, 5]) ? '_2' : '')) . '.css',
            '/allcss/animate.css',
            '/allcss/owl.carousel.min.css',
            '/allcss/font-awesome.min.css',
            '/allcss/jquery-ui.css',
            '/' . $siteConfig['sitePrefix'] . 'css/main.css',
            '/' . $siteConfig['sitePrefix'] . 'css/owl.theme.default.min.css',
        ];

        $cssPath = Yii::getAlias('@frontend') . '/web/' . $siteConfig['sitePrefix'] . 'css/';
        $allcssPath = Yii::getAlias('@frontend') . '/web';
        $allCSS = $siteConfig['sitePrefix'] . 'all.css';
        if (isset($siteConfig['css']['files']) && !empty($siteConfig['css']['files']))
            $allcssFiles = $siteConfig['css']['files'];
        if (isset($siteConfig['theme']) && !empty($siteConfig['theme'])) {
            $cssPath = Yii::getAlias('@frontend') . '/web/' . $siteConfig['theme'] . '/css/';
            $allcssPath = Yii::getAlias('@frontend') . '/web/' . $siteConfig['theme'] . '/css/';
        }
        if (isset($siteConfig['css']['mainFileName']) && !empty($siteConfig['css']['mainFileName']))
            $allCSS = $siteConfig['css']['mainFileName'] . '.css';
        file_put_contents($cssPath . $allCSS, '');
        //print_r($allcssFiles);exit;
        foreach ($allcssFiles as $cssFile) {
            $css = file_get_contents($allcssPath . $cssFile);
            if (strpos($cssFile, 'owl') !== false) {
                file_put_contents($cssPath . $allCSS, $css, FILE_APPEND);
            } else {
                $oParser = new \Sabberworm\CSS\Parser($css);
                $oCss = $oParser->parse();
                foreach ($oCss->getAllDeclarationBlocks() as $oBlock) {
                    foreach ($oBlock->getSelectors() as $oSelector) {
                        if (strpos($oSelector->getSelector(), '.') !== false && (strpos($oSelector->getSelector(), 'ui-') === false)) {
                            $s = $oSelector->getSelector();
                            //if (isset($siteConfig['css']['replaceClasses']) && $siteConfig['css']['replaceClasses'] === true)
                            $s = str_replace('.', '.' . $siteConfig['sitePrefix'], $s);
                            $oSelector->setSelector($s);
                        }
                    }
                }
                file_put_contents($cssPath . $allCSS, $oCss->render(\Sabberworm\CSS\OutputFormat::createCompact()), FILE_APPEND);
            }
        }
    }

    public function actionCss() {
        set_time_limit(0);
        ini_set('memory_limit', '1024M');
        if (isset($_GET['site'])) {
            if (isset(Yii::$app->params['siteConfigs'][$_GET['site']])) {
                $conf = Yii::$app->params['siteConfigs'][$_GET['site']];
                $this->minify($conf);
            } else {
                echo '.!.';
            }
            exit;
        }
        foreach (Yii::$app->params['siteConfigs'] as $conf) {
            if ($conf['sitePrefix'] == 'remont')
                continue;
            $this->minify($conf);
        }
    }

    public function actionJs() {
        set_time_limit(0);
        $siteConfig = self::getSiteConfig();
        $jsFiles = [
            'jquery.js',
            'jquery.inputmask.bundle.js',
            'yii.activeForm.js',
            'yii.js',
            'yii.validation.js',
            'owl.carousel.min.js',
            'jquery.sticky.js',
            'jquery-ui.js',
            'main.js',
        ];
        if (isset($siteConfig['jsFiles']) && !empty($siteConfig['jsFiles']))
            $jsFiles = $siteConfig['jsFiles'];
        $allJS = $siteConfig['sitePrefix'] . 'all.js';
        if (isset($siteConfig['mainJSFileName']) && !empty($siteConfig['mainJSFileName']))
            $allJS = $siteConfig['mainJSFileName'] . '.js';

        $jsPath = Yii::getAlias('@frontend') . '/web/' . $siteConfig['sitePrefix'] . 'js/';
        $js = Yii::getAlias('@frontend') . '/web/js/';
        if (isset($siteConfig['theme']) && !empty($siteConfig['theme'])) {
            $js = Yii::getAlias('@frontend') . '/web/' . $siteConfig['theme'] . '/js/';
            $jsPath = Yii::getAlias('@frontend') . '/web/' . $siteConfig['theme'] . '/js/';
        }
        file_put_contents($jsPath . $allJS, null);
        foreach ($jsFiles as $jsFile) {
            if (in_array($siteConfig['category_id'], [1, 2, 3, 4, 5, 6]) && $jsFile == 'main.js' && !isset($siteConfig['theme'])) {
                $js = Yii::getAlias('@frontend') . '/web/' . $siteConfig['sitePrefix'] . 'js/';
            }
            file_put_contents($jsPath . $allJS, $this->minifyJs($js . $jsFile), FILE_APPEND);
        }
    }

    public function actionFavicon() {
        $siteConfig = self::getSiteConfig();
        $fileID = Yii::getAlias('@frontend') . '/web/' . $siteConfig['sitePrefix'] . 'images/' . $siteConfig['id'] . '.ico';
        if (is_file($fileID)) {
            $file = $fileID;
        } else {
            $file = Yii::getAlias('@frontend') . '/web/' . $siteConfig['sitePrefix'] . 'images/' . $siteConfig['sitePrefix'] . 'favicon.ico';
        }
        $fp = fopen($file, 'rb');
        header('Content-Type: image/x-icon');
        header('Content-Length: ' . filesize($file));
        fpassthru($fp);
        exit();
    }

    public function actionRobots() {
        $robots = "User-agent: * \r\nDisallow: /";
        if (!empty(CController::$js['robots']))
            $robots = CController::$js['robots'];
        header("Content-Type: text/plain");
        echo str_replace(["User-agent: Googlebot", 'User-agent: Yandex', 'User-agent: *'], ["User-agent: Googlebot\r\nDisallow: *?", "User-agent: Yandex\r\nDisallow: *?", "User-agent: *\r\nDisallow: *?"], $robots);
        exit;
    }

    private function getAppleUrls() {
        $sql = 'SELECT m.url, m.type, m.id, m.title, (
                    CASE 
                        WHEN b.title = \'Все бренды\' THEN m.title        
                        ELSE b.title
                    END) AS brand_title,
                    (
                    CASE 
                        WHEN m.type = \'brand\' THEN \'\'     
                        ELSE m.title
                    END) as model_title, m.parent FROM {{%pages}} m left join {{%pages}} b on b.id = m.parent WHERE m.active = 1 AND m.url != \'/\' ORDER BY m.id';
        $pages = Yii::$app->db->createCommand($sql)->queryAll();
        $sql = 'SELECT url, type, id, title FROM {{%services}} WHERE is_popular = 1 and type = 2';
        $services = Yii::$app->db->createCommand($sql)->queryAll();
        $hostname = Yii::$app->request->hostInfo;
        $urls = [];
        foreach ($pages as $key => $page) {
            $urls[] = $page;
            if ($page['type'] == 'category') {
                $brand_title = 'Apple';
                $model_title = '';
                foreach ($services as $service) {
                    if ($service['type'] == 2) {
                        $service['type'] = 'Неисправность';
                    }
                    $urls[] = ['url' => $page['url'] . '-' . $service['url'], 'type' => $service['type'], 'id' => $service['id'], 'title' => $service['title'], 'brand_title' => $brand_title, 'model_title' => $model_title, 'parent' => 0];
                }
            }
        }
        return $urls;
    }

    private function getUrls($siteConfig) {
        exit;
        $sql = 'SELECT m.url, m.type, m.id, m.title, (
                    CASE 
                        WHEN b.title = \'Все бренды\' THEN m.title        
                        ELSE b.title
                    END) AS brand_title,
                    (
                    CASE 
                        WHEN m.type = \'brand\' THEN \'\'     
                        ELSE m.title
                    END) as model_title, m.parent FROM {{%pages}} m left join {{%pages}} b on b.id = m.parent WHERE m.active = 1 AND m.category_id = ' . $siteConfig['category_id'] . ' AND m.url != \'/\' ORDER BY m.id';
        $pages = Yii::$app->db->createCommand($sql)->queryAll();
        $sql = 'SELECT url, type, id, title FROM {{%services}} WHERE is_popular = 1 AND category_id = ' . $siteConfig['category_id'];
        $services = Yii::$app->db->createCommand($sql)->queryAll();
        $hostname = Yii::$app->request->hostInfo;
        $urls = [];
        foreach ($pages as $key => $page) {
            $urls[] = $page;
            if ($page['type'] == 'model' || $page['type'] == 'brand') {
                if ($page['type'] == 'brand') {
                    $brand_title = $page['title'];
                    $model_title = '';
                } elseif ($page['type'] == 'model') {
                    //echo $sql = 'SELECT title FROM {{%pages}} WHERE id = ' . $page['parent'];exit;
                    //$brand = Yii::$app->db->createCommand($sql)->queryOne();
                    $brand_title = $page['brand_title'];
                    $model_title = $page['model_title'];
                }
                if ($brand_title == 'Все бренды') {
                    $brand_title = $model_title;
                }
                if ($brand_title == $model_title) {
                    $model_title = '';
                }
                foreach ($services as $service) {
                    if ($service['type'] == 1) {
                        $service['type'] = 'Услуга';
                    } elseif ($service['type'] == 2) {
                        $service['type'] = 'Неисправность';
                    }
                    $urls[] = ['url' => $hostname . '/' . $page['url'] . '/' . $service['url'], 'type' => $service['type'], 'id' => $service['id'], 'title' => $service['title'], 'brand_title' => $brand_title, 'model_title' => $model_title, 'parent' => 0];
                }
            }
        }
        foreach ($services as $service) {
            $urls[] = $service;
        }
        return $urls;
    }

    private function getMonoUrls($siteConfig) {
        $sql = 'SELECT m.url, m.type, m.id, m.title, (
                    CASE 
                        WHEN b.title = \'Все бренды\' THEN m.title        
                        ELSE b.title
                    END) AS brand_title,
                    (
                    CASE 
                        WHEN m.type = \'brand\' THEN \'\'     
                        ELSE m.title
                    END) as model_title, m.parent FROM {{%pages}} m left join {{%pages}} b on b.id = m.parent  WHERE m.active = 1 AND m.url != \'/\' AND m.category_id = ' . $siteConfig['category_id'] . ' AND (m.parent = ' . self::$monoBrand['id'] . ' OR m.site_id = ' . $siteConfig['id'] . ')';
        $pages = Yii::$app->db->createCommand($sql)->queryAll();
        $sql = 'SELECT url, type, id, title FROM {{%services}} WHERE is_popular = 1 AND category_id = ' . $siteConfig['category_id'];
        $hostname = Yii::$app->request->hostInfo;
        $urls = [];
        $services = Yii::$app->db->createCommand($sql)->queryAll();
        foreach ($pages as $page) {
            $page['url'] = str_replace(\app\components\CController::$monoBrand['url'] . '/', Yii::$app->params['replace-url'], $page['url']);
            $urls[] = $page;
            if ($page['type'] == 'model' || $page['type'] == 'brand') {
                if ($page['type'] == 'brand') {
                    $brand_title = $page['title'];
                    $model_title = '';
                } elseif ($page['type'] == 'model') {
                    //echo $sql = 'SELECT title FROM {{%pages}} WHERE id = ' . $page['parent'];exit;
                    //$brand = Yii::$app->db->createCommand($sql)->queryOne();
                    $brand_title = $page['brand_title'];
                    $model_title = $page['model_title'];
                }
                if ($brand_title == 'Все бренды') {
                    $brand_title = $model_title;
                }
                if ($brand_title == $model_title) {
                    $model_title = '';
                }
                foreach ($services as $service) {
                    if ($service['type'] == 1) {
                        $service['type'] = 'Услуга';
                    } elseif ($service['type'] == 2) {
                        $service['type'] = 'Неисправность';
                    }
                    $urls[] = ['url' => $hostname . '/' . $page['url'] . '/' . $service['url'], 'type' => $service['type'], 'id' => $service['id'], 'title' => $service['title'], 'brand_title' => $brand_title, 'model_title' => $model_title, 'parent' => 0];
                }
            }
        }
        foreach ($services as $service) {
            $urls[] = $service;
        }
        return $urls;
    }

    public function getMultiCategoryUrls($siteConfig) {
        $sql = 'SELECT
                    m.url,
                    m.type,
                    m.parent,
                    m.id,
                    m.category_id
                FROM
                    yu_pages m
                LEFT JOIN yu_pages c ON c.id = m.parent
                WHERE
                    m.active = 1 AND c.active = 1 AND m.type != \'brand\' AND c.parent = ' . (int) $siteConfig['brand-id'] . ' AND c.id = m.parent #AND c.category_id = 7
                AND m.url != \'/\'
                UNION
                SELECT
                    url,
                    type,
                    parent,
                    id,
                    category_id
                FROM
                    yu_pages WHERE (active = 1 AND parent = ' . (int) $siteConfig['brand-id'] . ') OR type IN (\'info\', \'news\') AND url != \'/\'';
        $pages = Yii::$app->db->createCommand($sql)->queryAll();
        $hostname = Yii::$app->request->hostInfo;
        $urls = [];
        foreach ($pages as $key => $page) {
            if ($siteConfig['id'] == 113 && $page['type'] == 'model') {
                continue;
            }
            $urls[] = $page;
            if ($page['type'] == 'category' || $page['type'] == 'model') {

                $parent = [];
                if ($page['type'] == 'model')
                    $parent = Yii::$app->db->createCommand('SELECT category_id FROM {{%pages}} WHERE id = ' . $page['parent'])->queryOne();
                $sql = 'SELECT url FROM {{%services}} WHERE is_popular = 1 AND category_id = ' . ($page['type'] == 'model' ? $parent['category_id'] : $page['category_id']);
                $services = Yii::$app->db->createCommand($sql)->queryAll();
                foreach ($services as $service) {
                    $urls[] = ['url' => $page['url'] . '/' . $service['url']];
                }
            }
        }
        return $urls;
    }

    public function actionSitemap2() {
        $siteConfig = self::getSiteConfig();
        set_time_limit(0);
        ini_set("memory_limit", '2048M');
        ini_set("display_errors", false);
        error_reporting(false);
        if (isset($_GET['table']) && $_GET['table'] == 777) {
            ini_set("memory_limit", '2048M');
            ini_set("display_errors", true);
            error_reporting(E_ALL);
            if (isset($siteConfig['multi_category']) && $siteConfig['theme'] == 'ifixme') {
                $urls = $this->getAppleUrls();
            } elseif ($siteConfig['mono']) {
                $urls = $this->getMonoUrls($siteConfig);
            } else {
                $urls = $this->getUrls($siteConfig);
            }
            //print_r($urls);exit;
            $path = Yii::getAlias('@frontend') . '/web/uploads/';
            $fp = fopen($path . 'urls.csv', 'w');
            foreach ($urls as $fields) {
                fputcsv($fp, $fields);
            }
            fclose($fp);
            $file = $path . 'urls.csv';
            if (file_exists($file)) {
                if (false !== ($handler = fopen($file, 'r'))) {
                    header('Content-Description: File Transfer');
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename=' . basename($file));
                    header('Content-Transfer-Encoding: binary');
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                    header('Pragma: public');
                    header('Content-Length: ' . filesize($file)); //Remove
                    //Send the content in chunks
                    while (false !== ($chunk = fread($handler, 4096))) {
                        echo $chunk;
                    }
                }
                exit;
            }
            exit;
        }
        if (isset($siteConfig['foreign_category']) && $siteConfig['foreign_category']) {
            $urls = $this->getMultiCategoryUrls($siteConfig);
            $hostname = Yii::$app->request->hostInfo;
            $xmlIndex = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />');
            foreach ($urls as $page) {
                $url = $xmlIndex->addChild('url');
                $page['url'] = $page['url'];
                $url->addChild('loc', $hostname . '/' . $page['url']);
                $url->addChild('lastmod', date("Y-m-d", time()));
            }
            header('content-type:text/xml');
            echo $xmlIndex->asXML();
            exit;
        }

        if (isset($siteConfig['multi_category']) && $siteConfig['theme'] == 'ifixme') {
            $urls = $this->getAppleUrls();
            $hostname = Yii::$app->request->hostInfo;
            $xmlIndex = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />');
            foreach ($urls as $page) {
                $url = $xmlIndex->addChild('url');
                $page['url'] = $page['url'];
                $url->addChild('loc', $hostname . '/' . $page['url']);
                $url->addChild('lastmod', date("Y-m-d", time()));
            }
            header('content-type:text/xml');
            echo $xmlIndex->asXML();
            exit;
        }
        if ($siteConfig['mono']) {
            $hostname = Yii::$app->request->hostInfo;
            $xmlIndex = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />');
            $sql = 'SELECT url, type, id FROM {{%pages}} WHERE active = 1 AND url != \'/\' AND category_id = ' . $siteConfig['category_id'] . ' AND (parent = ' . self::$monoBrand['id'] . ' OR site_id = ' . $siteConfig['id'] . ')';
            $pages = Yii::$app->db->createCommand($sql)->queryAll();
            $url = $xmlIndex->addChild('url');
            $url->addChild('loc', $hostname);
            $url->addChild('lastmod', date("Y-m-d", time()));
            $sql = 'SELECT url, type, id FROM {{%services}} WHERE is_popular = 1 AND category_id = ' . $siteConfig['category_id'];
            $services = Yii::$app->db->createCommand($sql)->queryAll();
            foreach ($pages as $page) {
                $url = $xmlIndex->addChild('url');
                $page['url'] = str_replace(\app\components\CController::$monoBrand['url'] . '/', Yii::$app->params['replace-url'], $page['url']);
                $url->addChild('loc', $hostname . '/' . $page['url']);
                $url->addChild('lastmod', date("Y-m-d", time()));
                if ($page['type'] == 'model' || $page['type'] == 'brand') {
                    foreach ($services as $service) {
                        $urlService = $xmlIndex->addChild('url');
                        $urlService->addChild('loc', $hostname . '/' . $page['url'] . '/' . $service['url']);
                        $urlService->addChild('lastmod', date("Y-m-d", time()));
                    }
                }
            }
            foreach ($services as $service) {
                $url = $xmlIndex->addChild('url');
                $url->addChild('loc', $hostname . '/' . $service['url']);
                $url->addChild('lastmod', date("Y-m-d", time()));
            }
            header('content-type:text/xml');
            echo $xmlIndex->asXML();
            exit;
        }

        $path = Yii::getAlias('@frontend') . '/web/uploads/';
        if (!file_exists($path . '/' . $siteConfig['sitePrefix'])) {
            mkdir($path . '/' . $siteConfig['sitePrefix'], 0777, true);
        }
        if (is_file($path . '/' . $siteConfig['sitePrefix'] . '/sitemap.xml')) {
            header('content-type:text/xml');
            echo file_get_contents($path . '/' . $siteConfig['sitePrefix'] . '/sitemap.xml');
            exit;
        }
        $sql = 'SELECT url, type, id FROM {{%pages}} WHERE active = 1 AND category_id = ' . $siteConfig['category_id'] . ' AND url != \'/\' ORDER BY id';
        $pages = Yii::$app->db->createCommand($sql)->queryAll();
        $sql = 'SELECT url, type, id FROM {{%services}} WHERE is_popular = 1 AND category_id = ' . $siteConfig['category_id'];
        $services = Yii::$app->db->createCommand($sql)->queryAll();
        $hostname = Yii::$app->request->hostInfo;
        if (in_array($siteConfig['id'], [51, 53])) {
            $hostname = str_replace('http', 'https', $hostname);
        }
        $per = 50000;
        $n = 0;
        $numPages = ceil((count($pages) * count($services) + count($services)) / $per);
        $a = 1;
        $urls = [];
        foreach ($pages as $key => $page) {
            if ($page['type'] == 'model' || $page['type'] == 'brand') {
                if (isset($siteConfig['sitemap']['modelsPage']) && !$siteConfig['sitemap']['modelsPage'] && $page['type'] == 'model')
                    continue;
                $urls[] = $page['url'];
                if ($page['type'] == 'model') {
                    if (isset($siteConfig['sitemap']['disableServicePage'])) {
                        continue;
                    }
                } else {
                    foreach ($services as $service) {
                        $urls[] = $page['url'] . '/' . $service['url'];
                    }
                }
            }
        }
        unset($pages);
        foreach ($services as $service) {
            $urls[] = $service['url'];
        }
        if (count($urls) <= $per) {
            $hostname = Yii::$app->request->hostInfo;
            $xmlIndex = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />');
            $url = $xmlIndex->addChild('url');
            $url->addChild('loc', $hostname);
            $url->addChild('lastmod', date("Y-m-d", time()));
            foreach ($urls as $page) {
                $url = $xmlIndex->addChild('url');
                $url->addChild('loc', $hostname . '/' . $page);
                $url->addChild('lastmod', date("Y-m-d", time()));
            }
            header('content-type:text/xml');
            echo $xmlIndex->asXML();
            exit;
        }
        unset($services);
        $xmlIndex = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />');
        for ($b = 1; $b <= $numPages; $b++) {
            if (is_file($path . '/' . $siteConfig['sitePrefix'] . '/sitemap' . $b . '.xml.gz')) {
                continue;
            }
            $xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />');
            foreach ($urls as $key => $siteUrl) {
                $url = $xml->addChild('url');
                $url->addChild('loc', $hostname . '/' . $siteUrl);
                $url->addChild('lastmod', date("Y-m-d", time()));
                unset($urls[$key]);
                $n++;
                if ($n == $per) {
                    $n = 0;
                    break;
                }
            }
            file_put_contents($path . '/' . $siteConfig['sitePrefix'] . '/sitemap' . $b . '.xml.gz', gzencode($xml->asXML(), 9));
            $L = $hostname . '/uploads/' . $siteConfig['sitePrefix'] . '/sitemap' . $b . '.xml.gz';
            $sitemap = $xmlIndex->addChild('sitemap');
            $sitemap->addChild('loc', $L);
            $sitemap->addChild('lastmod', date("Y-m-d", time()));
        }

        $xml = $xmlIndex->asXML();
        file_put_contents($path . '/' . $siteConfig['sitePrefix'] . '/sitemap.xml', $xml);
        header('content-type:text/xml');
        echo $xml;
        exit;
    }

    public function actionSitemap() {
        set_time_limit(0);
        ini_set("memory_limit", '1024M');
        ini_set("display_errors", false);
        error_reporting(false);
        $hostname = 'http://remontkofe.ru';
        $xmlIndex = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />');
        $sql = 'SELECT url, type, id FROM {{%pages}} WHERE active = 1 AND url != \'/\'';
        $pages = Yii::$app->db->createCommand($sql)->queryAll();
        $url = $xmlIndex->addChild('url');
        $url->addChild('loc', $hostname);
        $url->addChild('lastmod', date("Y-m-d", time()));
        $sql = 'SELECT url, type, id FROM {{%services}} WHERE is_popular = 1';
        $services = Yii::$app->db->createCommand($sql)->queryAll();
        foreach ($pages as $page) {
            $url = $xmlIndex->addChild('url');
            $url->addChild('loc', $hostname . '/' . $page['url']);
            $url->addChild('lastmod', date("Y-m-d", time()));
            if ($page['type'] == 'model' || $page['type'] == 'brand') {
                foreach ($services as $service) {
                    $urlService = $xmlIndex->addChild('url');
                    $urlService->addChild('loc', $hostname . '/' . $page['url'] . '/' . $service['url']);
                    $urlService->addChild('lastmod', date("Y-m-d", time()));
                }
            }
        }
        foreach ($services as $service) {
            $url = $xmlIndex->addChild('url');
            $url->addChild('loc', $hostname . '/' . $service['url']);
            $url->addChild('lastmod', date("Y-m-d", time()));
        }
        header('content-type:text/xml');
        echo $xmlIndex->asXML();
        exit;
    }

    function recurse($categories, $parent = null, $level = 0) {
        $ret = '<ul>';
        foreach ($categories as $index => $category) {
            if ($category['parent'] == $parent) {
                if ($category['url'] == 'uslugi-i-ceny') {
                    $serviceshtml = '<ul>';
                    foreach ($this->services as $service) {
                        $serviceshtml .= '<li><a href="/' . $service['url'] . '">' . $service['title'] . '</a></li>';
                    }
                    $serviceshtml .= '</ul>';
                } elseif ($category['type'] == 'model' || $category['type'] == 'brand') {
                    $brandhtml = '<ul>';
                    foreach ($this->services as $service) {
                        $brandhtml .= '<li><a href="/' . $service['url'] . '">' . $service['title'] . '</a></li>';
                    }
                    $brandhtml .= '</ul>';
                }
                $ret .= '<li><a href="/' . ($category['url'] == '/' ? '' : $category['url']) . '"><p class="Tier' . $level . '">' . $category['title'] . '</p>' . (isset($serviceshtml) && !empty($serviceshtml) ? $serviceshtml : '') . (isset($brandhtml) && !empty($brandhtml) ? $brandhtml : '') . '</a>';
                $ret .= $this->recurse($categories, $category['id'], $level + 1);
                $ret .= '</li>';
            }
        }
        return $ret . '</ul>';
    }

    public function actionSitemapHtml() {
        $hostname = 'http://remontkofe.ru';
        $sql = 'SELECT url, type, id, parent, title FROM {{%pages}} WHERE active = 1';
        $pages = Yii::$app->db->createCommand($sql)->queryAll();
        $sql = 'SELECT url, type, id, title FROM {{%services}}';
        $this->services = Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('sitemap', ['tree' => $this->recurse($pages, 0)]);
    }

    public function actionTypes() {
        $pageInfo = $_GET['data'];
        $siteConfig = self::getSiteConfig();
        if ($pageInfo['site_id'] > 0 && $pageInfo['site_id'] != $siteConfig['id'])
            throw new NotFoundHttpException('The requested page does not exist.');
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        $ms = Yii::$app->db->createCommand('SELECT url, title FROM {{%pages}} WHERE type = \'types\' ORDER BY sort')->queryAll();
        $menus = [];
        foreach ($ms as $m) {
            $menus[$m['url']] = $m['title'];
        }
        return $this->render('types', ['model' => $pageInfo, 'menus' => $menus]);
    }

    public function actionView() {
        //throw new NotFoundHttpException('The requested page does not exist.');
        $pageInfo = $_GET['data'];
        $siteConfig = self::getSiteConfig();
        if ($pageInfo['site_id'] > 0 && $pageInfo['site_id'] != $siteConfig['id'])
            throw new NotFoundHttpException('The requested page does not exist.');
//        \Yii::$app->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => $pageInfo['meta_key']
//        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        return $this->render('view', ['model' => $pageInfo]);
    }

}
