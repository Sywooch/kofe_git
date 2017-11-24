<?php

namespace remont_coffee\widgets\forms;

use Yii;
use yii\base\Widget;
use app\components\CController;

class SidebarForm extends Widget {

    public function run() {
        $model = new \frontend\models\OrderForm();
        if ($model->load(Yii::$app->request->post())) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('sidebarForm', ['model' => $model]);
    }

}
