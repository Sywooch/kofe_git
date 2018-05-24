<?php

namespace satelit\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;
use Yii;

class Models extends Widget {

    public $parent;
    public $type = 'model';
    public $brand = '';
    public $mono = false;
    public $limit = 0;

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'select id, title, url, image, yandexId from {{%pages}} where parent =:parent and type =:type and active = 1 order by title' . ($this->limit > 0 ? ' LIMIT ' . (int) $this->limit : '');
        $rows = \Yii::$app->db->createCommand($sql)->bindValues(['parent' => CController::$monoBrand['id'], 'type' => 'model'])->queryAll();
        return $this->render('models', ['rows' => $rows, 'limit' => $this->limit]);
    }

}
