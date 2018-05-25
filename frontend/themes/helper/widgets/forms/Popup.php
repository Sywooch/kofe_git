<?php

namespace helper\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Popup extends Widget {    

    public function run() {
        $model = new \frontend\models\OrderForm3();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }        
        return $this->render('popup', ['model' => $model]);
    }

}
