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
<?php \app\widgets\other\Replace::begin(); ?>
<!DOCTYPE html>
<html>   
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/main.css?v=15">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/main2.css?v=15">        
        <link type="text/css" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/jquery-ui.css" rel="stylesheet" media="all" />
        <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/<?= $siteConfig['id']; ?>.css?v=15" rel="stylesheet">
    </head>
    <body role="document">
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
        <div id="top-bar" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar">
                    <div class="col-xs-2">
                        <div class="navbar-logo"><a href="/"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?= $siteConfig['id']; ?>/logo2.svg"></a></div>
                    </div>
                    <div class="col-xs-7">
                        <div class="navbar-top-form">
                            <?= coffeHelp\widgets\forms\HeadForm::widget(); ?>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="navbar-phone">
                            <span class="phone_big_top">
                                <nobr>
                                    <a class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'phone-c-spb' : 'phone-c-msk' ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= strip_tags(Yii::$app->session['region']['phone']); ?></a>
                                </nobr>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="<?php if ($isHome): ?>bg<?php endif; ?> inner-bg" >
            <div class="sliderbg">
                <section class="header 1">
                    <div class="row row_top_menu">
                        <div class="container">
                            <ul class="top_menu_big">
                                <li><a href="/price">Услуги и цены</a></li>
                                <li><a href="/about">О компании</a></li>
                                <li><a href="/warranty">Гарантия</a></li>
                                <li><a href="/error-code">Коды ошибок</a></li>
                                <li><a href="/repair-status">Статус ремонта</a></li>
                                <li><a href="/contacts">Контакты</a></li>
                                <?php if ($siteConfig['id'] == 51) : ?>
                                    <li class="vk">
                                        <a target="_blank" href="https://vk.com/remontkofemashin_coffeehelp">Мы в: <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/vk.svg" alt=""></a>
                                        <a target="_blank" href="https://www.instagram.com/coffee_help/"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/instagram.svg" alt=""></a>
                                        <a target="_blank" href="https://t.me/coffee_help"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/telegram.svg" alt=""></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                            <div class="top_menu_right_info"> Ваш регион: <?= Yii::$app->session['region']['title']; ?></div>
                            <div id="nav-icon3">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row row_header_line">
                            <div class="logo"> <a href="/"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?= $siteConfig['id']; ?>/logo.svg?=v2"></a></div>
                            <div class="top-menu-container">
                                <div class="clock-work l"> Работаем без перерывов и <br> выходных <span>с 9:00 до 20:00</span></div>
                                <div class="clock-work r checkin-visit"> Выезжаем по <?= Yii::$app->session['region']['id'] == 1 ? 'всей Москве <br> и Московской области' : 'всему Санкт-Петербургу <br> и Ленинградской области'; ?></div>
                            </div>
                            <div class="header-ordering">
                                <div class="phone_block_two"> 
                                    <span class="text">Бесплатный выезд мастера</span> 
                                    <span class="phone">
                                        <a class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'phone-h-spb' : 'phone-h-msk' ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>">
                                            <?= Yii::$app->session['region']['phone']; ?>
                                        </a>                                            
                                    </span>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container theme-showcase" role="main">
                    <section class="second_navigation" style="height: 78px;">
                        <div class="navbar navbar-second">
                            <div class="navbar">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a class="coffee-machine" href="#">Типы кофемашин</a>
                                        <ul>
                                            <li><a href="/remont-ehspresso-kombaynov">Эспрессо-комбайны</a></li>
                                            <li><a href="/remont-avtomaticheskih-kofemashin">Автоматические</a></li>
                                            <li><a href="/remont-poluavtomaticheskih-kofemashin">Полуавтоматические</a></li>
                                            <li><a href="/remont-rozhkovih-kofemashin">Рожковые</a></li>
                                            <li><a href="/remont-kapelnih-kofemashin">Капельные</a></li>
                                            <li><a href="/remont-porcionnih-kofemashin">Порционные</a></li>
                                            <li><a href="/remont-kapsulnih-kofemashin">Капсульные</a></li>
                                            <li><a href="/remont-chaldovih-kofemashin">Чалдовые</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="lists" href="/brands">Все бренды</a></li>
                                    <li><a class="tools" href="/price">Услуги и цены</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="order-now"> <a href="#call-modal-form">Заказать ремонт</a></li>
                                </ul>
                            </div>
                        </div>
                    </section>              
                </div>
            </div>
        </div>
        <?= $content; ?>
        <footer class="bs-docs-footer" role="contentinfo">
            <div class="container">
                <div class="row">
                    <div class="col-xs-5">
                        <h5>Ремонт кофемашин</h5>
                        <div class="row">
                            <div class="col-xs-6">
                                <ul>
                                    <li><a href="/remont-delonghi">Ремонт кофемашин Delonghi</a></li>
                                    <li><a href="/remont-la-cimbali">Ремонт кофемашин La Cimbali</a></li>
                                    <li><a href="/remont-kofemashin-jura">Ремонт кофемашин Jura</a></li>
                                    <li><a href="/remont-bosch">Ремонт кофемашин Bosch</a></li>
                                    <li><a href="/remont-saeco">Ремонт кофемашин Saeco</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-6">
                                <ul>
                                    <li><a href="/remont-krups">Ремонт кофемашин Krups</a></li>
                                    <li><a href="/remont-gaggia">Ремонт кофемашин Gaggia</a></li>
                                    <li><a href="/remont-nivona">Ремонт кофемашин Nivona</a></li>
                                    <li><a href="/remont-schaerer">Ремонт кофемашин Schaerer</a></li>
                                    <li><a href="/remont-franke">Ремонт кофемашин Franke</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <h5>О компании</h5>
                        <div class="row">
                            <div class="col-xs-6">
                                <ul>
                                    <li><a href="/faq">Вопросы ответы</a></li>
                                    <li><a href="/diagnostics">Диагностика</a></li>
                                    <li><a href="/fast-repairs">Срочный ремонт</a></li>
                                    <li><a href="/shipping">Доставка</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-6">
                                <ul>
                                    <li><a href="/reviews">Отзывы</a></li>
                                    <li><a href="/payment">Оплата</a></li>
                                    <li><a href="/politics">Пользовательское соглашение</a></li>
                                    <li><a href="/contacts">Контакты</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <h5>Контактная информация</h5>
                        <p class="footer-adress-b"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/<?php if ($siteConfig['id'] == 53): ?>j/<?php endif; ?>icons/mark.png" style="margin-right: 15px; margin-bottom: 15px; float: left;"><?php if ($siteConfig['id'] == 53): ?>г. Санкт-Петербург, м. Озерки, проспект Энгельса, д. 115<?php else: ?>г. Москва, м. Китай-город, Охотный ряд, ул. Ильинка 4.<?php endif; ?></p>
                        <div class="footer-adress" style="display:none;">
                            <p>1. г.Москва, Профсоюзная улица, 3</p>
                            <p>2. г.Москва, улица Ленинская Слобода, 19с7</p>
                            <p>3. г.Москва, Новоостаповская улица, 5с14</p>
                            <p>4. г.Москва, 8-я улица Соколиной горы, 26</p>
                            <p>5. г.Москва, улица Касаткина, 11</p>
                            <p>6. г.Москва, 4-й Лихачевский переулок, 2</p>
                            <p>7. г.Москва, улица Свободы, 31</p>
                            <p>8. г.Москва, Гродненская улица, 5А</p>
                            <p>9. г.Москва, Смоленская Сенная площадь, 27</p>
                            <p>10. г.Москва, Валовая улица, 21</p>
                        </div>
                        <div class="footer-phone-cont">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/<?php if ($siteConfig['id'] == 53): ?>j/<?php endif; ?>icons/phone_footer.png" style="margin-right: 15px;"/>
                            <div class="footer-phone">
                                <nobr> <a class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'phone-c-spb' : 'phone-c-msk' ?>" href="#"><?= strip_tags(Yii::$app->session['region']['phone']); ?></a></nobr>
                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row service-info">Сервисный центр - <?= ucfirst($_SERVER['HTTP_HOST']) ?> 2018 © - Ремонт и обслуживание всех брендов кофемашин</div>
            </div>
        </div>
        <div id="caller_widget" data-toggle="modal" data-target="#callerModal">
            <div id="caller_widget_dribble">
                <div id="caller_widget_fade"></div>
                <div id="caller_widget_button">
                    <div id="caller_widget_button_icon"></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="callerModal" role="dialog">
            <div class="modal-dialog caller">
                <div class="modal-content">
                    <div id="caller_close"></div>
                    <div class="modal-body">
                        <?= coffeHelp\widgets\forms\PopupForm::widget(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade in" id="thenks-w" role="dialog" style="padding-right: 17px;">
            <div class="modal-dialog caller">
                <div class="modal-content">
                    <div id="caller_closes" class="caller_closes"></div>
                    <div class="modal-body">
                        <div class="h3">Спасибо за отправленную заявку!</div>
                        <p>Наш оператор перезвонит Вам за <span id="minut"></span> минуты, <span id="sikund"></span> секунд!</p>
                    </div>
                </div>
            </div>
        </div>
        <?= coffeHelp\widgets\forms\FooterForm::widget(); ?>
        <div class="remodal" data-remodal-id="call-modal-success">
            <div class="modal-content">
                <p class="modal-title">Ваша заявка принята</p>
                <p class="modal-desc">Мы перезвоним вам в течение 1 минуты</p>
                <input type="submit" data-remodal-action="confirm" class="call-master remodal-confirm" value="Закрыть"> <img data-remodal-action="close" class="remodal-close" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/close_modal.png"/>
            </div>
        </div>
        <div class="remodal" data-remodal-id="call-modal-error">
            <div class="modal-content">
                <p class="modal-title">Ошибка</p>
                <p class="modal-desc">Проверьте введенный Вами номер. Возможно, вы уже оставили заявку с этого номера.</p>
                <input type="submit" data-remodal-action="confirm" class="call-master remodal-confirm" value="Закрыть"> <img data-remodal-action="close" class="remodal-close" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/close_modal.png"/>
            </div>
        </div>
    </footer>
    <?= !empty($js['content']) ? $js['content'] : ''; ?>
    <?php
    $roistatid = '0b46e09f230f4526b38858e48d27e631';
    $roistat_n = '19,20';
    if (isset($siteConfig['spb'])) {
        $roistatid = '3fe43ebb635b2cc4c8a26b776759d3af';
        $roistat_n = '25,26';
    }
    ?>
    <script>window.roistatCalltrackingScripts = [<?= $roistat_n; ?>];
        (function (w, d, s, h, id) {
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
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery-1.11.3.min.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.activeForm.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery.inputmask.bundle.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.validation.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery-ui.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/main.js?v=8" async></script>
<?php
if (Yii::$app->session->getFlash('success')) {
    echo '<script>$(".popup .finish, .popup").addClass("active");</script>';
}
?>
<script>$("form").each(function () {
            $(this).append("<input type=\"hidden\" name=\"h1\" value=\"" + $("h1").text() + "\">")
        });</script>
<style>
    .msg {
        background: #fff;
        font-family: "Arial", Arial, Helvetica;
        position: fixed;
        left: 20px;
        bottom: 20px;
        width: 300px;
        box-shadow: 0px 0px 0px 0px grey;
        border-radius: 10px;
        border: 1px solid #A9A9A9;
        padding: 5px;
        color: #666666;
        z-index: 9999;
    }
    .comment {
        border-radius: 10px;
        border: 1px solid #A9A9A9;
        width: 288px;
        height: 195px;
        overflow-y: scroll;
        box-shadow: 0 0 0px grey inset;
        margin: 5px 0 5px 0;
        padding: 5px;
        background: #fff;
    }
    .send {
        background: #EFEFEF;
        font-family: "Arial", Arial, Helvetica;
        width: 250px;
        border-radius: 10px;
        border: 1px solid grey;
        box-shadow: 0px 0px 0px 0px grey;
        padding: 5px;
        color: #666666;
        margin: 5px;
    }
    #newmsg {
        width: 98%;
        resize: none;
        margin: 5px 0 5px 0;
        font-family: "Arial", Arial, Helvetica;
        background: #F8F7F2;
    }
    #name {
        width: 98%;
        resize: none;
        margin: 5px 0 5px 0;
        font-family: "Arial", Arial, Helvetica;
        background: #F8F7F2;
        border: 1px solid #A9A9A9;
    }
    .yvedw {} 
    .yved {
        position: fixed;
        left: 20px;
        top: 70px;
        width: 300px;
        vertical-align: middle;
        height: 120px;
        color: white;
        padding: 15px;
        font-size: 15px;
        line-height: 90px;
        border-radius: 10px;
        display: none;
        z-index: 9999;
    }
    .yved:hover {
        color: #fff;
    }
    .yvedi {
        float: left;
        width: 50px!important;
        margin-right: 10px;
        margin-top: 20px;
    }
    .yvedt {
        width: 208px;
        line-height: normal;
        display: inline-block;
        vertical-align: middle;
    }
    .yvedf1 {
        background-color: #363636;
    }
    .yvedf2 {
        background-color: #CD5555;
    }
    .yvedvt {
        float: left;
        height: 90px;
        line-height: 90px;
        display: inline-block;
        vertical-align: middle;
    }
    @media (max-width: 600px) {
        .yved {
            padding: 10px;
            font-size: 12px;
            line-height: 50px;
            height: 75px;
        }
        .yvedi {
            margin-top: 0px;
        }
        .yvedvt {
            height: 50px;
            line-height: 50px;
        }
    }
</style>
<div class="yvedw">
    <a href="#call-modal-form" class="yved yvedf1" style="display: none;">
        <img src="http://prr5.ru/img/skript/call.png" alt="" class="yvedi">
        <div class="yvedvt">
            <div class="yvedt">Александр, оставил заявку на обратный звонок</div>
        </div>
    </a>
    <a href="#call-modal-form" class="yved yvedf2" style="display: none;">
        <img src="http://prr5.ru/img/skript/bayme.png" alt="" class="yvedi">
        <div class="yvedvt">
            <div class="yvedt">Карина, оставила заявку на замену жерновов в кофемашине Delonghi</div>
        </div>
    </a>
    <a href="#call-modal-form" class="yved yvedf1" style="display: none;">
        <img src="http://prr5.ru/img/skript/call.png" alt="" class="yvedi">
        <div class="yvedvt">
            <div class="yvedt">Дмитрий, заказал услугу комплексной профилактики</div>
        </div>
    </a>
    <a href="#call-modal-form" class="yved yvedf1" style="display: none;">
        <img src="http://prr5.ru/img/skript/bayme.png" alt="" class="yvedi">
        <div class="yvedvt">
            <div class="yvedt">Андрей, сэкономил 2 850 руб по акции</div>
        </div>
    </a>
    <a href="#call-modal-form" class="yved yvedf1" style="display: none;">
        <img src="http://prr5.ru/img/skript/bayme.png" alt="" class="yvedi">
        <div class="yvedvt">
            <div class="yvedt">Олег, получил премиумную цену на ремонт кофемолки</div>
        </div>
    </a>
    <a href="#call-modal-form" class="yved yvedf1" style="display: none;">
        <img src="http://prr5.ru/img/skript/call.png" alt="" class="yvedi">
        <div class="yvedvt">
            <div class="yvedt">Марат Беляков, оформил заказ на ремонт кофемашины Franke</div>
        </div>
    </a>
    <a href="#call-modal-form" class="yved yvedf1" style="display: none;">
        <img src="http://prr5.ru/img/skript/call2.png" alt="" class="yvedi">
        <div class="yvedvt">
            <div class="yvedt">Лариса, заказала доставку кофемашины до сервисного центра</div>
        </div>
    </a>
    <a href="#call-modal-form" class="yved yvedf2" style="display: none;">
        <img src="http://prr5.ru/img/skript/call2.png" alt="" class="yvedi">
        <div class="yvedvt">
            <div class="yvedt">Дмитрий, оформил заказ на устранение неисправности</div>
        </div>
    </a>
    <a href="#call-modal-form" class="yved yvedf1" style="display: none;">
        <img src="http://prr5.ru/img/skript/call.png" alt="" class="yvedi">
        <div class="yvedvt">
            <div class="yvedt">Алексей, получил скидку в размере 35%</div>
        </div>
    </a>
    <a href="#call-modal-form" class="yved yvedf1">
        <img src="http://prr5.ru/img/skript/call2.png" alt="" class="yvedi">
        <div class="yvedvt">
            <div class="yvedt">Виктор, оставил заявку на консультацию</div>
        </div>
    </a>
    <a href="#call-modal-form" class="yved yvedf1">
        <img src="http://prr5.ru/img/skript/call.png" alt="" class="yvedi">
        <div class="yvedvt">
            <div class="yvedt">Артур, получил скидку на ремонт кофемашины Faema</div>
        </div>
    </a>
    <a href="#call-modal-form" class="yved yvedf1">
        <img src="http://steelrage.woow24.ru/steelrage/yved/yico.png" alt="" class="yvedi">
        <div class="yvedvt">
            <div class="yvedt">Снежана, оставила заявку на обратный звонок</div>
        </div>
    </a>
</div>
<script>
    $(document).ready(function () {

        $('body').on("keyup", "input[type=tel]", function () {
            var v = $(this).val().substring(4, 6);
            if ($(this).val().length >= 18 && $(this).val().indexOf("_") == -1) {
                $.post("/order-send", {phone: $(this).val(), title: $("h1").text()});
            }
        });

        var i = 0;

        function yved() {
            i = 1;
            $('.yved:nth-child(' + i + ')').fadeIn(500).delay(4000).fadeOut(500);
        }
        setTimeout(function () {
            setInterval(
                    function () {
                        i = i + 1;
                        if (i > 12)
                            i = 1;
                        $('.yved:nth-child(' + i + ')').fadeIn(1000).delay(4000).fadeOut(300);
                    }, 18000);
            yved();
        }, 10000);
    });
</script>
<?php
if (Yii::$app->session->getFlash('success') || Yii::$app->session->getFlash('review')) {
    echo '<script>$("#thenks-w").show();</script>';
}
?>
<?php $this->endBody() ?>    
<?php $this->endPage() ?>
<?php \app\widgets\other\Replace::end(); ?>