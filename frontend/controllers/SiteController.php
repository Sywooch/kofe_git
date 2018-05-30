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

    public function actionValidate() {
        $model = new \frontend\models\CallBackForm();
        $request = \Yii::$app->getRequest();
        if ($request->isPost && $model->load($request->post())) {
            \app\components\CController::sendToRoistat($model->phone);
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return \yii\widgets\ActiveForm::validate($model);
        }
    }

    public function actionIndex() {
        $pageInfo = $_GET['data'];
        $config = CController::getSiteConfig();
//        \Yii::$app->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => $pageInfo['meta_key']
//        ]);
        if (isset($config['foreign_category']) && $config['foreign_category']) {
            if ($config['theme'] == 'multicat') {
                $metaDesc = 'Сервисный центр по ремонту бытовой техники ' . \app\components\CController::$monoBrand['title'] . ' выполняет восстановление любых устройств быстро и качественно. Гарантия. Цены ниже рыночных!';
            } else
                $metaDesc = 'Авторизованный сервисный центр ' . \app\components\CController::$monoBrand['title'] . ' в ' . Yii::$app->session['region']['titleRod'] . ', выполняет комплексный ремонт техники ' . \app\components\CController::$monoBrand['title'] . ', в наличие все комплектующие для быстрого ремонта!';
        }elseif ($config['id'] == 49) {
            $metaDesc = 'Выполним ремонт кофемашин в Москве и области, низкие цены, гарантия, удобное расположение сервисного центра. Мы востановим работу вашей кофемашины!';
        } elseif ($config['id'] == 146) {
            $metaDesc = 'Предоставляем услуги по ремонту кофемашин всех брендов в ' . Yii::$app->session['region']['titleRod'] . '. Лояльная стоимость услуг и официальная гарантия - залог безупречного ремонта!';
        } else
            $metaDesc = '';

        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc'] ? str_replace('#number#', Yii::$app->session['region']['phone'], $pageInfo['meta_desc']) : $metaDesc,
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
        //print_r($exception);
        //header("HTTP/1.1 301 Moved Permanently");
        //header("Location: " . Yii::$app->request->hostInfo);
        //exit();
        header("HTTP/1.0 404 Not Found");
        return $this->render('error');
    }

}
