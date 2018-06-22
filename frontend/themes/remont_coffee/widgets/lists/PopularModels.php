<?php

namespace remont_coffee\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class PopularModels extends Widget {

		public $parent = 0;

    public function run() {
        $sql = 'SELECT image, title        
                    FROM
                        `yu_pages`                    
                    WHERE
                        AND active = 1 ' . ($this->parent > 0 ? ' AND parent = ' . (int) $this->parent : '') . '   
                    ORDER BY
                            sort LIMIT 10';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('popularModels', ['rows' => $rows]);
    }

}
