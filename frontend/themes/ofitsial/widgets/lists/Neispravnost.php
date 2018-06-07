<?php

namespace ofitsial\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class Neispravnost extends Widget {
    
    public $view = 'neispravnost';
    public $type = 2;
    public $title = '';
    public $is_popular = true;
    public $dopClass;
    public $limit = 0;

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'SELECT price, title, url, description, is_popular, image, time FROM {{%services}} WHERE type = ' . (int) $this->type . '' . ($this->is_popular ? ' and is_popular = 1' : ($this->type == 1 ? ' and is_popular != 1' : '')) . ' and category_id = ' . CController::$category['id'] . ($this->limit > 0 ? (' limit ' . (int) $this->limit) : '');
        $rows = Yii::$app->db->createCommand($sql)->queryAll();
        if (empty($rows))
            return '';
        CController::seoShuffle($rows, $siteConfig['id']);
        return $this->render($this->view, ['rows' => $rows, 'title' => $this->title, 'class' => $this->dopClass]);
    }

}
