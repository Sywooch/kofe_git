<?php

namespace coffeHelp\widgets\forms;

use Yii;
use yii\base\Widget;
use app\components\CController;

class SidebarForm2 extends Widget {

    public $title = 'Бесплатная диагностика';
    public $desc = '';
    public $times = 'Выезд мастера от 30 минут';

    public function run() {
        $model = new \frontend\models\CallBackForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('sidebarForm2', ['model' => $model, 'title' => $this->title, 'desc' => $this->desc, 'times' => $this->times]);
    }

}
