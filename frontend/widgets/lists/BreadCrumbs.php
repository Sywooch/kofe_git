<?php

namespace app\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;

class BreadCrumbs extends Widget {

    public $pageParents = [];
    public $page = [];
    public $manual = [];

    public function run() {
        if (!empty($this->manual)) {
            return $this->render('breadCrumbs', ['breadCrumbs' => $this->manual, 'count' => count($this->manual)]);
        }
        $parents = $this->getParents($this->page['parent']);
        if (!$parents)
            $parents = [];
        $breadCrumbs = array_merge(array_reverse($parents), [$this->page]);
        if ($this->page['url'] == '/')
            return '';
        return $this->render('breadCrumbs', ['breadCrumbs' => $breadCrumbs, 'count' => count($breadCrumbs)]);
    }

    private function getParents($parent) {
        if ($parent > 0) {
            do {
                $result = $this->getPage((int) $parent);
                $parent = $result['parent'];
                if (!empty($result))
                    $this->pageParents[] = $result;
            } while ($result);
            return $this->pageParents;
        }
        return false;
    }

    private function getPage($id) {
        $sql = 'select title, id, url, parent from {{%pages}} WHERE id =:id AND active = 1 LIMIT 1';
        return \Yii::$app->db->createCommand($sql)->bindValues(['id' => (int) $id])->queryOne();
    }

}
