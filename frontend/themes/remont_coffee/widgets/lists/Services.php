<?php

namespace remont_coffee\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class Services extends Widget {
    
    public $prefix = '';

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'SELECT title, url, service_group FROM {{%services}} WHERE type = 1 AND category_id = ' . $siteConfig['category_id'];
        $rows = Yii::$app->db->createCommand($sql)->queryAll();
        if (empty($rows))
            return false;   
        $services = [];
        foreach ($rows as $row) {
            $services[$row['service_group']][] = $row;
        }
        return $this->render('services', ['services' => $services, 'prefix' => $this->prefix]);
    }

}
