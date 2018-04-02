<?php

namespace remont_coffee\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class PopularModels extends Widget {

		public $parent = 0;

    public function run() {
        $sql = 'SELECT p.image, p.url, b.title as brand_title, p.title        
                    FROM
                        `yu_specs` s
                    LEFT JOIN yu_pages p ON p.id = s.model_id
                    LEFT JOIN yu_pages b ON b.id = p.parent
                    WHERE
                        s.spec_name LIKE \'%Тип%\'
                    AND s.spec_value LIKE \'%эспрессо%\'
                    AND s.spec_value LIKE \'%автоматическое%\'
                    AND s.spec_value NOT LIKE \'%полуавтоматическое%\'                    
                    AND p.active = 1 ' . ($this->parent > 0 ? ' AND p.parent = ' . (int) $this->parent : '') . '   
                    ORDER BY
                            p.sort LIMIT 10';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('popularModels', ['rows' => $rows]);
    }

}
