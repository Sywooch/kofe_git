<?php

namespace professionals\widgets\forms;

use yii\base\Widget;
use Yii;

class MainPageForm extends Widget {
    
    public $pageInfo;

    public function run() {
        $model = new \frontend\models\CallBackForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('mainPageForm', ['model' => $model, 'pageInfo' => $this->pageInfo]);
    }

}
