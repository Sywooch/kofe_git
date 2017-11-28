<?php

namespace app\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Order extends Widget {

    public $class = 'call-widget';

    public function run() {
        $model = new \frontend\models\OrderForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            \Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('order', ['model' => $model, 'class' => $this->class]);
    }

}
