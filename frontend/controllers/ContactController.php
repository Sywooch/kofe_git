<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;

/**
 * Site controller
 */
class ContactController extends CController {

    public function actionIndex() {
        $pageInfo = $_GET['data'];
//
//        \Yii::$app->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => $pageInfo['meta_key']
//        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => str_replace('#number#', Yii::$app->session['region']['phone'], $pageInfo['meta_desc'])
        ]);
        $children = \Yii::$app->db->createCommand('select id, title, url, icon from {{%pages}} where parent = ' . (int) $pageInfo['id'])->queryAll();
        return $this->render('index', ['pageInfo' => $pageInfo, 'children' => $children]);
    }   

}
