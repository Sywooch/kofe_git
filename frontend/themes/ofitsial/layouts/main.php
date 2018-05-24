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
$isServicePage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'service' ? true : false;
$siteConfig = app\components\CController::getSiteConfig();
$js = app\components\CController::$js;
?>
<!DOCTYPE html>
<html>    
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="" type="image/x-icon" >
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme']; ?>/css/style.css" type="text/css" />
    </head>
    <body>
        <?php $this->beginBody() ?>
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
        <!-- header -->
        <header>
            <div class="preheader">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-lg-4 col-sm-5">
                            <div class="changecity_container">
                                <span>Ваш город <span class="curcity gl-current-select">Москва</span></span>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-7">
                            <span class="headeradress">Адрес: г. Москва, м. Шелепиха, ул. Большая филевская, д.1</span>
                        </div>
                        <div class="col-md-4 col-lg-3 text-right col-sm-7 p-left-reset preheaderphone_block">
                            <span class="headerphone_container">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:84953239009">
                                    8 (495) 323-90-09
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-8">
                            <div class="headerlogo_container">
                                <a class="new-year" href="/"><img src="<?= $assets . $siteConfig['theme']; ?>/images/saeco2.svg" alt="Сервисный центр apple" title="Сервисный центр apple" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-8 col-md-offset-2 col-xs-4 top-menu-row">
                            <div class="visible-xs burger">
                                <i class="burgerrow burgerrow1"></i>
                                <i class="burgerrow burgerrow2"></i>
                                <i class="burgerrow burgerrow3"></i>
                            </div>
                            <div class="topmenu_container">
                                <ul class="">
                                    <li  class="first activetopmenu_item"><a href="/">Главная</a></li>
                                    <li ><a href="o-kompanii.html">О нас</a></li>
                                    <li ><a href="o-kompanii.html">Прайс</a></li>
                                    <li ><a href="o-kompanii.html">Модели</a></li>
                                    <li  class="last"><a href="kontakty.html">Контакты</a></li>
                                </ul>
                            </div>
                            <div class="topsearch_container">
                                <button></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?= $content; ?>        
        <i class="ancorn fa fa-angle-double-up"></i>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-5">
                        <p class="footerlogo_descr">
                            Ремонт кофемашин #brand_en# в Москве
                        </p>
                        <p><i class="fa fa-calendar-o" aria-hidden="true"></i> Сервисный центр работает без выходных и праздников</p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Адрес: г. Москва ул. Октябрьская, д. 80, офис 303</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> Тел.: <a href="tel:998903475090">+998903475090</a></p>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> с 09:00 до 21:00</p>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <ul class="footer-menu">
                            <li class="active"><a href="/">Главная</a></li>
                            <li><a href="o-kompanii.html">О компании</a></li>
                            <li><a href="dostavka.html">Доставка</a></li>
                            <li><a href="kontakty.html">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <ul class="footer-menu footermenu_seccol">
                            <li>
                                <a href="remont-noutbukov-apple.html">
                                    Неисправности
                                </a>
                            </li>
                            <li>
                                <a href="remont-monoblokov-apple-imac.html">
                                    Не варит кофе
                                </a>
                            </li>
                            <li>
                                <a href="remont-iphone.html">
                                    Не видит кофе
                                </a>
                            </li>
                            <li>
                                <a href="remont-ipad.html">
                                    Поломка манометра
                                </a>
                            </li>
                            <li>
                                <a href="remont-ipad.html">
                                    Нет питания
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <p class="getarticles_heading">Заказать звонок от мастера по кофемашинам</p>

                        <form action="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="tel" name="phone" placeholder="Телефон" required/>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="hero-form__btn">Заказать</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyrightfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <span>©  2008-2017 Ремонт кофемашин #brand_en#. Все права защищены. <br>Информация на сайте не является публичной офертой. <a href="politika-konfidentsialnosti.html"> Политика конфиденциальности.</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.3.0/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/sweetalert2/6.3.0/sweetalert2.min.js"></script> 
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme']; ?>/js/main.js"></script>
        <?= !empty($js['content']) ? $js['content'] : ''; ?>
        <?php
        if (Yii::$app->session->getFlash('success')) {
            echo '<script>$(".' . $siteConfig['sitePrefix'] . 'popup.' . $siteConfig['sitePrefix'] . 'good").addClass("' . $siteConfig['sitePrefix'] . 'active");</script>';
        }
        ?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>