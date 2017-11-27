<?php

namespace kofe03\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class PopularServices extends Widget {

    public function run() {
        $sql = 'select title, price from {{%services}} where is_popular = 1 and category_id = ' . CController::$category['id'] . ' limit 8';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('popularServices', ['rows' => $rows]);
    }

}
