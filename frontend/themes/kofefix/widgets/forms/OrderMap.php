<?php

namespace kofefix\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class OrderMap extends Widget {

    public function run() {
        $model = new \frontend\models\AskForm2();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }        
        return $this->render('orderMap', ['model' => $model]);
    }

}
