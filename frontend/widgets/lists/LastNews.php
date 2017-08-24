<?php

namespace app\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class LastNews extends Widget {

    public $parent;
    public $type = 'service';

    public function run() {
        $sql = 'select id, title, url, date from {{%pages}} where type = \'news\' order by id desc limit 1';
        $row = \Yii::$app->db->createCommand($sql)->queryOne();
        return $this->render('lastNews', ['model' => $row]);
    }

}
