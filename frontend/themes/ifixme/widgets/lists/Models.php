<?php

namespace ifixme\widgets\lists;

use yii\base\Widget;
use app\components\CController;

class Models extends Widget {
    
    public $models;

    public function run() {
        
        return $this->render('models', ['rows' => $this->models]);
    }

}
