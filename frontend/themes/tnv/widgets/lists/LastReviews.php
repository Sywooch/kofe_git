<?php

namespace tnv\widgets\lists;

use yii\base\Widget;
use app\components\CController;
use Yii;

class LastReviews extends Widget {

    public $limit = 3;

    public function run() {
        $q = 'SELECT username, date, rating, message FROM {{%reviews}} WHERE active = 1 ORDER BY date desc LIMIT ' . (int) $this->limit;
        $rows = \Yii::$app->db->createCommand($q)->queryAll();
        $model = new \app\models\Reviews();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        if (!empty($rows))
            return $this->render('lastReviews', ['rows' => $rows, 'model' => $model]);
    }

}
