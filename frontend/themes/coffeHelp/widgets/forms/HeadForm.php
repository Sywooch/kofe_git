<?php

namespace coffeHelp\widgets\forms;

use Yii;
use yii\base\Widget;
use app\components\CController;

class HeadForm extends Widget {

    public function run() {
        $model = new \frontend\models\FeedbackForm();
        $siteConfig = \app\components\CController::getSiteConfig();

        if ($model->load(Yii::$app->request->post())) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('headForm', ['model' => $model]);
    }

}
