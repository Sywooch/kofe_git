<?php

namespace remont_coffee\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class BrandTabs extends Widget {
    
    public $pageInfo;

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'SELECT title, description FROM {{%pages}} WHERE type = \'not_sitemap\' AND parent = ' . (int) $this->pageInfo['id'];
        $error = Yii::$app->db->createCommand($sql)->queryOne();
       
        return $this->render('brandTabs', ['error' => $error, 'pageInfo' => $this->pageInfo]);
    }

}
