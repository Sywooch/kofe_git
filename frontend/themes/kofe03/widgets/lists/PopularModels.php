<?php

namespace remont_coffee\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class PopularModels extends Widget {

    public function run() {
        $sql = 'select m.title, m.url, m.image, b.title as brand_title from {{%pages}} m left join {{%pages}} b on m.parent = b.id where m.type = \'model\' and m.active = 1 and m.category_id = ' . CController::$category['id'] . ' and m.sort < 20 order by m.sort limit 10';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('popularModels', ['rows' => $rows]);
    }

}
