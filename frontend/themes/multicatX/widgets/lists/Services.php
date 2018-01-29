<?php

namespace multicatX\widgets\lists;

use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Services extends Widget {
    
    public $title;
    public $type = 1;
    public $is_popular = false;
    public $category_id;
    public $urlPrefix = '';

    public function run() {
        $sql = 'SELECT price, title, url, description, is_popular FROM {{%services}} WHERE type = ' . (int) $this->type . '' . ($this->is_popular ? ' and is_popular = 1' : ($this->type == 1 ? ' and is_popular != 1' : '')) . ' and category_id = ' . $this->category_id;
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        CController::seoShuffle($rows, $siteConfig['id']);
        return $this->render('services', ['services' => $rows, 'title' => $this->title, 'urlPrefix' => $this->urlPrefix]);
    }

}
