<?php

namespace landing\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Other extends Widget {

    public $class = 'call-widget';

    public function run() {
        $model = new \frontend\models\LandingForm2();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }        
        return $this->render('other', ['model' => $model]);
    }

}
