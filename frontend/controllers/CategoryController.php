<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;

/**
 * Site controller
 */
class CategoryController extends CController {

    public function actionIndex() {
        $pageInfo = $_GET['data'];

        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $pageInfo['meta_key']
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        return $this->render('index', ['page' => $pageInfo]);
    }

    public function actionServices() {
        $pageInfo = $_GET['data'];
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $pageInfo['meta_key']
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        return $this->render('services', ['page' => $pageInfo]);
    }

    public function actionService() {
        $pageInfo = $_GET['data'];
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $pageInfo['meta_key']
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        return $this->render('service', ['page' => $pageInfo]);
    }

    public function actionPriceList() {
        $pageInfo = $_GET['data'];
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $pageInfo['meta_key']
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        $model = new \frontend\models\ServiceForm();        
        $yurCats = \Yii::$app->db->createCommand('SELECT * FROM {{%pages}} WHERE parent = 4')->queryAll();
        $fizCats = \Yii::$app->db->createCommand('SELECT * FROM {{%pages}} WHERE parent = 3')->queryAll();
        return $this->render('price-list', ['page' => $pageInfo, 'yurCats' => $yurCats, 'fizCats' => $fizCats, 'model' => $model]);
    }

}
