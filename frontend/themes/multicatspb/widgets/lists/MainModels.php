<?php

namespace multicatspb\widgets\lists;

use yii\base\Widget;
use app\components\CController;

class MainModels extends Widget {

    public function run() {
        return $this->render('mainModels', ['rows' => CController::$menu]);
    }

}
