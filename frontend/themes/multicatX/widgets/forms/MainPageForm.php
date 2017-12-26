<?php

namespace multicatX\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class MainPageForm extends Widget {

    public $class = 'call-widget';

    public function run() {
        $model = new \frontend\models\AskForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }        
        return $this->render('mainPageForm', ['model' => $model, 'class' => $this->class]);
    }

}
