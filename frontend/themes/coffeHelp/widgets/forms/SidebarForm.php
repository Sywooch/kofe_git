<?php

namespace coffeHelp\widgets\forms;

use Yii;
use yii\base\Widget;
use app\components\CController;

class SidebarForm extends Widget {

    public function run() {
        $model = new \frontend\models\OrderForm();
        $siteConfig = \app\components\CController::getSiteConfig();
        $sql = 'SELECT url, title FROM {{%pages}} WHERE type = \'zone2\' AND site_id = ' . $siteConfig['id'] . ' ORDER BY title';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        if ($model->load(Yii::$app->request->post())) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('sidebarForm', ['model' => $model, 'rows' => $rows]);
    }

}
