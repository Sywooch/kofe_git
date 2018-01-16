<?php

namespace kofe03\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class OtherServices extends Widget {
    
    public $id;

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'SELECT title, url, image, description, price FROM {{%services}} WHERE id != ' . (int) $this->id . ' AND is_popular = 1 AND type = 2 AND category_id = ' . $siteConfig['category_id'];
        $services = Yii::$app->db->createCommand($sql)->queryAll();        
        return $this->render('otherServices', ['services' => $services]);
    }

}
