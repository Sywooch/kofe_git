<?php

namespace sservice\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Map extends Widget {

    public $pageInfo;

    public function run() {
        $model = new \frontend\models\AskForm2();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }        
        return $this->render('map', ['model' => $model, 'pageInfo' => $this->pageInfo]);
    }

}
