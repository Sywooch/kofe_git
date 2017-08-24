<?php

namespace app\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class OtherModels extends Widget {

    public $parent;
    public $modelId;
    public $brand;


    public function run() {
        $sql = 'select id, title, url from {{%pages}} where id != :id and parent =:parent and active = 1 order by sort limit 10';
        $rows = \Yii::$app->db->createCommand($sql)->bindValues(['parent' => $this->parent, 'id' => $this->modelId])->queryAll();
        return $this->render('other-models', ['rows' => $rows, 'brand' => $this->brand]);
    }

}
