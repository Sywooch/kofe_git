<?php

namespace ofitsial\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;
use Yii;

class Models extends Widget {

    public $parent;
    public $type = 'model';
    public $brand = '';
    public $mono = false;

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'select title, url, image from {{%pages}} where parent =:parent and type =:type and active = 1 order by title';
        $rows = \Yii::$app->db->createCommand($sql)->bindValues(['parent' => $this->parent, 'type' => $this->type])->queryAll();
        
        return $this->render('models', ['brand' => $this->brand, 'rows' => $rows]);
    }

}
