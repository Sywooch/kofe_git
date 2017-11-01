<?php

namespace app\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Reviews extends Widget {

    
    public function run() {
        
        return $this->render('reviews');
    }

}
