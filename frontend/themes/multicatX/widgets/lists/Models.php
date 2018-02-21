<?php

namespace multicatX\widgets\lists;

use yii\base\Widget;
use app\components\CController;

class Models extends Widget {

    public $models;
    public $view = 'models';
    public $h2 = '';

    public function run() {
        $searches = [];
        foreach ($this->models as $row) {            
            $searches[] = array(
                'value' => CController::$monoBrand['title'] . ' ' . $row['title'], 'url' => $row['url']
            );           
        }
        return $this->render($this->view, ['rows' => $this->models, 'searches' => $searches, 'h2' => $this->h2]);
    }

}
