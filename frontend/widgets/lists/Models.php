<?php

namespace app\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Models extends Widget {

    public $parent;
    public $type = 'model';
    public $brand = '';
    public $mono = false;

    public function run() {
        if (!$this->mono) {
            $sql = 'select id, title, url, image from {{%pages}} where parent =:parent and type =:type and active = 1 order by title' . ($this->mono ? ' limit 15' : '');
        } else {
            $sql = 'SELECT
                            p.title,
                            p.url,
                            p.image,
                            p.id
                    FROM
                            `yu_specs` s
                    LEFT JOIN yu_pages p ON p.id = s.model_id
                    WHERE
                            s.spec_name LIKE \'%Тип%\'
                    AND s.spec_value LIKE \'%эспрессо%\'
                    AND s.spec_value LIKE \'%автоматическое%\'
                    AND p.parent = ' . (int) $this->parent . '
                    ORDER BY
                            p.sort limit 15;';
        }
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
        return $this->render($this->mono ? 'mono-brand-models' : 'models', ['sortedBrands' => $sortedRows, 'brand' => $this->brand, 'searches' => $searches, 'rows' => $rows]
        );
    }

}
