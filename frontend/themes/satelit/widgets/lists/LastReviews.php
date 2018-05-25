<?php

namespace satelit\widgets\lists;

use yii\base\Widget;
use app\components\CController;

class LastReviews extends Widget {

    public $limit = 4;

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $q = 'SELECT username, date, rating, message FROM {{%reviews}} WHERE active = 1 AND email = \'' . $siteConfig['sitePrefix'] . '\' ORDER BY date desc LIMIT ' . (int) $this->limit;
        $rows = \Yii::$app->db->createCommand($q)->queryAll();
        if (!empty($rows))
            return $this->render('lastReviews', ['rows' => $rows]);
    }

}
