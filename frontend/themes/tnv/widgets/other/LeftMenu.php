<?php

namespace tnv\widgets\other;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class LeftMenu extends Widget {
    
    public $view = 'leftMenu';

    public function run() {
        
        return $this->render($this->view);
    }

}
