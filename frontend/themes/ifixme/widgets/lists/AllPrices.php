<?php

namespace ifixme\widgets\lists;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class AllPrices extends Widget {
    
    public $models;
    public $parent;

    public function run() {

        return $this->render('allPrices', ['models' => $this->models, 'parent' => $this->parent]);
    }

}
