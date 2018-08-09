<?php

namespace mr_coffee\widgets\lists;

use yii\base\Widget;

class Map extends Widget {

    public function run() {
        $q = 'SELECT title, url FROM {{%pages}} WHERE active = 1 AND type = \'zone2\' ORDER BY title ';
        $rows = \Yii::$app->db->createCommand($q)->queryAll();
        if (!empty($rows)) {
            $sortedCities = [];
            foreach ($rows as $row) {
                $firstLatter = mb_substr($row['title'], 0, 1, 'utf8');
                $sortedCities[$firstLatter][] = $row;
            }
            unset($rows);
            return $this->render('map', ['rows' => $sortedCities]);
        } else
            return;
    }

}
