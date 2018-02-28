<?php

namespace app\components;

use Yii;

class CController extends \yii\web\Controller {

    public static $menu = [];
    public static $monoBrand = null;
    public static $js;
    public static $category;

    public static function replaceJS($js) {
        return str_replace(['https://mc.yandex.ru/metrika/watch.js'], [Yii::$app->request->hostInfo . '/uploads/js/watch.js'], $js);
    }

    private function getCategory($url) {
        $url = explode('/', $url);
        if (isset($url[0])) {
            $sql = 'SELECT * FROM {{%categories}} WHERE lower(url) =:url limit 1';
            return \Yii::$app->db->createCommand($sql)->bindValues(['url' => strtolower($url[0])])->queryOne();
        }
        return false;
    }

    public function beforeAction($event) {
        //Yii::$app->ipgeobase->updateDB();
        $siteConfig = self::getSiteConfig();

        if (isset($siteConfig['theme']) && !empty($siteConfig['theme'])) {
            Yii::$app->view->theme = new \yii\base\Theme([
                'pathMap' => [
                    '@app/views' => '@app/themes/' . $siteConfig['theme'],
                ],
            ]);
            Yii::setAlias('@' . $siteConfig['theme'], dirname(__DIR__) . '/themes/' . $siteConfig['theme']);
        }
        if (isset($siteConfig['multi_category'])) {
            if (isset($siteConfig['brand-id']) && isset($siteConfig['multi_category']) && $siteConfig['category_id'] == 0 && isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['model', 'category', 'brand'])) {
                self::$category = $this->getCategory(Yii::$app->request->pathInfo);
            }
            self::$menu = isset($siteConfig['mono-brand']) && $siteConfig['mono-brand'] === true ? $this->buildMenu() : $this->getMenu();
        }
        if (empty(self::$category) && !isset($siteConfig['multi_category'])) {
            $sql = 'SELECT * FROM {{%categories}} WHERE id = ' . (int) $siteConfig['category_id'] . ' LIMIT 1';
            self::$category = \Yii::$app->db->createCommand($sql)->queryOne();
        }
        if (isset($siteConfig['mono-brand']) && $siteConfig['mono-brand'] === true) {
            self::$monoBrand = Yii::$app->db->createCommand('SELECT id, title, url, image FROM {{%pages}} WHERE id = ' . $siteConfig['brand-id'])->queryOne();
        }
        $userIP = Yii::$app->getRequest()->getUserIP();
        //$userRegionInfo = []; // Yii::$app->ipgeobase->getLocation($userIP, true);
        $sql = 'SELECT * FROM {{%js}} WHERE site_id = ' . (int) $siteConfig['id'] . ' LIMIT 1';
        self::$js = \Yii::$app->db->createCommand($sql)->queryOne();
        if (isset($siteConfig['spb-multi']) || isset($siteConfig['spb'])) {
            if ($siteConfig['id'] == 53) {
                $this->setRegion(2, 'СПБ');
            } else
                $this->setRegion(2);
        } elseif (!isset($siteConfig['spb']) && $siteConfig['mono']) {
            $this->setRegion(1);
        }
        if ($siteConfig['mono'])
            self::$monoBrand = Yii::$app->db->createCommand('SELECT id, title, url, image FROM {{%pages}} WHERE id = ' . $siteConfig['brand-id'])->queryOne();
//        if (empty(Yii::$app->session['region'])) {
//            $regions = Yii::$app->params['regions'];
//            if (!empty($userRegionInfo['city'])) {
//                if (isset($userRegionInfo['city'])) {
//                    foreach ($regions as $region) {
//                        if (stripos($region['title'], $userRegionInfo['city']) !== false) {
//                            $this->setRegion($region['id']);
//                            break;
//                        }
//                    }
//                }
//            } else {
//                $this->setRegion(1);
//            }
//        }
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

    private function getMenu() {
        $q = 'SELECT parent, url, icon, id, full_title, image, title, description FROM {{%pages}} WHERE (type = \'category\' or type = \'model\') and show_in_menu = 1 AND active = 1 ORDER BY sort';
        $rows = \Yii::$app->db->createCommand($q)->queryAll();
        return $this->buildTree($rows);
    }

    private function buildMenu() {
        $siteConfig = self::getSiteConfig();
        $q = 'SELECT parent, url, icon, id, full_title, image, title, description FROM {{%pages}} WHERE type = \'category\' and show_in_menu = 1 AND active = 1 and parent = ' . $siteConfig['brand-id'] . ' ORDER BY sort';
        $rows = \Yii::$app->db->createCommand($q)->queryAll();
        $branch = [];
        foreach ($rows as $row) {
            $q = 'SELECT parent, url, icon, id, full_title, image, title, description FROM {{%pages}} WHERE type = \'model\' and active = 1 and parent = ' . $row['id'] . ' ORDER BY sort LIMIT 6';
            $row['children'] = \Yii::$app->db->createCommand($q)->queryAll();
            $branch[] = $row;
        }
        return $branch;
    }

    private function buildTree(array $elements, $parentId = 0) {
        $branch = [];
        foreach ($elements as $element) {
            if ($element['parent'] == $parentId) {
                $children = $this->buildTree($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[] = $element;
            }
        }
        return $branch;
    }

    public function mb_ucfirst($string, $encoding) {
        $strlen = mb_strlen($string, $encoding);
        $firstChar = mb_substr($string, 0, 1, $encoding);
        $then = mb_substr($string, 1, $strlen - 1, $encoding);
        return mb_strtoupper($firstChar, $encoding) . $then;
    }

    public function getRegion() {
        $regions = Yii::$app->params['regions'];
        return !empty(Yii::$app->session['region']) ? Yii::$app->session['region'] : $regions[1];
    }

    public function setRegion($regionID, $rodTitle = '') {
        $siteConfig = self::getSiteConfig();
        $regions = Yii::$app->params['regions'];
        $regions[$regionID]['phone'] = $siteConfig['phone-' . $regionID];
        if (!empty($rodTitle)) {
            $regions[$regionID]['titleRod'] = $rodTitle;
        }
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

    public static function sendMessage($msg, $chat_id) {
        $url = 'https://api.telegram.org/bot361996498:AAElIAPqMYKtwZWyHs1qTPgNxOFAscy25x4/sendMessage?chat_id=' . $chat_id . '&text=';
        if ($msg)
            file_get_contents($url . urlencode($msg));
    }

    public static function sendToRoistat($phone, $title = '', $comment = '', $name = '', $email = '') {
        $siteConfig = self::getSiteConfig();
        if (isset($_POST['h1']) && empty($title))
            $title = $_POST['h1'];
        $userIP = Yii::$app->getRequest()->getUserIP();
        $adminsChannel = '-1001287383605';
        $usersChannel = '-1001322968311';
        if ($siteConfig['category_id'] == 7 || in_array($siteConfig['order-title'], ['multicat_xiaomi_msk'])) {
            $clarisOIDS = [
                'МСК Заречная' => ['name' => 'SC1_MSK', 'OID' => 2200626151000],
                'МСК Войковская' => ['name' => 'MONO1_MSK', 'OID' => 2200626167000],
                'МСК Студенческая' => ['name' => 'SC2_MSK', 'OID' => 2200626169000],
                'MSK - Моно2' => ['name' => 'MONO2_MSK', 'OID' => 2200626170000],
                'СПБ Садовая' => ['name' => 'SC1_SPB', 'OID' => 2200626187000],
                'СПБ ТЦ ПИК' => ['name' => 'MONO1_SPB', 'OID' => 2200626193000],
                'fixkofe' => ['name' => 'SC1_SPB', 'OID' => 2202778296000],
                'help' => ['name' => 'MSKM3', 'OID' => 2202775576000],
                'support' => ['name' => 'SC1_SPB', 'OID' => 2202778302000],
                'multicat_xiaomi_msk' => ['name' => 'MSKS1', 'OID' => 2200626170000],
            ];
            $OID = 0;
            if (isset($clarisOIDS[$siteConfig['order-title']]))
                $OID = $clarisOIDS[$siteConfig['order-title']]['OID'];
            $connection = Yii::$app->db;
            $connection->createCommand()->insert('yu_orders', [
                'phone' => $phone,
                'date' => date('Y-m-d H:i:s'),
                'ip' => $userIP,
                'site' => Yii::$app->request->hostInfo,
                'page' => '',
            ])->execute();
            $p = strip_tags(Yii::$app->session['region']['phone']);
            $p = '7' . substr($p, 1, strlen($p));
            if ($siteConfig['id'] == 50) {
                if (isset($_COOKIE['roistat_visit'])) {
                    $visit_id = $_COOKIE['roistat_visit'];
                    //$marker = $_COOKIE['roistat_marker_old'];
                    //file_get_contents('https://mobi03.ru/roistat?x8org=' . $OID . '&visit_id=' . $visit_id . '&phone=' . urlencode(preg_replace("/\D/", "", $phone)) . '&marker=' . urlencode($marker) . '&page=' . Yii::$app->request->hostInfo . Yii::$app->request->pathInfo);
                }
            }
            $visit_id = 0;
            if (isset($_COOKIE['roistat_visit'])) {
                $visit_id = $_COOKIE['roistat_visit'];
            }
            $brand = '';
            $model = '';
            $rekomendation = '';
            if (isset($_GET['data'])) {
                if ($_GET['data']['type'] == 'brand') {
                    $brand = $_GET['data']['title'];
                } elseif ($_GET['data']['type'] == 'model') {
                    $brand = Yii::$app->db->createCommand('SELECT title FROM {{%pages}} WHERE id = ' . (int) $_GET['data']['parent'])->queryOne()['title'];
                    $model = $_GET['data']['title'];
                } elseif (in_array($_GET['data']['type'], [1, 2])) {
                    $rekomendation = $_GET['data']['title'];
                    $url = Yii::$app->request->pathInfo;
                    $url = explode('/', $url);
                    array_pop($url);
                    $page = (new \yii\db\Query())
                            ->select(['title', 'url', 'id', 'type', 'parent', 'image', 'full_title'])
                            ->from('{{%pages}}')
                            ->where(['url' => $siteConfig['mono'] ? $url : implode('/', $url)])
                            ->limit(1)
                            ->one();
                    if ($page['type'] == 'model') {
                        $model = $page['title'];
                        $sql = 'select title from {{%pages}} where id =:id and active = 1 order by sort limit 1';
                        $brand = \Yii::$app->db->createCommand($sql)->bindValues(['id' => $page['parent']])->queryOne()['title'];
                    } elseif ($page['type'] == 'brand') {
                        $brand = $page['title'];
                    }
                }
            }
            @file_get_contents('https://mobi03.ru/kofeOrders?rekomendation=' . urlencode($rekomendation) . '&brand=' . urlencode($brand) . '&model=' . urlencode($model) . '&roistat_visit_id=' . (int) $visit_id . '&oid=' . $OID . '&phone=' . urlencode($phone) . '&title=' . urlencode($title) . '&url=' . Yii::$app->request->hostInfo . '/' . Yii::$app->request->pathInfo . '&site_phone=' . urldecode(preg_replace("/\D/", "", $p)));
        }
        $phone = preg_replace("/\D/", "", $phone);
        $usersPhone = substr($phone, 0, strlen($phone) - 2) . 'xx';

        $msg = '';
        if (!empty($name))
            $msg .= "\r\nИмя: " . $name;
        if (!empty($email))
            $msg .= "\r\nE-mail: " . $email;
        $msg .= "\r\nСтраница: " . $title;
        $msg .= "\r\nАйпи: " . $userIP;
        if ($siteConfig['category_id'] == 7 || in_array($siteConfig['order-title'], ['multicat_xiaomi_msk']))
            self::sendMessage("Телефон: " . $usersPhone . $msg, $usersChannel);
        $msg .= "\r\nСайт: " . Yii::$app->request->hostInfo;

        if ($siteConfig['category_id'] == 7 || in_array($siteConfig['order-title'], ['multicat_xiaomi_msk']))
            self::sendMessage("Телефон: " . $phone . $msg, $adminsChannel);
        else {
            self::sendMessage("Телефон: " . $phone . $msg, '@site_orders');
        }

        if ($siteConfig['category_id'] == 7 && !in_array($siteConfig['id'], [49, 50, 52])) {
            $groupName = '@remontkofe_ru_admin';
            //file_get_contents('http://remontkofe.ru/order-from-site?phone=' . urlencode($phone) . '&userIP=' . urlencode($userIP) . '&site=' . urlencode($siteConfig['order-title']) . '&page=' . urlencode($title));
        } elseif (in_array($siteConfig['id'], [49, 50, 52])) {
            $groupName = '-1001240519113';
        } else {
            $groupName = '@site_orders';
        }
        if ($siteConfig['id'] == 48)
            $groupName = '@ifixme_orders';
        if (in_array($siteConfig['id'], [51, 53])) {
            $groupName = '-1001263720765';
        }
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
