<?php

namespace app\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Services extends Widget {

    public $parent;
    public $type = 'service';

    public function run() {
        $sql = 'select id, title, url from {{%pages}} where parent =:parent and type =:type and active = 1 order by sort';
        $rows = \Yii::$app->db->createCommand($sql)->bindValues(['parent' => $this->parent, 'type' => $this->type])->queryAll();
        return $this->render('services', ['rows' => $rows]);
    }

}
