<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;
use SimpleXMLElement;

/**
 * Site controller
 */
class StatusController extends CController {

    public function actionView() {
        $pageInfo = $_GET['data'];
        $siteConfig = self::getSiteConfig();
//        \Yii::$app->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => $pageInfo['meta_key']
//        ]);
        $model = new \frontend\models\StatusForm();
        $model->agree = 1;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            \app\components\CController::sendToRoistat($model->phone, 'Статус ремонта');
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc'] ?: 'Статус ремонта.'
        ]);
        return $this->render('view', ['pageInfo' => $pageInfo, 'model' => $model]);
    }

}
