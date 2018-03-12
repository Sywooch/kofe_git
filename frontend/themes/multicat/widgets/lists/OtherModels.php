<?php

namespace multicat\widgets\lists;

use yii\base\Widget;
use app\components\CController;

class OtherModels extends Widget {
    
    public $modelID = 0;
    public $parent;
    public $urlPrefix = '';

    public function run() {
        $sql = 'SELECT title, url, image, id, icon FROM {{%pages}} WHERE ' . ($this->modelID > 0 ? ' id != ' . (int) $this->modelID . ' AND' : '') . ' active = 1 AND parent = ' . (int) $this->parent . ' ORDER BY sort';
        $rows = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('other-models', ['rows' => $rows, 'urlPrefix' => $this->urlPrefix]);
    }

}
