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
        $config = CController::getSiteConfig();
        if (isset($config['foreign_category']) && $config['foreign_category']) {
            $russianName = '';
            if (isset(Yii::$app->params['brandRussianNames'][CController::$monoBrand['title']]))
                $russianName = ' (' . Yii::$app->params['brandRussianNames'][CController::$monoBrand['title']] . ')';
            if ($config['theme'] == 'multicat') {
                $title = 'Ремонт ' . mb_strtolower($pageInfo['full_title'], 'UTF-8') . ' ' . ' в сервисном центре ' . CController::$monoBrand['title'] . ' 🔧 в ' . Yii::$app->session['region']['titleRod'];
                if (isset($config['spb']) && $config['spb'])
                    $title = str_replace('🔧', '⚒', $title);
                $metaDesc = 'Проводим ремонт ' . mb_strtolower($pageInfo['full_title'], 'UTF-8') . ' ' . CController::$monoBrand['title'] . ' в авторизованном сервисном центре. Новое оборудование, оптимальные цены, отменное качество, топовые мастера!';
            } else {
                $title = 'Ремонт ' . mb_strtolower($pageInfo['full_title'], 'UTF-8') . ' ' . CController::$monoBrand['title'] . $russianName . ' ⚒ Качественно ✔️ Гарантия 💎 Лучшие цены!';
                if (isset($config['spb']) && $config['spb'])
                    $title = str_replace(['⚒', '✔️', '💎'], ['🔧', '🏅', '✔'], $title);
                $metaDesc = 'Сервисный центр выполняет ремонт ' . mb_strtolower($pageInfo['full_title'], 'UTF-8') . ' ' . CController::$monoBrand['title'] . ' в ' . Yii::$app->session['region']['titleRod'] . ' с гарантией! Быстро! Опытные специалисты! Гарантия! Цены на сайте!';
            }
        } else {
            $title = '';
            $metaDesc = '';
        }
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => !empty($pageInfo['meta_desc']) ? $pageInfo['meta_desc'] : $metaDesc,
        ]);
        $q = 'SELECT title, url, image, id, icon FROM {{%pages}} WHERE active = 1 AND parent = ' . (int) $pageInfo['id'] . ' ORDER BY sort';
        $rows = \Yii::$app->db->createCommand($q)->queryAll();
        return $this->render('category', ['page' => $pageInfo, 'models' => $rows, 'title' => $title]);
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

    public function actionFaults() {
        $pageInfo = $_GET['data'];
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc']
        ]);
        return $this->render('faults', [
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
        $b = null;

        if (count($url) > 1) {
            
            $arrayUrl = $url;
            array_pop($url);
            if ($siteConfig['mono']) {
                $url = self::$monoBrand['url'] . '/' . str_replace(Yii::$app->params['replace-url'], '', implode('/', $url));
            }
            $page = (new \yii\db\Query())
                    ->select(['title', 'url', 'id', 'type', 'parent', 'image', 'full_title'])
                    ->from('{{%pages}}')
                    ->where(['url' => $siteConfig['mono'] ? $url : implode('/', $url)])
                    ->limit(1)
                    ->one();
            
            if ($siteConfig['id'] == 113) {
                $url = Yii::$app->request->pathInfo;
                $url = explode('/', $url);
                return $this->redirect('/' . $url[0], 301);
            } elseif ($siteConfig['id'] == 124) {
                if ($page['type'] == 'model')
                    return $this->redirect('/' . $page['url'], 301);
            }
            
            if ($page['type'] == 'brand') {
                $brandImage = $page['image'];
                $sql = 'select image from {{%pages}} where parent =:parent and active = 1 order by sort limit 1';
                $model = \Yii::$app->db->createCommand($sql)->bindValues(['parent' => $page['id']])->queryOne();
                $modelImage = $model['image'];
            }
            if (isset($siteConfig['foreign_category'])) {
                $breadcrumbs['/' . CController::$category['url']] = 'Ремонт ' . mb_strtolower(CController::$category['rod_title'], 'utf8') . ' ' . CController::$monoBrand['title'];
            }
            $breadcrumbs['/' . $page['url']] = (isset($siteConfig['foreign_category']) ? CController::$monoBrand['title'] : '') . CController::$category['full_title'] . ' ' . $page['title'];
            if ($page['type'] == 'brand' || $page['type'] == 'model' || $page['type'] == 'category') {
                if ($page['type'] == 'model' && !isset($siteConfig['foreign_category'])) {
                    $brand = (new \yii\db\Query())
                            ->select(['title', 'url', 'id', 'type', 'image'])
                            ->from('{{%pages}}')
                            ->where(['id' => $page['parent']])
                            ->limit(1)
                            ->one();
                    $b = $brand;
                    $brandImage = $brand['image'];
                    $modelImage = $page['image'];
                    $breadcrumbs['/' . $brand['url']] = CController::$category['full_title'] . ' ' . $brand['title'];
                    unset($breadcrumbs['/' . $page['url']]);
                    $breadcrumbs['/' . $page['url']] = (in_array($siteConfig['category_id'], [1, 2, 3, 4, 5]) ? 'Ремонт ' . $brand['title'] . ' ' : '') . $page['title'];
                    $page['title'] = $brand['title'] . ' ' . $page['title'];
                }
                $pageInfo['title'] = mb_strtolower($pageInfo['title'], 'utf8');
                if ($pageInfo['type'] == 2) {
                    $seoH1 = [
                        6 => 'Нет пара в кофемашине ' . $page['title'],
                        14 => 'Плохо течет кофе в кофемашине ' . $page['title'],
                        17 => 'Кофемашина ' . $page['title'] . ' делает кофе слишком холодный\горячий',
                        18 => 'Кофемашина ' . $page['title'] . ' делает кофе слабый и невкусный',
                    ];
                    if (isset($seoH1[$pageInfo['id']]))
                        $h1 = $seoH1[$pageInfo['id']];
                    else
                        $h1 = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' ' . CController::$category['1_title'] . ' ' . $page['title'];
                    $title = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' ' . CController::$category['1_title'] . ' ' . $page['title'] . ' - ремонт в ' . Yii::$app->session['region']['titleRod'];
                    $metaDesc = 'Если вы столкнулись с проблемой - ' . $pageInfo['title'] . '  ' . CController::$category['1_title'] . ' ' . $page['title'] . ' наш сервисный центр поможет вам в короткие сроки по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '.';
                    if ($siteConfig['id'] == 50) {
                        if (isset($seoH1[$pageInfo['id']])) {
                            $title = $seoH1[$pageInfo['id']] . ' - Кофе03 ремонт в Москве';
                            $metaDesc = $seoH1[$pageInfo['id']] . ', наши специалисты бесплатно проведут диагностику и сделают ремонт по доступной цене.';
                        } else {
                            $title = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' кофемашина ' . $page['title'] . ' - Кофе03 ремонт в Москве';
                            $metaDesc = 'Если ' . $pageInfo['title'] . ' кофемашина ' . $page['title'] . ', наши специалисты бесплатно проведут диагностику и сделают ремонт по доступной цене.';
                        }
                    } elseif ($siteConfig['id'] == 49) {
                        if (isset($seoH1[$pageInfo['id']])) {
                            $title = $seoH1[$pageInfo['id']] . ' - Ремонт кофемашин в Москве';
                        } else {
                            $title = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' ' . $page['title'] . ' - Ремонт кофемашин в Москве';
                        }
                        $metaDesc = 'Проблема с кофемашиной ' . $page['title'] . '? ' . $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . '? Устраним проблему в кратчайшие сроки с использованием оригинальных комплектующих.';
                    } elseif (in_array($siteConfig['id'], [51, 53])) {
                        $title = 'Кофемашина ' . $page['title'] . ' - ' . $pageInfo['title'] . '. Ремонт кофемашин в ' . Yii::$app->session['region']['titleRod'] . '.';
                        $metaDesc = 'Если ' . (isset($seoH1[$pageInfo['id']]) ? mb_strtolower($seoH1[$pageInfo['id']], 'utf-8') : 'кофемашина ' . $page['title'] . ' ' . $pageInfo['title']) . ' наши специалисты бесплатно проведут диагностику, выявят неисправность и в короткие сроки выполнят ремонт с гарантией. ';
                    } elseif (in_array($siteConfig['id'], [124, 125])) {
                        if ($page['type'] == 'brand') {
                            $title = 'Кофемашина ' . $page['title'] . ' - ' . $pageInfo['title'];
                            $metaDesc = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' - ремонт кофемашин ' . $page['title'] . ' любой сложности поломки.  Оперативное реагирование и предоставление полного пакета документов. Работаем без выходных.';
                        } else {
                            $title = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' ' . $page['title'] . ' - ремонт быстро, недорого, надежно';
                            $metaDesc = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' ' . $page['title'] . '. Устраняем неисправности различной сложности без задержек, точно в срок. Низкие цены. Оригинальные комплектующие. Опытные мастера';
                        }
                        $h1 = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' ' . $page['title'];
                    } elseif (isset($siteConfig['foreign_category']) && $siteConfig['foreign_category']) {
                        if ($siteConfig['theme'] == 'multicat') {
                            $seoH1 = [
                                1024 => 'Нет пара в кофемашине',
                                1032 => 'Плохо течет кофе в кофемашине',
                                1033 => 'Кофемашина делает кофе слишком холодный\горячий',
                                1034 => 'Кофемашина делает кофе слабый и невкусный',
                            ];
                        } else {
                            $seoH1 = [
                                1024 => 'Нет пара в кофемашине ' . (CController::$monoBrand['title'] . ($page['type'] == 'category' ? '' : ' ' . $page['title'])),
                                1032 => 'Плохо течет кофе в кофемашине ' . (CController::$monoBrand['title'] . ($page['type'] == 'category' ? '' : ' ' . $page['title'])),
                                1033 => 'Кофемашина ' . (CController::$monoBrand['title'] . ($page['type'] == 'category' ? '' : ' ' . $page['title'])) . ' делает кофе слишком холодный\горячий',
                                1034 => 'Кофемашина ' . (CController::$monoBrand['title'] . ($page['type'] == 'category' ? '' : ' ' . $page['title'])) . ' делает кофе слабый и невкусный',
                            ];
                        }

                        if (isset($seoH1[$pageInfo['id']])) {
                            $serviceTitle = $seoH1[$pageInfo['id']];
                            if ($page['type'] == 'category') {
                                if ($siteConfig['theme'] == 'multicat') {
                                    $h1 = $seoH1[$pageInfo['id']];
                                    $title = 'Ремонт кофемашин ' . CController::$monoBrand['title'] . ' ☕️ ' . $serviceTitle . '? Починим!';
                                    $metaDesc = 'Произведём ремонт кофемашины ' . CController::$monoBrand['title'] . ' недорого. Устраним неисправность в короткие сроки! Даем гарантию! Качественные запчасти. Профессиональные мастера.';
                                } else {
                                    $h1 = $seoH1[$pageInfo['id']];
                                    $title = $serviceTitle . ' Ремонт 👌 Диагностика ⛺️ Доставка';
                                    if (isset($siteConfig['spb']) && $siteConfig['spb'])
                                        $title = str_replace(['👌', '⛺️'], ['🛠', '🚗'], $title);
                                    $metaDesc = $serviceTitle . ' - первый признак неисправности, которая быстро устраняется в нашем специализированном сервисном центре по ремонту кофемашин ' . CController::$monoBrand['title'] . '.';
                                }
                            } elseif ($page['type'] == 'model') {
                                if ($siteConfig['theme'] == 'multicat') {
                                    $h1 = $seoH1[$pageInfo['id']];
                                    $title = 'Ремонт кофемашины ' . (CController::$monoBrand['title'] . ($page['type'] == 'category' ? '' : ' ' . $page['title'])) . ' в сервисном центре. ' . $serviceTitle . '? Восстановим! ';
                                    $metaDesc = '' . $serviceTitle . '? Не печальтесь! Авторизованный сервисный центр ' . CController::$monoBrand['title'] . ' выполнит срочный ремонт и вернёт кофемашину в рабочее состояние. Качество! Гарантия!';
                                } else {
                                    $h1 = $seoH1[$pageInfo['id']];
                                    $title = $serviceTitle . ' 🛠 Срочный ремонт в ' . Yii::$app->session['region']['titleRod'] . ' с гарантией!';
                                    if (isset($siteConfig['spb']) && $siteConfig['spb'])
                                        $title = str_replace(['🛠'], ['🔨'], $title);
                                    $metaDesc = $serviceTitle . ' - исправим данную проблему быстро и качественно в нашем специализированном сервисном центре ' . CController::$monoBrand['title'] . '.';
                                }
                            }
                        } else {
                            if ($page['type'] == 'category') {
                                if ($siteConfig['theme'] == 'multicat') {
                                    $h1 = 'Кофемашина ' . CController::$monoBrand['title'] . ' ' . $pageInfo['title'];
                                    $title = 'Ремонт кофемашин ' . CController::$monoBrand['title'] . ' ☕️ Кофемашина ' . $pageInfo['title'] . '? Починим!';
                                    $metaDesc = 'Произведём ремонт кофемашины ' . CController::$monoBrand['title'] . ' недорого. Устраним неисправность в короткие сроки! Даем гарантию! Качественные запчасти. Профессиональные мастера.';
                                } else {
                                    $h1 = 'Кофемашина ' . CController::$monoBrand['title'] . ' ' . $pageInfo['title'];
                                    $title = 'Кофемашина ' . CController::$monoBrand['title'] . ' ' . $pageInfo['title'] . ' Ремонт 👌 Диагностика ⛺️ Доставка';
                                    if (isset($siteConfig['spb']) && $siteConfig['spb'])
                                        $title = str_replace(['👌', '⛺️'], ['🛠', '🚗'], $title);
                                    $metaDesc = 'Кофемашина ' . CController::$monoBrand['title'] . ' ' . $pageInfo['title'] . ' - первый признак неисправности, которая быстро устраняется в нашем специализированном сервисном центре по ремонту кофемашин ' . CController::$monoBrand['title'] . '.';
                                }
                            } elseif ($page['type'] == 'model') {
                                if ($siteConfig['theme'] == 'multicat') {
                                    $h1 = 'Кофемашина ' . CController::$monoBrand['title'] . ' ' . $page['title'] . ' ' . $pageInfo['title'];
                                    $title = 'Ремонт кофемашины ' . (CController::$monoBrand['title'] . ($page['type'] == 'category' ? '' : ' ' . $page['title'])) . ' в сервисном центре. ' . $pageInfo['title'] . '? Восстановим!';
                                    $metaDesc = 'Кофемашина ' . $pageInfo['title'] . '? Не печальтесь! Авторизованный сервисный центр ' . CController::$monoBrand['title'] . ' выполнит срочный ремонт и вернёт кофемашину в рабочее состояние. Качество! Гарантия!';
                                } else {
                                    $h1 = 'Кофемашина ' . CController::$monoBrand['title'] . ' ' . $page['title'] . ' ' . $pageInfo['title'];
                                    $title = 'Кофемашина ' . CController::$monoBrand['title'] . ' ' . $page['title'] . ' ' . $pageInfo['title'] . ' 🛠 Срочный ремонт в ' . Yii::$app->session['region']['titleRod'] . ' с гарантией!';
                                    if (isset($siteConfig['spb']) && $siteConfig['spb'])
                                        $title = str_replace(['🛠'], ['🔨'], $title);
                                    $metaDesc = 'Кофемашина ' . CController::$monoBrand['title'] . ' ' . $page['title'] . ' ' . $pageInfo['title'] . ' - исправим данную проблему быстро и качественно в нашем специализированном сервисном центре ' . CController::$monoBrand['title'] . '.';
                                }
                            }
                        }
                    } elseif ($siteConfig['id'] == 146) {
                        $seoH1 = [
                            14 => 'В кофемашине плохая подача кофе',
                            18 => 'В кофемашине ухудшилось качество кофе',
                            5 => 'Кофемашина перестала подавать воду',
                            13 => 'В кофемашине появляется ошибка',
                            17 => 'Кофемашина делает напиток слишком холодным\горячим',
                        ];
                        $title = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' ' . $page['title'] . '! Выполняем ремонт кофемашин по всей ' . Yii::$app->session['region']['titleRod'];
                        
                        $metaDesc = 'Авторизованный сервисный центр выполнит ремонт и устранит неисправность - ' . $pageInfo['title'] . ' - и предоставит фирменную гарантию! Выезд курьера по всей ' . Yii::$app->session['region']['titleRod'];
                    }

                    $seoText = '<p>Если ' . CController::$category['1_title'] . ' ' . $page['title'] . ' ' . $pageInfo['title'] . ', специалисты нашего сервисного центра проведут бесплатную диагностику, выявят неисправность и сделают ремонт по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '. Для ремонта  ' . CController::$category['3_title'] . ' ' . $page['title'] . ' мы используем только качественные фирменные комплектующие и современное диагностическое оборудование. Также специалист может выехать для проведения ремонта к вам на дом или в офис. Ремонтируем все модели ' . CController::$category['3_title'] . '  производства ' . $page['title'] . '.</p>';
                } else {
                    $h1 = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' ' . str_replace('Ремонт ', '', CController::$category['rod_title']) . ' ' . $page['title'];
                    $seoText = '<p>Специалисты нашего сервисного центра проведут бесплатную диагностику ' . mb_strtolower(CController::$category['title'], 'utf8') . ' ' . $page['title'] . ', выявят неисправность и сделают ремонт по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '. ' . $pageInfo['title'] . ' ' . CController::$category['3_title'] . ' ' . $page['title'] . ' - быстро, качественно с гарантией.</p>';
                    if (in_array($siteConfig['id'], [51, 53])) {
                        $title = 'Услуга: ' . $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' ' . $page['title'] . ' Ремонт кофемашин в ' . Yii::$app->session['region']['titleRod'] . '.';
                        if ($page['type'] == 'brand') {
                            $metaDesc = 'Качественная ' . $pageInfo['title'] . ' кофемашин ' . $page['title'] . ' в сервисном центре ' . ucfirst(str_replace('.ru', '', $_SERVER['HTTP_HOST'])) . ' в ' . Yii::$app->session['region']['titleRod'] . '. Фирменные комплектующие. Гарантия. Работаем ежедневно.';
                        } else {
                            $metaDesc = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' ' . $page['title'] . '. Качественный ремонт кофемашин в  сервисном центре ' . ucfirst(str_replace('.ru', '', $_SERVER['HTTP_HOST'])) . ' в ' . Yii::$app->session['region']['titleRod'] . '. Фирменные комплектующие. Гарантия.';
                        }
                    } elseif (in_array($siteConfig['id'], [124, 125])) {
                        if ($page['type'] == 'brand') {
                            $h1 = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' ' . $page['title'];
                            $title = 'Кофемашины ' . $page['title'] . ' - ' . $pageInfo['title'];
                            $metaDesc = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' - ремонт кофемашин ' . $page['title'] . '  любой сложности поломки в течении короткого времени и по оптимальной стоимости. Все запчасти в наличии. Работаем без выходных.';
                        } else {
                            $h1 = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' ' . $page['title'];
                            $title = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' ' . $page['title'] . ' ремонт недорого';
                            $metaDesc = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' ' . $page['title'] . '. Выберите удобное время, и наш курьер подъедет точно в срок. Низкие цены. Оригинальные комплектующие. Опытные мастера';
                        }
                    } elseif (isset($siteConfig['foreign_category']) && $siteConfig['foreign_category']) {
                        if ($page['type'] == 'category') {
                            if ($siteConfig['theme'] == 'multicat') {
                                $h1 = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' ' . mb_strtolower($page['full_title'], 'utf8') . ' ' . CController::$monoBrand['title'];
                                $title = 'Ремонт ' . CController::$monoBrand['title'] . ' - ' . $pageInfo['title'] . ' 🍵 Сервисный центр ' . CController::$monoBrand['title'];
                                $metaDesc = 'Выполняем ремонт кофемашин ' . CController::$monoBrand['title'] . ' по низким ценам и максимально быстро. ' . $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' в ближайшем сервисе! Оригинальные комплектующие! Качественно с гарантией!';
                            } else {
                                $h1 = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' ' . mb_strtolower($page['full_title'], 'utf8') . ' ' . CController::$monoBrand['title'];
                                $title = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' кофемашины ' . CController::$monoBrand['title'] . ' ⚒ Гарантия на все работы 🍵 Быстрый ремонт';
                                if (isset($siteConfig['spb']) && $siteConfig['spb'])
                                    $title = str_replace(['⚒', '🍵'], ['☕', '🔧'], $title);
                                $metaDesc = 'Специализированный сервисный центр по ремонту кофемашин ' . CController::$monoBrand['title'] . ' предоставляет услугу - ' . $pageInfo['title'] . '! Качественный сервис. Лучшие цены!';
                            }
                        } elseif ($page['type'] == 'model') {
                            if ($siteConfig['theme'] == 'multicat') {
                                $h1 = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' ' . mb_strtolower(CController::$category['title'], 'utf8') . ' ' . CController::$monoBrand['title'] . ' ' . $page['title'];
                                $title = 'Ремонт ' . (CController::$monoBrand['title'] . ($page['type'] == 'category' ? '' : ' ' . $page['title'])) . ' - ' . $pageInfo['title'] . '. Сервисный центр в ' . Yii::$app->session['region']['titleRod'];
                                $metaDesc = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' кофемашин ' . (CController::$monoBrand['title'] . ($page['type'] == 'category' ? '' : ' ' . $page['title'])) . ' по низкой цене и в быстрые сроки в ' . Yii::$app->session['region']['titleRod'] . '. Профессиональные мастера. Качественно с гарантией!';
                            } else {
                                $h1 = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' ' . mb_strtolower(CController::$category['title'], 'utf8') . ' ' . CController::$monoBrand['title'] . ' ' . $page['title'];
                                $title = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' ' . CController::$monoBrand['title'] . ' ' . $page['title'] . ' ⚒ Срочный ремонт кофемашин ☕️';
                                if (isset($siteConfig['spb']) && $siteConfig['spb'])
                                    $title = str_replace(['⚒', '☕️'], ['☕', '🔧'], $title);
                                $metaDesc = 'Ремонт кофемашины ' . CController::$monoBrand['title'] . $page['title'] . '  - ' . $pageInfo['title'] . '! Быстрый ремонт! Высокое качество! Выезд мастера!';
                            }
                        }
                    } elseif ($siteConfig['id'] == 49) {
                        $title = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' кофемашины ' . $page['title'] . ' в Москве';
                        $metaDesc = 'Услуга ' . $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' кофемашины ' . $page['title'] . '! Качественный сервис за низкие цены. Самые качественные комплектующие и квалифицированные специалисты!';
                    } elseif ($siteConfig['id'] == 146) {
                        $title = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' кофемашин ' . $page['title'] . ' в ' . Yii::$app->session['region']['titleRod'] . '! Гарантия! Качество!';
                        $metaDesc = 'Наш сервисный центр выполнит услугу - ' . $pageInfo['title'] . ' - быстро и качественно! Выезд курьера по всей ' . Yii::$app->session['region']['titleRod'] . '.';
                    } else {
                        $title = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' ' . CController::$category['3_title'] . ' ' . $page['title'] . '. Ремонт ' . CController::$category['3_title'] . ' в СЦ';
                        $metaDesc = 'Качественная ' . $pageInfo['title'] . ' ' . CController::$category['3_title'] . ' ' . $page['title'] . ' в официальном сервисном центре по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '.';
                    }
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
                    if ($pageInfo['id'] == 26 && in_array($siteConfig['id'], [51, 53]))
                        $metaDesc = 'Специалисты нашего сервисного центра проведут бесплатную диагностику кофе машины ' . $page['title'] . ', выявят неисправность и сделают ремонт быстро и с гарантией качества.';
                    if ($pageInfo['id'] == 26 && $siteConfig['id'] == 52)
                        $metaDesc = 'Бесплатная диагностика кофемашин ' . $page['title'] . '  в авторизованном сервисном центре FixKofe. Быстро, качественно.';
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
            if ($pageInfo['type'] == 2) {
                $seoH1 = [
                    14 => 'В кофемашине плохая подача кофе',
                    18 => 'В кофемашине ухудшилось качество кофе',
                    5 => 'Кофемашина перестала подавать воду',
                    13 => 'В кофемашине появляется ошибка',
                    17 => 'Кофемашина делает напиток слишком холодным\горячим',
                ];
                if ($siteConfig['mono']) {
                    $h1 = 'Кофемашина ' . self::$monoBrand['title'] . ' ' . mb_strtolower($pageInfo['title'], 'utf8');
                }
                if ($siteConfig['mono']) {
                    $title = $this->mb_ucfirst(CController::$category['1_title'], 'UTF-8') . ' ' . self::$monoBrand['title'] . ' ' . mb_strtolower($pageInfo['title'], 'utf8') . ' - срочный ремонт в ' . Yii::$app->session['region']['titleRod'];
                    $metaDesc = 'Если ' . CController::$category['1_title'] . ' ' . self::$monoBrand['title'] . ' ' . mb_strtolower($pageInfo['title'], 'utf8') . ', специалисты нашего сервисного центра проведут бесплатную диагностику, выявят неисправность и сделают ремонт по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '.';
                    $seoText = '<p>Если ' . CController::$category['1_title'] . ' ' . mb_strtolower($pageInfo['title'], 'utf-8') . ', специалисты нашего сервисного центра проведут бесплатную диагностику, выявят неисправность и сделают ремонт по самой низкой цене в Москве. Для ремонта ' . CController::$category['3_title'] . ' ' . self::$monoBrand['title'] . ' мы используем только качественные фирменные комплектующие и современное диагностическое оборудование. Также специалист может выехать для проведения ремонта к вам на дом или в офис. Ремонтируем все модели ' . CController::$category['3_title'] . ' производства ' . self::$monoBrand['title'] . '.</p>';
                } elseif ($siteConfig['id'] == 49) {
                    $title = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' - Ремонт в Москве';
                    $metaDesc = 'Проблема с кофемашиной? ' . $pageInfo['title'] . '? Устраним проблему в кратчайшие сроки с использованием оригинальных комплектующих.';
                } elseif ($siteConfig['id'] == 146) {
                    if (isset($seoH1[$pageInfo['id']])) {
                        $p = $seoH1[$pageInfo['id']];
                    } else {
                        $p = 'Кофемашина ' . mb_strtolower($pageInfo['title'], 'utf-8');
                    }
                    $title = $p . '? Устраняем проблемы быстро и качественно по всей ' . Yii::$app->session['region']['titleRod'] . '.';
                    $metaDesc = $p . '? Позвоните нам и мы бесплатно доставим ваше устройство в наш сервисный центр и проведём бесплатную диагностику!';
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
                } elseif ($siteConfig['id'] == 49) {
                    $title = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' - СЦ в Москве';
                    $metaDesc = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' в сервисном центре. Гарантия, качество и надёжность - синонимы нашего сервисного центра по ремонту кофемашин в Москве и области.';
                } elseif ($siteConfig['id'] == 146) {
                    $title = $this->mb_ucfirst($pageInfo['title'], 'UTF-8') . ' в ' . Yii::$app->session['region']['titleRod'] . '! Качество, гарантия, низкие цены!';
                    $metaDesc = 'Наш сервисный центр проведёт обслуживание и восстановительные работы! Услуга: ' . $pageInfo['title'] . ' - позволит кофемашине работать как и прежде!';
                } else {
                    //if (isset(CController::$category['3_title']))
                    $title = $pageInfo['title'] . ' - в ' . Yii::$app->session['region']['titleRod'] . '! Качественно, с гарантией до 1 года!';
                    $metaDesc = $pageInfo['title'] . 'в сервисном центре "' . ucfirst(str_replace('.ru', '', $_SERVER['HTTP_HOST'])) . '". Качественный сервис по лучшим ценам в ' . Yii::$app->session['region']['titleRod'] . '!"';
                }

                if (isset(CController::$category['3_title']))
                    $seoText = '<p>Специалисты нашего сервисного центра проведут бесплатную диагностику ' . mb_strtolower(CController::$category['title'], 'utf8') . ', выявят неисправность и сделают ремонт по самой низкой цене в ' . Yii::$app->session['region']['titleRod'] . '. ' . $pageInfo['title'] . ' ' . CController::$category['3_title'] . ' - быстро, качественно с гарантией.</p>';
            }
            if (!empty($seo['meta_text1'])) {
                $seoText = $seo['meta_text1'];
            }
            if ($pageInfo['type'] == 2) {
                if (in_array($siteConfig['id'], [124, 125])) {
                    $title = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' - ремонт кофемашин быстро, недорого, надежно';
                    $metaDesc = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . '. Устраняем неисправности различной сложности без задержек, точно в срок. Низкие цены. Оригинальные комплектующие. Опытные мастера';
                }
            } else {
                if (in_array($siteConfig['id'], [124, 125])) {
                    $title = 'Ремонт кофемашин - ' . $pageInfo['title'];
                    $metaDesc = $this->mb_ucfirst($pageInfo['title'], 'utf-8') . ' - ремонт кофемашин  любой сложности поломки в течении короткого времени и по оптимальной стоимости. Все запчасти в наличии. Работаем без выходных.';
                }
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
            'content' => count($url) > 1 ? (!empty($seo['meta_description']) ? $seo['meta_description'] : $metaDesc) : (!empty($pageInfo['meta_desc']) ? $pageInfo['meta_desc'] : $metaDesc)
        ]);


        $breadcrumbs[] = $this->mb_ucfirst($pageInfo['title'], 'UTF-8');

        return $this->render('service', ['pageInfo' => $pageInfo, 'b' => $b, 'seoText' => $seoText, 'seoText2' => $seoText2,
                    'h1' => $h1, 'breadcrumbs' => $breadcrumbs, 'title' => $title, 'brandImage' => $brandImage,
                    'modelImage' => $modelImage, 'page' => (isset($page) ? $page : ['title' => ''])]);
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
        $metaDesc = 'Любой ремонт кофемашин ' . $pageInfo['title'] . ' в сервис центре, выезд мастера на дом или офис. Качество, гарантия, низкая цена.';
        $title = 'Ремонт кофемашин ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod'] . ' с выездом мастера на дом или офис';

        if (isset($siteConfig['category_id'])) {
            $title = CController::$category['full_title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod'];
            $metaDesc = CController::$category['full_title'] . ' ' . $pageInfo['title'] . ' в сервисном центре "' . ucfirst($_SERVER['HTTP_HOST']) . '". Работает курьерская служба. Качество, гарантия, низкая цена.';
        }

        if ($siteConfig['id'] == 50) {
            $rName = '';
            if (isset(Yii::$app->params['brandRussianNames'][$pageInfo['title']]))
                $rName = ' (' . Yii::$app->params['brandRussianNames'][$pageInfo['title']] . ')';
            $title = 'Ремонт кофемашин ' . $pageInfo['title'] . '™' . $rName . '  в ' . Yii::$app->session['region']['titleRod'] . ' 👍 — Цены и адреса';
            //$title = 'Ремонт кофемашин ' . $pageInfo['title'] . ' с выездом мастера  в ' . Yii::$app->session['region']['titleRod'] . ' и Области';
            $metaDesc = 'Качество, гарантия, низкая цена. Ремонт кофемашин ' . $pageInfo['title'] . ' в  ' . Yii::$app->session['region']['titleRod'] . ' - сервис центр Кофе03, служба доставки или выезд мастера на дом или офис.';
        } elseif (in_array($siteConfig['id'], [51, 53])) {
            $title = 'Ремонт кофемашин ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod'] . ' ☎️ ' . strip_tags(Yii::$app->session['region']['phone']);
            $metaDesc = 'Качественный ремонт кофемашин ' . $pageInfo['title'] . ' в СЦ ' . ucfirst(str_replace('.ru', '', $_SERVER['HTTP_HOST'])) . '. Выезд курьера или мастера. Бесплатная диагностика. Гарантия. Фирменные комплектующие. Работаем ежедневно.';
        } elseif (in_array($siteConfig['id'], [124, 125])) {
            $title = 'Ремонт кофемашин ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod'] . ' профессионально ' . strip_tags(Yii::$app->session['region']['phone']);
            $metaDesc = 'Ремонтные работы любой сложности с применением фирменных запчастей под кофемашину ' . $pageInfo['title'] . '. Заключаем долгосрочные контракты на профилактическое обслуживание.';
        } elseif ($siteConfig['id'] == 49) {
            $title = 'Ремонт кофемашин ' . $pageInfo['title'] . ' в Москве ✔️';
            $metaDesc = 'Кофемашина ' . $pageInfo['title'] . ' не включается или не делает кофе? Устраним и наладим! Отремантируем и дадим гарантию! Низкие цены, комфортное расположение СЦ!';
        } elseif ($siteConfig['id'] == 146) {
            $title = 'Ремонт кофемашин ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod'] . '! Лучшие мастера!';
            $metaDesc = 'Авторизованный сервисный центр проводит ремонт кофемашин ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod'] . '. Наш сервисный центр является лидером по обслуживанию кофемашин. Доверяя ремонт нам - вы получите восстановленную кофемашину. Гарантия на все виды работ!';
        }

        if (!empty($pageInfo['meta_title']))
            $title = $pageInfo['meta_title'];
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => $pageInfo['meta_desc'] ?: $metaDesc
        ]);

        //$h1 = '';
        $sql = 'SELECT p.image            
                    FROM
                        `yu_specs` s
                    LEFT JOIN yu_pages p ON p.id = s.model_id
                    WHERE
                        s.spec_name LIKE \'%Тип%\'
                    AND s.spec_value LIKE \'%эспрессо%\'
                    AND s.spec_value LIKE \'%автоматическое%\'
                    AND s.spec_value NOT LIKE \'%полуавтоматическое%\'
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
        $siteConfig = self::getSiteConfig();
        if ($siteConfig['id'] == 113) {
            $url = Yii::$app->request->pathInfo;
            $url = explode('/', $url);
            return $this->redirect('/' . $url[0], 301);
        }
        $pageInfo = $_GET['data'];
        $brand = Yii::$app->db->createCommand('SELECT id, url, title, full_title, image FROM {{%pages}} WHERE id = ' . (int) $pageInfo['parent'] . ' LIMIT 1')->queryOne();
        $regionTitle = Yii::$app->session['region']['titleRod'];
        if (Yii::$app->session['region']['titleRod'] == 'Москве')
            $regionTitle = 'Москве и МО';

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
        if ($siteConfig['id'] == 50) {
            $title = 'Ремонт кофемашины ' . $brand['title'] . ' ' . $pageInfo['title'] . ' недорого, быстро, качественно!';
            $metaDesc = 'Ремонт кофемашины  ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod'] . ', служба доставки или выезд мастера, комплектующие ААА класса, гарантия, низкая цена.';
        } elseif (in_array($siteConfig['id'], [51, 53])) {
            $title = 'Ремонт ' . $brand['title'] . ' ' . $pageInfo['title'] . ' 🔧 в ' . Yii::$app->session['region']['titleRod'];
            $metaDesc = 'Выполним ремонт кофемашины ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в короткие сроки в ' . Yii::$app->session['region']['titleRod'] . '. Выезд курьера или мастера. Гарантия. Фирменные комплектующие.';
        } elseif (in_array($siteConfig['id'], [124, 125])) {
            $title = 'Ремонт кофемашин ' . $brand['title'] . ' ' . $pageInfo['title'] . ' с выездом мастера в ' . Yii::$app->session['region']['titleRod'];
            $metaDesc = 'Ремонт кофемашин ' . $brand['title'] . ' ' . $pageInfo['title'] . ' с возможностью бесплатной экспресс-диагностики и  доставки в мастерскую. Фиксированные низкие цены и только качественные комплектующие.';
        } elseif (isset($siteConfig['foreign_category']) && $siteConfig['foreign_category']) {
            if ($siteConfig['theme'] == 'multicat') {
                $title = 'Ремонт кофемашины ' . CController::$monoBrand['title'] . ' ' . $pageInfo['title'] . ' 🍮 Бесплатная диагностика! Гарантия!';
                if (isset($siteConfig['spb']) && $siteConfig['spb'])
                    $title = str_replace('🍮', '☕', $title);
                $metaDesc = 'Выполняем ремонт кофемашин ' . CController::$monoBrand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod'] . '. Качественный сервис за короткие сроки и с гарантией! Бесплатная  доставка!';
            } else {
                $title = 'Ремонт кофемашины ' . CController::$monoBrand['title'] . ' ' . $pageInfo['title'] . ' 🍵 Обслуживание кофемашин в ' . Yii::$app->session['region']['titleRod'] . ' 👍';
                $metaDesc = 'Кофемашина ' . CController::$monoBrand['title'] . ' ' . $pageInfo['title'] . ' - устраним любую поломку за короткие сроки с гарантией по лучшей цене! Доставка 🚗 Выезд мастера';
            }
        } elseif ($siteConfig['id'] == 146) {
            $title = 'Ремонт ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod'] . '! Качество! Гарантия! Скорость! ';
            $metaDesc = 'Ремонт кофемашины ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod'] . '! Сервисный центр сотрудничает с производителями кофемашин, и устанавливает только качественные и сертифицированные запасные части. Гарантия до 1 года!';
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
