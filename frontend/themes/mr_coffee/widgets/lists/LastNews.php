<?php

namespace mr_coffee\widgets\lists;

use yii\base\Widget;
use app\components\CController;

class LastNews extends Widget {

    public $limit = 2;

    public function run() {
        $q = 'SELECT url, title, date FROM {{%pages}} WHERE type = \'news\' AND active = 1 ORDER BY date desc LIMIT ' . (int) $this->limit;
        $rows = \Yii::$app->db->createCommand($q)->queryAll();
        if (!empty($rows))
            return $this->render('lastNews', ['rows' => $rows]);
    }

}
