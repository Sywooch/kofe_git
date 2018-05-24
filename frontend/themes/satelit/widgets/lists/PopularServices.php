<?php

namespace satelit\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class PopularServices extends Widget {

    public $type = 2;
    public $view = 'popularServices';
    public $t1 = '';
    public $t2 = '';
    public $t3 = '';
    public $col = true;

    public function run() {
        $sql = 'select title, price, url, image, time from {{%services}} where is_popular = 1 and type = ' . (int) $this->type . ' and category_id = ' . CController::$category['id'];
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render($this->view, ['rows' => $rows, 't1' => $this->t1, 't2' => $this->t2, 't3' => $this->t3, 'col' => $this->col]);
    }

}
