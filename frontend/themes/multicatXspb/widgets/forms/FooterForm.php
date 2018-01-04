<?php

namespace multicatXspb\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class FooterForm extends Widget {

    public $class = 'call-widget';

    public function run() {
        $model = new \frontend\models\FeedbackForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            \Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('footerForm', ['model' => $model, 'class' => $this->class]);
    }

}
