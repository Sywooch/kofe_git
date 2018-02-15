<?php

namespace multicatX\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class PopularServices extends Widget {

    public function run() {
        $sql = 'select title, id, url, category_id from {{%pages}} where type = \'category\' and active = 1 order by sort limit 3';
        $categories = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('popularServices', ['categories' => $categories]);
    }

}
