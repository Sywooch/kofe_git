<?php

namespace professionals\widgets\other;

use yii\base\Widget;

class Advantage extends Widget {
    
    public $view = 'advantage';
    public $b = '';

    public function run() {
        
        return $this->render($this->view, ['b' => $this->b]);
    }

}
