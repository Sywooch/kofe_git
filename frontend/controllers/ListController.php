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

    public function actionCategory() {
        $pageInfo = $_GET['data'];
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $pageInfo['meta_key']
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        $q = 'SELECT title, url, image, id, icon FROM {{%pages}} WHERE active = 1 AND parent = ' . (int) $pageInfo['id'] . ' ORDER BY sort';
        $rows = \Yii::$app->db->createCommand($q)->queryAll();
        return $this->render('category', ['page' => $pageInfo, 'models' => $rows]);
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
        //$brandsCount = Yii::$app->db->createCommand('SELECT COUNT(1) as cnt FROM {{%pages}} WHERE type = \'brand\' AND active = 1')->queryOne();
        return $this->render('services', [
                    'pageInfo' => $pageInfo,
                        //'brandsCount' => $brandsCount['cnt']
                        ]
        );
    }

    public function actionAllModels() {
        $siteConfig = self::getSiteConfig();
        $seo = (new \yii\db\Query())
                ->select(['*'])
                ->from('{{%seo}}')
                ->where(['url' => Yii::$app->request->pathInfo, 'site_id' => $siteConfig['id']])
                ->limit(1)
                ->one();
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $seo['meta_keywords'] ?: ''
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $seo['meta_description'] ?: ''
        ]);

        return $this->render('all-models', ['seo' => $seo]);
    }

    public function actionService() {
        $pageInfo = $_GET['data'];
        $siteConfig = self::getSiteConfig();
        $seo = (new \yii\db\Query())
                ->select(['*'])
                ->from('{{%seo}}')
                ->where(['url' => Yii::$app->request->pathInfo, 'site_id' => $siteConfig['id']])
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
            $arrayUrl = $url;
            array_pop($url);
            if ($siteConfig['mono']) {
                $url = self::$monoBrand['url'] . '/' . str_replace(Yii::$app->params['replace-url'], '', implode('/', $url));
            }
            $page = (new \yii\db\Query())
                    ->select(['title', 'url', 'id', 'type', 'parent', 'image'])
                    ->from('{{%pages}}')
                    ->where(['url' => $siteConfig['mono'] ? $url : implode('/', $url)])
                    ->limit(1)
                    ->one();
            if ($page['type'] == 'brand') {
                $brandImage = $page['image'];
                $sql = 'select image from {{%pages}} where parent =:parent and active = 1 order by sort limit 1';
                $model = \Yii::$app->db->createCommand($sql)->bindValues(['parent' => $page['id']])->queryOne();
                $modelImage = $model['image'];
            }
            $breadcrumbs['/' . $page['url']] = CController::$category['full_title'] . ' ' . $page['title'];
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
                    $breadcrumbs['/' . $brand['url']] = CController::$category['full_title'] . ' ' . $brand['title'];
                    unset($breadcrumbs['/' . $page['url']]);
                    $breadcrumbs['/' . $page['url']] = (in_array($siteConfig['category_id'], [1, 2, 3, 4, 5]) ? 'Ремонт ' . $brand['title'] . ' ' : '') . $page['title'];
                    $page['title'] = $brand['title'] . ' ' . $page['title'];
                }
                $pageInfo['title'] = mb_strtolower($pageInfo['title'], 'utf8');
                if ($pageInfo['type'] == 2) {
                    $h1 = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' ' . CController::$category['1_title'] . ' ' . $page['title'];
                    $title = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' ' . CController::$category['1_title'] . ' ' . $page['title'] . ' - ремонт в ' . Yii::$app->session['region']['titleRod'];
                    $metaDesc = 'Если вы столкнулись с проблемой - ' . $pageInfo['title'] . '  ' . CController::$category['1_title'] . ' ' . $page['title'] . ' наш сервисный центр поможет вам в короткие сроки по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '.';
                    $seoText = '<p>Если ' . CController::$category['1_title'] . ' ' . $page['title'] . ' ' . $pageInfo['title'] . ', специалисты нашего сервисного центра проведут бесплатную диагностику, выявят неисправность и сделают ремонт по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '. Для ремонта  ' . CController::$category['3_title'] . ' ' . $page['title'] . ' мы используем только качественные фирменные комплектующие и современное диагностическое оборудование. Также специалист может выехать для проведения ремонта к вам на дом или в офис. Ремонтируем все модели ' . CController::$category['3_title'] . '  производства ' . $page['title'] . '.</p>';
                } else {
                    $h1 = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' ' . CController::$category['1_title'] . ' ' . $page['title'];
                    $title = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' ' . CController::$category['3_title'] . ' ' . $page['title'] . '. Ремонт ' . CController::$category['3_title'] . ' в СЦ';
                    $metaDesc = 'Качественная ' . $pageInfo['title'] . ' ' . CController::$category['3_title'] . ' ' . $page['title'] . ' в официальном сервисном центре по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '.';
                    $seoText = '<p>Специалисты нашего сервисного центра проведут бесплатную диагностику ' . mb_strtolower(CController::$category['title'], 'utf8') . ' ' . $page['title'] . ', выявят неисправность и сделают ремонт по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '. ' . $pageInfo['title'] . ' ' . CController::$category['3_title'] . ' ' . $page['title'] . ' - быстро, качественно с гарантией.</p>';
                }
                if ($page['type'] == 'model') {
                    $brandId = $page['parent'];
                    $sql = 'select model_text from {{%unique_text}} where site_id = ' . $siteConfig['id'] . ' and service_id = ' . $pageInfo['id'] . ' limit 1';
                    $uniqueText = \Yii::$app->db->createCommand($sql)->queryOne();
                    if (!empty($uniqueText))
                        $seoText = str_replace(['#brand_en#', '#model_en#'], [$page['title']], $uniqueText['model_text']);
                } elseif ($page['type'] == 'brand') {
                    $brandId = $page['id'];
                    $sql = 'select barnd_text from {{%unique_text}} where site_id = ' . $siteConfig['id'] . ' and service_id = ' . $pageInfo['id'] . ' limit 1';
                    $uniqueText = \Yii::$app->db->createCommand($sql)->queryOne();
                    if (!empty($uniqueText))
                        $seoText = str_replace(['#brand_en#'], [$page['title']], $uniqueText['barnd_text']);
                }

                if ($siteConfig['mono']) {
                    $text = (new \yii\db\Query())
                            ->select(['*'])
                            ->from('{{%seo}}')
                            ->where(['url' => end($arrayUrl), 'site_id' => $siteConfig['id']])
                            ->limit(1)
                            ->one();
                    if (!empty($text) && !empty($text['meta_text1'])) {
                        $seoText = str_ireplace(self::$monoBrand['title'], $page['title'], $text['meta_text1']);
                    }
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
                    if ($siteConfig['mono']) {
                        $h1 = 'Кофемашина ' . self::$monoBrand['title'] . ' ' . mb_strtolower($pageInfo['title'], 'utf8');
                    }
                    if ($siteConfig['mono']) {
                        $title = $this->mb_ucfirst(CController::$category['1_title'], 'UTF-8') . ' ' . self::$monoBrand['title'] . ' ' . mb_strtolower($pageInfo['title'], 'utf8') . ' - срочный ремонт в ' . Yii::$app->session['region']['titleRod'];
                        $metaDesc = 'Если ' . CController::$category['1_title'] . ' ' . self::$monoBrand['title'] . ' ' . mb_strtolower($pageInfo['title'], 'utf8') . ', специалисты нашего сервисного центра проведут бесплатную диагностику, выявят неисправность и сделают ремонт по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '.';
                        $seoText = '<p>Если ' . CController::$category['1_title'] . ' ' . mb_strtolower($pageInfo['title'], 'utf-8') . ', специалисты нашего сервисного центра проведут бесплатную диагностику, выявят неисправность и сделают ремонт по самой низкой цене в Москве. Для ремонта ' . CController::$category['3_title'] . ' ' . self::$monoBrand['title'] . ' мы используем только качественные фирменные комплектующие и современное диагностическое оборудование. Также специалист может выехать для проведения ремонта к вам на дом или в офис. Ремонтируем все модели ' . CController::$category['3_title'] . ' производства ' . self::$monoBrand['title'] . '.</p>';
                    } else {
                        if (isset(CController::$category['1_title'])) {
                            $seoText = '<p>Если ' . CController::$category['1_title'] . ' ' . $pageInfo['title'] . ', специалисты нашего сервисного центра проведут бесплатную диагностику, выявят неисправность и сделают ремонт по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '. Для ремонта  ' . CController::$category['3_title'] . ' мы используем только качественные фирменные комплектующие и современное диагностическое оборудование. Также специалист может выехать для проведения ремонта к вам на дом или в офис. Ремонтируем все модели ' . CController::$category['3_title'] . '  производства.</p>';
                            $metaDesc = 'Если ' . CController::$category['1_title'] . ' ' . mb_strtolower($pageInfo['title'], 'utf8') . ', специалисты нашего сервисного центра проведут бесплатную диагностику, выявят неисправность и сделают ремонт по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '.';
                            $title = $pageInfo['title'] . ' ' . CController::$category['1_title'] . ' в ' . Yii::$app->session['region']['titleRod'];
                        }
                    }
                } else {
                    if ($siteConfig['mono']) {
                        $h1 = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' ' . CController::$category['3_title'] . ' ' . self::$monoBrand['title'];
                        $title = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' ' . CController::$category['3_title'] . ' ' . self::$monoBrand['title'] . ' - срочный ремонт в ' . Yii::$app->session['region']['titleRod'];
                        $metaDesc = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' ' . CController::$category['3_title'] . ' ' . self::$monoBrand['title'] . ' - быстро, качественно с гарантией по самой низкой цене в Москве.';
                    } else {
                        //if (isset(CController::$category['3_title']))
                        $title = $pageInfo['title'] . ' - в Москве! Качественно, с гарантией до 1 года!';
                        $metaDesc = $pageInfo['title'] . 'в сервисном центре "' . ucfirst(str_replace('.ru', '', $_SERVER['HTTP_HOST'])) . '". Качественный сервис по лучшим ценам в Москве!"';
                    }
                    if (isset(CController::$category['3_title']))
                        $seoText = '<p>Специалисты нашего сервисного центра проведут бесплатную диагностику ' . mb_strtolower(CController::$category['title'], 'utf8') . ', выявят неисправность и сделают ремонт по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '. ' . $pageInfo['title'] . ' ' . CController::$category['3_title'] . ' - быстро, качественно с гарантией.</p>';
                }
            } else {
                $seoText = $seo['meta_text1'];
            }
            if (!empty($seo['meta_text2'])) {
                $seoText2 = $seo['meta_text2'];
            }
            if (!empty($seo['meta_h1'])) {
                $h1 = $seo['meta_h1'];
            }
        }

        if ($siteConfig['mono']) {
            $sql = 'SELECT p.image            
                    FROM
                        `yu_specs` s
                    LEFT JOIN yu_pages p ON p.id = s.model_id
                    WHERE
                        s.spec_name LIKE \'%Тип%\'
                    AND s.spec_value LIKE \'%эспрессо%\'
                    AND s.spec_value LIKE \'%автоматическое%\'
                    AND p.parent = ' . (int) self::$monoBrand['id'] . '
                    ORDER BY
                            p.sort limit 1;';
            $model = \Yii::$app->db->createCommand($sql)->queryOne();
            $modelImage = $model['image'];
        }

        $title = $seo['meta_title'] ?: $title;
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => count($url) > 1 ? ($seo['meta_keywords'] ?: $metaKey) : (isset($pageInfo['meta_key']) ? $pageInfo['meta_key'] : $metaKey)
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => count($url) > 1 ? ($seo['meta_description'] ?: $metaDesc) : (isset($pageInfo['meta_desc']) ? $pageInfo['meta_desc'] : $metaDesc)
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
        $sql = 'SELECT title, url FROM {{%pages}} WHERE type = \'brand\' AND active = 1 and category_id = ' . CController::$category['id'] . ' ORDER BY title';
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
        $h1 = 'Поддерживаем ' . $cnt . ' брендов ';
        if (!empty($pageInfo['meta_h1'])) {
            $h1 = $pageInfo['meta_h1'];
        }
        return $this->render('brands', ['pageInfo' => $pageInfo, 'sortedBrands' => $sortedBrands, 'cnt' => $cnt, 'h1' => $h1, 'searches' => $searches]);
    }

    public function actionBrand() {
        $siteConfig = self::getSiteConfig();
        if ($siteConfig['mono'])
            throw new NotFoundHttpException('The requested page does not exist.');
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
        $sql = 'SELECT p.image            
                    FROM
                        `yu_specs` s
                    LEFT JOIN yu_pages p ON p.id = s.model_id
                    WHERE
                        s.spec_name LIKE \'%Тип%\'
                    AND s.spec_value LIKE \'%эспрессо%\'
                    AND s.spec_value LIKE \'%автоматическое%\'
                    AND p.parent = ' . (int) $pageInfo['id'] . '
                    AND p.active = 1    
                    ORDER BY
                            p.sort limit 1;';
        $model = \Yii::$app->db->createCommand($sql)->bindValues(['parent' => $pageInfo['id']])->queryOne();
        if (empty($model)) {
            $sql = 'select image from {{%pages}} where parent =:parent and active = 1 order by id limit 1';
            $model = \Yii::$app->db->createCommand($sql)->bindValues(['parent' => $pageInfo['id']])->queryOne();
        }

        return $this->render('brand', ['pageInfo' => $pageInfo, 'model' => $model, 'title' => $title]);
    }

    public function actionModel() {
        $pageInfo = $_GET['data'];
        $brand = Yii::$app->db->createCommand('SELECT id, url, title, full_title FROM {{%pages}} WHERE id = ' . (int) $pageInfo['parent'] . ' LIMIT 1')->queryOne();
        $regionTitle = Yii::$app->session['region']['titleRod'];
        if (Yii::$app->session['region']['titleRod'] == 'Москве')
            $regionTitle = 'Москве и МО';
        $categorySEO = [
            1 => [
                'title' => 'Ремонт телефонов ' . $brand['title'] . ' ' . $pageInfo['title'] . ' ➤ в ' . $regionTitle . ' с гарантией',
                'meta_description' => 'Ремонт сотового телефона ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в сервис центре, бесплатная курьерская служба, гарантия на выполненные работы, лучшие цены.'
            ],
            2 => [
                'title' => 'Ремонт планшетов ' . $brand['title'] . ' ' . $pageInfo['title'] . ' ➤ в ' . $regionTitle . ' с гарантией',
                'meta_description' => 'Ремонт планшета ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в сервис центре, бесплатная курьерская служба, гарантия на выполненные работы, лучшие цены.'
            ],
            3 => [
                'title' => 'Ремонт ноутбуков ' . $brand['title'] . ' ' . $pageInfo['title'] . ' ➤ в ' . $regionTitle . ' с гарантией',
                'meta_description' => 'Ремонт ноутбука ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в сервис центре, бесплатная курьерская служба, гарантия на выполненные работы, лучшие цены.'
            ],
            4 => [
                'title' => 'Ремонт часов ' . $brand['title'] . ' ' . $pageInfo['title'] . ' ➤ в ' . $regionTitle . ' с гарантией',
                'meta_description' => 'Ремонт часов ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в сервис центре, бесплатная курьерская служба, гарантия на выполненные работы, лучшие цены.'
            ],
            5 => [
                'title' => 'Ремонт фотоаппаратов ' . $brand['title'] . ' ' . $pageInfo['title'] . ' ➤ в ' . $regionTitle . ' с гарантией',
                'meta_description' => 'Ремонт фотоаппарата ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в сервис центре, бесплатная курьерская служба, гарантия на выполненные работы, лучшие цены.'
            ],
            7 => [
                'title' => 'Ремонт кофемашины ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod'] . ' с выездом мастера',
                'meta_description' => $pageInfo['meta_desc'] ?: 'Ремонт кофемашины ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в сервис центре, выезд мастера по ' . Yii::$app->session['region']['titleRod'] . ', гарантия на выполненные работы, низкая цена.'
            ]
        ];
        $metaDesc = '';
        $title = '';
        if (isset($categorySEO[self::$category['id']])) {
            $metaDesc = $categorySEO[self::$category['id']]['meta_description'];
            $title = $categorySEO[self::$category['id']]['title'];
        }
        \Yii::$app->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $pageInfo['meta_key']
        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $metaDesc
        ]);

        if (!empty($pageInfo['meta_title']))
            $title = $pageInfo['meta_title'];
        return $this->render('model', ['pageInfo' => $pageInfo, 'brand' => $brand, 'title' => $title]);
    }

}
