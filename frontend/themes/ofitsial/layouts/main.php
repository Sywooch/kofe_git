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
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme']; ?>/css/<?= $siteConfig['sitePrefix']; ?>.css" type="text/css" />
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
                        <div class="col-xl-3 col-lg-2 col-md-2 col-xs-6">
                            <div class="changecity_container">
                                <span>Город <span class="curcity gl-current-select"><?= Yii::$app->session['region']['id'] == 1 ? 'Москва' : 'Санкт-Петербург'; ?></span></span>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-7 col-md-7 hidden-sm">
                            <span class="headeradress">
                                Адрес: <?= Yii::$app->session['region']['id'] == 1 ? 'г. Москва, м. Электрозаводская, Барабанный переулок, 4с4' : 'г. Санкт-Петербург, м. Чкаловская, Большая Разночинная ул., 14'; ?>
                            </span>
                        </div>
                        <div class="col-xl-4 col-lg-3 col-md-3 col-xs-6 text-right  p-left-reset preheaderphone_block">
                            <span class="headerphone_container">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>">
                                    <?= Yii::$app->session['region']['phone']; ?>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-8">
                            <div class="headerlogo_container">
                                <a class="new-year" href="/"><img src="<?= $assets . $siteConfig['theme']; ?>/images/<?= $siteConfig['sitePrefix']; ?>2.svg" alt="Ремонт <?= app\components\CController::$monoBrand['title']; ?>" title="Ремонт <?= app\components\CController::$monoBrand['title']; ?>" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-xl-offset-2 col-lg-9 col-md-9 col-sm-9">
                            <div class="burger">
                                <i class="burgerrow burgerrow1"></i>
                                <i class="burgerrow burgerrow2"></i>
                                <i class="burgerrow burgerrow3"></i>
                            </div>
                            <div class="topmenu_container">
                                <ul>
                                    <li class="first activetopmenu_item"><a href="/">Главная</a></li>
                                    <li><a href="/about">О нас</a></li>
                                    <li><a href="/prices">Прайс</a></li>
                                    <li><a href="/models">Модели</a></li>
                                    <li class="last"><a href="/contacts">Контакты</a></li>
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
                    <div class="col-md-3 col-sm-5 mobi-padding">
                        <p class="footerlogo_descr">
                            Ремонт кофемашин <?= app\components\CController::$monoBrand['title']; ?> в <?= Yii::$app->session['region']['id'] == 1 ? 'Москве' : 'Санкт-Петербурге'; ?>
                        </p>
                        <p><i class="fa fa-calendar-o" aria-hidden="true"></i> Сервисный центр работает без выходных и праздников</p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Адрес: <?= Yii::$app->session['region']['id'] == 1 ? 'г. Москва, м. Электрозаводская, Барабанный переулок, 4с4' : 'г. Санкт-Петербург, м. Чкаловская, Большая Разночинная ул., 14'; ?></p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> Тел.: <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a></p>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> с 09:00 до 21:00</p>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <ul class="footer-menu">
                            <li><a href="/about">О нас</a></li>
                            <li><a href="/prices">Прайс</a></li>
                            <li><a href="/models">Модели</a></li>
                            <li class="active"><a href="/guarantee">Гарантия</a></li>
                            <li class="last"><a href="/contacts">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3 hidden-xs">
                        <ul class="footer-menu footermenu_seccol">
                            <li><a href="/ne-varit-kofe">Не варит кофе</a></li>
                            <li><a href="/ne-vidit-kofe"> Не видит кофе</a></li>
                            <li><a href="/polomka-manometra">Поломка манометра</a></li>
                            <li><a href="/net-pitaniya">Нет питания</a></li>
                            <li><a href="/protekaet-voda">Протекает вода</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <p class="getarticles_heading">Заказать звонок от мастера по кофемашинам</p>
                        <?= ofitsial\widgets\forms\Footer::widget(); ?>
                    </div>
                </div>
            </div>
            <div class="copyrightfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <span>©  2008-<?= date('Y'); ?> Ремонт кофемашин <?= app\components\CController::$monoBrand['title']; ?>. Все права защищены. <br>Информация на сайте не является публичной офертой. <a href="/privacy-policy"> Политика конфиденциальности.</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.3.0/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/sweetalert2/6.3.0/sweetalert2.min.js"></script> 
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.activeForm.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery.inputmask.bundle.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.validation.js"></script>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme']; ?>/js/main.js"></script>
        <script>
        $("form").each(function () {
            $(this).append("<input type=\"hidden\" name=\"h1\" value=\"" + $("h1").text() + "\">")
        });
        </script>
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