<?php

namespace multicatX\widgets\menu;

use yii\base\Widget;
use app\components\CController;

class MainMenu extends Widget {

    public function run() {        
        return $this->render('mainMenu', ['rows' => CController::$menu]);
    }

}
