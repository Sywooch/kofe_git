<?php

namespace app\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Feedback extends Widget {

    public $class = 'call-widget';

    public function run() {
        $model = new \frontend\models\FeedbackForm();
        if ($model->load(Yii::$app->request->post())) {
            \app\components\CController::sendToRoistat($model->phone);
            \Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('feedback', ['model' => $model, 'class' => $this->class]);
    }

}
