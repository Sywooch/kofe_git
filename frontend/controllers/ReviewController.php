<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;

/**
 * Site controller
 */
class ReviewController extends CController {

    public function actionIndex() {
        $pageInfo = $_GET['data'];
        $model = new \app\models\Reviews();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->getSession()->setFlash('success', 'seccess');
        }
//        \Yii::$app->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => $pageInfo['meta_key']
//        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        $query = \app\models\Reviews::find()->where(['active' => 1]);
        $countQuery = clone $query;
        $pagination = new \yii\data\Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 1000]);
        $reviews = $query->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();        
        return $this->render('index', ['pageInfo' => $pageInfo, 'rows' => $reviews, 'model' => $model, 'pagination' => $pagination]);
    }
    
    public function actionGet($lastId) {
        $q = 'SELECT rating, username, message, id FROM {{%reviews}} WHERE active = 1 AND id > ' . (int) $lastId . ' LIMIT 10';
        return json_encode(Yii::$app->db->createCommand($q)->queryAll());
    }

}
