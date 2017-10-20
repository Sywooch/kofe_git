<?php

namespace app\widgets\menu;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class LeftMenu extends Widget {
    
    public $id = 0;
    public $prefUrl = '';

    public function run() {
        $sql = 'SELECT title, url, type, id FROM {{%services}} WHERE is_popular = 1 and category_id = ' . CController::$category['id'];
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('leftMenu', ['rows' => $rows, 'id' => $this->id, 'prefUrl' => $this->prefUrl]);
    }

}
