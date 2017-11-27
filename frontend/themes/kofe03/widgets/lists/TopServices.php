<?php

namespace kofe03\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class TopServices extends Widget {

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'SELECT title, url, image, description, price FROM {{%services}} WHERE is_popular = 1 AND type = 2 AND category_id = ' . $siteConfig['category_id'] . ' LIMIT 8';
        $services = Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('topServices', ['services' => $services]);
    }

}
