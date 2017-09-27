<?php

namespace app\components;

use Yii;

class CController extends \yii\web\Controller {

    public static $menu = [];
    public static $monoBrand = null;
    public static $js;

    public function beforeAction($event) {

//        $sql = 'select title, url, id, parent, icon from {{%pages}} WHERE type=\'category\' and active = 1';
//        $models = \Yii::$app->db->createCommand($sql)->queryAll();
//        $rows = [];
//        foreach ($models as $key => $model) {
//            if ($model['parent'] == 0) {
//                $rows[$key] = $model;
//                $rows[$key]['catChilds'] = $this->search($models, 'parent', $model['id']);
//            }
//        }
//        self::$menu = $rows;
//        unset($rows);
        //Yii::$app->ipgeobase->updateDB();
        
        $userIP = Yii::$app->getRequest()->getUserIP();
        $userRegionInfo = Yii::$app->ipgeobase->getLocation($userIP, true);
        $siteConfig = self::getSiteConfig();
        $sql = 'SELECT * FROM {{%js}} WHERE site_id = ' . (int) $siteConfig['id'] . ' LIMIT 1';
        self::$js = \Yii::$app->db->createCommand($sql)->queryOne();
        if (isset($siteConfig['spb-multi']) || isset($siteConfig['spb'])) {
            $this->setRegion(2);
        } elseif (!isset($siteConfig['spb']) && $siteConfig['mono']) {
            $this->setRegion(1);
        }
        if ($siteConfig['mono'])
            self::$monoBrand = Yii::$app->db->createCommand('SELECT id, title, url, image FROM {{%pages}} WHERE id = ' . $siteConfig['brand-id'])->queryOne();
        if (empty(Yii::$app->session['region'])) {
            $regions = Yii::$app->params['regions'];
            if (!empty($userRegionInfo['city'])) {
                if (isset($userRegionInfo['city'])) {
                    foreach ($regions as $region) {
                        if (stripos($region['title'], $userRegionInfo['city']) !== false) {
                            $this->setRegion($region['id']);
                            break;
                        }
                    }
                }
            } else {
                $this->setRegion(1);
            }
        }
        if (empty(Yii::$app->session['region']))
            $this->setRegion(1);
        if (isset($_GET['region'])) {
            $this->setRegion((int) $_GET['region']);
            header('Location: /' . Yii::$app->request->pathInfo);
            exit;
            //return Yii::$app->response->redirect('/' . Yii::$app->request->pathInfo);
        }
        return parent::beforeAction($event);
    }

    function mb_ucfirst($string, $encoding) {
        $strlen = mb_strlen($string, $encoding);
        $firstChar = mb_substr($string, 0, 1, $encoding);
        $then = mb_substr($string, 1, $strlen - 1, $encoding);
        return mb_strtoupper($firstChar, $encoding) . $then;
    }

    public function getRegion() {
        $regions = Yii::$app->params['regions'];
        return !empty(Yii::$app->session['region']) ? Yii::$app->session['region'] : $regions[1];
    }

    public function setRegion($regionID) {
        $siteConfig = self::getSiteConfig();
        $regions = Yii::$app->params['regions'];
        $regions[$regionID]['phone'] = $siteConfig['phone-' . $regionID];
        Yii::$app->session['region'] = $regions[$regionID];
        if (Yii::$app->session['region'] === $regions[$regionID])
            return true;
        else
            return false;
    }

    public function search($array, $key, $value) {
        $results = [];
        if (is_array($array)) {
            if (isset($array[$key]) && $array[$key] == $value)
                $results[] = $array;
            foreach ($array as $subarray)
                $results = array_merge($results, $this->search($subarray, $key, $value));
        }        
        return $results;
    }
    
    public static function sendToRoistat($phone, $title = '', $comment = '', $name = '', $email = '') {
        $userIP = Yii::$app->getRequest()->getUserIP();
        $connection = Yii::$app->db;
        $connection->createCommand()->insert('yu_orders', [
            'phone' => $phone,
            'date' => date('Y-m-d H:i:s'),
            'ip' => $userIP,
            'site' => 'remontkofe.ru',
        ])->execute();
   
        return \Yii::$app->getResponse()->redirect(\Yii::$app->getRequest()->getUrl());
//        $roistatData = array(
//            'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
//            'key' => 'NTc2Njc6NTQzMjg6ZjcwODJmMzM1ODgyZDQ5MDdiYWFlNGQxY2ZlZDk4OWE=', // Замените SECRET_KEY на секретный ключ в разделе Каталог интеграций -> Ваша CRM -> Настройки -> Ключ для интеграции.
//            'title' => $title,
//            'comment' => 'Заявка, {city}, {landingPage}, {source}' . $comment,
//            'name' => $name,
//            'email' => $email,
//            'phone' => preg_replace("/\D/", "", $phone),
//            'is_need_callback' => '0', // Для автоматического использования обратного звонка при отправке контакта и сделки нужно поменять 0 на 1.
//            'callback_phone' => '', // Переопределяет номер, указанный в настройках обратного звонка.
//            'fields' => array(
//                // Массив дополнительных полей. Если дополнительные поля не нужны, оставьте массив пустым.
//                // Примеры дополнительных полей смотрите в таблице ниже.
//                "charset" => "UTF-8", // Сервер преобразует значения полей из указанной кодировки в UTF-8.
//            ),
//        );
//        file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));
    }

    public static function getSiteConfig() {
        $host = Yii::$app->request->hostInfo;
        $hostArr = explode('.', $host);
        $ad = '.' . end($hostArr);
        $host = str_replace([$ad, 'http://', 'https://'], '', $host);
        return Yii::$app->params['siteConfigs'][$host];
    }

    public static function seoShuffle(&$items, $int) {
        mt_srand($int);
        for ($i = count($items) - 1; $i > 0; $i--) {
            $j = mt_rand(0, $i);
            $tmp = $items[$i];
            $items[$i] = $items[$j];
            $items[$j] = $tmp;
        }
    }

}
