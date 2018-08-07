<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

//use ifixme\Test;

AppAsset::register($this);
$assets = Yii::getAlias('@web');
$isHome = Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index' ? true : false;
$isModelPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'model' ? true : false;
$isBrandPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'brand' ? true : false;
$siteConfig = app\components\CController::getSiteConfig();
$js = app\components\CController::$js;
?>
<!DOCTYPE html>
<html lang="ru">
    <head>  
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="icon" type="image/x-icon" href="<?= $assets ?>/favicon.ico">
        <link type="text/css" href="/all-css?files=main.css,animate.css,owl.carousel.min.css,owl.theme.default.min.css,font-awesome.css,horizontal.css&path=<?= $siteConfig['theme'] . '/css'; ?>&replaceFiles=-1&cache=1&v=11" rel="stylesheet" media="all" />
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if lte IE 7]><script src="js/IE8.js" type="text/javascript"></script><![endif]-->
        <!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->
        <style>
        </style>
    </head>
    <body id="index" class="index">
        <?php $this->beginBody() ?>
        <header id="header">            
            <div class="container">
                <a class="mobi-number" href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                <div class="logo">
                    <a href="/"><img alt="Сервисный центр Apple" src="<?= $assets ?>/ifixme/images/logo-w.svg"></a>
                </div>
                <div class="topmenu">
                    <div class="menu-toggle">
                        <div class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="cross">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <ul>
                        <li class="menu-child"><span>О нас <i class="fa fa-angle-down" aria-hidden="true"></i></span>
                            <ul>
                                <div class="container">
                                    <li><a href="/o-nas">О нас</a></li>
                                    <li><a href="/uslugi">Услуги</a></li>
                                    <li><a href="/akcii">Акции</a></li>
                                    <li><a href="/otzyvy">Отзывы</a></li>
                                    <li><a href="/kontakty">Контакты</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="/kontakty">Контакты</a></li>
                    </ul>
                </div>
                <div class="topcontactinfo">
                    <div class="boxcontact">
                        <div class="left">
                            <span class="name">Сервисный центр</span>
                            <a href="/kontakty">г. Москва, Багратионовский пр-д, 70К20В</a>
                            <span class="times">Ежедневно с 08:00 до 22:00</span>
                        </div>
                        <div class="right">
                            <span class="name">Телефон</span>
                            <a class="fix-tel" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!--<div class="btn-for-contact"><i class="fa fa-angle-down" aria-hidden="true"></i></div>-->
                </div>
                <a class="btn yellow open-popup" data-tab="popup2" onclick="return false;" href="#">Отправить заявку</a>
                <div class="clear"></div>
            </div>
        </header>
        <div class="for-header"></div>
        <?= ifixme\widgets\menu\MainMenu::widget(); ?>
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
        <?= $content; ?>
        <footer>
            <div class="container">
                <noindex>
                    <div class="body">
                        <div class="left">
                            <span>Сэкономьте <br>свое время</span>
                            <p>Вызовите мастера на дом<br> или офис абсолютно<br> бесплатно.</p>
                            <a class="btn out-icon open-popup" data-tab="popup1" onclick="return false;" href="#">Вызвать мастера</a>
                            <img src="<?= $assets ?>/ifixme/images/master.png">
                        </div>
                        <div class="right">
                            <div class="title">Наш сервисный центр</div>
                            <div class="content">
                                <ul class="footer-map-menu">
                                    <li class="active"><a onclick="return false;" href="#" data-tab="local1">На Багратионовской </a></li>
                                </ul>
                                <div id="local1" class="footer-map active">
                                    <div class="info">
                                        <div class="img"><img src="<?= $assets ?>/ifixme/images/contact.jpg" alt=""></div>
                                        <div class="text">
                                            <p>г. Москва, Багратионовский пр-д, 70К20В</p>
                                            <a class="fix-tel" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                                            <span>Ежедневно с 08:00 до 22:00</span>
                                        </div>
                                    </div>
                                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8937a2b71b799acf4e8b3ab763e000285abaf36901fab05e78a52c08fe18f261&amp;width=780&amp;height=255&amp;lang=ru_RU&amp;scroll=true"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </noindex>
                <div class="clear"></div>

                <div class="bottom-menu">
                    <div class="logo">
                        <a href="/"><img alt="Сервисный центр Apple" src="<?= $assets ?>/ifixme/images/logo-b.svg"></a>
                    </div>

                    <div class="nav">
                        <div class="menu-toggle">
                            <div class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="cross">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <ul>
                            <li><a href="/o-nas">О нас</a></li>
                            <li><a href="/uslugi">Услуги</a></li>
                            <li><a href="/kontakty">Контакты</a></li>
                            <li><a href="/kontakty">Пользовательское соглашение</a></li>
                        </ul>
                        <span class="footer-text">Ремонт техники Apple в Москве</span>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </footer>

        <div class="popup">
            <div id="popup1" class="inner">
                <div class="left" style="background-image: url(<?= $assets ?>/ifixme/images/popupbgmaster.jpg);"></div>
                <div class="right start">
                    <i class="close"></i>
                    <div class="title">Записаться на ремонт</div>
                    <p>Мы производим любой ремонт техники Apple, начиная с замены компонентов и заканчивая пайкой и ремонтом материнских плат. В нашем Сервисном Центре можно решить практически любые проблемы!</p>
                    <?= ifixme\widgets\forms\Order::widget(['id' => 'order-form2']); ?>
                </div>
                <div class="right finish">
                    <i class="close"></i>
                    <div class="thanku">
                        <img src="<?= $assets ?>/ifixme/images/icon/check.svg">
                        <span>Спасибо <br>за заявку! </span>
                        Наш менеджер перезвонит <br>вам в рабочее время
                    </div>
                </div>
            </div>
            <div id="popup2" class="inner">
                <div class="left" style="background-image: url(<?= $assets ?>/ifixme/images/popupbg.jpg);"></div>
                <div class="right start">
                    <i class="close"></i>
                    <div class="title">Записаться на ремонт</div>
                    <p>Мы производим любой ремонт техники Apple, начиная с замены компонентов и заканчивая пайкой и ремонтом материнских плат. В нашем Сервисном Центре можно решить практически любые проблемы!</p>
                    <?= ifixme\widgets\forms\Order::widget(); ?>
                </div>
                <div class="right finish">
                    <i class="close"></i>
                    <div class="thanku">
                        <img src="<?= $assets ?>/ifixme/images/icon/check.svg">
                        <span>Спасибо <br>за заявку! </span>
                        Наш менеджер перезвонит <br>вам в рабочее время
                    </div>
                </div>
            </div>
            <div class="close"></div>
        </div>
        <?= !empty($js['content']) ? $js['content'] : ''; ?>
    </body>
</html>
<script src="<?= $assets ?>/ifixme/js/jquery-1.11.3.min.js"></script>
<script src="<?= $assets ?>/ifixme/js/jquery.sticky.js"></script>
<script src="<?= $assets ?>/ifixme/js/owl.carousel.min.js"></script>
<script src="<?= $assets ?>/ifixme/js/jquery.inputmask.bundle.js"></script>
<script src="<?= $assets ?>/ifixme/js/horizontal.js"></script>
<script src="<?= $assets ?>/ifixme/js/plugins.js"></script>
<script src="<?= $assets ?>/ifixme/js/sly.min.js"></script>
<script src="<?= $assets ?>/ifixme/js/wow.js"></script>
<script src="<?= $assets ?>/ifixme/js/jquery.fancybox.pack.js"></script>
<script src="<?= $assets ?>/ifixme/js/yii.activeForm.js"></script>
<script src="<?= $assets ?>/ifixme/js/yii.js"></script>
<script src="<?= $assets ?>/ifixme/js/yii.validation.js"></script>
<script>
                                    new WOW().init();
</script>
<script>$("form").each(function () {
        $(this).append("<input type=\"hidden\" name=\"h1\" value=\"" + $("h1").text() + "\">")
    });</script>
<script src="<?= $assets ?>/ifixme/js/main.js?v=5"></script>
<?php
if (Yii::$app->session->getFlash('success')) {
    echo '<script>$(".popup .finish, .popup, #popup2").addClass("active");</script>';
}
?>
<?php $this->endBody() ?>    
<?php $this->endPage() ?>