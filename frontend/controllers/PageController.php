<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;
use SimpleXMLElement;

/**
 * Site controller
 */
class PageController extends CController {

    public $services;

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
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => ["Content-Type: application/x-www-form-urlencoded"],
            CURLOPT_POSTFIELDS => http_build_query(["input" => $js])
        ]);
        $minified = curl_exec($ch);
        curl_close($ch);
        // output the $minified
        return $minified . "\r\n";
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

    public function actionCss() {
        set_time_limit(0);
        $siteConfig = self::getSiteConfig();
        $allcssFiles = [
            '/allcss/main' . (isset($siteConfig['spb']) ? '_1' : '') . '.css',
            '/allcss/animate.css',
            '/allcss/owl.carousel.min.css',
            '/allcss/font-awesome.min.css',
            '/allcss/jquery-ui.css',
            '/' . $siteConfig['sitePrefix'] . 'css/main.css',
            '/' . $siteConfig['sitePrefix'] . 'css/owl.theme.default.min.css',
        ];
        $cssPath = Yii::getAlias('@frontend') . '/web/' . $siteConfig['sitePrefix'] . 'css/';
        $allcssPath = Yii::getAlias('@frontend') . '/web';
        file_put_contents($cssPath . $siteConfig['sitePrefix'] . 'all.css', '');
        foreach ($allcssFiles as $cssFile) {
            $css = file_get_contents($allcssPath . $cssFile);
            if (strpos($cssFile, 'owl') !== false) {
                file_put_contents($cssPath . $siteConfig['sitePrefix'] . 'all.css', $css, FILE_APPEND);
            } else {
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
                file_put_contents($cssPath . $siteConfig['sitePrefix'] . 'all.css', $oCss->render(\Sabberworm\CSS\OutputFormat::createCompact()), FILE_APPEND);
            }
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
        $jsPath = Yii::getAlias('@frontend') . '/web/' . $siteConfig['sitePrefix'] . 'js/';
        $js = Yii::getAlias('@frontend') . '/web/js/';
        file_put_contents($jsPath . $siteConfig['sitePrefix'] . 'all.js', '');
        foreach ($jsFiles as $jsFile) {
            file_put_contents($jsPath . $siteConfig['sitePrefix'] . 'all.js', $this->minifyJs($js . $jsFile), FILE_APPEND);
        }
    }

    public function actionSitemap2() {

        $siteConfig = self::getSiteConfig();

        if ($siteConfig['mono']) {
            set_time_limit(0);
            ini_set("memory_limit", '1024M');
            ini_set("display_errors", false);
            error_reporting(false);
            $hostname = Yii::$app->request->hostInfo;
            $xmlIndex = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />');
            $sql = 'SELECT url, type, id FROM {{%pages}} WHERE active = 1 AND url != \'/\' AND (parent = ' . self::$monoBrand['id'] . ' OR id = ' . self::$monoBrand['id'] . ')';
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

        $path = Yii::getAlias('@frontend') . '/web/uploads/';
        $sql = 'SELECT url, type, id FROM {{%pages}} WHERE active = 1 AND url != \'/\' ORDER BY id';
        $pages = Yii::$app->db->createCommand($sql)->queryAll();
        $sql = 'SELECT url, type, id FROM {{%services}}';
        $services = Yii::$app->db->createCommand($sql)->queryAll();
        $hostname = Yii::$app->request->hostInfo;
        $per = 50000;
        $n = 0;
        $numPages = ceil((count($pages) * count($services) + count($services)) / $per);
        $a = 1;
        $urls = [];
        foreach ($pages as $key => $page) {
            $urls[] = $page['url'];
            if ($page['type'] == 'model' || $page['type'] == 'brand') {
                foreach ($services as $service) {
                    $urls[] = $page['url'] . '/' . $service['url'];
                }
            }
        }
        foreach ($services as $service) {
            $urls[] = $service['url'];
        }
        $xmlIndex = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />');
        for ($b = 1; $b <= $numPages; $b++) {
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
            file_put_contents($path . 'sitemap' . $b . '.xml.gz', gzencode($xml->asXML(), 9));
            $L = $hostname . '/uploads/sitemap' . $b . '.xml.gz';
            $sitemap = $xmlIndex->addChild('sitemap');
            $sitemap->addChild('loc', $L);
            $sitemap->addChild('lastmod', date("Y-m-d", time()));
        }
        header('content-type:text/xml');
        echo $xmlIndex->asXML();
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

    public function actionView() {
        $pageInfo = $_GET['data'];
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $pageInfo['meta_key']
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        return $this->render('view', ['model' => $pageInfo]);
    }

}
