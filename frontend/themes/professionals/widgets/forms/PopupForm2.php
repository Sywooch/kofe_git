<?php

namespace professionals\widgets\forms;

use yii\base\Widget;
use Yii;

class PopupForm2 extends Widget {
    
    public function run() {
        $model = new \frontend\models\KomForm();        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone, '', '', '', $model->email);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('popupForm2', ['model' => $model]);
    }

}
