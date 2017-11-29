<?php

namespace coffeHelp\widgets\forms;

use Yii;
use yii\base\Widget;
use app\components\CController;

class SidebarForm2 extends Widget {

    public function run() {
        $model = new \frontend\models\CallBackForm();
        if ($model->load(Yii::$app->request->post())) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('sidebarForm2', ['model' => $model]);
    }

}
