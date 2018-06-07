<?php

namespace ofitsial\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Left extends Widget {

    public function run() {
        $model = new \frontend\models\AskForm4();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('left', ['model' => $model]);
    }

}
