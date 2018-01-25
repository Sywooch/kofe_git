<?php

namespace coffeHelp\widgets\forms;

use Yii;
use yii\base\Widget;
use app\components\CController;

class FooterForm extends Widget {

    public function run() {
        $model = new \frontend\models\ServiceForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('footerForm', ['model' => $model]);
    }

}
