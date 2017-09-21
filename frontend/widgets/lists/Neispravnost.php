<?php

namespace app\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class Neispravnost extends Widget {

    public $page_id;
    public $metrika = '';

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'SELECT price, title, url, description FROM {{%services}} WHERE type = 2';
        $rows = Yii::$app->db->createCommand($sql)->queryAll();
        if (empty($rows))
            return '';
        $model = new \frontend\models\ServiceForm();
        if ($model->load(Yii::$app->request->post())) {
            \app\components\CController::sendToRoistat($model->phone);
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        CController::seoShuffle($rows, $siteConfig['id']);
        return $this->render('neispravnost', ['model' => $model, 'rows' => $rows, 'metrika' => $this->metrika]);
    }

}
