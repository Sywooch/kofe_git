<?php

namespace app\widgets\lists;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Price extends Widget {

    public $urlPrefix = '';
    
    public function run() {
        $uslugi = Yii::$app->db->createCommand('SELECT id, title, url, price, is_popular FROM {{%services}} WHERE type = 1')->queryAll();
        $neispravnosti = Yii::$app->db->createCommand('SELECT id, title, url, price, is_popular FROM {{%services}} WHERE type = 2')->queryAll();
        $model = new \frontend\models\ServiceForm();
        if ($model->load(Yii::$app->request->post())) {
            \Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        return $this->render('price', ['model' => $model, 'uslugi' => $uslugi,
                    'neispravnosti' => $neispravnosti, 'urlPrefix' => $this->urlPrefix]);
    }

}
