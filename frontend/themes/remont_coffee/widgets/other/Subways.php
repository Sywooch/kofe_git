<?php

namespace remont_coffee\widgets\other;

use yii\base\Widget;

class Subways extends Widget {

    public function run() {
        $sql = 'SELECT id, title, url FROM {{%pages}} WHERE type = \'zone2\' ORDER BY title';
        $pages = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('subways', ['pages' => $pages]);
    }

}
