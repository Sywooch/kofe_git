<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
$assets = '/' . Yii::getAlias('@web');
$isHome = Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index' ? true : false;
$isModelPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'model' ? true : false;
$isBrandPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'brand' ? true : false;
$siteConfig = app\components\CController::getSiteConfig();
$js = app\components\CController::$js;
?>
<!DOCTYPE html>
<html>    
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/libs/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/css/flipclock.min.css">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/css/main.css">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/css/header.css">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/css/promo.css">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/css/faults.css">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/css/advantages.css">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/css/map-block.css">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/css/order.css">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/css/testimonials.css">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/css/footer.css">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/css/responsive.css">
    </head>
    <body>
        <div class="wrapper_page-header">
            <div class="container">
                <div class="row">
                    <div class="page-header">
                        <div class="page-header__navigation col-lg-18 col-sm-18">
                            <ul class="header-navigation__list">
                                <li class="navigation__item">
                                    <a class="navigation__link navigation__link--active" href="/">
                                        Ремонт кофемашин
                                    </a>
                                </li>
                                <li class="navigation__item">
                                    <a class="navigation__link" href="/uslugi">
                                        Цены и услуги
                                    </a>
                                </li>
                                <li class="navigation__item">
                                    <a class="navigation__link" href="/garantiya">
                                        Гарантия
                                    </a>
                                </li>
                                <li class="navigation__item">
                                    <a class="navigation__link" href="/otzyvy">
                                        Отзывы
                                    </a>
                                </li>
                                <li class="navigation__item">
                                    <a class="navigation__link" href="/o-nas">
                                        О сервис-центре
                                    </a>
                                </li>
                                <li class="navigation__item">
                                    <a class="navigation__link" href="/kontakty">
                                        Контакты
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="page-header__button col-lg-6 col-sm-7 col-xs-18">
                            <a rel="nofollow" href="zakaz/index.html">Оформить заявку</a>
                        </div>
                        <a href="#" class="header__mobile-button">
                            <span class="mobile-button__item"></span>
                            <span class="mobile-button__item"></span>
                            <span class="mobile-button__item"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?= $content; ?>
        <div id="contacts">
            <div class="contacts-heading">Выполняем ремонт по всей Москве и ближайшему Подмосковью</div>
            <div class="contacts-map"></div>
        </div>
        <footer class="wrapper__page-footer">
            <div class="wrapper__footer__navigation">
                <div class="container">
                    <div class="row">
                        <div class="page-footer__navigation col-lg-24 col-sm-24">
                            <ul class="footer-navigation__list">
                                <li class="navigation__item">
                                    <a class="navigation__link navigation__link--active" href="/">
                                        Ремонт кофемашин</a>
                                </li>
                                <li class="navigation__item">
                                    <a class="navigation__link" rel="nofollow" href="uslugi/index.html">Цены и услуги</a>
                                </li>
                                <li class="navigation__item">
                                    <a class="navigation__link" rel="nofollow" href="garantii/index.html">Гарантия</a>
                                </li>
                                <li class="navigation__item">
                                    <a class="navigation__link" rel="nofollow" href="otzyvy/index.html">Отзывы</a>
                                </li>
                                <li class="navigation__item">
                                    <a class="navigation__link" rel="nofollow" href="o-nas/index.html">О сервис-центре</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="page-footer__contacts">
                        <div class="footer-contacts__logo col-lg-5 col-sm-6">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/logo_ayryjBM.png" alt="">
                        </div>
                        <div class="footer-contacts__copyright col-lg-5 col-lg-offset-1 col-sm-6">
                            Сервис №1 на рынке ремонта кофемашин в Москве
                        </div>
                        <div class="footer-contacts__address col-lg-5 col-sm-6">
                            Работаем с 7:00 до 21:30, <br>
                            без выходных
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://use.fontawesome.com/b6d5c21aaa.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/libs/libs.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt8xooGB8SWFGfROL57nGvaFdekuEmkCU"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.12/gmaps.min.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/js/jquery.fancybox.min.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/js/flipclock.min.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>static/ondevice/js/scripts.js"></script>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>static/request/js/jquery.ajax-order.js"></script>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>static/request/js/request.js"></script>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>static/equipment/js/configurator.js"></script>
    </body>
</html>