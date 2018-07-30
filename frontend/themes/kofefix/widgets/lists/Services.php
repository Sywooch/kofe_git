<?php

namespace kofefix\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class Services extends Widget {
    
    public $prefix = '';
    public $type = 1;

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'SELECT title, url, price FROM {{%services}} WHERE type = ' . (int) $this->type . ' AND is_popular = 1 and category_id = ' . $siteConfig['category_id'];
        $services = Yii::$app->db->createCommand($sql)->queryAll();
        if (empty($services))
            return false;
        return $this->render('services', ['services' => $services, 'prefix' => $this->prefix]);
    }

}
