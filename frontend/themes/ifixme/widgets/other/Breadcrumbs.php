<?php

namespace ifixme\widgets\other;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Breadcrumbs extends Widget {
    
    public $data = [];

    public function run() {
        
        return $this->render('breadcrumbs', ['data' => $this->data]);
    }

}
