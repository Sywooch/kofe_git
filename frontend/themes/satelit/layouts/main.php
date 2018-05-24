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
<html lang="ru">    
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?= $assets . $siteConfig['theme']; ?>/css/template.css" rel="stylesheet">
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
        <script src="//yastatic.net/share2/share.js"></script>
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
        <div class="hidden-xs">
            <div class="container">
                <header class="header">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="header-logo pull-left">
                                <a href="/" class="header-logo--url">
                                    <img src="<?= $assets . $siteConfig['theme']; ?>/images/logo.svg" class="header-logo--image img-responsive" alt="Ремонт кофемашин в Москве.">
                                </a>
                                <span class="header-logo--slogan">Ремонт кофемашин в Москве. <br> Качество, гарантия, надёжность!</span>
                            </div>
                            <div class="pull-right">
                                <div class="header-block header-phone">
                                    <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>" class="header-block--thumb"></a>
                                    <p class="header-block--title"><a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a></p>
                                    <p class="header-block--description">г. Москва, ул. Барклая, 8. ТЦ "Горбушка", этаж 2.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-contacts">
                        <p class="header-contacts--email"><i class="fas fa-check"></i>Поделитесь в соц. сети и получите скидку</p>
                        <div class="header-contacts--social">
                            <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir,viber,whatsapp,telegram"></div>
                        </div>
                    </div>
                </header>
            </div>
            <nav class="menu">
                <div class="container">
                    <ul class="menu-level1">
                        <li class="menu-item"><a href="/prices">Цены и услуги</a></li>
                        <li class="menu-item"><a href="/models">Все модели</a></li>
                        <li class="menu-item"><a href="/about">О компании</a></li>
                        <li class="menu-item"><a href="/reviews">Отзывы</a></li>
                        <li class="menu-item"><a href="/contacts">Контакты</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="visible-xs">
            <div class="mobile-menu">
                <button class="mobile-menu--toggle js-mobile-menu--toggle"><i></i><span></span></button>
                <div class="mobile-menu-logo">
                    <a href="/" class="mobile-menu-logo--url">
                        <img src="<?= $assets . $siteConfig['theme']; ?>/images/logo.svg" class="mobile-menu-logo--image" alt="Ремонт кофемашин в Москве.">
                    </a>
                    <p class="header-contacts--phone"><a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a></p>
                </div>
            </div>
            <noindex>
                <nav class="mobile-nav">
                    <ul>
                        <li class="mobile-nav-item">
                            <p>Оптовые поставки запчастей<br>Выездной ремонт техники</p>
                        </li>
                        <li class="mobile-nav-phone">
                            <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>" class="mobile-nav-phone--thumb"></a>
                            <p class="mobile-nav-phone--title"><a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a></p>
                            <p class="mobile-nav-phone--description">г. Москва, ул. Барклая, 8. ТЦ "Горбушка", этаж 2.</p>
                        </li>
                        <li class="mobile-nav-item"><a href="/prices">Цены и услуги</a></li>
                        <li class="mobile-nav-item"><a href="/models">Все модели</a></li>
                        <li class="mobile-nav-item"><a href="/about">О компании</a></li>
                        <li class="mobile-nav-item"><a href="/reviews">Отзывы</a></li>
                        <li class="mobile-nav-item"><a href="/contacts">Контакты</a></li>
                        <li class="mobile-nav-contacts">
                            <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir,viber,whatsapp,telegram"></div>
                        </li>
                    </ul>
                </nav>
            </noindex>
            <div class="mobile-nav-shade js-mobile-nav--close"></div>
        </div>
        <?= $content; ?>
        <footer class="footer">
            <div class="background--grey">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="footer-logo">
                                <a href="/" class="footer-logo--url"><img src="<?= $assets . $siteConfig['theme']; ?>/images/logo.svg" class="footer-logo--image img-responsive" alt="СправникЪ. Выездной ремонт iPhone, iPad, ПК и ноутбуков"></a>
                                <span class="footer-logo--slogan">Ремонт кофемашин в Москве. Качество, гарантия, надёжность!</span>
                            </div>
                            <div class="footer-contacts">
                                <p class="footer-contacts--phone"><a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><i class="fa fa-mobile" aria-hidden="true"></i><?= Yii::$app->session['region']['phone']; ?></a></p>
                                <p class="footer-contacts--email"><i class="fa fa-map-marker" aria-hidden="true"></i>г. Москва, ул. Барклая, 8. ТЦ "Горбушка", этаж 2.</p>
                                <p class="footer-contacts--social">
                                <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir,viber,whatsapp,telegram"></div>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-menu">
                                        <p class="footer-menu--title">Услуги</p>
                                        <ul>
                                            <li><a href="collection/telefon.html">Нет питания</a></li>
                                            <li><a href="collection/planshet.html">Нет питания</a></li>
                                            <li><a href="collection/kompyuter.html">Нет питания</a></li>
                                            <li><a href="collection/noutbuk.html">Нет питания</a></li>
                                            <li><a href="page/prays-list-po-pk.html">Нет питания</a></li>
                                            <li><a href="page/prays-list-po-pk.html">Нет питания</a></li>
                                            <li><a href="collection/obschie-uslugi-iphone.html">Нет питания</a></li>
                                            <li><a href="collection/obschie-uslugi-ipad.html">Нет питания</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-menu">
                                        <p class="footer-menu--title">Компания</p>
                                        <ul>
                                            <li><a href="/about">О компании</a></li>                                            
                                            <li><a href="/reviews">Отзывы</a></li>
                                            <li><a href="/prices">Неисправности</a></li>
                                            <li><a href="/models">Все модели</a></li>
                                        </ul>
                                        <p class="footer-menu--title">Помощь</p>
                                        <ul>
                                            <li><a href="/contacts">Контакты</a></li>
                                            <li><a href="/policy">Политика конфиденциальности</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix visible-sm visible-xs"></div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="footer-menu">
                                        <p class="footer-menu--title">Мы на карте</p>
                                        <div class="footer-map">							
                                            <iframe width="100%" height="200" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJZ4WqZtk1tUYRfWa3gApRZBc&amp;key=AIzaSyCDBnmPNiqBDBkAPfcJt1BWoJbprq2DPMI" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <p class="footer-copyright">Ремонт кофемашин в Москве. Сервисный центр №1 © <?= date('Y'); ?>. Все права защищены.</p>
                        </div>
                    </div>
                    <div class="js-content-width"></div>
                </div>
                <i class="background-pattern background-pattern--left background-center background-center--left js-background-pattern"></i>
                <i class="background-pattern background-pattern--right background-center background-center--right js-background-pattern"></i>
            </div>
        </footer>
        <script src="<?= $assets . $siteConfig['theme']; ?>/js/template.js"></script>
        <script src="<?= $assets . $siteConfig['theme']; ?>/js/19e1de0fb0.js"></script>
        <script src="<?= $assets . $siteConfig['theme']; ?>/js/jquery.modal.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.activeForm.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery.inputmask.bundle.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.validation.js"></script>
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