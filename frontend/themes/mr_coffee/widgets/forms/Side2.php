<?php

namespace mr_coffee\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Side2 extends Widget {

    public function run() {
        $model = new \frontend\models\AskForm3();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }        
        return $this->render('side2', ['model' => $model]);
    }

}
