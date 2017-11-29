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
<html>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ремонт кофемашин в Москве</title>   
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/main.css">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/main2.css">
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/main.js" async></script>
        <link type="text/css" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/jquery-ui.css" rel="stylesheet" media="all" />
    </head>
    <body role="document">
        <div id="top-bar" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar">
                    <div class="col-xs-2">
                       <div class="navbar-logo"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/logo-navbar.png"></div>
                    </div>
                    <div class="col-xs-7">
                        <div class="navbar-top-form">
                            <form>
                                <div class="col-xs-3"> <span style="color: #4c5052; font-size: 13px;">Обратный звонок</span></div>
                                <div class="col-xs-5"> <input id="phone_number_top_nav" type="text" class="form-control phone text" placeholder="Номер телефона" aria-describedby="sizing-addon1" name="phone"> <button type="button" class="btn btn-small call-master">></button></div>
                                <div class="col-xs-4"> <span style="color: #b4a588; font-size: 13px;">Перезвоним за минуту!</span></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="navbar-phone">
                            <span class="phone_big_top">
                                <nobr>
                                    <a class="phone-c" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                                </nobr>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg">
            <div class="sliderbg">
                <section class="header 1">
                    <div class="row row_top_menu">
                        <div class="container">
                            <ul class="top_menu_big">
                                <li><a href="/uslugi-i-ceny">Услуги и цены</a></li>
                                <li><a href="/o-kompanii">О компании</a></li>
                                <li><a href="/garantiya">Гарантия</a></li>
                                <li><a href="/kontakty">Контакты</a></li>
                            </ul>
                            <div class="top_menu_right_info"> Ваш регион: <?= Yii::$app->session['region']['title']; ?></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row row_header_line">
                            <div class="logo"> <a href="/"></a></div>
                            <div class="top-menu-container">
                                <div class="clock-work-conteiner">
                                    <div class="clock-work l"> Работаем без перерывов и выходных<br> <span>с 7:00 до 22:00</span></div>
                                    <div class="clock-work r checkin-visit"> Выезжаем по всей Москве<br> и до 30 км от МКАД.</div>
                                </div>
                            </div>
                            <div class="header-ordering">
                                <div class="phone_block_two"> 
                                    <span class="text">Бесплатный выезд мастера</span> 
                                    <span class="phone">
                                        <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>">
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
                            <div class="container">
                                <div class="navbar">
                                    <ul class="nav navbar-nav">
                                        <li><a class="coffee-machine" href="#">Типы кофемашин</a></li>
                                        <li><a class="lists" href="#">Услуги</a></li>
                                        <li><a class="tools" href="#">Неисправности</a></li>
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="order-now"> <a href="#call-modal-form">Заказать ремонт</a></li>
                                    </ul>
                                </div>
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
                    <div class="col-xs-4">
                        <h5>Ремонт кофемашин</h5>
                        <div class="row">
                            <div class="col-xs-12">
                                <ul>
                                    <li><a href="#">Ремонт кофемашин Gaggia</a></li>
                                    <li><a href="#">Ремонт кофемашин Jura</a></li>
                                    <li><a href="#">Ремонт кофемашин Melitta</a></li>
                                    <li><a href="#">Ремонт кофемашин Saeco</a></li>
                                    <li><a href="#">Все ремонтируемые бренды</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-5">
                        <h5>О компании</h5>
                        <div class="row">
                            <div class="col-xs-5">
                                <ul>
                                    <li><a href="#">Вопросы ответы</a></li>
                                    <li><a href="#">Диагностика</a></li>
                                    <li><a href="#">Срочный ремонт</a></li>
                                    <li><a href="#">Доставка</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-5">
                                <ul>
                                    <li><a href="#">Отзывы</a></li>
                                    <li><a href="#">Оплата</a></li>
                                    <li><a href="#">Пользовательское соглашение</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <h5>Контактная информация</h5>
                        <p><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/icons/mark.png" style="margin-right: 15px; margin-bottom: 15px; float: left;">ул. Народного Ополчения, 34, с.2, офис 105</p>
                        <div class="footer-phone-cont">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/icons/phone_footer.png" style="margin-right: 15px;"/>
                            <div class="footer-phone">
                                <nobr> <a href="tel:+74951339049" class="phone-c">+7 (495) 133-90-49</a></nobr>
                                <nobr> <a href="tel:+79299468413" class="phone-c">+7 (929) 946-84-13</a></nobr>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row service-info"> © 2017 </div>
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
                        <form>
                            <h3>Хотите, мы вам перезвоним?</h3>
                            <p>Для вызова мастера или подробной консультации оставьте ваш номер телефона</p>
                            <div class="row"> <input name="phone" id="caller_phone" type="text" class="form-control" placeholder="Номер телефона"> <button id="caller_button" type="submit" class="btn btn-default">Перезвоните мне</button></div>
                            <div class="info-text">Свяжемся за 2 минуты</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="remodal" data-remodal-id="call-modal-form">
            <div id="form-modal">
                <div class="modal-content">
                    <p class="modal-title">Вызов мастера</p>
                    <p class="modal-desc">Мы перезвоним вам в течение минуты для подтверждения заказа.</p>
                    <form id="form-modal-form"> 
                        <input type="text" name="phone" placeholder="Номер телефона">
                        <input type="button" class="call-master" value="Вызвать мастера"></form>
                    <img data-remodal-action="close" class="remodal-close" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/close_modal.png"/>
                </div>
            </div>
        </div>
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
</body>
</html>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery-1.11.3.min.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.activeForm.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery.inputmask.bundle.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.validation.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery-ui.js"></script>
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