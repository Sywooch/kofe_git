<?php

namespace multicat\widgets\lists;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class AllPrices extends Widget {
    
    public $models;
    public $parent;

    public function run() {
        $services = \frontend\models\Pages::getCategoryPopularServices($this->parent['id'], 1);
        $otherServices = \frontend\models\Pages::getCategoryPopularServices($this->parent['id'], 0);
        return $this->render('allPrices', ['services' => $services, 'otherServices' => $otherServices]);
    }

}
