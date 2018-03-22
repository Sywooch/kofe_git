<?php

namespace tnv\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class PopularBrands extends Widget {

    public $view = 'popular-brands';
    public $sort;

    public function run() {
        $sql = 'select id, title, url, image from {{%pages}} where type = \'brand\' and active = 1 and category_id = ' . CController::$category['id'] . ' order by sort limit 36';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render($this->view, ['rows' => $rows, 'cnt' => count($rows)]);
    }

}
