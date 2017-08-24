<?php

namespace app\widgets\other;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Advantage extends Widget {

    public function run() {
        
        return $this->render('advantage');
    }

}
