<?php

namespace helper\widgets\sliders;

use yii\base\Widget;

class MainPageSlider extends Widget {
    
    public $view = 'main-slider';

    public $pageInfo;

    public function run() {
        
        return $this->render($this->view, ['page' => $this->pageInfo]);
    }

}
