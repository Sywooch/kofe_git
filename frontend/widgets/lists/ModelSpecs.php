<?php

namespace app\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;

class ModelSpecs extends Widget {

    public $modelId = null;

    public function run() {
        
        return $this->render('model-specs', ['specs' => $specs]);
    }

}
