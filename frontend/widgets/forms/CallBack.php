<?php

namespace app\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class CallBack extends Widget {

    public $class = 'call-widget';
    public $metrika = '';
    public $id = 'callback-form';

    public function run() {
        if ($this->id == 'callback-form')
            $model = new \frontend\models\CallBackForm();
        else
            $model = new \frontend\models\CallBackTopForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            \Yii::$app->getSession()->setFlash('success', 'seccess');
            //return Yii::$app->getResponse()->redirect(['my-account/change-details']);
        }
        return $this->render('callBack', ['model' => $model, 'class' => $this->class, 'metrika' => $this->metrika, 'id' => $this->id]);
    }

}
