<?php

namespace professionals\widgets\forms;

use yii\base\Widget;
use Yii;

class Today extends Widget {
    
    public $sectionClass = 'solutions';

    public function run() {
        $model = new \frontend\models\CallBackTopForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('today', ['model' => $model, 'sectionClass' => $this->sectionClass]);
    }

}
