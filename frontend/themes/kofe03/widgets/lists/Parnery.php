<?php

namespace kofe03\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Parnery extends Widget {

    public $view = 'partnery';
    public $sort;

    public function run() {
        return $this->render($this->view);
    }

}
