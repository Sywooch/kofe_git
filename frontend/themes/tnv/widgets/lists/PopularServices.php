<?php

namespace tnv\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class PopularServices extends Widget {

    public function run() {
        $siteConfig = CController::getSiteConfig();
        if ($siteConfig['category_id'] != 7)
            return false;
        $sql = 'select title, price, url from {{%services}} where is_popular = 1 and type = 1 and category_id = ' . CController::$category['id'] . ' limit 8';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('popularServices', ['rows' => $rows]);
    }

}
