<?php

namespace landing\widgets\forms;

use yii\base\Widget;
use Yii;

class Form1 extends Widget {
    
    public $title = '';
    public $sub_title = '';
    public $id = '';
    public $model;
    public $button = '';

    public function run() {
        $class = "\\frontend\\models\\" . $this->model;
        $model = new $class();
        if(isset($model->agree))
            $model->agree = 1;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('form1', ['model' => $model, 'title' => $this->title, 'sub_title' => $this->sub_title, 'id' => $this->id, 'button' => $this->button]);
    }

}
