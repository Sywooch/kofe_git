<?php

namespace professionals\widgets\forms;

use yii\base\Widget;
use Yii;

class AdvForm extends Widget {
    
    public function run() {
        $model = new \frontend\models\AskForm4();        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('advForm', ['model' => $model]);
    }

}
