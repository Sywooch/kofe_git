<?php

namespace kofe03\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class PopularBrands extends Widget {

    public function run() {
        $sql = 'select id, title, url, image from {{%pages}} where type = \'brand\' and active = 1 and category_id = ' . CController::$category['id'] . ' and sort < 20 order by sort limit 18';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('popular-brands', ['rows' => $rows, 'cnt' => count($rows)]);
    }

}
