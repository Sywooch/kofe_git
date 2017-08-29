<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use app\components\CController;

/**
 * Site controller
 */
class ListController extends CController {

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
        //$brandsCount = Yii::$app->db->createCommand('SELECT COUNT(1) as cnt FROM {{%pages}} WHERE type = \'brand\' AND active = 1')->queryOne();
        return $this->render('services', [
                    'pageInfo' => $pageInfo,
                        //'brandsCount' => $brandsCount['cnt']
                        ]
        );
    }

    public function actionService() {
        $pageInfo = $_GET['data'];
        $seo = (new \yii\db\Query())
                ->select(['*'])
                ->from('{{%seo}}')
                ->where(['url' => Yii::$app->request->pathInfo])
                ->limit(1)
                ->one();
        $title = '';
        $metaKey = '';
        $metaDesc = '';
        $url = Yii::$app->request->pathInfo;
        $url = explode('/', $url);
        $seoText = '';
        $seoText2 = '';
        $h1 = '';
        $brandImage = '';
        $modelImage = '';
        
        if (count($url) > 1) {
            array_pop($url);
            $page = (new \yii\db\Query())
                    ->select(['title', 'url', 'id', 'type', 'parent', 'image'])
                    ->from('{{%pages}}')
                    ->where(['url' => implode('/', $url)])
                    ->limit(1)
                    ->one();
            if ($page['type'] == 'brand') {
                $brandImage = $page['image'];
                $sql = 'select image from {{%pages}} where parent =:parent and active = 1 order by sort limit 1';
                $model = \Yii::$app->db->createCommand($sql)->bindValues(['parent' => $page['id']])->queryOne();
                $modelImage = $model['image'];
            }
            $breadcrumbs['/' . $page['url']] = 'Ремонт кофемашин ' . $page['title'];
            if ($page['type'] == 'brand' || $page['type'] == 'model') {
                if ($page['type'] == 'model') {
                    $brand = (new \yii\db\Query())
                            ->select(['title', 'url', 'id', 'type', 'image'])
                            ->from('{{%pages}}')
                            ->where(['id' => $page['parent']])
                            ->limit(1)
                            ->one();
                    $brandImage = $brand['image'];
                    $modelImage = $page['image'];
                    $breadcrumbs['/' . $brand['url']] = 'Ремонт кофемашин ' . $brand['title'];
                    unset($breadcrumbs['/' . $page['url']]);
                    $breadcrumbs['/' . $page['url']] = $page['title'];
                    $page['title'] = $brand['title'] . ' ' . $page['title'];
                }
                $pageInfo['title'] = mb_strtolower($pageInfo['title'], 'utf8');
                if ($pageInfo['type'] == 2) {
                    $h1 = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' кофемашина ' . $page['title'];
                    $title = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' кофемашина ' . $page['title'] . ' - ремонт в ' . Yii::$app->session['region']['titleRod'];
                    $metaDesc = 'Если вы столкнулись с проблемой - ' . $pageInfo['title'] . '  кофемашина ' . $page['title'] . ' наш сервисный центр поможет вам в короткие сроки по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '.';
                    $seoText = 'Если кофемашина ' . $page['title'] . ' ' . $pageInfo['title'] . ', специалисты нашего сервисного центра проведут бесплатную диагностику, выявят неисправность и сделают ремонт по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '. Для ремонта  кофемашин ' . $page['title'] . ' мы используем только качественные фирменные комплектующие и современное диагностическое оборудование. Также специалист может выехать для проведения ремонта к вам на дом или в офис. Ремонтируем все модели кофемашин  производства ' . $page['title'] . '.';
                } else {
                    $h1 = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' кофемашин ' . $page['title'];
                    $title = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' кофемашин ' . $page['title'] . '. Ремонт кофемашин в СЦ';
                    $metaDesc = 'Качественная ' . $pageInfo['title'] . ' кофемашин ' . $page['title'] . ' в официальном сервисном центре по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '.';
                    $seoText = 'Специалисты нашего сервисного центра проведут бесплатную диагностику кофе машины ' . $page['title'] . ', выявят неисправность и сделают ремонт по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '. ' . $pageInfo['title'] . ' кофемашин ' . $page['title'] . ' - быстро, качественно с гарантией.';
                }
            } else {
                $seoText = '';
            }
            if (!empty($seo['meta_text1'])) {
                $seoText = $seo['meta_text1'];
            }
            if (!empty($seo['meta_text2'])) {
                $seoText2 = $seo['meta_text2'];
            }
            if (!empty($seo['meta_h1'])) {
                $h1 = $seo['meta_h1'];
            }
        } else {
            if (empty($seo['meta_text1'])) {
                if ($pageInfo['type'] == 2) {
                    $metaDesc = 'Если кофемашина ' . mb_strtolower($pageInfo['title'], 'utf8') . ', специалисты нашего сервисного центра проведут бесплатную диагностику, выявят неисправность и сделают ремонт по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '.';
                    $title = $pageInfo['title'] . ' кофемашина в ' . Yii::$app->session['region']['titleRod'];
                    $seoText = 'Если кофемашина ' . $pageInfo['title'] . ', специалисты нашего сервисного центра проведут бесплатную диагностику, выявят неисправность и сделают ремонт по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '. Для ремонта  кофемашин мы используем только качественные фирменные комплектующие и современное диагностическое оборудование. Также специалист может выехать для проведения ремонта к вам на дом или в офис. Ремонтируем все модели кофемашин  производства.';
                } else {
                    $title = $pageInfo['title'] . ' кофемашин. Ремонт кофемашин в СЦ';
                    $seoText = 'Специалисты нашего сервисного центра проведут бесплатную диагностику кофе машины, выявят неисправность и сделают ремонт по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '. ' . $pageInfo['title'] . ' кофемашин - быстро, качественно с гарантией.';
                }
            } else {
                $seoText = $pageInfo['text'];
            }
        }

        $title = $seo['meta_title'] ?: $title;
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => count($url) > 1 ? ($seo['meta_keywords'] ?: $metaKey) : ($pageInfo['meta_keywords'] ?: $metaKey)
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => count($url) > 1 ? ($seo['meta_description'] ?: $metaDesc) : ($pageInfo['meta_description'] ?: $metaDesc)
        ]);


        $breadcrumbs[] = $pageInfo['title'];

        return $this->render('service', ['pageInfo' => $pageInfo, 'seoText' => $seoText, 'seoText2' => $seoText2,
            'h1' => $h1, 'breadcrumbs' => $breadcrumbs, 'title' => $title, 'brandImage' => $brandImage,
            'modelImage' => $modelImage, 'page' => (isset($page) ? $page : [])]);
    }

    public function actionBrands() {
        $pageInfo = $_GET['data'];
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $pageInfo['meta_key']
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        $sql = 'SELECT title, url FROM {{%pages}} WHERE type = \'brand\' AND active = 1 ORDER BY title';
        $brands = \Yii::$app->db->createCommand($sql)->queryAll();
        $cnt = count($brands);
        $sortedBrands = [];
        $searches = [];
        foreach ($brands as $brand) {
            $searches[] = array(
                'value' => $brand['title'], 'url' => $brand['url']
            );
            $firstLatter = mb_substr($brand['title'], 0, 1, 'utf8');
            $sortedBrands[$firstLatter][] = $brand;
        }
        unset($brands);
        return $this->render('brands', ['pageInfo' => $pageInfo, 'sortedBrands' => $sortedBrands, 'cnt' => $cnt, 'searches' => $searches]);
    }

    public function actionBrand() {
        $pageInfo = $_GET['data'];
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $pageInfo['meta_key']
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc'] ?: 'Любой ремонт кофемашин ' . $pageInfo['title'] . ' в сервис центре, выезд мастера на дом или офис. Качество, гарантия, низкая цена.'
        ]);
        $title = 'Ремонт кофемашин ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod'] . ' с выездом мастера на дом или офис';
        if (!empty($pageInfo['meta_title']))
            $title = $pageInfo['meta_title'];
        //$h1 = '';
        $sql = 'select image from {{%pages}} where parent =:parent and active = 1 order by sort limit 1';
        $model = \Yii::$app->db->createCommand($sql)->bindValues(['parent' => $pageInfo['id']])->queryOne();

        return $this->render('brand', ['pageInfo' => $pageInfo, 'model' => $model, 'title' => $title]);
    }

    public function actionModel() {
        $pageInfo = $_GET['data'];
        $brand = Yii::$app->db->createCommand('SELECT id, url, title FROM {{%pages}} WHERE id = ' . (int) $pageInfo['parent'] . ' LIMIT 1')->queryOne();
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $pageInfo['meta_key']
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc'] ?: 'Ремонт кофемашины ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в сервис центре, выезд мастера по ' . Yii::$app->session['region']['titleRod'] . ', гарантия на выполненные работы, низкая цена.'
        ]);
        $title = 'Ремонт кофемашины ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod'] . ' с выездом мастера';
        if (!empty($pageInfo['meta_title']))
            $title = $pageInfo['meta_title'];
        return $this->render('model', ['pageInfo' => $pageInfo, 'brand' => $brand, 'title' => $title]);
    }

}
