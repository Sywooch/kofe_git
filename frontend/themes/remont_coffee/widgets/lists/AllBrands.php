<?php

namespace remont_coffee\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class AllBrands extends Widget {
    
    public $h = true;
    public $all = false;

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $a = $this->all ? ' ORDER BY sort' : ' AND sort <= 19 ORDER BY sort limit 20';
        $sql = 'SELECT title, url, image FROM {{%pages}} WHERE type = \'brand\' AND active = 1 AND category_id = ' . $siteConfig['category_id'] . $a;
        $brands = Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('allBrands', ['brands' => $brands, 'h' => $this->h, 'all' => $this->all]);
    }

}
