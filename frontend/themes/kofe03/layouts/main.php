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
<!--[if IE 9]>
<html class="lt-ie10" lang="en">
   <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="ru">
    <!--<![endif]-->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8" />
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">        
        <link rel="shortcut icon" href="<?= $assets . $siteConfig['theme'] . '/'; ?>favicon.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="apple-touch-fullscreen" content="yes">        
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
        <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/swiper.min.css" rel="stylesheet">
        <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/styles.css?v=1" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="all" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/sity.css" />  
        <link type="text/css" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/jquery-ui.css" rel="stylesheet" media="all" />
    </head>
    <body class="page_home" itemscope="" itemtype="http://schema.org/WebPage">
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
        <div class="layout" id="top">
            <header class="header">
               <nav class="nav" role="navigation">
                  <div class="nav__inner">
                     <div class="nav__menu nav__menu_user">
                        <ul class="nav__list">
                           <li class="nav__item nav__item_label">
                              <span class="nav__text"><i class="nav__ico nav__ico_pin"></i> Ваш регион: <?= Yii::$app->session['region']['title']; ?></span>
                           </li>
                        </ul>
                     </div>
                     <div class="nav__menu nav__menu_pages">
                        <ul class="nav__list">
                           <li class="nav__item">
                              <a class="nav__link" href="/uslugi-i-ceny">Услуги и цены</a>
                           </li>
                           <li class="nav__item">
                              <a class="nav__link" href="/o-kompanii">О компании</a>
                           </li>
                           <li class="nav__item nav__item_desktop">
                              <a class="nav__link" href="/garantiya">Гарантия</a>
                           </li>
                           <li class="nav__item nav__item_desktop">
                              <a class="nav__link" href="/kontakty">Контакты</a>
                           </li>
                           <li class="nav__item nav__item_more">
                              <a class="nav__link" href="#"><span class="nav__label">Ещё</span></a>
                              <div class="nav__subnav">
                                 <ul class="nav__sublist">
                                    <li class="nav__subitem nav__subitem_active">
                                       <a class="nav__sublink" href="/garantiya">Гарантия</a>
                                    </li>
                                    <li class="nav__subitem">
                                       <a class="nav__sublink" href="/kontakty">Контакты</a>
                                    </li>
                                 </ul>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </nav>
               <div class="header-fix">
                  <div class="header__inner">
                     <div class="header__main">
                        <a class="header__site" href="/">
                           <span class="header__name">Кофе03</span>
                           <span class="header__slogan">Заботливый сервис</span>
                        </a>
                        <div class="header__burger">
                           <div class="header__burger-ico"></div>
                        </div>
                        <div class="menu__addition">
                           <a class="button button_warning js-popup" data-popup="request" href="#">
                           <img class="button__ico" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/ico_bellfa5f.svg?v=1485518639601" alt="">
                           <span class="button__label">Вызвать курьера</span>
                           </a>
                        </div>
                        <div class="connect connect_header">
                           <div class="connect__schedule">Работаем ежедневно <span class="color-red">c 08:00 до 22:00</span><br class="connect_br">без выходных и праздничных дней
                           </div>
                           <div class="connect__call">
                              <span class="connect__phone connect__phone_active" data-phone="moscow">
                              <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                              </span>
                              <a class="connect__recall js-popup" data-popup="request" href="#recall">Перезвоните мне</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="header__panel">
                  <nav class="menu" role="navigation">
                     <div class="menu__inner">
                        <div id="my-nav">
                           <ul class="menu__tabs">
                              <li class="menu__tab menu__tab_repare" data-menu-tab="brendss">
                                 <a class="menu__type" href="#">
                                    <svg class="menu__ico" xmlns="http://www.w3.org/2000/svg" width="29" height="40" viewBox="0 0 25.97 27">
                                       <path class="menu__ico-path" stroke-width="0.22px" fill-rule="evenodd" d="M1708.44,941a3.367,3.367,0,0,1-2.44-1.048,3.7,3.7,0,0,1,0-5.073l4.14-4.312a0.513,0.513,0,0,1,.74,0,0.592,0.592,0,0,0,.82,0,0.65,0.65,0,0,0,0-.854,0.534,0.534,0,0,1,0-.762l1.03-1.078a0.5,0.5,0,0,1,.73,0l4.14,4.312a0.538,0.538,0,0,1,0,.761l-1.03,1.078a0.5,0.5,0,0,1-.73,0,0.594,0.594,0,0,0-.82,0,0.659,0.659,0,0,0,0,.855,0.559,0.559,0,0,1,0,.762l-4.14,4.311A3.367,3.367,0,0,1,1708.44,941Zm2.13-9.355-3.84,4a2.586,2.586,0,0,0,0,3.549,2.367,2.367,0,0,0,1.71.732,2.328,2.328,0,0,0,1.7-.732l3.84-4a1.765,1.765,0,0,1,.3-1.933,1.6,1.6,0,0,1,1.86-.316l0.37-.381-3.41-3.549-0.37.382a1.858,1.858,0,0,1,.16.743,1.738,1.738,0,0,1-.46,1.188A1.6,1.6,0,0,1,1710.57,931.645Zm-2.13,6.309a0.517,0.517,0,0,1-.37-0.157,0.559,0.559,0,0,1,0-.762l3.63-3.773a0.5,0.5,0,0,1,.73,0,0.559,0.559,0,0,1,0,.762l-3.63,3.773A0.5,0.5,0,0,1,1708.44,937.954Zm7.25-8.676a0.5,0.5,0,0,1-.37-0.158l-3.83-3.988a4.81,4.81,0,0,1-4.45-1.4,5.24,5.24,0,0,1-.98-5.837,0.514,0.514,0,0,1,.37-0.3,0.507,0.507,0,0,1,.46.15l2.95,3.071a0.922,0.922,0,0,0,1.34,0,1.014,1.014,0,0,0,0-1.394l-2.95-3.071a0.586,0.586,0,0,1-.15-0.475,0.545,0.545,0,0,1,.29-0.394,4.824,4.824,0,0,1,5.61,1.023,5.278,5.278,0,0,1,1.35,4.634l3.83,3.989a0.559,0.559,0,0,1,0,.762l-3.11,3.233A0.5,0.5,0,0,1,1715.69,929.278ZM1711.65,924a0.487,0.487,0,0,1,.36.158l3.68,3.823,2.37-2.471-3.67-3.823a0.518,0.518,0,0,1-.13-0.529,4.165,4.165,0,0,0-1.01-3.89,3.833,3.833,0,0,0-3.71-1.076l2.37,2.469a2.132,2.132,0,0,1,0,2.918,1.925,1.925,0,0,1-2.8,0l-2.38-2.472a4.117,4.117,0,0,0,1.03,3.858,3.779,3.779,0,0,0,3.75,1.056A0.438,0.438,0,0,1,1711.65,924Zm13.44,16.387a4.868,4.868,0,0,1-3.51-1.509,5.3,5.3,0,0,1-1.34-4.634l-3.83-3.988a0.54,0.54,0,0,1,0-.762l3.1-3.234a0.5,0.5,0,0,1,.73,0l3.83,3.988a4.634,4.634,0,0,1,4.46,1.41,5.241,5.241,0,0,1,.98,5.829,0.512,0.512,0,0,1-.84.152l-2.95-3.072a0.936,0.936,0,0,0-1.33,0,1.014,1.014,0,0,0,0,1.394l2.95,3.071a0.581,0.581,0,0,1,.14.475,0.543,0.543,0,0,1-.29.394A4.774,4.774,0,0,1,1725.09,940.383Zm-7.59-10.512,3.68,3.822a0.565,0.565,0,0,1,.13.529,4.135,4.135,0,0,0,1,3.89,3.828,3.828,0,0,0,3.71,1.076l-2.37-2.469a2.132,2.132,0,0,1,0-2.918,1.985,1.985,0,0,1,2.81,0l2.37,2.472a4.1,4.1,0,0,0-1.03-3.859,3.633,3.633,0,0,0-3.74-1.055,0.5,0.5,0,0,1-.51-0.137l-3.67-3.823Zm-1.76,1.562a0.513,0.513,0,0,1-.36-0.147l-1.03-1.025a0.544,0.544,0,0,1-.17-0.391,0.536,0.536,0,0,1,.15-0.371,0.5,0.5,0,0,1,.73-0.019l1.03,1.024a0.5,0.5,0,0,1,.16.391,0.524,0.524,0,0,1-.14.371A0.5,0.5,0,0,1,1715.74,931.433Zm-0.05.054a0.5,0.5,0,0,1-.37-0.158l-1.04-1.077a0.559,0.559,0,0,1,0-.762l8.77-9.126,0.48-1.5a0.553,0.553,0,0,1,.12-0.211l2.07-2.155a0.512,0.512,0,0,1,.74,0l2.07,2.155a0.559,0.559,0,0,1,0,.762l-2.07,2.156a0.534,0.534,0,0,1-.21.13l-1.43.5-8.77,9.125A0.492,0.492,0,0,1,1715.69,931.487Zm-0.31-1.616,0.31,0.315,8.48-8.834a0.593,0.593,0,0,1,.2-0.13l1.44-.5,1.62-1.684-1.34-1.394-1.62,1.685-0.48,1.5a0.549,0.549,0,0,1-.12.21Z" transform="translate(-1704.5 -914.5)"/>
                                    </svg>
                                    <span class="menu__label">Бренды</span>
                                 </a>
                              </li>
                              <li class="menu__tab menu__tab_electronic" data-menu-tab="kofemachines">
                                 <a class="menu__type" href="#">
                                    <svg class="menu__ico" xmlns="http://www.w3.org/2000/svg" width="29" height="40" viewBox="0 0 27 27">
                                       <path class="menu__ico-path" stroke-width="0.22px" fill-rule="evenodd" d="M13 11c3,0 4,-2 4,-5 0,-2 -1,-4 -4,-4 -2,0 -4,2 -4,4 0,3 2,5 4,5zm14 1l-3 0 0 -1 1 0c1,0 1,-1 1,-2l0 -5c0,-1 0,-2 -1,-2l-3 0c-2,0 -4,0 -6,-1 -2,-1 -4,-1 -6,0 -1,1 -3,1 -6,1l-2 0c-1,0 -2,1 -2,2l0 5c0,1 1,2 2,2l0 0 0 17 -1 0c-1,0 -1,1 -1,1 0,0 0,0 0,0 0,1 1,3 3,3l21 0c1,0 2,-2 2,-3 0,0 0,0 0,0 0,0 0,-1 0,-1l-2 0 0 -12 3 0c1,0 2,-1 2,-2l0 -1c0,-1 -1,-1 -2,-1zm-25 -3c-1,0 -1,0 -1,0l0 -5c0,-1 0,-1 1,-1l2 0c3,0 5,0 7,-1 1,-1 3,-1 4,0 2,1 5,1 7,1l3 0c0,0 0,0 0,1l0 5c0,0 0,0 0,0l-3 0c0,0 -1,0 -1,1 -2,0 -4,0 -6,1 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 -1,0 -1,0 -1,0 0,1 0,1 0,1 0,0 0,0 0,0 -1,0 -1,0 -1,0 0,0 -1,0 -1,0 0,0 0,0 0,-1 0,0 0,0 0,0 0,0 0,0 0,0 0,0 -1,0 -1,0 0,0 0,0 0,0 -2,-1 -4,-1 -7,-2l-2 0 0 0zm18 16c0,-2 -1,-3 -3,-3l0 0c0,-1 0,-1 -1,-1l-6 0c-1,0 -1,0 -1,1l0 4c0,1 0,2 1,2l-7 0 0 -11 2 0c1,0 1,0 1,0 0,0 0,-1 -1,-1l-2 0 0 -1 2 0c1,0 1,0 1,0 0,-1 0,-1 -1,-1l-2 0 0 -1 2 0c1,0 1,0 1,0 0,-1 0,-1 -1,-1l-2 0 0 -1 1 0c3,0 5,0 6,1 0,0 1,0 1,0l0 3c0,1 0,2 1,2l0 1c0,0 0,0 0,0 0,0 1,0 1,0l0 -1 1 0 0 1c0,0 0,0 0,0 1,0 1,0 1,0l0 -1c0,0 1,-1 1,-2l2 0c0,1 1,1 1,1l4 0 0 12 -7 0c1,0 1,0 1,0 2,0 3,-1 3,-3zm-3 2c0,0 0,-1 0,-1l0 -3c1,0 2,1 2,2 0,1 -1,2 -2,2zm-1 -5l0 4c0,1 0,1 0,1l0 0c0,1 -1,1 -2,1l-2 0c-1,0 -2,-1 -2,-2l0 -4 6 0zm-4 -7l0 -3c0,0 0,0 0,0 0,1 0,1 0,1 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0l0 0c1,0 1,0 2,0l0 0c0,0 0,0 0,0 0,0 0,0 0,0l0 0c0,0 1,0 1,-1 0,0 0,0 0,0l0 3c0,1 0,1 -1,1l-2 0c0,0 0,0 0,-1zm4 -1l0 -1 1 0 0 1 -1 0zm2 -2l-2 0 0 0c0,0 0,0 0,0 2,-1 4,-1 6,-1l1 0 0 1 -4 0c0,0 -1,0 -1,0zm7 18c0,0 -1,1 -1,1l-21 0c-1,0 -2,-1 -2,-1l24 0zm3 -16c0,1 0,1 -1,1l-8 0c0,0 0,0 0,-1 0,0 -1,0 -1,0 0,0 0,0 0,0l0 -1c0,0 0,0 0,0 0,0 1,0 1,0 0,0 0,0 0,0l8 0c1,0 1,0 1,0l0 1zm-8 -6l1 0c1,0 1,-1 1,-1l0 -1c0,-1 0,-1 -1,-1l-1 0c-1,0 -1,0 -1,1l0 1c0,0 0,1 1,1zm0 -2l1 0 0 1 -1 0 0 -1zm-15 2l1 0c1,0 1,-1 1,-1l0 -1c0,-1 0,-1 -1,-1l-1 0c0,0 -1,0 -1,1l0 1c0,0 1,1 1,1zm0 -2l1 0 0 1 -1 0 0 -1zm8 2c0,0 1,0 1,0 0,0 -1,-1 -1,-1 0,0 -1,0 -1,-1 0,0 0,0 0,0 -1,0 -1,0 -1,0 0,1 1,2 2,2zm0 -3c1,0 1,1 1,1 0,1 0,1 1,1 0,0 0,0 0,-1 0,-1 -1,-2 -2,-2 0,0 0,0 0,1 0,0 0,0 0,0zm0 -2c2,0 3,2 3,3 0,2 -1,3 -3,3 -2,0 -3,-1 -3,-3 0,-1 1,-3 3,-3z"/>
                                    </svg>
                                    <span class="menu__label">Типы кофемашин</span>
                                 </a>
                              </li>
                              <li class="menu__tab menu__tab_cleaning" data-menu-tab="uslugi">
                                 <a class="menu__type" href="#">
                                    <svg class="menu__ico" xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 36.84 26.842">
                                       <path class="menu__ico-path" stroke-width="0.22px" fill-rule="evenodd" d="M26 25l1 4c0,0 0,1 -1,1 0,0 0,0 0,0 0,0 0,0 -1,0l-3 -2 -3 2c-1,0 -1,0 -1,0 -1,0 -1,-1 -1,-1l1 -4 -3 -2c0,-1 0,-1 0,-1 0,0 0,-1 1,-1l4 0 1 -4c1,0 1,0 2,0l1 4 4 0c1,0 1,1 1,1 0,0 0,0 0,1l-3 2zm-12 2c1,0 1,0 1,1 0,0 0,0 -1,0l-7 0c-4,0 -7,-2 -7,-6l0 -15c0,-4 3,-7 7,-7l15 0c4,0 6,3 6,7l0 12c0,0 0,1 0,1 -1,0 -1,-1 -1,-1l0 -12c0,-3 -2,-5 -5,-5l-15 0c-3,0 -5,2 -5,5l0 15c0,3 2,5 5,5l7 0zm-7 -5l3 -3c0,0 1,0 1,0 0,0 0,1 0,1l-3 4c0,0 -1,0 -1,0 0,0 0,0 0,0l-3 -2c0,0 0,0 0,-1 0,0 1,0 1,0l2 1zm0 -7l3 -4c0,0 1,0 1,0 0,0 0,1 0,1l-3 4c0,0 -1,1 -1,1 0,0 0,0 0,-1l-3 -1c0,-1 0,-1 0,-1 0,-1 1,-1 1,-1l2 2zm0 -8l3 -3c0,0 1,0 1,0 0,0 0,1 0,1l-3 4c0,0 -1,0 -1,0 0,0 0,0 0,0l-3 -2c0,0 0,0 0,-1 0,0 1,0 1,0l2 1zm17 6c0,0 0,1 0,1 0,1 0,1 0,1l-10 0c0,0 -1,0 -1,-1 0,0 1,-1 1,-1l10 0zm0 -7c0,0 0,1 0,1 0,0 0,1 0,1l-10 0c0,0 -1,-1 -1,-1 0,0 1,-1 1,-1l10 0zm2 17l-2 -1c0,0 -1,0 -1,0l-1 -2 -1 2c0,0 -1,0 -1,0l-2 1 1 1c1,1 1,1 1,1l-1 3 3 -2c0,0 0,0 0,0 0,0 0,0 0,0l3 2 -1 -3c0,0 0,0 1,-1l1 -1z"/>
                                    </svg>
                                    <span class="menu__label">Услуги</span>
                                 </a>
                              </li>
                              <li class="menu__tab menu__tab_neispravnosti" data-menu-tab="neispravnosti">
                                 <a class="menu__type" href="#">
                                    <svg class="menu__ico" xmlns="http://www.w3.org/2000/svg" width="29" height="32" viewBox="0 0 36.84 26.842">
                                       <path class="menu__ico-path" stroke-width="0.22px" fill-rule="evenodd" d="M28 27c-1,0 -2,0 -2,0l-4 -3c0,0 0,-1 1,-1 0,0 0,-1 0,-1 -1,-1 -1,-2 0,-2 1,-1 1,-2 0,-2 -1,0 -1,-1 -1,-2 1,-1 0,-1 -1,-2 0,0 -1,0 -1,-1 0,-1 0,-2 -1,-1 -1,0 -1,-1 -2,-2 0,0 0,-1 -1,0 -1,0 -2,0 -2,-1 0,-1 -1,-1 -2,0 0,0 -1,0 -2,0 0,-1 -1,-1 -1,0 -1,1 -1,1 -2,1 -1,0 -2,0 -2,1 0,1 0,1 -1,1 -1,0 -2,1 -1,1 0,1 -1,2 -1,2 -1,0 -1,1 -1,2 0,0 0,1 0,2 -1,0 -1,1 -1,1 1,1 1,2 1,2 -1,1 -1,2 0,2 1,0 1,1 1,2 0,1 0,1 1,1 1,0 1,1 1,2 0,0 1,1 2,1 1,-1 1,0 2,1 0,0 1,1 1,0 1,-1 2,0 2,0 1,1 2,1 2,0 0,0 1,-1 2,0 1,0 1,0 2,-1 0,-1 0,-1 1,-1 1,0 2,0 2,-1 0,0 0,-1 0,-1l4 3c0,0 1,1 1,1 1,1 3,1 4,-1 0,-1 0,-2 -1,-3zm-10 -5l-3 -2c0,-1 -1,-2 -2,-2 -1,-1 -2,-1 -3,0l2 1c1,0 1,1 0,2 0,0 -1,1 -1,0l-2 -1c0,1 0,2 1,3 1,1 2,1 3,0l3 2c0,1 -1,1 -3,2 -3,0 -7,-2 -8,-5 -1,-4 1,-8 5,-9 4,0 7,2 8,5 1,2 0,3 0,4zm2 1l-1 0c0,-2 1,-3 0,-5 -1,-4 -5,-7 -9,-6 -4,2 -7,6 -6,10 1,4 5,7 10,6 1,-1 2,-2 3,-3l1 1c-1,1 -3,2 -4,2 -5,1 -9,-1 -11,-6 -1,-4 2,-9 7,-10 4,-1 9,1 10,6 0,2 0,4 0,5zm8 7l-1 0 -2 0 0 -2 2 0 1 0 0 2zm-11 -23l1 0c0,1 1,1 1,2l0 1c0,0 0,1 1,0l0 0c1,0 2,0 2,1l1 0c0,1 1,0 1,0l0 -1c1,0 1,0 2,0l0 0c1,-1 1,-1 1,-2l0 0c0,-1 0,-1 1,-2l0 0c0,-1 0,-1 0,-2l-1 0c0,0 -1,-1 -1,-2l0 0c0,-1 0,-1 -1,-1l0 0c-1,0 -2,0 -2,0l-1 -1c0,0 0,0 -1,0l0 1c0,0 -1,1 -2,1l0 0c-1,0 -1,0 -1,1l0 1c0,0 0,1 0,1l-1 1c0,0 0,1 0,1zm6 -4c1,0 2,1 2,3 0,1 -1,2 -2,2 -2,0 -3,-1 -3,-2 0,-2 1,-3 3,-3z"/>
                                    </svg>
                                    <span class="menu__label">Неисправности</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="menu__panel">
                        <div class="menu__inner">
                           <div class="menu__content">
                              <div class="menu__section" data-menu-section="brendss">
                                 <div class="menu__categories">
                                    <div class="menu__category">
                                       <div class="menu__head">
                                          <img class="menu__view" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/search.svg" alt="">
                                          <h3 class="menu__title"><input class="form__input" type="text" id="myInput-Brend" onkeyup="myFunction()" placeholder="Поиск брендов.."></h3>
                                          <?= kofe03\widgets\lists\AllBrands::widget(); ?>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="menu__info">
                                    <div class="menu__more">
                                    </div>
                                 </div>
                              </div>
                              <div class="menu__section" data-menu-section="kofemachines">
                                 <div class="menu__categories out-images">
                                    <div class="menu__category">
                                       <div class="menu__head">
                                          <ul class="menu__list">
                                             <li class="menu__item"><a class="menu__link" href="/rozhkovye">Рожковые</a></li>
                                             <li class="menu__item"><a class="menu__link" href="/porcionnye">Порционные</a></li>
                                             <li class="menu__item"><a class="menu__link" href="/ehspresso-kombajny">Эспрессо-комбайны</a></li>
                                             <li class="menu__item"><a class="menu__link" href="/avtomaticheskie">Автоматические</a></li>                                             
                                             <li class="menu__item"><a class="menu__link" href="/chaldovye">Чалдовые</a></li>
                                             <li class="menu__item"><a class="menu__link" href="/kapelnye">Капельные</a></li>
                                             <li class="menu__item"><a class="menu__link" href="/poluavtomaticheskie">Полуавтоматические</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="menu__section" data-menu-section="uslugi">
                                 <div class="menu__categories">
                                    <div class="menu__category">
                                       <div class="menu__head">
                                          <img class="menu__view" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/star.svg" alt="">
                                          <?= kofe03\widgets\lists\Services::widget(['type' => 1]); ?>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="menu__info">
                                    <div class="menu__more">
                                    </div>
                                 </div>
                              </div>
                              <div class="menu__section" data-menu-section="neispravnosti">
                                 <div class="menu__categories">
                                    <div class="menu__category">
                                       <div class="menu__head">
                                          <img class="menu__view" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/star-red.svg" alt="">
                                          <?= kofe03\widgets\lists\Services::widget(['type' => 2]); ?>
                                    </div>
                                 </div>
                                 <div class="menu__info">
                                    <div class="menu__more">
                                    </div>
                                 </div>
                              </div>
                              <div class="menu__footer">
                                 <div class="menu__holidays">Работаем в праздники!</div>
                                 <div class="menu__actions">
                                    <a class="menu__action js-popup" data-popup="request" href="#">
                                       <span class="menu__action-ico">
                                          <svg class="menu__action-img" xmlns="http://www.w3.org/2000/svg" width="29" height="35" viewBox="0 0 29 32.56">
                                             <path class="menu__action-ico_path" fill-rule="evenodd" d="M14 19c3,0 8,-3 8,-9 0,-1 0,-2 0,-3 0,-2 0,-3 -1,-4 -1,-2 -3,-3 -7,-3 -3,0 -5,1 -6,3 -1,1 -1,2 -1,4 0,1 0,2 0,3 0,6 5,9 7,9zm10 14l0 0 -3 0c0,0 0,-1 0,-1 0,-1 0,-2 0,-2l3 0c0,0 0,0 0,0 0,0 0,0 0,0 0,-1 -2,-2 -3,-2 -1,0 -1,1 -2,1 0,1 -1,1 -1,1l-7 0c-1,-1 -2,-2 -3,-2 -1,0 -3,1 -3,2 0,0 0,0 0,0 0,0 0,0 0,0l0 0 3 0c0,0 0,1 0,2 0,0 0,1 0,1l-3 0c0,0 0,0 0,0 0,0 0,0 0,0 0,1 2,2 3,2l0 0c1,0 1,0 2,-1 0,0 1,-1 1,-1l7 0c1,1 2,2 3,2 0,0 0,0 0,0 1,0 3,-1 3,-2 0,0 0,0 0,0 0,0 0,0 0,0zm5 -4c0,-3 -1,-6 -3,-7 -1,-1 -5,-3 -7,-4l0 0c0,0 0,0 0,0 -1,1 -2,1 -3,2 0,0 0,0 0,0l-2 3 -1 -3c0,0 0,0 0,0 -1,-1 -2,-1 -3,-2 0,0 0,0 0,0 -2,1 -6,3 -7,4 -2,1 -3,6 -3,7 0,0 0,0 0,0 0,0 1,2 4,3 0,0 0,0 1,0 -1,0 -1,-1 -1,-1 -1,-1 -1,-1 0,-2 0,-1 2,-2 4,-2 1,0 3,1 4,2l5 0c1,0 1,0 1,-1 1,0 2,-1 3,-1l0 0 0 0c2,0 4,1 4,2 1,1 1,1 0,2 0,0 0,0 -1,1 1,0 1,0 1,0 3,-1 4,-3 4,-3 0,0 0,0 0,0zm-12 -26c0,1 0,1 -1,2 -1,0 -2,0 -3,0 -1,-1 -1,-1 -1,-2 2,0 3,0 5,0zm-9 5c0,0 0,1 1,1 1,0 2,-2 5,-2 4,0 5,2 6,2 1,0 1,-1 1,-1 0,1 0,1 0,2 0,3 -1,5 -2,6 -2,1 -4,2 -5,2 0,0 -2,-1 -4,-2 -1,-1 -2,-3 -2,-6 0,-1 0,-1 0,-2z"/>
                                          </svg>
                                       </span>
                                       <span class="menu__action-text">Вызвать мастера</span>
                                       <span class="menu__action-arrow">
                                          <svg class="menu__action-right" xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12">
                                             <path class="menu__action-ico_path" d="M1393.6,990.423a1.891,1.891,0,0,1,0-1.153,2.247,2.247,0,0,1,.28-0.461,3.006,3.006,0,0,1,.45-0.438,1.787,1.787,0,0,1,.46-0.277,1.694,1.694,0,0,1,.61-0.093h0.11a1.492,1.492,0,0,1,1.01.508l1.04,0.992q1.545,1.488,3,3L1402,994l-1.44,1.5q-1.455,1.51-3,3l-0.97.935a1.57,1.57,0,0,1-2.1.288,2.949,2.949,0,0,1-.7-0.692,1.63,1.63,0,0,1-.28-0.946,1.731,1.731,0,0,1,.55-1.142l1-1.1h-6.09a1.839,1.839,0,0,1-.9-0.185,2.771,2.771,0,0,1-.51-0.369,2.828,2.828,0,0,1-.37-0.507,1.715,1.715,0,0,1,0-1.569,2.005,2.005,0,0,1,.88-0.877,1.852,1.852,0,0,1,.9-0.184h6.18l-0.61-.588a6.114,6.114,0,0,1-.61-0.635,2.077,2.077,0,0,1-.33-0.508" transform="translate(-1387 -988)"></path>
                                          </svg>
                                       </span>
                                    </a>
                                    <a class="menu__action js-popup" data-popup="request" href="#">
                                       <span class="menu__action-ico">
                                          <svg class="menu__action-img" xmlns="http://www.w3.org/2000/svg" width="33" height="28" viewBox="0 0 20.41 31.906">
                                             <path class="menu__action-ico_path" fill-rule="evenodd" d="M22 19c-3,-2 -5,3 -6,2 -3,-2 -7,-4 -8,-8 -1,-1 4,-3 2,-6 -6,-6 -5,-5 -9,-1 -5,4 8,22 19,23 3,0 3,-1 5,-3 3,-2 0,-4 -3,-7zm2 -14c-2,-3 -5,-5 -9,-5l0 2c6,1 11,6 12,12l2 0c-1,-4 -2,-7 -5,-9zm-3 9l2 0c-1,-4 -4,-8 -8,-8l-1 2c4,0 6,3 7,6z"/>
                                          </svg>
                                       </span>
                                       <span class="menu__action-text">Заказать звонок</span>
                                       <span class="menu__action-arrow">
                                          <svg class="menu__action-right" xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12">
                                             <path class="menu__action-ico_path" d="M1393.6,990.423a1.891,1.891,0,0,1,0-1.153,2.247,2.247,0,0,1,.28-0.461,3.006,3.006,0,0,1,.45-0.438,1.787,1.787,0,0,1,.46-0.277,1.694,1.694,0,0,1,.61-0.093h0.11a1.492,1.492,0,0,1,1.01.508l1.04,0.992q1.545,1.488,3,3L1402,994l-1.44,1.5q-1.455,1.51-3,3l-0.97.935a1.57,1.57,0,0,1-2.1.288,2.949,2.949,0,0,1-.7-0.692,1.63,1.63,0,0,1-.28-0.946,1.731,1.731,0,0,1,.55-1.142l1-1.1h-6.09a1.839,1.839,0,0,1-.9-0.185,2.771,2.771,0,0,1-.51-0.369,2.828,2.828,0,0,1-.37-0.507,1.715,1.715,0,0,1,0-1.569,2.005,2.005,0,0,1,.88-0.877,1.852,1.852,0,0,1,.9-0.184h6.18l-0.61-.588a6.114,6.114,0,0,1-.61-0.635,2.077,2.077,0,0,1-.33-0.508" transform="translate(-1387 -988)"></path>
                                          </svg>
                                       </span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
            </header>
            <?= $content; ?>
            <footer class="footer" role="contentinfo">
                <div class="footer__inner">
                    <div class="footer__navigation">
                        <nav class="footer__nav">
                            <ul class="footer__list">
                                <li class="footer__item"><a class="footer__page" href="/voprosy-otvety">Вопросы ответы</a></li>
                                <li class="footer__item"><a class="footer__page" href="/diagnostika">Диагностика</a></li>
                                <li class="footer__item"><a class="footer__page" href="/srochnyj-remont">Срочный ремонт</a></li>
                                <li class="footer__item"><a class="footer__page" href="/dostavka">Доставка</a></li>
                                <li class="footer__item"><a class="footer__page" href="/otzyvy">Отзывы</a></li>
                                <li class="footer__item"><a class="footer__page" href="/oplata">Оплата</a></li>
                                <li class="footer__item"><a class="footer__page" href="/polzovatelskoe-soglashenie">Пользовательское соглашение</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="connect">
                        <div class="connect__schedule">Работаем ежедневно <span class="color-red">c 08:00 до 22:00</span> <br class="connect_br">без выходных и праздничных дней</div>
                        <div class="connect__contact">
                            <a class="connect__email" href="#"><span class="__cf_email__" data-cfemail="a4cdcac2cbe4d6c1c9d6d1d78ad6d1">[email&#160;protected]</span></a>
                        </div>
                        <div class="connect__call">
                            <span class="connect__phone connect__phone_active" data-phone="moscow">
                                <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                            </span>                            
                            <a class="connect__recall js-popup" data-popup="request" href="#recall">Перезвоните мне</a>
                        </div>
                    </div>
                    <div class="footer__copyright"><?= date('Y'); ?>  «kofe03.ru» ©</div>
                </div>
            </footer>

            <div class="layout__loading">
                <img class="layout__loader" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/loaderd8b8.svg?v=1485518639218" alt="">
            </div>

            <?= kofe03\widgets\forms\SidebarForm::widget(); ?>
        </div>
                
    </body>
</html>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery-1.11.3.min.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.activeForm.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery.inputmask.bundle.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.validation.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery.cookie.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/plugins.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/sly.min.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/swiper.jquery.min.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery-ui.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/common.js?v=1"></script>
<?php
if (Yii::$app->session->getFlash('success')) {
    echo '<script>$(".popup .finish, .popup").addClass("active");</script>';
}
?>
<script>$("form").each(function () {
                    $(this).append("<input type=\"hidden\" name=\"h1\" value=\"" + $("h1").text() + "\">")
                });</script>
<?php $this->endBody() ?>    
<?php $this->endPage() ?>