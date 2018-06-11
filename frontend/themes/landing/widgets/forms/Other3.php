<?php

namespace landing\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Other3 extends Widget {

    public function run() {
        $model = new \frontend\models\LandingForm4();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }        
        return $this->render('other3', ['model' => $model]);
    }

}
