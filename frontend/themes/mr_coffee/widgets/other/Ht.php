<?php

namespace mr_coffee\widgets\other;

use yii\base\Widget;

class Ht extends Widget {

    public $view = 'advantage';

    public function run() {
        $assets = '/' . \Yii::getAlias('@web');
        $siteConfig = \app\components\CController::getSiteConfig();
        return $this->render($this->view, ['assets' => $assets, 'siteConfig' => $siteConfig]);
    }

}
