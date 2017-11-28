<?php

namespace remont_coffee\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class ServiceChildren extends Widget {
    
    public $parent = '';

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'SELECT title, url, price FROM {{%services}} WHERE parent = ' . (int) $this->parent . ' AND category_id = ' . $siteConfig['category_id'];
        $services = Yii::$app->db->createCommand($sql)->queryAll();
        if (empty($services))
            return false;   
        
        return $this->render('serviceChildren', ['rows' => $services]);
    }

}
