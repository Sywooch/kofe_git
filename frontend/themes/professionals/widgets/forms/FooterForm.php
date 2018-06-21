<?php

namespace professionals\widgets\forms;

use yii\base\Widget;
use Yii;

class FooterForm extends Widget {
    
    public function run() {
        $model = new \frontend\models\AskForm3();
        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('footerForm', ['model' => $model]);
    }

}
