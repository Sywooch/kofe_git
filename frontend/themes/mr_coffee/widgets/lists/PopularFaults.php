<?php

namespace mr_coffee\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class PopularFaults extends Widget {

    public function run() {
        $sql = 'select title, url from {{%services}} where is_popular = 1 and is_popular = 1 and category_id = ' . CController::$category['id'] . ' limit 5';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('popularFaults', ['rows' => $rows]);
    }

}
