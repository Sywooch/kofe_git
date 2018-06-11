<?php

namespace landing\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class PopularBrands extends Widget {

    public $view = 'popular-brands';
    public $sort;

    public function run() {
        $sql = 'select image, id, title from {{%pages}} where type = \'brand\' order by sort ';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render($this->view, ['rows' => $rows]);
    }

}
