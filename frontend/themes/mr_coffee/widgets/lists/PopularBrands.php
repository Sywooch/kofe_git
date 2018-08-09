<?php

namespace mr_coffee\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class PopularBrands extends Widget {

    public $view = 'popular-brands';

    public function run() {
        $sql = 'select url, image, title from {{%pages}} where type = \'brand\' and active = 1 and category_id = ' . CController::$category['id'] . ' and sort < 30 order by sort limit 28';

        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render($this->view, ['rows' => $rows]);
    }

}
