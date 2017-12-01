<?php

namespace ifixme\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Order extends Widget {

    public $class = 'call-widget';
    public $id = 'order-form';

    public function run() {
        if ($this->id == 'order-form2')
            $model = new \frontend\models\OrderForm2();
        else
            $model = new \frontend\models\OrderForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            \Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('order', ['model' => $model, 'class' => $this->class, 'id' => $this->id]);
    }

}
