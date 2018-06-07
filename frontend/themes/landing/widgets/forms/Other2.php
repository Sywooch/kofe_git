<?php

namespace landing\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Other2 extends Widget {

    public function run() {
        $model = new \frontend\models\LandingForm3();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }        
        return $this->render('other2', ['model' => $model]);
    }

}
