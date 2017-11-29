<?php

namespace coffeHelp\widgets\other;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Advantage extends Widget {
    
    public $view = 'advantage';

    public function run() {
        
        return $this->render($this->view);
    }

}
