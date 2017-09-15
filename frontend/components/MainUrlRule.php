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
        $replaceUrl = Yii::$app->params['replace-url'];
        $pathInfo = strtolower($request->getPathInfo());
        if (empty($pathInfo))
            $pathInfo = '/';

        $arrayUrl = explode('/', $pathInfo);
        $serv = $this->checkToService(end($arrayUrl));
        if (!empty($serv))
            return ['list/service', ['data' => array_merge($serv, ['is_service' => 1])]];

        $page = $this->getPage($pathInfo);

        if (empty($page))
            return ['site/error', []];
        else {
            return $this->turnToController($page);
        }
    }

    protected function checkToService($url) {
        $sql = 'select * from {{%services}} where lower(url) =:url limit 1';
        return Yii::$app->db->createCommand($sql)->bindValues(['url' => $url])->queryOne();
    }

    protected function turnToController($pageInfo) {
        if (empty($pageInfo))
            return ['site/error', []];
        return [$pageInfo['action'], ['data' => $pageInfo]];
    }

    private function getPage($url) {
        $siteConfig = self::getSiteConfig();
        $sql = 'select * from {{%pages}} where lower(url) =:url limit 1';
        $page = Yii::$app->db->createCommand($sql)->bindValues(['url' => $url])->queryOne();
        
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
