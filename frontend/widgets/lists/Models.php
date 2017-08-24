<?php

namespace app\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Models extends Widget {

    public $parent;
    public $type = 'model';
    public $brand = '';

    public function run() {
        $sql = 'select id, title, url, image from {{%pages}} where parent =:parent and type =:type and active = 1 order by sort';
        $rows = \Yii::$app->db->createCommand($sql)->bindValues(['parent' => $this->parent, 'type' => $this->type])->queryAll();
        $sortedRows = [];
        $searches = [];
        foreach ($rows as $row) {
            $searches[] = array(
                'value' => $row['title'], 'url' => $row['url']
            );
            $firstLatter = mb_substr($row['title'], 0, 1, 'utf8');
            $sortedRows[$firstLatter][] = $row;
        }
        return $this->render('models', ['sortedBrands' => $sortedRows, 'brand' => $this->brand, 'searches' => $searches]);
    }

}
