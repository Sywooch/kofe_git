<?php

namespace app\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class OtherServices extends Widget {

    public $parent;
    public $id;
    public $type = 'service';

    public function run() {
        $sql = 'select id, title, url from {{%pages}} where type = \'' . $this->type . '\' and parent = ' . $this->parent . ' and id != ' . $this->id . ' order by id desc';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        $sql = 'select id, title, url from {{%pages}} where id = ' . $this->parent . ' limit 1';
        $parent = \Yii::$app->db->createCommand($sql)->queryOne();

        if (empty($rows))
            return '';
        return $this->render('otherServices', ['rows' => $rows, 'parent' => $parent]);
    }

}
