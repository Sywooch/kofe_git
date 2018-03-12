<?php

namespace multicat\widgets\lists;

use yii\base\Widget;
use app\components\CController;

class Models extends Widget {
    
    public $models;
    public $view = 'models';

    public function run() {
        
        return $this->render($this->view, ['rows' => $this->models]);
    }

}
