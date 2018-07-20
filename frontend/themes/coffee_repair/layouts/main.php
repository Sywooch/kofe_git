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
<html lang="ru-RU">
    <head>
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8">
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="shortcut icon" href="<?= $assets . $siteConfig['theme'] . '/'; ?>favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>assets/components/minifyx/cache/styles_737d4a9c58.min.css" type="text/css" />
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/style.css" type="text/css" />
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/add.css" type="text/css" />
    </head>
    <body class="other">
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
        <header class="header">
            <div class="page-wrap clearfix">
                <a href="/" alt="Ремонт кофемашин">
                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/logo-coffee.svg" alt="Ремонт кофемашин" class="logo">
                </a>
                <div class="menu_link"></div>
                <div class="header_left">
                    <div class="free-masters">
                        <span class="free-masters__count">2</span>
                        <span class="free-masters__text">Свободных мастера</span>
                    </div>
                    <div class="busy-masters">
                        <span class="free-masters__count">9</span>
                        <span class="free-masters__text">Мастеров на выезде</span>
                    </div>
                </div>
                <div class="header__right">
                    <div class="on_line">
                        <span class="line"><span>2<i></i></span>
                            свободные линии</span>
                        <span class="zvn">Звоните, сейчас!</span>
                    </div>
                    <div class="time-work-telephone">
                        <span class="time-work">c 08.30 до 22.00</span>
                        <span class="telephone"><a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a></span>
                    </div>
                    <span href="#zvonok" class="zvonok inline">Обратный звонок</span>
                </div>
            </div>
        </header>
        <div class="menu menu_shadow">
            <div class="page-wrap">
                <nav>
                    <a href="#" title="#" alt="#">Прайс-Лист</a>
                    <a href="#" title="#" alt="#">Все бренды</a>
                    <a href="#" title="#" alt="#">О компании</a>
                    <a href="#" title="#" alt="#">Диагностика</a>
                    <a href="#" title="#" alt="#">Гарантия</a>
                    <a href="#" title="#" alt="#">Контакты</a>
                </nav>
            </div>
        </div>
        <?= $content; ?>
        <?= coffee_repair\widgets\forms\Footer::widget(); ?>
        <footer class="footer">
            <div class="top_footer">
                <div class="page-wrap">
                    <a href="/" alt="Ремонт кофемашин">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/logo-coffee.svg" alt="Ремонт кофемашин" class="logo">
                    </a>
                    <span class="adress">Адрес: г. Москва, Октябрьская улица, дом 9/1</span>
                    <div class="header__right">
                        <div class="on_line">
                            <span class="line"><span>2<i></i></span>
                                свободные линии</span>
                        </div>
                        <div class="time-work-telephone">
                            <span class="time-work">c 08.30 до 22.00</span>
                            <span class="telephone"><a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-wrap clearfix">
                <div class="otremotirovanno">
                    <span class="otremotirovanno_count">1671</span>
                    <span class="otremotirovanno_text">Отремонтированных кофемашин</span>
                </div>
                <div class="free-masters">
                    <img class="free-masters__icon" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/icons/operator.png" alt="Иконка оператора">
                    <span class="free-masters__count">2</span>
                    <span class="free-masters__text">Свободных мастера</span>
                </div>
                <div class="busy-masters">
                    <span class="free-masters__count">9</span>
                    <span class="free-masters__text">Мастеров на выезде:</span>
                </div>
                <div class="online_stat">
                    <div class="line">Москва: <span>ЦАО: 2 | ЮВАО: 1 | САО: 2 | ВАО: 2</span></div>
                    <div class="line">Область: <span>Зеленоград: 1 |</span> <span>Одинцово: 1</span></div>
                </div>
                <span href="#zvonok" class="zvonok inline">Обратный звонок</span>
            </div>
        </footer>
        <?= coffee_repair\widgets\forms\Popup::widget(); ?>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>assets/components/minifyx/cache/scripts_d6ee746bd1.min.js"></script>
<!--        <script>
            if ($("#player_1").length > 0) {
                flowplayer('#player_1', {
                    aspectRatio: "16:9",
                    splash: 'img/op-splash.png',
                    clip: {
                        sources: [
                            {type: 'video/mp4', src: '/videos/remont_kofemashin.mp4'}
                        ]
                    }
                });
            }
        </script>-->
    </body>
</html>