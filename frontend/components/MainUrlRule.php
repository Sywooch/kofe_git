<?php

namespace app\components;

use yii\web\UrlRule;
use Yii;

class MainUrlRule extends UrlRule {

    public $connectionID = 'db';

    public function init() {
        if ($this->name === null) {
            $this->name = __CLASS__;
        }
    }

    public function createUrl($manager, $route, $params) {
        if (isset($params['page'])) {
            return Yii::$app->request->pathInfo . ($params['page'] == 1 ? '' : '?page=' . $params['page']);
        } else {
            return false;
        }
    }

    public function parseRequest($manager, $request) {
        $siteConfig = self::getSiteConfig();
        if (!isset($siteConfig['multi_category'])) {
            $sql = 'SELECT * FROM {{%categories}} WHERE id = ' . (int) $siteConfig['category_id'] . ' LIMIT 1';
            CController::$category = \Yii::$app->db->createCommand($sql)->queryOne();
        }
        $pathInfo = strtolower($request->getPathInfo());
        $arrayUrl = explode('/', $pathInfo);
        if ($siteConfig['mono']) {
            if (strpos($pathInfo, 'remont-kofemashin-') !== false)
                return ['site/error', []];
            $replaceUrl = Yii::$app->params['replace-url'];
            $brand = Yii::$app->db->createCommand('SELECT id, title, url, image FROM {{%pages}} WHERE id = ' . $siteConfig['brand-id'])->queryOne();
            $pathInfo = str_replace($replaceUrl, $brand['url'] . '/', $pathInfo);
        }

        if (empty($pathInfo))
            $pathInfo = '/';

        $serv = $this->checkToService(end($arrayUrl));

        if ($serv !== false)
            return ['list/service', ['data' => array_merge($serv, ['is_service' => 1])]];

        $page = $this->getPage($pathInfo);

        if (empty($page))
            return ['site/error', []];
        else {
            return $this->turnToController($page);
        }
    }

    protected function checkToService($url) {
        $siteConfig = self::getSiteConfig();
        $category_id = CController::$category['id'];
        if (isset($siteConfig['multi_category']) && !empty($url)) {
            $category_url = explode('-', $url);            
            if (isset($category_url[1]))
                $category_url = $category_url[0] . '-' . $category_url[1];
            else
                return false;
            $sql = 'select * from {{%pages}} where lower(url) =:url limit 1';
            $category = Yii::$app->db->createCommand($sql)->bindValues(['url' => $category_url])->queryOne();
            if (!empty($category)) {
                CController::$category = $category;
                $category_id = $category['id'];
                $url = str_replace($category_url . '-', '', $url);
            }
        }
        $sql = 'select * from {{%services}} where lower(url) =:url and category_id =:category_id limit 1';
        $page = Yii::$app->db->createCommand($sql)->bindValues(['url' => $url, 'category_id' => $category_id])->queryOne();

        if (!empty($page)) {
            $seo = (new \yii\db\Query())
                    ->select(['*'])
                    ->from('{{%seo}}')
                    ->where(['url' => Yii::$app->request->pathInfo, 'site_id' => $siteConfig['id']])
                    ->limit(1)
                    ->one();
            if (!empty($seo)) {
                $page['meta_key'] = $seo['meta_keywords'] ?: $page['meta_keywords'];
                $page['meta_desc'] = $seo['meta_description'] ?: $page['meta_description'];
                $page['meta_title'] = !empty($seo['meta_title']) ? $seo['meta_title'] : (!empty($page['meta_title']) ? $page['meta_title'] : '');
                $page['meta_h1'] = !empty($seo['meta_h1']) ? $seo['meta_h1'] : (!empty($page['meta_h1']) ? $page['meta_h1'] : '');
                $page['description'] = $seo['meta_text1'] ?: $page['description'];
                
                if (isset($siteConfig['multi_category']))
                    $page['full_description'] = $seo['meta_text2'] ?: (!empty ($page['full_description']) ? $page['full_description'] : '');
            }
        }

        return $page;
    }

    protected function turnToController($pageInfo) {
        if (empty($pageInfo))
            return ['site/error', []];
        return [$pageInfo['action'], ['data' => $pageInfo]];
    }

    private function getPage($url) {
        $siteConfig = self::getSiteConfig();
        $seo = (new \yii\db\Query())
                ->select(['*'])
                ->from('{{%seo}}')
                ->where(['url' => Yii::$app->request->pathInfo, 'site_id' => $siteConfig['id']])
                ->limit(1)
                ->one();
        $sql = 'select * from {{%pages}} where lower(url) =:url limit 1';
        $page = Yii::$app->db->createCommand($sql)->bindValues(['url' => $url])->queryOne();
        if (!empty($seo)) {
            $page['meta_key'] = $seo['meta_keywords'] ?: $page['meta_key'];
            $page['meta_desc'] = $seo['meta_description'] ?: $page['meta_desc'];
            $page['meta_title'] = $seo['meta_title'] ?: $page['meta_title'];
            $page['meta_h1'] = $seo['meta_h1'] ?: $page['meta_h1'];
            $page['description'] = $seo['meta_text1'] ?: $page['description'];
            $page['full_description'] = $seo['meta_text2'] ?: $page['full_description'];
        }
        return $page;
    }

    public static function getSiteConfig() {
        $host = Yii::$app->request->hostInfo;
        $hostArr = explode('.', $host);
        $ad = '.' . end($hostArr);
        $host = str_replace([$ad, 'http://', 'https://'], '', $host);
        return Yii::$app->params['siteConfigs'][$host];
    }

}
