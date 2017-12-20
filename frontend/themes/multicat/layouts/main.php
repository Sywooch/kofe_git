<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

//use multicat\Test;

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
        <link rel="stylesheet" href="<?= $assets ?>/multicat/css/main.css" type="text/css" />
        <link rel="stylesheet" href="<?= $assets ?>/multicat/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="<?= $assets ?>/multicat/css/owl.carousel.min.css" type="text/css" />
        <link rel="stylesheet" href="<?= $assets ?>/multicat/css/owl.theme.default.min.css" type="text/css" />
        <link rel="stylesheet" href="<?= $assets ?>/multicat/css/font-awesome.css" type="text/css" />
        <link rel="stylesheet" href="<?= $assets ?>/multicat/css/horizontal.css" type="text/css" />
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
                    <a href="/"><img src="<?= $assets ?>/multicat/images/<?= \app\components\CController::$monoBrand['url']; ?>.svg"></a>
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
                                    <li><a href="/novosti">Новости</a></li>
                                    <li><a href="/vakansii">Вакансии</a></li>
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
                            <a href="/kontakty">Москва, ул. Заречная 1к2.</a>
                            <span class="times">Ежедневно с 08:00 до 22:00</span>
                        </div>
                        <div class="right">
                            <span class="name">Телефон</span>
                            <a href="tel:+74951520707">+7 (495) 152 07 07</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!--<div class="btn-for-contact"><i class="fa fa-angle-down" aria-hidden="true"></i></div>-->
                </div>
                <a class="btn yellow open-popup" data-tab="popup2" onclick="return false;" href="#">Записаться на ремонт</a>
                <div class="clear"></div>
            </div>
        </header>
        <div class="for-header"></div>
        <?= multicat\widgets\menu\MainMenu::widget(); ?>
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
                <div class="body">
                    <div class="left">
                        <span>Сэкономьте <br>свое время</span>
                        <p>Вызовите мастера на дом<br> или офис абсолютно<br> бесплатно.</p>
                        <a class="btn out-icon green open-popup" data-tab="popup1" onclick="return false;" href="#">Вызвать мастера</a>
                        <img src="<?= $assets ?>/multicat/images/master.png">
                    </div>
                    <div class="right">
                        <div class="title">Наш сервисный центр</div>
                        <div class="content">
                            <ul class="footer-map-menu">
                                <li class="active"><a onclick="return false;" href="#" data-tab="local1">На Заречной </a></li>
                            </ul>
                            <div id="local1" class="footer-map active">
                                <div class="info">
                                    <div class="img"><img src="<?= $assets ?>/multicat/images/contact.jpg" alt=""></div>
                                    <div class="text">
                                        <p>Москва, ул. Заречная 1к2. М. Фили, Шелепиха</p>
                                        <a href="tel:+74951520707">+7 (495) 152 07 07</a>
                                        <span>Ежедневно с 08:00 до 22:00</span>
                                    </div>
                                </div>
                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A358a732ce1cfd772cada2862a2006f87e07a650943bfc4a6be752ce1ae0dbcff&amp;width=780&amp;height=255&amp;lang=ru_RU&amp;scroll=true"></script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="bottom-menu">
                    <div class="logo">
                        <a href="/"><img src="<?= $assets ?>/multicat/images/logo-b.svg"></a>
                        <span>© 2010 - <?= date('Y'); ?> <?= ucfirst($_SERVER['HTTP_HOST']); ?></span>
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
                            <li><a href="/novosti">Новости</a></li>
                            <li><a href="/kontakty">Контакты</a></li>
                        </ul>
                        <a href="#" class="btn green open-popup" data-tab="popup2" onclick="return false;">Записаться на ремонт</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--<div class="footer">
                    <div class="left">
                        <span>Мы в социальных сетях</span>
                        <ul>
                            <li><a class="draw meet" href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="right">
                        <span>© <?= date('Y'); ?> <?= ucfirst($_SERVER['HTTP_HOST']); ?></span>
                    </div>
                </div>-->
            </div>
        </footer>

        <div class="popup">
            <div id="popup1" class="inner">
                <div class="left" style="background-image: url(<?= $assets ?>/multicat/images/popupbgmaster.jpg);"></div>
                <div class="right start">
                    <i class="close"></i>
                    <div class="title">Записаться на ремонт</div>
                    <p>Мы производим любой ремонт техники Apple, начиная с замены компонентов и заканчивая пайкой и ремонтом материнских плат. В нашем Сервисном Центре можно решить практически любые проблемы!</p>
                    <?= multicat\widgets\forms\Order::widget(['id' => 'order-form2']); ?>
                </div>
                <div class="right finish">
                    <i class="close"></i>
                    <div class="thanku">
                        <img src="<?= $assets ?>/multicat/images/icon/check.svg">
                        <span>Спасибо <br>за заявку! </span>
                        Наш менеджер перезвонит <br>вам в рабочее время
                    </div>
                </div>
            </div>
            <div id="popup2" class="inner">
                <div class="left" style="background-image: url(<?= $assets ?>/multicat/images/popupbg.jpg);"></div>
                <div class="right start">
                    <i class="close"></i>
                    <div class="title">Записаться на ремонт</div>
                    <p>Мы производим любой ремонт техники Apple, начиная с замены компонентов и заканчивая пайкой и ремонтом материнских плат. В нашем Сервисном Центре можно решить практически любые проблемы!</p>
                    <?= multicat\widgets\forms\Order::widget(); ?>
                </div>
                <div class="right finish">
                    <i class="close"></i>
                    <div class="thanku">
                        <img src="<?= $assets ?>/multicat/images/icon/check.svg">
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
<script src="<?= $assets ?>/multicat/js/jquery-1.11.3.min.js"></script>
<script src="<?= $assets ?>/multicat/js/jquery.sticky.js"></script>
<script src="<?= $assets ?>/multicat/js/owl.carousel.min.js"></script>
<script src="<?= $assets ?>/multicat/js/jquery.inputmask.bundle.js"></script>
<script src="<?= $assets ?>/multicat/js/horizontal.js"></script>
<script src="<?= $assets ?>/multicat/js/plugins.js"></script>
<script src="<?= $assets ?>/multicat/js/sly.min.js"></script>
<script src="<?= $assets ?>/multicat/js/wow.js"></script>
<script src="<?= $assets ?>/multicat/js/jquery.fancybox.pack.js"></script>
<script src="<?= $assets ?>/multicat/js/yii.activeForm.js"></script>
<script src="<?= $assets ?>/multicat/js/yii.js"></script>
<script src="<?= $assets ?>/multicat/js/yii.validation.js"></script>
<script>
                                    new WOW().init();
</script>
<script>$("form").each(function () {
        $(this).append("<input type=\"hidden\" name=\"h1\" value=\"" + $("h1").text() + "\">")
    });</script>
<script src="<?= $assets ?>/multicat/js/main.js?v=5"></script>
<?php
if (Yii::$app->session->getFlash('success')) {
    echo '<script>$(".popup .finish, .popup, #popup2").addClass("active");</script>';
}
?>
<?php $this->endBody() ?>    
<?php $this->endPage() ?>