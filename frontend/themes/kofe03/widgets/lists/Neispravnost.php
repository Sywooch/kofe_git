<?php

namespace remont_coffee\widgets\lists;

use Yii;
use yii\base\Widget;
use app\components\CController;

class Neispravnost extends Widget {
    
    public $view = 'neispravnost';
    public $type = 2;
    public $title = '';
    public $is_popular = true;

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $sql = 'SELECT price, title, url, description, is_popular FROM {{%services}} WHERE type = ' . (int) $this->type . '' . ($this->is_popular ? ' and is_popular = 1' : '') . ' and category_id = ' . CController::$category['id'];
        $rows = Yii::$app->db->createCommand($sql)->queryAll();
        if (empty($rows))
            return '';        
        return $this->render($this->view, ['rows' => $rows, 'title' => $this->title]);
    }

}
