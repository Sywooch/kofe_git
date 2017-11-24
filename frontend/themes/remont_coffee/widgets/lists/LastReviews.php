<?php

namespace remont_coffee\widgets\lists;

use yii\base\Widget;
use app\components\CController;

class LastReviews extends Widget {

    public $limit = 3;

    public function run() {
        $q = 'SELECT username, date, rating, message FROM {{%reviews}} WHERE active = 1 ORDER BY date desc LIMIT ' . (int) $this->limit;
        $rows = \Yii::$app->db->createCommand($q)->queryAll();
        if (!empty($rows))
            return $this->render('lastReviews', ['rows' => $rows]);
    }

}
