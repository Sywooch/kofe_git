<?php

namespace nasa\widgets\other;

use yii\base\Widget;

class Advantage extends Widget {
    
    public $view = 'advantage';

    public function run() {
        
        return $this->render($this->view);
    }

}
