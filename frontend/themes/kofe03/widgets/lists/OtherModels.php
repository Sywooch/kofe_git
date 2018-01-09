<?php

namespace kofe03\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class OtherModels extends Widget {

    public $model;

    public function run() {
        $sql = 'select title, url, image from {{%pages}} {{%pages}} where type = \'model\' and active = 1 and category_id = ' . CController::$category['id'] . ' and id != ' . (int) $model['id'] . ' and parent = ' . (int) $model['parent'] . ' order by sort limit 30';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('otherModels', ['rows' => $rows]);
    }

}
