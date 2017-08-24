<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;

/**
 * Site controller
 */
class PageController extends CController {

    public $services;

    public function actionSitemap() {
        $hostname = 'http://remontkofe.ru';
        $xmlIndex = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />');
        $sql = 'SELECT url, type, id FROM {{%pages}} WHERE active = 1 AND url != \'/\'';
        $pages = Yii::$app->db->createCommand($sql)->queryAll();
        $url = $xmlIndex->addChild('url');
        $url->addChild('loc', $hostname);
        $url->addChild('lastmod', date("Y-m-d", time()));
        $sql = 'SELECT url, type, id FROM {{%services}}';
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
