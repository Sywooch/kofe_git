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
        $siteConfig = self::getSiteConfig();
        $pageInfo = $_GET['data'];
        $model = new \app\models\Reviews();
        $model->date = date('Y-m-d H:i:s');
        $model->active = 0;
        $model->site_id = $siteConfig['id'];
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save(false);
            Yii::$app->getSession()->setFlash('review', 'seccess');
        }
//        \Yii::$app->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => $pageInfo['meta_key']
//        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        if (isset($siteConfig['foreign_category'])){
            $c = ['active' => 1, 'site_id' => $siteConfig['id']];
        } else {
            $c = ['active' => 1];
        }
        $query = \app\models\Reviews::find()->where($c);
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
