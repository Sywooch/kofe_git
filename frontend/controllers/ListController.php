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
//        \Yii::$app->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => $pageInfo['meta_key']
//        ]);
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
//        \Yii::$app->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => $pageInfo['meta_key']
//        ]);
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
//        \Yii::$app->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => $seo['meta_keywords'] ?: ''
//        ]);
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
//        \Yii::$app->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => count($url) > 1 ? ($seo['meta_keywords'] ?: $metaKey) : (isset($pageInfo['meta_key']) ? $pageInfo['meta_key'] : $metaKey)
//        ]);
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

//        \Yii::$app->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => $pageInfo['meta_key']
//        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        $sql = 'SELECT title, url, image FROM {{%pages}} WHERE type = \'brand\' AND active = 1 and category_id = ' . CController::$category['id'] . ' ORDER BY title';
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
//        \Yii::$app->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => $pageInfo['meta_key']
//        ]);
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
        $siteConfig = self::getSiteConfig();
        if (isset($siteConfig['theme']) && $siteConfig['theme'] == 'ifixme') {
            $categorySEO = [
                1 => [
                    'text1' => '<p>Сервисное предприятие реализует комплекс услуг по приятной стоимости и с отличным качеством. У нас Вы получите превосходное сервисное обслуживание по стандартам мирового качества.</p>',
                    'text2' => '<h2>Немного о качественном смартфоне</h2>
<p>' . $pageInfo['title'] . ' отличается превосходными характеристиками и функционалом, которыми могут похвастаться далеко не все смартфоны. Вся продукция, выпускаемая компанией-производителем Apple, очень качественна и почти не имеет заводских браков.<br>
Попытки усовершенствовать защиту смартфона довольно успешны, однако противостоять механическим повреждениям полностью устройства все равно не могут. Так что обращения в сервисную компанию продолжаются по сей день.</p>
<p>Попытки усовершенствовать защиту смартфона довольно успешны, однако противостоять механическим повреждениям полностью устройства все равно не могут. Так что обращения в сервисную компанию продолжаются по сей день.</p>
<h2>Сервисная организация по ремонту iPhone</h2>
<p>Компания выполняет свои обязанности длительный период, за который специалисты успели изучить все нюансы механизма смартфона. Накопленный годами опыт вкупе с профессионализмом позволяет взяться даже за самые сложные поломки.</p>
<p>Штат сотрудников нашего СЦ состоит из профессионалов, готовых заняться Вашей проблемой в срочном порядке. У нас действует служба курьеров, которые занимаются безопасной перевозкой гаджета по договоренности с клиентом. Просто позвоните нам, и мы проконсультируем Вас по всем вопросам.</p>'
                ],
                2 => [
                    'text1' => '<p>Посетите нашу компанию и получите отличное сервисное обслуживание по выгодной стоимости. В штабе нашего СЦ работают профессиональные инженеры с большой практикой, которые легко восстановят Ваш гаджет.</p>',
                    'text2' => '<h2>Немного о планшетах Apple</h2>
<p>Всемирно известная компания Apple выпускает отличные планшетные компьютеры, которые пользуются хорошим спросом среди потребителей. Популярность ' . $pageInfo['title'] . ' можно объяснить набором его функций и возможностей, и конечно же свою роль играет громкое имя компании.</p>
<p>Производители стараются улучшить свою продукцию, и это касается и планшетов, у которых слабым местом является механическое воздействие. Защитный чехол выполняет свою функцию, но порой пользователи бывают крайне неаккуратными.</p>
<h2>Наш СЦ &ndash; гарант качества и надежности</h2>
<p>Постоянный спрос на наши услуги легко объяснить отличным качеством обслуживания, которое обеспечивают сотрудники компании. У нас имеется личный склад с запчастями, который обеспечивает быстрое выполнение ремонта.</p>
<p>Компания выполняет полный комплекс услуг, в которые входит не только ремонт, но и диагностика и профилактические процедуры. На все поставленные запчасти и работу специалиста обязательно выдается гарантийный документ.</p>'
                ],
                3 => [
                    'text1' => '<p>Предлагаем услуги авторизованного инженера с большим опытом работы. У нас Вы найдете отличное качество по приемлемым ценам и оперативным срокам. Звоните и мы с удовольствием Вам поможем!</p>',
                    'text2' => '<h2>Сведения о самом миниатюрном плеере</h2>
<p>' . $pageInfo['title'] . ' является самым маленьким из всех Touch-плееров корпорации Apple. Айпод создан для прослушивания музыкальных композиций и поэтому не имеет ни камеры, ни поддержки мультимедиа. Тем не менее среди меломанов он пользуется особой популярностью.</p>
<p>Миниатюрный iPod идеален во многом, но к сожалению не вечен. Несмотря на плюсы его размеров, минусы тоже имеются. Порой удержать в руках такое крохотное устройство достаточно сложно, к тому же порт тоже достаточно быстро изнашивается.</p>
<h2>Электронные устройства не вечны</h2>
<p>Рано или поздно может возникнуть ситуация, когда айподу может понадобиться помощь авторизованного эксперта. Наши специалисты сумели изучить наиболее частые поломки, благодаря чему могут провести ремонтные работы над любой сложной неисправностью.</p>
<p>Компания обладает современными мастерскими, с помощью которых проводится профессиональный осмотр устройств. Высокая скорость работы обеспечивается наличием качественных запчастей, которые нам поставляют надежные дилеры.</p>'
                ],
                4 => [
                    'text1' => '<p>Если хотите получить сервисное обслуживание по приемлемой стоимости и с отличным качеством, просто посетите наш сервисный центр! Мы работаем без выходных и с готовностью отремонтируем Ваше устройство.</p>',
                    'text2' => '<h2>Диагностика выявит поломку</h2>
<p>Компания Apple запустила линию макбуков сравнительно недавно, и несмотря на огромную конкуренцию в лице других мировых компаний, успешно конкурирует с ними. ' . $pageInfo['title'] . ' является одним из лучших устройств компании, благодаря отличному набору функций и дизайну.</p>
<p>Несмотря на попытки производителей улучшить защиту макбука, его уязвимость перед механическим воздействием и жидкостью пока устранить не удалось. К тому же сложное строение гаджета и его стоимость являются препятствием для некоторых специалистов, которые попросту не могут его отремонтировать.</p>
<h2>У нас имеются бонусы для постоянных клиентов</h2>
<p>Наш штаб дипломированных инженеров осуществляет профессиональное восстановление макбуков с применением запасных частей с личного запаса фирмы. На детали дается гарантия, по которой Вы можете вернуться при возникновении непредвиденных случаев.</p>
<p>Можете приехать к нам по адресу, размещенному на сайте или заказать курьера для доставки устройства в сервисные мастерские. Для удобства наших заказчиков, контактные номера для связи и заявочные табели на обратный звонок расположены на сайте.</p>'
                ],
                5 => [
                    'text1' => '<p>Мы предлагаем всем нашим клиентам техническое обслуживание превосходного качества и по минимальной цене. Мастера компании реализуют только профессиональный качественный ремонт.</p>',
                    'text2' => '<h2>Моноблоки Apple</h2>
<p>На данное время моноблоки пользуются широким спросом, так как отличаются великолепной производительностью, эргономичностью, а благодаря небольшим размерам отлично экономят место на рабочем столе владельца.</p>
<p>Как и большинство устройств компании Apple, моноблоки ' . $pageInfo['title'] . ' являются сложными устройствами, которые достаточно легко получают неисправности из-за механического воздействия. Когда-то пластиковый корпус сменил алюминий, что значительно усложнило ремонт устройства. Выполнить его восстановление под силу только опытному мастеру.</p>
<h2>Сервисное предприятие</h2>
<p>Компания обладает широким ассортиментом профилактических и ремонтно-диагностических услуг, благодаря которым пользуется спросом среди владельцев маков. К тому же у нас используются только добротные запчасти, которые мы приобретаем у своих партнеров.</p>
<p>В организации работают ведущие специалисты страны, которые проходят повышение квалификации ежегодно. Для создания комфортной среды для сотрудничества, мы создали спецотдел с курьерами, которые занимаются доставкой аппаратов по адресам.</p>'
                ],
                6 => [
                    'text1' => '<p>Авторизованный инженер с многолетним практическим опытом быстро отремонтирует неисправное устройство Apple с последующей гарантией до трех лет. Свяжитесь с нами и узнайте все детали подробнее!</p>',
                    'text2' => '<h2>Модная тенденция в лице iWatch</h2>
<p>Ни для кого не секрет, что функциональные часы Apple избавляют владельца от надобности постоянно держать смартфон в руках или доставать его из сумки. Все процедуры выполняются дистанционно, прямо с часов, что невероятно удобно для пользователя.</p>
<p>' . $pageInfo['title'] . ' имеют отличный функционал, который облегчает использование смартфона. К тому же устройство играет роль стильного аксессуара, который дополняет образ успешного человека. К сожалению, как и другие гаджеты, часы не отличаются особой стойкостью к повреждениям.</p>
<h2>СЦ по ремонту часов Apple</h2>
<p>Наша организация отпускает разнообразные качественные услуги по демократичной стоимости, и выполняет восстановительные работы, с которыми не в силах справиться конкурентные компании, занимающиеся аналогичной деятельностью.</p>
<p>Фирменные детали для замены приобретаются у надежных партнерских компаний, к ним мы выдаем хорошую гарантию. Фирма проводит профессиональную диагностику перед ремонтом, для точного выявления неисправности часов.&nbsp;&nbsp;</p>
'
                ]
            ];
        } else {
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
        }
        $metaDesc = '';
        $title = '';
        if (isset($categorySEO[self::$category['id']])) {
            $metaDesc = $categorySEO[self::$category['id']]['meta_description'];
            $title = $categorySEO[self::$category['id']]['title'];
        }
        if (isset($siteConfig['theme']) && $siteConfig['theme'] == 'ifixme') {
            $title = 'Устранение неисправностей ' . $pageInfo['title'] . ' - Срочный ремонт в Москве!';
            $metaDesc = 'Сервисный центр iFixMe выполняет ремонт ' . $pageInfo['title'] . ' по самым лучшим ценам и с гарантией качества! Проводим весь спектр услуг! Имеется курьерская служба.';
        }
//        \Yii::$app->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => $pageInfo['meta_key']
//        ]);
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $metaDesc
        ]);
        
        if (!empty($pageInfo['meta_title']))
            $title = $pageInfo['meta_title'];
        return $this->render('model', [
                    'pageInfo' => $pageInfo,
                    'brand' => $brand,
                    'title' => $title,
                    'seoText' => isset($categorySEO[$pageInfo['parent']]) ? $categorySEO[$pageInfo['parent']] : ['text1' => '', 'text2' => '']
        ]);
    }

}
