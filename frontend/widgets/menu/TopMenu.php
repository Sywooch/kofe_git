<?php

namespace app\widgets\menu;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class TopMenu extends Widget {

    public function run() {        
        return $this->render('topMenu');
    }

}
