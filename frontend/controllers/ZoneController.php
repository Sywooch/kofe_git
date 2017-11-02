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
class ZoneController extends CController {

    public function actionView() {
        //throw new NotFoundHttpException('The requested page does not exist.');
        $pageInfo = $_GET['data'];
        $siteConfig = self::getSiteConfig();
        if ($pageInfo['site_id'] > 0 && $pageInfo['site_id'] != $siteConfig['id'])
            throw new NotFoundHttpException('The requested page does not exist.');
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $pageInfo['meta_key']
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        $q = 'SELECT id, title, url FROM {{%pages}} WHERE parent = ' . (int) $pageInfo['id'] . ' and type = \'zone2\'';
        $childs = Yii::$app->db->createCommand($q)->queryAll();
        return $this->render('view', ['model' => $pageInfo, 'childs' => $childs]);
    }

}
