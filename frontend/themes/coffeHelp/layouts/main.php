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
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/main.css?v=1">
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/main2.css?v=2">
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/main.js?v=1" async></script>
        <link type="text/css" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/jquery-ui.css" rel="stylesheet" media="all" />
        <?php if ($siteConfig['id'] == 53): ?>
            <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/<?= $siteConfig['id']; ?>.css" rel="stylesheet">
        <?php endif; ?>
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
                       <div class="navbar-logo"><a href="/"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?= $siteConfig['id']; ?>/logo.svg"></a></div>
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
                                    <a class="phone-c" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= strip_tags(Yii::$app->session['region']['phone']); ?></a>
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
                                <li><a href="/status-repair">Статус ремонта</a></li>
                                <li><a href="/contacts">Контакты</a></li>
                            </ul>
                            <div class="top_menu_right_info"> Ваш регион: <?= Yii::$app->session['region']['title']; ?></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row row_header_line">
                            <div class="logo"> <a href="/"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?= $siteConfig['id']; ?>/logo.svg"></a></div>
                            <div class="top-menu-container">
                                <div class="clock-work-conteiner">
                                    <div class="clock-work l"> Работаем без перерывов и <br> выходных <span>с 9:00 до 20:00</span></div>
                                    <div class="clock-work r checkin-visit"> Выезжаем по <?= Yii::$app->session['region']['id'] == 1 ? 'всей Москве <br> и Московской области' : 'всему Санкт-Петербургу <br> и Ленинградской области'; ?></div>
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
                                    <li><a href="/remont-jura">Ремонт кофемашин Jura</a></li>
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
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <h5>Контактная информация</h5>
                        <p><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/<?php if ($siteConfig['id'] == 53): ?>j/<?php endif; ?>icons/mark.png" style="margin-right: 15px; margin-bottom: 15px; float: left;">г. Москва, Площадь Победы, д. 1Е. (В здании Дома быта).</p>
                        <div class="footer-phone-cont">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/<?php if ($siteConfig['id'] == 53): ?>j/<?php endif; ?>icons/phone_footer.png" style="margin-right: 15px;"/>
                            <div class="footer-phone">
                                <nobr> <a href="tel:+74951339049" class="phone-c">+7 (495) 152-07-07</a></nobr>
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