<?php

namespace professionals\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class AllBrands extends Widget {

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'SELECT title, url, image FROM {{%pages}} WHERE type = \'brand\' AND active = 1 AND category_id = ' . $siteConfig['category_id'] . ' ORDER BY sort';
        $brands = Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('allBrands', ['brands' => $brands]);
    }

}
