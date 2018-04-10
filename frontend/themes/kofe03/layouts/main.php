<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

//use ifixme\Test;

AppAsset::register($this);
$assets = '/' . Yii::getAlias('@web');
$isHome = Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index' ? true : false;
$isModelPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'model' ? true : false;
$isBrandPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'brand' ? true : false;
$siteConfig = app\components\CController::getSiteConfig();
$js = app\components\CController::$js;
?>
<!DOCTYPE html>
<html lang="ru">    
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">        
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="apple-touch-fullscreen" content="yes">        
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
        <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/jquery.fancybox.css?v=12" rel="stylesheet">
        <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/swiper.min.css?v=12" rel="stylesheet">
        <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/styles.css?v=12" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="all" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/sity.css?v=12" />  
        <link type="text/css" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/jquery-ui.css" rel="stylesheet" media="all" />
        <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/<?= $siteConfig['id']; ?>.css?v=12" rel="stylesheet">
    </head>
    <body class="main_class" itemscope="" itemtype="http://schema.org/WebPage">
        <?php
        if (!Yii::$app->user->isGuest) {
            echo '<div style="float: left; z-index: 99999;position: absolute;" class="container">';
            $domain = $_SERVER['SERVER_NAME'];
            if (isset($_GET['data']['is_service'])) {
                if (count(explode('/', Yii::$app->request->pathInfo)) > 1) {
                    echo '<a target="_blank" href="http://admin.' . $domain . '/seo/create/?url=' . Yii::$app->request->pathInfo . '&site_id=' . $siteConfig['id'] . '">Ред. эту страницу.</a>';
                } else {
                    echo '<a target="_blank" href="http://admin.' . $domain . '/seo/create/?url=' . Yii::$app->request->pathInfo . '&site_id=' . $siteConfig['id'] . '">Ред. эту страницу.</a><br>';
                    echo '<a target="_blank" href="http://admin.' . $domain . '/services/update/' . $_GET['data']['id'] . '">Ред. глобальную страницу</a>';
                }
            } else {
                echo '<a target="_blank" href="http://admin.' . $domain . '/seo/create/?url=' . Yii::$app->request->pathInfo . '&site_id=' . $siteConfig['id'] . '">Ред. эту страницу.</a><br>';
                if (!empty($_GET['data']))
                    echo '<a target="_blank" href="http://admin.' . $domain . '/page/update/' . $_GET['data']['id'] . '">Ред. глобальную страницу</a>';
            }
            echo '</div>';
        }
        ?>
        <?php $this->beginBody() ?>
        <div class="main" id="top">
            <header class="head">
                <nav class="navigation" role="navigation">
                    <div class="navigation_inner">
                        <div class="navigation_menu navigation_m_u">
                            <ul class="navigation_l">
                                <li class="navigation_i navigation_i_l">
                                    <span class="navigation_t"><i class="navigation_icon navigation_icon_p"></i> <?= Yii::$app->session['region']['title']; ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="navigation_menu navigation_m_p">
                            <ul class="navigation_l">
                                <li class="navigation_i">
                                    <a class="navigation_link" href="/uslugi-i-ceny">Услуги и цены</a>
                                </li>
                                <li class="navigation_i">
                                    <a class="navigation_link" href="/status">Статус ремонта</a>
                                </li>
                                <li class="navigation_i">
                                    <a class="navigation_link" href="/o-kompanii">О компании</a>
                                </li>
                                <li class="navigation_i navigation_i_desk">
                                    <a class="navigation_link" href="/garantiya">Гарантия</a>
                                </li>
                                <li class="navigation_i navigation_i_desk">
                                    <a class="navigation_link" href="/kontakty">Контакты</a>
                                </li>
                                <li class="navigation_i navigation_i_m">
                                    <a class="navigation_link" href="#"><span class="navigation_label">Ещё</span></a>
                                    <div class="navigation_sub">
                                        <ul class="navigation_sub_list">
                                            <li class="navigation_sub_item navigation_sub_act">
                                                <a class="navigation_sub_link" href="/garantiya">Гарантия</a>
                                            </li>
                                            <li class="navigation_sub_item">
                                                <a class="navigation_sub_link" href="/kontakty">Контакты</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="head_f">
                    <div class="head_i">
                        <div class="head_m">
                            <a class="head_s" href="/">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?= $siteConfig['id']; ?>/logo.svg" alt="">
                            </a>
                            <div class="head_b">
                                <div class="head_br_icon"></div>
                            </div>
                            <div class="f_mob ph_ico"><a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"></a></div>
                            <div class="m_addtn">
                                <a class="m_btn btn_war popup_js" data-popup="request" href="#">
                                    <img class="b_icon" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/ico_bellfa5f.svg?v=1485518639601" alt="">
                                    <span class="btn_lbl">Вызвать курьера</span>
                                </a>
                            </div>
                            <div class="cnct cnct_h">
                                <div class="cnct_a">
                                    <span>
                                        <?= $siteConfig['id'] == 52 ? '
                                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100%" height="100%" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 7578 7578"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                         <g id="Слой_x0020_1">
                                          <metadata id="CorelCorpID_0Corel-Layer"/>
                                          <path class="fil0" d="M3789 0c2092,0 3789,1696 3789,3789 0,2092 -1697,3789 -3789,3789 -2093,0 -3789,-1697 -3789,-3789 0,-2093 1696,-3789 3789,-3789zm-2376 3703c0,392 68,670 201,968 79,176 197,383 307,534 21,27 103,147 125,156l1079 -1c-144,-91 -199,-120 -345,-228 -69,-52 -147,-117 -212,-175 -237,-211 -451,-474 -570,-779 -84,-217 -121,-467 -121,-725 0,-427 182,-856 439,-1147 71,-81 187,-218 313,-218 52,0 80,3 127,38 73,54 105,186 131,279 19,71 44,139 65,209l128 415c39,128 88,297 129,419 40,120 89,290 128,415 22,71 44,138 65,210 40,140 89,276 129,418 20,71 45,139 64,209 20,70 45,138 65,209l113 364c6,17 9,38 17,52l193 -625c21,-68 41,-140 64,-209 46,-138 82,-277 128,-415 46,-141 84,-279 129,-419 23,-70 44,-136 64,-206 59,-204 133,-422 194,-627 30,-98 165,-552 201,-621 30,-59 92,-115 158,-115 92,0 145,25 214,83 113,96 273,311 344,446 63,118 116,233 155,373 112,398 84,791 -49,1177 -115,332 -411,661 -674,876 -87,70 -134,102 -220,166 -35,26 -77,54 -115,77l-119 74 1074 1c11,0 27,-24 34,-33l89 -118c112,-151 225,-349 303,-522 115,-253 208,-549 208,-895 0,-301 -33,-620 -140,-901 -46,-122 -82,-216 -147,-330 -239,-419 -544,-707 -961,-948 -52,-30 -103,-53 -158,-80 -66,-32 -131,-49 -170,-67 -66,211 -136,464 -198,677 -67,227 -134,450 -199,677l-149 508c-17,57 -32,113 -50,170 -49,150 -103,348 -149,507 -9,30 -17,57 -25,85l-18 64c-5,15 -3,14 -14,17 -11,-6 -7,-1 -17,-37l-238 -803c-154,-505 -299,-1020 -452,-1527 -17,-58 -33,-111 -50,-169 -7,-26 -44,-158 -53,-169 -145,57 -173,61 -325,147 -199,111 -386,248 -544,406 -217,217 -361,413 -491,698 -76,165 -134,367 -165,547 -23,133 -39,289 -39,438zm2376 -3070c1743,0 3156,1413 3156,3156 0,1743 -1413,3156 -3156,3156 -1743,0 -3156,-1413 -3156,-3156 0,-1743 1413,-3156 3156,-3156zm0 -263c1888,0 3419,1531 3419,3419 0,1888 -1531,3419 -3419,3419 -1888,0 -3419,-1531 -3419,-3419 0,-1888 1531,-3419 3419,-3419z"/>
                                         </g>
                                        </svg> м.Сенная, м.Спасская
                                        ' : '
                                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 153 153" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Слой_x0020_1">
                                        <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                        <path class="fil0" d="M76 0c42,0 77,34 77,76 0,42 -35,77 -77,77 -42,0 -76,-35 -76,-77 0,-42 34,-76 76,-76zm8 68c-4,10 -8,18 -8,18 0,0 -3,-8 -7,-18 -4,-10 -7,-18 -7,-18 0,0 -5,12 -10,26l-10 27 4 0c2,0 4,0 4,0 0,0 3,-8 6,-17 4,-10 7,-17 7,-17 0,0 2,7 6,15 7,21 7,19 7,19 1,0 0,2 8,-19 3,-8 6,-15 6,-15 0,0 3,7 6,17 4,9 7,17 7,17 0,0 1,0 4,0l4 0 -10 -26c-5,-15 -10,-27 -10,-27 0,0 -3,8 -7,18zm-14 -60c-13,2 -25,6 -36,14 -3,2 -10,9 -12,12 -4,6 -8,14 -10,20 -2,3 -3,9 -3,13 -1,4 -1,14 0,19 1,12 6,23 14,33 2,2 8,9 11,11 9,7 21,12 33,14 4,1 14,1 19,0 12,-2 22,-6 32,-14 3,-2 10,-9 12,-12 5,-6 9,-13 11,-19 1,-4 2,-9 3,-13 1,-5 1,-15 0,-19 -2,-12 -7,-24 -14,-33 -2,-3 -9,-9 -11,-11 -10,-8 -21,-13 -33,-14 -4,-1 -13,-1 -16,-1zm13 10c23,3 42,18 49,39 10,29 -3,60 -30,73 -32,15 -70,-1 -82,-34 -9,-28 4,-60 30,-72 11,-5 22,-7 33,-6z"></path>
                                        </g>
                                        </svg> метро Кутузовская
                                        '; ?>
                                    </span>
                                    <br> 
                                    <a href="/kontakty"><?= $siteConfig['id'] == 52 ? 'Набережная канала Грибоедова, д. 59' : 'ул. Студенческая, д. 35'; ?></a>
                                </div>
                                <div class="cnct_sche">Работаем ежедневно <span class="clr_gr">c 09:00 до 20:00</span><br class="cnct_br1">без выходных и праздничных дней</div>
                                <div class="cnct_cll">
                                    <span class="cnct_ph cnct_ph-a" data-phone="moscow">
                                        <a class="number-phone" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                                    </span>
                                    <p>c 09:00 до 20:00</p>
                                    <a class="cnct-perezvon popup_js" data-popup="request" href="#recall">Перезвоните мне</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= $siteConfig['id'] == 52 ? '
                    <div class="top_m_mobile">
                        <a href="tel:88125012002">8 (812) 501-20-02</a>
                        <span class="navigation_t">Звоните ежедневно с 9:00 до 21:00 м. Сенная,<br> м. Спасская, Набережная канала Грибоедова, д. 59</span>
                    </div>
                ' : '
                    <div class="top_m_mobile">
                        <a href="tel:84951350003">8 (495) 135-00-03</a>
                        <span class="navigation_t">Звоните ежедневно с 9:00 до 21:00<br>м. Кутузовская. ул. Студенческая, д. 35</span>
                    </div>
                '; ?>
                <ul class="foot-l f_mob">
                    <li class="footr-i"><a class="footr-p" href="/uslugi-i-ceny">Услуги и цены</a></li>
                    <li class="footr-i"><a class="footr-p popup_js" data-popup="request" href="#">Статус ремонта</a>
                    <li class="footr-i"><a class="footr-p" href="/o-kompanii">О компании</a></li>
                    <li class="footr-i"><a class="footr-p" href="/garantiya">Гарантия</a></li>
                    <li class="footr-i"><a class="footr-p" href="/kontakty">Контакты</a></li>
                </ul>
                <div class="head-p">
                    <nav class="menyu" role="navigation">
                        <div class="menyu_in">
                            <div id="my-nav">
                                <ul class="menyu_taby">
                                    <li class="menyu-tab menyu-tab-r" data-menu-tab="brendss">
                                        <a class="menyu-tip" href="/brendy">
                                            <svg class="menyu-icon" xmlns="http://www.w3.org/2000/svg" width="29" height="35">
                                            <path class="menyu-icon-put" stroke-width="0.22px" fill-rule="evenodd" d="M12 24c0,1 0,1 0,1 1,1 1,1 2,0l1 0c0,0 1,1 1,1l0 1c0,1 1,1 2,1 2,0 3,0 3,-1l0 -1c0,0 1,-1 1,-1l1 0c1,1 1,0 2,-1 0,0 1,-1 1,-1 0,-1 -1,-1 -1,-1l-1 -1c0,0 0,0 0,-1 0,0 0,0 0,0l1 -1c1,-1 1,-1 0,-3 -1,-1 -1,-1 -2,-1l-1 0c0,0 -1,0 -1,0l0 -1c0,-1 -1,-2 -3,-2 -1,0 -2,1 -2,2l0 1c0,0 -1,0 -1,0l-1 0c-1,0 -2,0 -2,1 -1,2 -1,2 0,3l0 1c0,0 0,0 0,0 0,1 0,1 0,1l0 1c-1,0 -1,1 0,2zm2 -3c0,0 0,0 0,-1 0,0 0,0 0,-1 0,0 0,0 0,0l-2 -1c1,0 1,-1 1,-1 0,0 0,0 0,-1l2 1c0,0 0,0 0,0 1,-1 1,-1 2,-1 0,0 0,0 0,-1l0 -1c1,0 1,0 1,0 1,0 1,0 1,0l0 1c0,1 1,1 1,1 0,0 1,0 1,1 1,0 1,0 1,0l1 -1c0,1 1,1 1,1 0,0 0,1 0,1l-1 1c0,0 0,0 0,0 0,1 0,1 0,1 0,1 0,1 0,1 0,0 0,1 0,1l1 1c0,0 0,0 0,0 0,1 -1,1 -1,1l-1 0c0,-1 0,0 -1,0 0,0 -1,0 -1,1 0,0 -1,0 -1,0l0 2c0,0 0,0 -1,0 0,0 0,0 -1,0l0 -2c0,0 0,0 0,0 -1,-1 -1,-1 -2,-1 0,0 0,-1 0,0l-2 0c0,0 0,0 0,-1 0,0 0,0 -1,0l2 -1c0,0 0,-1 0,-1zm14 -12l-8 0 0 -2c0,0 0,0 0,0 0,0 0,-1 0,-1 0,0 -1,0 -1,0l-9 0c0,0 0,0 -1,0 0,0 0,0 0,1 0,0 0,0 0,0l0 2 -8 0c-1,0 -1,1 -1,1l0 21c0,0 0,0 1,0l2 0c0,0 1,0 1,0 0,-1 -1,-1 -1,-1l-2 0 0 -19 27 0 0 19 -19 0 0 -7c0,-1 -1,-2 -2,-2l0 -3 1 -1c0,0 0,0 0,0l1 -1c0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 1,0 1,0 1,0l0 -3c0,0 0,0 -1,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0l-1 -1c0,0 -1,0 -1,0 0,1 0,1 1,1l0 1 0 1 -1 1c0,0 0,0 0,0l0 0 -1 0c0,0 0,0 0,0l-1 -1 0 -1 1 -1c0,0 0,0 0,-1 0,0 -1,0 -1,0l-1 1c0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0l0 3c0,0 0,0 0,0 0,0 0,0 0,0l0 0c0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0l1 1c0,0 0,0 0,0l1 1 0 3c-1,0 -2,1 -2,2l0 9c0,1 1,2 3,2 1,0 2,-1 2,-2l0 -1 19 0c1,0 1,0 1,0l0 -21c0,0 0,-1 -1,-1zm-9 0l-8 0 0 -2 8 0 0 2zm-12 23c0,0 0,1 0,1 -1,0 -1,-1 -1,-1l0 -9c0,0 0,-1 1,-1 0,0 0,1 0,1l0 9zm11 -9c2,0 3,-1 3,-3 0,-1 -1,-2 -3,-2 -1,0 -2,1 -2,2 0,2 1,3 2,3zm0 -4c1,0 2,1 2,1 0,1 -1,2 -2,2 0,0 -1,-1 -1,-2 0,0 1,-1 1,-1z"/>
                                            </svg>
                                            <span class="Menyu-zag">Бренды</span>
                                        </a>
                                    </li>
                                    <li class="menyu-tab menyu_t_nic" data-menu-tab="kofemachines">
                                        <a class="menyu-tip" href="/tipy">
                                            <svg class="menyu-icon" xmlns="http://www.w3.org/2000/svg" width="29" height="40" viewBox="0 0 27 27">
                                            <path class="menyu-icon-put" stroke-width="0.22px" fill-rule="evenodd" d="M13 11c3,0 4,-2 4,-5 0,-2 -1,-4 -4,-4 -2,0 -4,2 -4,4 0,3 2,5 4,5zm14 1l-3 0 0 -1 1 0c1,0 1,-1 1,-2l0 -5c0,-1 0,-2 -1,-2l-3 0c-2,0 -4,0 -6,-1 -2,-1 -4,-1 -6,0 -1,1 -3,1 -6,1l-2 0c-1,0 -2,1 -2,2l0 5c0,1 1,2 2,2l0 0 0 17 -1 0c-1,0 -1,1 -1,1 0,0 0,0 0,0 0,1 1,3 3,3l21 0c1,0 2,-2 2,-3 0,0 0,0 0,0 0,0 0,-1 0,-1l-2 0 0 -12 3 0c1,0 2,-1 2,-2l0 -1c0,-1 -1,-1 -2,-1zm-25 -3c-1,0 -1,0 -1,0l0 -5c0,-1 0,-1 1,-1l2 0c3,0 5,0 7,-1 1,-1 3,-1 4,0 2,1 5,1 7,1l3 0c0,0 0,0 0,1l0 5c0,0 0,0 0,0l-3 0c0,0 -1,0 -1,1 -2,0 -4,0 -6,1 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 -1,0 -1,0 -1,0 0,1 0,1 0,1 0,0 0,0 0,0 -1,0 -1,0 -1,0 0,0 -1,0 -1,0 0,0 0,0 0,-1 0,0 0,0 0,0 0,0 0,0 0,0 0,0 -1,0 -1,0 0,0 0,0 0,0 -2,-1 -4,-1 -7,-2l-2 0 0 0zm18 16c0,-2 -1,-3 -3,-3l0 0c0,-1 0,-1 -1,-1l-6 0c-1,0 -1,0 -1,1l0 4c0,1 0,2 1,2l-7 0 0 -11 2 0c1,0 1,0 1,0 0,0 0,-1 -1,-1l-2 0 0 -1 2 0c1,0 1,0 1,0 0,-1 0,-1 -1,-1l-2 0 0 -1 2 0c1,0 1,0 1,0 0,-1 0,-1 -1,-1l-2 0 0 -1 1 0c3,0 5,0 6,1 0,0 1,0 1,0l0 3c0,1 0,2 1,2l0 1c0,0 0,0 0,0 0,0 1,0 1,0l0 -1 1 0 0 1c0,0 0,0 0,0 1,0 1,0 1,0l0 -1c0,0 1,-1 1,-2l2 0c0,1 1,1 1,1l4 0 0 12 -7 0c1,0 1,0 1,0 2,0 3,-1 3,-3zm-3 2c0,0 0,-1 0,-1l0 -3c1,0 2,1 2,2 0,1 -1,2 -2,2zm-1 -5l0 4c0,1 0,1 0,1l0 0c0,1 -1,1 -2,1l-2 0c-1,0 -2,-1 -2,-2l0 -4 6 0zm-4 -7l0 -3c0,0 0,0 0,0 0,1 0,1 0,1 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0l0 0c1,0 1,0 2,0l0 0c0,0 0,0 0,0 0,0 0,0 0,0l0 0c0,0 1,0 1,-1 0,0 0,0 0,0l0 3c0,1 0,1 -1,1l-2 0c0,0 0,0 0,-1zm4 -1l0 -1 1 0 0 1 -1 0zm2 -2l-2 0 0 0c0,0 0,0 0,0 2,-1 4,-1 6,-1l1 0 0 1 -4 0c0,0 -1,0 -1,0zm7 18c0,0 -1,1 -1,1l-21 0c-1,0 -2,-1 -2,-1l24 0zm3 -16c0,1 0,1 -1,1l-8 0c0,0 0,0 0,-1 0,0 -1,0 -1,0 0,0 0,0 0,0l0 -1c0,0 0,0 0,0 0,0 1,0 1,0 0,0 0,0 0,0l8 0c1,0 1,0 1,0l0 1zm-8 -6l1 0c1,0 1,-1 1,-1l0 -1c0,-1 0,-1 -1,-1l-1 0c-1,0 -1,0 -1,1l0 1c0,0 0,1 1,1zm0 -2l1 0 0 1 -1 0 0 -1zm-15 2l1 0c1,0 1,-1 1,-1l0 -1c0,-1 0,-1 -1,-1l-1 0c0,0 -1,0 -1,1l0 1c0,0 1,1 1,1zm0 -2l1 0 0 1 -1 0 0 -1zm8 2c0,0 1,0 1,0 0,0 -1,-1 -1,-1 0,0 -1,0 -1,-1 0,0 0,0 0,0 -1,0 -1,0 -1,0 0,1 1,2 2,2zm0 -3c1,0 1,1 1,1 0,1 0,1 1,1 0,0 0,0 0,-1 0,-1 -1,-2 -2,-2 0,0 0,0 0,1 0,0 0,0 0,0zm0 -2c2,0 3,2 3,3 0,2 -1,3 -3,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                                            </svg>
                                            <span class="Menyu-zag">Типы</span>
                                        </a>
                                    </li>
                                    <li class="menyu-tab menyu_t_cl" data-menu-tab="uslugi">
                                        <a class="menyu-tip" href="/uslugi-i-ceny">
                                            <svg class="menyu-icon" xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 36.84 26.842">
                                            <path class="menyu-icon-put" stroke-width="0.22px" fill-rule="evenodd" d="M26 25l1 4c0,0 0,1 -1,1 0,0 0,0 0,0 0,0 0,0 -1,0l-3 -2 -3 2c-1,0 -1,0 -1,0 -1,0 -1,-1 -1,-1l1 -4 -3 -2c0,-1 0,-1 0,-1 0,0 0,-1 1,-1l4 0 1 -4c1,0 1,0 2,0l1 4 4 0c1,0 1,1 1,1 0,0 0,0 0,1l-3 2zm-12 2c1,0 1,0 1,1 0,0 0,0 -1,0l-7 0c-4,0 -7,-2 -7,-6l0 -15c0,-4 3,-7 7,-7l15 0c4,0 6,3 6,7l0 12c0,0 0,1 0,1 -1,0 -1,-1 -1,-1l0 -12c0,-3 -2,-5 -5,-5l-15 0c-3,0 -5,2 -5,5l0 15c0,3 2,5 5,5l7 0zm-7 -5l3 -3c0,0 1,0 1,0 0,0 0,1 0,1l-3 4c0,0 -1,0 -1,0 0,0 0,0 0,0l-3 -2c0,0 0,0 0,-1 0,0 1,0 1,0l2 1zm0 -7l3 -4c0,0 1,0 1,0 0,0 0,1 0,1l-3 4c0,0 -1,1 -1,1 0,0 0,0 0,-1l-3 -1c0,-1 0,-1 0,-1 0,-1 1,-1 1,-1l2 2zm0 -8l3 -3c0,0 1,0 1,0 0,0 0,1 0,1l-3 4c0,0 -1,0 -1,0 0,0 0,0 0,0l-3 -2c0,0 0,0 0,-1 0,0 1,0 1,0l2 1zm17 6c0,0 0,1 0,1 0,1 0,1 0,1l-10 0c0,0 -1,0 -1,-1 0,0 1,-1 1,-1l10 0zm0 -7c0,0 0,1 0,1 0,0 0,1 0,1l-10 0c0,0 -1,-1 -1,-1 0,0 1,-1 1,-1l10 0zm2 17l-2 -1c0,0 -1,0 -1,0l-1 -2 -1 2c0,0 -1,0 -1,0l-2 1 1 1c1,1 1,1 1,1l-1 3 3 -2c0,0 0,0 0,0 0,0 0,0 0,0l3 2 -1 -3c0,0 0,0 1,-1l1 -1z"/>
                                            </svg>
                                            <span class="Menyu-zag">Услуги и цены</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <?= $content; ?>
        <?php if (in_array($siteConfig['id'], [52, 50])): ?>
            <noindex>
                <aside class="comp">
                    <div class="Comp-in">
                        <h3 class="content__subtitle" style="text-align: center;">Выполненный <b>ремонт</b></h3>
                        <div class="brands__carousel foto-logo">
                            <div class="swiper-container foto__slider">
                                <div class="swiper-wrapper brands__list">
                                    <div class="swiper-slide foto__item">
                                        <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/1.jpg" title="">
                                            <img class="foto__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/1mini.jpg">
                                        </a>                       
                                    </div>
                                    <div class="swiper-slide foto__item">
                                        <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/2.jpg" title="">
                                            <img class="foto__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/2mini.jpg">
                                        </a>                       
                                    </div>
                                    <div class="swiper-slide foto__item">
                                        <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/3.jpg" title="">
                                            <img class="foto__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/3mini.jpg">
                                        </a>                       
                                    </div>
                                    <div class="swiper-slide foto__item">
                                        <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/4.jpg" title="">
                                            <img class="foto__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/4mini.jpg">
                                        </a>                       
                                    </div>
                                    <div class="swiper-slide foto__item">
                                        <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/5.jpg" title="">
                                            <img class="foto__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/5mini.jpg">
                                        </a>                       
                                    </div>
                                    <div class="swiper-slide foto__item">
                                        <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/6.jpg" title="">
                                            <img class="foto__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/6mini.jpg">
                                        </a>                       
                                    </div>
                                    <div class="swiper-slide foto__item">
                                        <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/7.jpg" title="">
                                            <img class="foto__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/7mini.jpg">
                                        </a>                       
                                    </div>
                                    <div class="swiper-slide foto__item">
                                        <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/8.jpg" title="">
                                            <img class="foto__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/8mini.jpg">
                                        </a>                       
                                    </div>
                                    <div class="swiper-slide foto__item">
                                        <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/9.jpg" title="">
                                            <img class="foto__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/9mini.jpg">
                                        </a>                       
                                    </div>
                                    <div class="swiper-slide foto__item">
                                        <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/10.jpg" title="">
                                            <img class="foto__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/foto/10mini.jpg">
                                        </a>                       
                                    </div>
                                </div>
                            </div>
                            <div class="foto__next"></div>
                            <div class="foto__prev"></div>
                        </div>
                    </div>
                </aside>
            </noindex>
        <?php endif; ?>
            <footer class="padval" role="contentinfo">
                <div class="Padval-in">
                    <div class="Padval-nav">
                        <nav class="Padval-n">
                            <ul class="foot-l">
                                <li class="footr-i"><a class="footr-p" href="/voprosy-otvety">Вопросы ответы</a></li>
                                <li class="footr-i"><a class="footr-p" href="/diagnostika">Диагностика</a></li>
                                <li class="footr-i"><a class="footr-p" href="/srochnyj-remont">Срочный ремонт</a></li>
                                <li class="footr-i"><a class="footr-p" href="/dostavka">Доставка</a></li>
                                <li class="footr-i"><a class="footr-p" href="/otzyvy">Отзывы</a></li>
                                <li class="footr-i"><a class="footr-p" href="/oplata">Оплата</a></li>
                                <li class="footr-i"><a class="footr-p" href="/kontakty">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="cnct">
                        <div class="cnct_cll">
                            <span class="cnct_ph cnct_ph-a" data-phone="moscow">
                                <a class="number-phone" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                            </span>                            
                            <p> <?= Yii::$app->session['region']['title']; ?></p>
                        </div>
                    </div>
                    <div class="Padval-corp">2000 - <?= date('Y'); ?> © <?php if ($siteConfig['id'] == 52): ?>fixkofe.ru<?php else: ?>kofe03.ru<?php endif; ?> <br>
                        <a href="/policy">Пользовательское соглашение</a>
                    </div>
                </div>
            </footer>

            <div class="popup popup_request_full">
                <div class="popup__bg"></div>
                <div class="popup__main">
                    <h3 class="form_t"><?= Yii::$app->session->getFlash('review') ? 'Отзыв отправлен' : 'Заявка отправлена' ?></h3>
                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/tick.svg" />
                    <p class="form__text">
                        <?= Yii::$app->session->getFlash('review') ? 'Спасибо за отзыв. Он будет проверен и опубликован в ближайшее время.' : 'Спасибо за заявку, наш оператор свяжется с вами в течение 30 минут.' ?>
                    </p>
                    <div class="popup__close"></div>
                </div>
            </div>
            <?= kofe03\widgets\forms\SidebarForm::widget(); ?>
        </div>
        
        <?= !empty($js['content']) ? $js['content'] : ''; ?>
            <?php
        $roistatid = 'ce549814b815f3fa6db9d839ea4d4f50';
        if (isset($siteConfig['spb']))
            $roistatid = '145f7e4eaf44d2aae77d58a6e5e7b254';
        ?>
        <script>(function (w, d, s, h, id) {
                w.roistatProjectId = id;
                w.roistatHost = h;
                var p = d.location.protocol == "https:" ? "https://" : "http://";
                var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/" + id + "/init";
                var js = d.createElement(s);
                js.charset = "UTF-8";
                js.async = 1;
                js.src = p + h + u;
                var js2 = d.getElementsByTagName(s)[0];
                js2.parentNode.insertBefore(js, js2);
            })(window, document, 'script', 'cloud.roistat.com', '<?= $roistatid; ?>');</script>
    </body>
</html>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/<?= $siteConfig['mainJSFileName']; ?>.js?v=7"></script>
<?php
if (Yii::$app->session->getFlash('success') || Yii::$app->session->getFlash('review')) {
    echo '<script>$(".popup.popup_request_full").addClass("popup_active");</script>';
}
?>
    <script>
        $("form").each(function () {
            $(this).append("<input type=\"hidden\" name=\"h1\" value=\"" + $("h1").text() + "\">")
        });
        
    </script>
<script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery.mousewheel.pack.js"></script>
<script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery.fancybox.pack.js"></script>
<?php $this->endBody() ?>    
<?php $this->endPage() ?>