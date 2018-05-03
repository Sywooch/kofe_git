<?php

namespace landing\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Services extends Widget {

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $services = [];
        $sql = 'SELECT * FROM yu_services WHERE category_id = ' . (int) $siteConfig['category_id'];
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        foreach ($rows as $row) {
            if ($row['type'] == 1 && $row['is_popular'] == 1) {
                $k = 'popularServices';
            } elseif ($row['type'] == 2) {
                $k = 'faults';
            } else {
                $k = 'services';
            }
            $services[$k][] = $row;
        }
        return $this->render('services', ['services' => $services]);
    }

}
