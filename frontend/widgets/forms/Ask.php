<?php

namespace app\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Ask extends Widget {

    public $class = 'call-widget';

    public function run() {
        $model = new \frontend\models\AskForm();
        if ($model->load(Yii::$app->request->post())) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('ask', ['model' => $model, 'class' => $this->class]);
    }

}
