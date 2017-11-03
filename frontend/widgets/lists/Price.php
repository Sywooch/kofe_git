<?php

namespace app\widgets\lists;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use app\components\CController;

class Price extends Widget {

    public $urlPrefix = '';
    public $brandPage = false;
    public $prefix = '';
    public $half = false;

    public function run() {
        $siteConfig = CController::getSiteConfig();
        $uslugi = Yii::$app->db->createCommand('SELECT id, title, url, price, is_popular FROM {{%services}} WHERE type = 1 and category_id = ' . CController::$category['id'])->queryAll();
        CController::seoShuffle($uslugi, $siteConfig['id']);        
        $neispravnosti = Yii::$app->db->createCommand('SELECT id, title, url, price, is_popular FROM {{%services}} WHERE type = 2 and category_id = ' . CController::$category['id'])->queryAll();
        CController::seoShuffle($neispravnosti, $siteConfig['id']);
        $model = new \frontend\models\ServiceForm();
        if ($model->load(Yii::$app->request->post())) {
            \Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        if ($siteConfig['mono'])
            $this->urlPrefix = str_replace(\app\components\CController::$monoBrand['url'] . '/', Yii::$app->params['replace-url'], $this->urlPrefix);
        return $this->render('price', ['model' => $model, 'uslugi' => $uslugi,
                    'neispravnosti' => $neispravnosti, 'urlPrefix' => $this->urlPrefix, 'brandPage' => $this->brandPage, 'prefix' => $this->prefix, 'half' => $this->half]);
    }

}
