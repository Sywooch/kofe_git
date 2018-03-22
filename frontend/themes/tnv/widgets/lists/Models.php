<?php

namespace tnv\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Models extends Widget {
    
    public $brand;

    public function run() {
        $sql = 'SELECT image, url, title FROM `yu_pages` WHERE parent = ' . (int) $this->brand['id'] . ' ORDER BY sort';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('models', ['rows' => $rows, 'brand' => $this->brand]);
    }

}
