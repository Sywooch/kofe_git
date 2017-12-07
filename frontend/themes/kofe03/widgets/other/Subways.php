<?php

namespace kofe03\widgets\other;

use yii\base\Widget;

class Subways extends Widget {

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'SELECT url, title FROM {{%pages}} WHERE type = \'zone2\' AND site_id = ' . $siteConfig['id'] . ' ORDER BY title';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('subways', ['rows' => $rows]);
    }

}
