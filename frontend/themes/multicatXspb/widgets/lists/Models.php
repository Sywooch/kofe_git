<?php

namespace multicatXspb\widgets\lists;

use yii\base\Widget;
use app\components\CController;

class Models extends Widget {

    public $models;

    public function run() {
        $searches = [];
        foreach ($this->models as $row) {            
            $searches[] = array(
                'value' => CController::$monoBrand['title'] . ' ' . $row['title'], 'url' => $row['url']
            );           
        }
        return $this->render('models', ['rows' => $this->models, 'searches' => $searches]);
    }

}
