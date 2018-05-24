<?php

namespace satelit\widgets\sliders;

use yii\base\Widget;

class MainPageSlider extends Widget {
    
    public $view = 'main-slider';

    public function run() {
        
        return $this->render($this->view);
    }

}
