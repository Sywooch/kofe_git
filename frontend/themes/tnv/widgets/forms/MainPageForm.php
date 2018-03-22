<?php

namespace tnv\widgets\forms;

use Yii;
use yii\base\Widget;
use app\components\CController;

class MainPageForm extends Widget {
    
    public $h1;

    public function run() {
        
        $model = new \frontend\models\AskForm2();
        $model->agree = 1;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }        
        return $this->render('mainPageForm', ['model' => $model, 'h1' => $this->h1]);
    }

}
