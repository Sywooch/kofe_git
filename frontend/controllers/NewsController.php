<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;

/**
 * Site controller
 */
class NewsController extends CController {

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
        $where = ['active' => 1, 'type' => 'articles'];
        $order = 'date DESC';

        $query = \frontend\models\Pages::find();
        $query->where($where);        
        $countQuery = clone $query;
        $query->orderBy($order);
        $pages = new \yii\data\Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
        $models = $query->offset($pages->offset)
                ->limit($pages->limit)
                ->all();

        return $this->render('index', [
                    'models' => $models,
                    'pagination' => $pages,
                    'model' => $pageInfo,
        ]);
    }
    
    public function actionView() {
        $pageInfo = $_GET['data'];
		\Yii::$app->view->registerMetaTag([
			'name' => 'keywords',
			'content' => $pageInfo['meta_key']
		]);
		\Yii::$app->view->registerMetaTag([
			'name' => 'description',
			'content' => $pageInfo['meta_desc']
		]);
        return $this->render('view', ['model' => $pageInfo]);
    }

}
