<?php

namespace remont_coffee\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class RandomServices extends Widget {    
    
    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'SELECT title, url, image FROM {{%services}} WHERE type = 2 AND category_id = ' . $siteConfig['category_id'] . ' AND image IS NOT NULL ORDER BY RAND() LIMIT 3';
        $rows = Yii::$app->db->createCommand($sql)->queryAll();
        if (empty($rows))
            return false;   
       
        return $this->render('randomServices', ['rows' => $rows]);
    }

}
