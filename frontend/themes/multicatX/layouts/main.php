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
<html dir="ltr" lang="ru">    
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/stylesheet.css?=v4" />
        <link rel="stylesheet" type="text/css" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/owl.carousel.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/owl.theme.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/jquery-ui-1.8.16.custom.css" />
        <link rel="stylesheet" type="text/css" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/colors.css?=v2" />
    </head>
    <body class="<?= app\components\CController::$monoBrand['url']; ?> no-transition">
        <?php $this->beginBody() ?>
        <div id="header" class="no-transition">
            <div class="top-nav colorbg">
                <div class="inner_container">
                    <a href="/kontakty">КОНТАКТЫ</a>
                    <a class="mini-form" href="#">СТАТУС РЕМОНТА</a>
                    <a href="/otzyvy">ОТЗЫВЫ</a>
                    <a href="/novosti">НОВОСТИ</a>
                    <a href="/price">ПРАЙС</a>
                    <a href="/partneram">ПАРТНЕРАМ</a>
                    <a href="/garantiya">ГАРАНТИЯ</a>
                    <a href="/o-kompanii">О КОМПАНИИ</a>
                    <p><?= Yii::$app->session['region']['title']; ?></p>
                    <div class="clear"></div>
                </div>
            </div>
            <?php
            if (!Yii::$app->user->isGuest) {
                echo '<div style="float: left; z-index: 99999;position: absolute;">';
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
            <div class="main_container">
                <div id="header_second" class="inner_container">
                    <div id="logo">
                        <a href="/"><img src="<?= $assets . $siteConfig['theme'] . '/image/' . app\components\CController::$monoBrand['url']; ?>2.svg" title="" alt="" /></a>
                    </div>
                    <div id="search">
                        <div class="button-search colorbg"></div>
                        <input type="text" name="search" placeholder="Поиск по сайту" value="" />
                    </div>
                    <div id="header_callback" class="mini-form">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 525.153 525.153" style="enable-background:new 0 0 525.153 525.153;" xml:space="preserve">
                        <g>
                        <path class="colorsvg" d="M525.153,205.794V7.046h-198.77l59.649,59.67l-79.517,79.517l79.451,79.429l79.517-79.517L525.153,205.794z
                              M477.889,363.449c-35.141,0-68.883-5.58-100.392-16.017c-9.825-2.998-20.809-0.766-28.643,6.849l-61.837,61.793
                              c-79.561-40.546-144.811-105.381-185.248-185.248l61.815-62.077c7.899-7.374,10.131-18.358,7.046-28.183
                              c-10.372-31.444-16.039-65.163-16.039-100.282c0-15.536-12.647-28.183-28.096-28.183h-98.4C12.647,12.1,0,24.748,0,40.284
                              c0,263.867,213.89,477.823,477.889,477.823c15.448,0,28.074-12.604,28.074-28.096v-98.357
                              C505.984,376.119,493.337,363.449,477.889,363.449z"/>
                        </g>
                        </svg>
                        Обратный звонок
                    </div>
                    <div class="dondo-custom-position" data-module="1" style='display: none;'></div>
                    <div id="header_phone">
                        <a class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'tel_spb' : 'tel_msk' ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                        <?= str_replace([' и область'], '', Yii::$app->session['region']['title']); ?>, ежедневно 10:00-21:00    
                    </div>
                </div>
            </div>
            <?= multicatX\widgets\menu\MainMenu::widget(); ?>
        </div>
        <?= $content; ?>
        <div id="footer">
            <div class="main_container grey_container">
                <div id="footer_top" class="inner_container">
                    <div class="footer_columns">
                        <div class="footer_column_1">
                        </div>
                        <div class="footer_column_2">
                            <div class="h3">Сервисный центр</div>
                        </div>
                        <div class="footer_column_3">
                            <div class="h3">Информация</div>
                        </div>
                        <div class="footer_column_4">
                            <div class="h3" style='text-align: right;'>Контакты</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_container grey_container bordertopgrey">
                <div id="footer_bottom" class="inner_container">
                    <div class="footer_columns">
                        <div class="footer_column_1">
                            <div id="footer_logo">
                                <img src="<?= $assets . $siteConfig['theme'] . '/image/' . app\components\CController::$monoBrand['url']; ?>2.svg" title="" alt="">
                            </div>
                            <div class="colortext colorborder mini-form" id="footer_callback">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 525.153 525.153" style="enable-background:new 0 0 525.153 525.153;" xml:space="preserve">
                                <g>
                                <path class="colorsvg" d="M525.153,205.794V7.046h-198.77l59.649,59.67l-79.517,79.517l79.451,79.429l79.517-79.517L525.153,205.794z
                                      M477.889,363.449c-35.141,0-68.883-5.58-100.392-16.017c-9.825-2.998-20.809-0.766-28.643,6.849l-61.837,61.793
                                      c-79.561-40.546-144.811-105.381-185.248-185.248l61.815-62.077c7.899-7.374,10.131-18.358,7.046-28.183
                                      c-10.372-31.444-16.039-65.163-16.039-100.282c0-15.536-12.647-28.183-28.096-28.183h-98.4C12.647,12.1,0,24.748,0,40.284
                                      c0,263.867,213.89,477.823,477.889,477.823c15.448,0,28.074-12.604,28.074-28.096v-98.357
                                      C505.984,376.119,493.337,363.449,477.889,363.449z"/>
                                </g>
                                </svg>
                                Обратный звонок
                            </div>
                        </div>
                        <div class="footer_column_2">
                            <ul>
                                <li><a href="/remont-kofemashin/ne-delaet-kofe">Не делает кофе </a></li>
                                <li><a href="/remont-kofemashin/ne-vklyuchaetsya">Не включается</a></li>
                                <li><a href="/remont-kofemashin/protekaet">Протекает</a></li>
                                <li><a href="/remont-kofemashin/plokho-techet-kofe">Плохо течет кофе</a></li>
                                <li><a href="/ne-podaet-vodu">Не подаёт воду</a></li>
                            </ul>
                        </div>
                        <div class="footer_column_3">
                            <ul>
                                <li><a href="/samovivoz">Самовывоз</a></li>
                                <li><a href="/dostavka">Доставка</a></li>
                                <li><a href="/oplata">Оплата</a></li>
                                <li><a href="/vakansii">Вакансии</a></li>
                                <li><a href="/personal_info">Персональные данные</a></li>                                
                            </ul>
                        </div>
                        <div class="footer_column_4">
                            <div id="footer_phone">
                                <a class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'tel_spb' : 'tel_msk' ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                                Предложение не является публичной офертой<br />
                                <br />      <?= Yii::$app->session['region']['id'] == 1 ? 'г. Москва, Рябиновая ул., 43, корп. 2  ' : 'г. Санкт-Петербург, улица Ярослава Гашека, 6'; ?>
                            </div>
                            
                            <div id="footer_share">
                                <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                                <script src="//yastatic.net/share2/share.js"></script>
                                <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir"></div>
                            </div>
                        </div>
                    </div>
                    <div id="powered">
                        <div id="powered_left">&#169; <span class="colortext">Сервисный центр <?= $_SERVER['SERVER_NAME']; ?></span>, 2014–<?= date('Y'); ?></div>
                        <div id="powered_right"><p class="colortext">Ремонт кофемашин качественно и с гарантией!</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="call-animation" onclick="window.roistatLeadHunterShow();">
            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMi4wMDYgNTEyLjAwNiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyLjAwNiA1MTIuMDA2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjEyOHB4IiBoZWlnaHQ9IjEyOHB4Ij4KPGc+Cgk8Zz4KCQk8Zz4KCQkJPHBhdGggZD0iTTUwMi4wNSw0MDcuMTI3bC01Ni43NjEtMzcuODQ0TDM5NC44MywzMzUuNjVjLTkuNzM4LTYuNDc5LTIyLjgyNS00LjM1NS0zMC4wMTQsNC44NzNsLTMxLjIyMyw0MC4xMzkgICAgIGMtNi43MDcsOC43MS0xOC43NzIsMTEuMjEzLTI4LjM5LDUuODg4Yy0yMS4xODYtMTEuNzg1LTQ2LjIzOS0yMi44ODEtMTAxLjUxNy03OC4yM2MtNTUuMjc4LTU1LjM0OS02Ni40NDUtODAuMzMxLTc4LjIzLTEwMS41MTcgICAgIGMtNS4zMjUtOS42MTgtMi44MjItMjEuNjgzLDUuODg4LTI4LjM4OWw0MC4xMzktMzEuMjIzYzkuMjI3LTcuMTg4LDExLjM1Mi0yMC4yNzUsNC44NzMtMzAuMDE0bC0zMi42LTQ4LjkwNUwxMDQuODc5LDkuOTU2ICAgICBDOTguMjYyLDAuMDMsODUuMDE2LTIuOTUsNzQuNzg2LDMuMTg1TDI5Ljk1LDMwLjA4M0MxNy44MzMsMzcuMjIyLDguOTI2LDQ4Ljc1LDUuMDc0LDYyLjI3NyAgICAgQy03LjE4NywxMDYuOTgtOS42NTksMjA1LjU5MywxNDguMzgxLDM2My42MzNzMjU2LjY0NCwxNTUuNTYsMzAxLjM0NywxNDMuMjk4YzEzLjUyNy0zLjg1MSwyNS4wNTUtMTIuNzU4LDMyLjE5NC0yNC44NzYgICAgIGwyNi44OTgtNDQuODM1QzUxNC45NTYsNDI2Ljk4OSw1MTEuOTc2LDQxMy43NDQsNTAyLjA1LDQwNy4xMjd6IiBmaWxsPSIjRkZGRkZGIi8+CgkJCTxwYXRoIGQ9Ik0yOTEuMzA5LDc5LjQ0N2M4Mi44NDIsMC4wOTIsMTQ5Ljk3Nyw2Ny4yMjYsMTUwLjA2OSwxNTAuMDY5YzAsNC44NzUsMy45NTIsOC44MjgsOC44MjgsOC44MjggICAgIGM0Ljg3NSwwLDguODI4LTMuOTUyLDguODI4LTguODI4Yy0wLjEwMi05Mi41ODktNzUuMTM1LTE2Ny42MjItMTY3LjcyNC0xNjcuNzI0Yy00Ljg3NSwwLTguODI4LDMuOTUyLTguODI4LDguODI4ICAgICBDMjgyLjQ4MSw3NS40OTQsMjg2LjQzMyw3OS40NDcsMjkxLjMwOSw3OS40NDd6IiBmaWxsPSIjRkZGRkZGIi8+CgkJCTxwYXRoIGQ9Ik0yOTEuMzA5LDEzMi40MTJjNTMuNjAzLDAuMDYzLDk3LjA0LDQzLjUwMSw5Ny4xMDMsOTcuMTAzYzAsNC44NzUsMy45NTIsOC44MjgsOC44MjgsOC44MjggICAgIGM0Ljg3NSwwLDguODI4LTMuOTUyLDguODI4LTguODI4Yy0wLjA3My02My4zNDktNTEuNDA5LTExNC42ODYtMTE0Ljc1OS0xMTQuNzU5Yy00Ljg3NSwwLTguODI4LDMuOTUyLTguODI4LDguODI4ICAgICBDMjgyLjQ4MSwxMjguNDYsMjg2LjQzMywxMzIuNDEyLDI5MS4zMDksMTMyLjQxMnoiIGZpbGw9IiNGRkZGRkYiLz4KCQkJPHBhdGggZD0iTTI5MS4zMDksMTg1LjM3OGMyNC4zNjUsMC4wMjksNDQuMTA5LDE5Ljc3Myw0NC4xMzgsNDQuMTM4YzAsNC44NzUsMy45NTIsOC44MjgsOC44MjgsOC44MjggICAgIGM0Ljg3NSwwLDguODI4LTMuOTUyLDguODI4LTguODI4Yy0wLjAzOS0zNC4xMTEtMjcuNjgyLTYxLjc1NC02MS43OTMtNjEuNzkzYy00Ljg3NSwwLTguODI4LDMuOTUyLTguODI4LDguODI4ICAgICBDMjgyLjQ4MSwxODEuNDI2LDI4Ni40MzMsMTg1LjM3OCwyOTEuMzA5LDE4NS4zNzh6IiBmaWxsPSIjRkZGRkZGIi8+CgkJPC9nPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
        </div>
        <div class="my-popup-form">
            <div class="form">
                <div class="closes-form"></div>
                <p class="colortext">заказать звонок</p>
                <?= multicatX\widgets\forms\Order::widget(); ?>
                <a href="/personal_info">Пользовательское соглашение</a>
            </div>
            <div class="black-close-form"></div>
        </div>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery-1.7.1.min.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery.inputmask.bundle.js"></script>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery-ui-1.8.16.custom.min.js"></script>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/particles.min.js"></script>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery.parallax.js"></script>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/common.js"></script>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/angular.min.js"></script>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/highcharts.js"></script>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/dondo_position.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.activeForm.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.validation.js"></script>
        <?php
        if (Yii::$app->session->getFlash('success')) {
            echo '<script>$(".popup.popup_request_full").addClass("popup_active");</script>';
        }
        ?>
        <script>$("form").each(function () {
                $(this).append("<input type=\"hidden\" name=\"h1\" value=\"" + $("h1").text() + "\">")
            });
        $('body').on("keyup", "input[type=tel]", function () {
            var v = $(this).val().substring(4, 6);
            if ($(this).val().length >= 18 && $(this).val().indexOf("_") == -1) {
                $.post("/order-send", {phone: $(this).val(), title: $("h1").text()});
            }
        });
        </script>
        <?php $this->endBody() ?>    
        <?php $this->endPage() ?>
        <?= !empty($js['content']) ? $js['content'] : ''; ?>
        <?php
        $roistat_n = '14,13';
        $roistatid = '7bd32523aaf002c75bde39b1293de8f0';
        if (isset($siteConfig['spb'])) {
            $roistat_n = '16,15';
            $roistatid = 'c82dc6b696b11707a3a7914541b01b98';
        }
        ?>
        <script>window.roistatCalltrackingScripts = [<?= $roistat_n; ?>];(function (w, d, s, h, id) {
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