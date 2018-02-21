<?php

namespace multicatX\widgets\lists;

use yii\base\Widget;
use app\components\CController;

class KofeModels extends Widget {

    public function run() {
        $category = \Yii::$app->db->createCommand('SELECT id FROM {{%pages}} WHERE parent = ' . (int) CController::$monoBrand['id'] . ' AND category_id = 7')->queryOne();
        $q = 'SELECT title, url, image, id, icon FROM {{%pages}} WHERE active = 1 AND parent = ' . (int) $category['id'] . ' ORDER BY sort LIMIT 20';
        $rows = \Yii::$app->db->createCommand($q)->queryAll();        
        return $this->render('kofeModels', ['rows' => $rows]);
    }

}
