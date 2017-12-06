<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;

/**
 * Site controller
 */
class SiteController extends CController {

    private function getRemainTime() {
        $t = ' До конца акции остается ';
        $remain = (strtotime(date('Y-m-d 16:00:00')) - strtotime(date('Y-m-d H:i:s'))) / 60;
        if ($remain <= 0)
            return false;
        elseif ($remain < 60)
            return $t . round($remain) . ' минут';
        elseif ($remain == 60) {
            return '1 час';
        } elseif ($remain > 60) {
            return $t . intval($remain / 60) . ' часа ' . round((($remain / 60) - intval($remain / 60)) * 60) . ' минут';
        }
        return false;
    }

    public function actionIndex() {
        $pageInfo = $_GET['data'];
//        \Yii::$app->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => $pageInfo['meta_key']
//        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        $remain = $this->getRemainTime();
        return $this->render('index', ['page' => $pageInfo, 'remain' => $remain]);
    }

    public function actionSearch($text) {
        $pageInfo = $_GET['data'];
//        \Yii::$app->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => $pageInfo['meta_key']
//        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        return $this->render('search', ['page' => $pageInfo]);
    }

    public function actionError() {
        //$this->redirect(Yii::app()->homeUrl);
        $exception = Yii::$app->errorHandler->exception;
        print_r($exception);
        //header("HTTP/1.1 301 Moved Permanently");
        //header("Location: " . Yii::$app->request->hostInfo);
        //exit();
        header("HTTP/1.0 404 Not Found");
        return $this->render('error');
    }

}
