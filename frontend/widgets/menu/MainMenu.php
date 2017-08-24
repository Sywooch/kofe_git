<?php

namespace app\widgets\menu;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class MainMenu extends Widget {

    public function run() {
        $rows = CController::$menu;
        return $this->render('mainMenu', ['rows' => $rows, 'cnt' => count($rows)]);
    }

}
