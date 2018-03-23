<?php

namespace kofe03\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class AllBrands extends Widget {
    
    public $h = true;

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'SELECT title, url, sort FROM {{%pages}} WHERE type = \'brand\' AND active = 1 AND category_id = ' . $siteConfig['category_id'] . ' AND icon = 1 ORDER BY title';
        $brands = Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('allBrands', ['brands' => $brands, 'h' => $this->h]);
    }

}
