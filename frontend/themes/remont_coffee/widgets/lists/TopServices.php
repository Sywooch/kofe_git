<?php

namespace remont_coffee\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class TopServices extends Widget {

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'SELECT title, url, image, description, price FROM {{%services}} WHERE is_popular = 1 AND type = 2 AND category_id = ' . $siteConfig['category_id'] . ' LIMIT 6';
        $services = Yii::$app->db->createCommand($sql)->queryAll();
        CController::seoShuffle($services, $siteConfig['id']);
        return $this->render('topServices', ['services' => $services]);
    }

}
