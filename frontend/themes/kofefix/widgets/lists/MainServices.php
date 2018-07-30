<?php

namespace kofefix\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class MainServices extends Widget {

    public $title = 'Популярные неисправности';
    public $h3 = '';

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'SELECT price, title, url, image FROM {{%services}} WHERE type = 2 and is_popular = 1 and category_id = ' . CController::$category['id'] . ' limit 10';
        $faults = Yii::$app->db->createCommand($sql)->queryAll();
        $sql = 'SELECT price, title, url, image FROM {{%services}} WHERE type = 1 and category_id = ' . CController::$category['id'] . ' limit 10';
        $services = Yii::$app->db->createCommand($sql)->queryAll();

        return $this->render('mainServices', ['faults' => $faults, 'services' => $services, 'title' => $this->title, 'h3' => $this->h3]);
    }

}
