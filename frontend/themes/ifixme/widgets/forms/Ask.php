<?php

namespace app\widgets\forms;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Ask extends Widget {

    public $class = 'call-widget';

    public function run() {
        $model = new \frontend\models\AskForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        $sql = 'SELECT title, url, id FROM {{%pages}} WHERE icon = 1 and type = \'brand\' and category_id = ' . CController::$category['id'];
        $brands = Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('ask', ['model' => $model, 'class' => $this->class, 'brands' => $brands]);
    }

}
