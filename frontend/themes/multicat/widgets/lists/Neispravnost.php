<?php

namespace multicat\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class Neispravnost extends Widget {

    public $category;

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'SELECT title, url, `group` FROM {{%services}} WHERE type = 2 and is_popular = 1 and category_id = ' . $this->category['id'];
        $rows = Yii::$app->db->createCommand($sql)->queryAll();
        if (empty($rows))
            return false;   
        $neisps = [];
        foreach ($rows as $row) {
            $neisps[$row['group']][] = $row;
        }
        return $this->render('neispravnost', ['rows' => $neisps, 'category' => $this->category]);
    }

}
