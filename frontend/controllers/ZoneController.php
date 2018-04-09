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
            throw new \yii\web\NotFoundHttpException('The requested page does not exist.');
//        \Yii::$app->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => $pageInfo['meta_key']
//        ]);
        if ($siteConfig['id'] == 124 || $siteConfig['id'] == 125)
            $metaDesc = 'Сломалась кофемашина? Срочный ремонт за доступные деньги в сервисном центре по ремонту кофемашин в ' . Yii::$app->session['region']['titleRod'] . ' метро ' . $pageInfo['title'] . '!';
        elseif ($siteConfig['id'] == 49) {
            $metaDesc = 'Опытные инженеры продиагностируют устройство и выполнят ремонт кофемашины в кратчайшие сроки!';
        } else
            $metaDesc = 'Необходим ремонт кофемашины рядом с метро ' . $pageInfo['title'] . '? Выезд мастера или курьера в день обращения! Срочный ремонт! Бесплатная диагностика!';
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc'] ?: $metaDesc
        ]);
        $q = 'SELECT id, title, url FROM {{%pages}} WHERE parent = ' . (int) $pageInfo['id'] . ' and type = \'zone2\'';
        $childs = Yii::$app->db->createCommand($q)->queryAll();
        return $this->render('view', ['model' => $pageInfo, 'childs' => $childs]);
    }

}
