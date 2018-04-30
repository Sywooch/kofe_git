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
                            <!--<div id="footer_scheme">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 55.017 55.017" style="enable-background:new 0 0 55.017 55.017;" xml:space="preserve">
                                <g>
                                <path class="colorsvg" d="M51.688,23.013H40.789c-0.553,0-1,0.447-1,1s0.447,1,1,1h9.102l2.899,27H2.268l3.403-27h9.118c0.553,0,1-0.447,1-1
                                      s-0.447-1-1-1H3.907L0,54.013h55.017L51.688,23.013z"/>
                                <path class="colorsvg" d="M17.48,45.164c-0.586,0.275-1.183,0.53-1.774,0.759c-0.515,0.198-0.771,0.777-0.572,1.293
                                      c0.153,0.396,0.531,0.64,0.933,0.64c0.12,0,0.242-0.021,0.36-0.067c0.635-0.245,1.275-0.519,1.903-0.813
                                      c0.5-0.234,0.715-0.83,0.48-1.33C18.576,45.145,17.984,44.928,17.48,45.164z"/>
                                <path class="colorsvg" d="M36.598,37.573c0.021,0.538,0.465,0.959,0.998,0.959c0.014,0,0.028,0,0.042-0.001l2.002-0.082
                                      c0.552-0.025,0.979-0.493,0.954-1.044c-0.025-0.553-0.504-1.004-1.045-0.954l-1.993,0.082
                                      C37.004,36.555,36.575,37.021,36.598,37.573z"/>
                                <path class="colorsvg" d="M31.427,37.171c-0.54,0.114-0.884,0.646-0.769,1.187c0.1,0.47,0.515,0.791,0.977,0.791c0.069,0,0.14-0.007,0.21-0.022
                                      c0.586-0.124,1.221-0.229,1.886-0.313c0.548-0.067,0.938-0.567,0.869-1.115c-0.068-0.549-0.562-0.95-1.115-0.869
                                      C32.762,36.919,32.069,37.034,31.427,37.171z"/>
                                <path class="colorsvg" d="M22.433,42.177c-0.514,0.388-1.045,0.761-1.58,1.107c-0.463,0.301-0.595,0.92-0.294,1.384
                                      c0.191,0.295,0.513,0.455,0.84,0.455c0.187,0,0.375-0.052,0.544-0.161c0.573-0.372,1.144-0.772,1.695-1.188
                                      c0.44-0.333,0.528-0.96,0.196-1.401C23.501,41.936,22.876,41.845,22.433,42.177z"/>
                                <path class="colorsvg" d="M9.994,48.842c0.216,0.057,0.436,0.098,0.653,0.124c0.256,0.031,0.512,0.047,0.769,0.047c0.312,0,0.626-0.022,0.939-0.062
                                      c0.548-0.069,0.937-0.569,0.867-1.117c-0.068-0.548-0.566-0.933-1.117-0.867c-0.403,0.052-0.811,0.064-1.215,0.015
                                      c-0.133-0.017-0.265-0.042-0.396-0.075c-0.533-0.143-1.08,0.183-1.218,0.718C9.138,48.159,9.459,48.705,9.994,48.842z"/>
                                <path class="colorsvg" d="M46.688,32.763c-0.164,0.527,0.132,1.088,0.659,1.251c0.099,0.03,0.198,0.045,0.296,0.045c0.427,0,0.822-0.275,0.955-0.704
                                      c0.099-0.317,0.16-0.64,0.183-0.964c0.005-0.083,0.008-0.166,0.008-0.25c0-0.467-0.086-0.935-0.255-1.39
                                      c-0.192-0.519-0.771-0.781-1.285-0.59c-0.519,0.192-0.782,0.768-0.59,1.285c0.086,0.232,0.13,0.466,0.13,0.694l-0.004,0.116
                                      C46.774,32.422,46.741,32.592,46.688,32.763z"/>
                                <path class="colorsvg" d="M10.201,41c0.161,0,0.324-0.039,0.476-0.121c0.29-0.157,0.597-0.255,0.913-0.289c0.135-0.016,0.273-0.016,0.406,0.002
                                      c0.563,0.07,1.05-0.314,1.122-0.86c0.072-0.548-0.313-1.05-0.86-1.122c-0.298-0.04-0.601-0.041-0.891-0.008
                                      c-0.572,0.063-1.126,0.238-1.644,0.52c-0.485,0.264-0.666,0.87-0.402,1.355C9.502,40.811,9.846,41,10.201,41z"/>
                                <path class="colorsvg" d="M43.373,36.109c-0.541,0.111-0.889,0.641-0.777,1.182c0.098,0.473,0.514,0.798,0.979,0.798
                                      c0.066,0,0.135-0.007,0.203-0.021c0.844-0.174,1.528-0.451,2.072-0.835c0.059-0.039,0.114-0.08,0.169-0.122
                                      c0.436-0.339,0.479-0.941,0.14-1.378c-0.337-0.435-1.002-0.49-1.438-0.149C44.379,35.823,43.951,35.99,43.373,36.109z"/>
                                <path class="colorsvg" d="M8.86,43.401c0.145-0.533-0.171-1.082-0.704-1.226c-0.529-0.148-1.082,0.169-1.226,0.704
                                      c-0.126,0.464-0.201,0.938-0.225,1.406C6.7,44.4,6.697,44.516,6.697,44.632c0,0.197,0.009,0.395,0.028,0.592
                                      c0.053,0.515,0.487,0.898,0.994,0.898c0.033,0,0.067-0.002,0.103-0.005c0.549-0.057,0.949-0.547,0.894-1.097
                                      c-0.014-0.129-0.019-0.26-0.019-0.389c0-0.083,0.003-0.166,0.007-0.248C8.72,44.058,8.772,43.727,8.86,43.401z"/>
                                <path class="colorsvg" d="M44.698,27.81c-0.789-0.106-1.607-0.04-2.386,0.18c-0.532,0.149-0.841,0.702-0.69,1.233
                                      c0.124,0.441,0.525,0.729,0.961,0.729c0.091,0,0.182-0.012,0.272-0.038c0.517-0.145,1.055-0.19,1.575-0.121
                                      c0.562,0.073,1.052-0.311,1.125-0.857C45.629,28.387,45.245,27.884,44.698,27.81z"/>
                                <path class="colorsvg" d="M26.655,38.968c-0.147,0.087-0.307,0.165-0.447,0.256c-0.219,0.142-0.432,0.29-0.641,0.441
                                      c-0.446,0.325-0.545,0.951-0.22,1.397c0.196,0.269,0.501,0.411,0.81,0.411c0.204,0,0.41-0.063,0.588-0.191
                                      c0.18-0.132,0.363-0.259,0.552-0.382c0.316-0.205,0.656-0.399,1.01-0.577c0.47-0.236,0.661-0.792,0.464-1.271
                                      c0.008-0.008,0.018-0.014,0.026-0.023c1.809-1.916,7.905-9.096,10.429-21.058c0.512-2.426,0.627-4.754,0.342-6.918
                                      c-0.86-6.575-4.945-10.051-11.813-10.051c-6.866,0-10.951,3.476-11.813,10.051c-0.284,2.166-0.169,4.493,0.343,6.918
                                      C18.784,29.821,24.788,36.975,26.655,38.968z M27.755,5.233c4.051,0,7.346,3.295,7.346,7.346s-3.295,7.346-7.346,7.346
                                      s-7.346-3.295-7.346-7.346S23.704,5.233,27.755,5.233z"/>
                                </g>
                                </svg>
                                <a href="#">Схема проезда</a>
                            </div>-->
                            <div id="footer_share">
                                <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                                <script src="//yastatic.net/share2/share.js"></script>
                                <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir"></div>
                            </div>
                        </div>
                    </div>
                    <div id="powered">
                        <div id="powered_left">&#169; <span class="colortext">Сервисный центр <?= $_SERVER['SERVER_NAME']; ?></span>, 2014–<?= date('Y'); ?></div>
                        <div id="powered_right"><p class="colortext">Ремонт бытовой техники качественно и с гарантией!</p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-popup-form">
            <div class="form">
                <div class="closes-form"></div>
                <p class="colortext">заказать звонок</p>
                <?= multicatX\widgets\forms\Order::widget(); ?>
                <a href="#">Пользовательское соглашение</a>
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
            });</script>
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