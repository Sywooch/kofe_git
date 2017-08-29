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
        $data = array(
            'input' => $js,
        );
        // init the request, set some info, send it and finally close it
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $minified = curl_exec($ch);
        curl_close($ch);
        // output the $minified
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

    public function actionCss() {
        $cssFiles = [
            'main.css',
            'animate.css',
            'owl.carousel.min.css',
            'owl.theme.default.min.css',
            'font-awesome.min.css',
        ];
        $cssPath = Yii::getAlias('@frontend') . '/web/css/';
        file_put_contents($cssPath . 'all.css', '');
        foreach ($cssFiles as $cssFile) {
            file_put_contents($cssPath . 'all.css', $this->minifyCss($cssPath . $cssFile), FILE_APPEND);
        }
    }

    public function actionJs() {
        $cssFiles = [
            'main.css',
            'animate.css',
            'owl.carousel.min.css',
            'owl.theme.default.min.css',
            'font-awesome.min.css',
        ];
        $cssPath = Yii::getAlias('@frontend') . '/web/css/';
        file_put_contents($cssPath . 'all.css', '');
        foreach ($cssFiles as $cssFile) {
            file_put_contents($cssPath . 'all.css', $this->minifyCss($cssPath . $cssFile), FILE_APPEND);
        }
    }

    public function actionSitemap2() {
        $path = Yii::getAlias('@frontend') . '/web/uploads/';
        $sql = 'SELECT count(*) as cnt FROM {{%pages}} WHERE active = 1 AND url != \'/\'';
        $pages = Yii::$app->db->createCommand($sql)->queryOne();
        $hostname = 'http://remontkofe.ru';
        $per = 5000;
        $n = 0;
        $numPages = ceil($pages['cnt'] / $per);
        $xmlIndex = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />');
        $sql = 'SELECT url, type, id FROM {{%services}}';
        $services = Yii::$app->db->createCommand($sql)->queryAll();
        for ($b = 1; $b <= $numPages; $b++) {
            $sql = 'SELECT url, type, id FROM {{%pages}} WHERE active = 1 AND url != \'/\' ORDER BY id LIMIT ' . $n . ', ' . $per;
            $pages = Yii::$app->db->createCommand($sql)->queryAll();
            $xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />');
            foreach ($pages as $key => $page) {
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
            $n += $per;
            $siteMapXML = $path . 'sitemap' . $n . '.xml.gz';
            file_put_contents($siteMapXML, gzencode($xml->asXML(), 9));
            $sitemap = $xmlIndex->addChild('sitemap');
            $sitemap->addChild('loc', $hostname . '/' . $siteMapXML);
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
