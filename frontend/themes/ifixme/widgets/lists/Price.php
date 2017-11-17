<?php

namespace ifixme\widgets\lists;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Price extends Widget {

    public $model;

    public function run() {
        $rows = \frontend\models\Pages::getModelServices($this->model['id'], $this->model['parent']);
        return $this->render('price', ['services' => $rows, 'model' => $this->model]);
    }

}
