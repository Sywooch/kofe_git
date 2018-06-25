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
<?php \app\widgets\other\Replace::begin(['params' => $siteConfig]); ?>
<!DOCTYPE html>
<html lang="ru">    
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?= $assets . $siteConfig['theme']; ?>/images/brends/<?= $siteConfig['sitePrefix']; ?>/favicon-16.png" rel=icon sizes=16x16 type=image/png>        
        <link href="/cssAction?file=/<?= $siteConfig['theme']; ?>/css/brends/adaptive.css&cache=0" rel=stylesheet>
        <link href="/<?= $siteConfig['theme']; ?>/css/brends/<?= $siteConfig['sitePrefix']; ?>/owl.carousel.css" rel=stylesheet>
        <link href="/cssAction?file=/<?= $siteConfig['theme']; ?>/css/brends/<?= $siteConfig['sitePrefix']; ?>/fancybox.min.css&cache=0" rel=stylesheet>
        <link href="/<?= $siteConfig['theme']; ?>/css/brends/<?= $siteConfig['sitePrefix']; ?>/fonts.css" rel=stylesheet>
        <link href="/cssAction?file=/<?= $siteConfig['theme']; ?>/css/brends/<?= $siteConfig['sitePrefix']; ?>/main.css&cache=0" rel=stylesheet>
        <link href="/cssAction?file=/<?= $siteConfig['theme']; ?>/css/brends/<?= $siteConfig['sitePrefix']; ?>/jquery.modal.css&cache=0" rel=stylesheet>
        <link href="/cssAction?file=/<?= $siteConfig['theme']; ?>/css/brends/<?= $siteConfig['sitePrefix']; ?>/responsive.css&cache=0" rel=stylesheet>
        <link href="/<?= $siteConfig['theme']; ?>/css/brends/<?= $siteConfig['sitePrefix']; ?>/fontawesome.css" rel=stylesheet>        
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
        <script src="//yastatic.net/share2/share.js"></script>
    </head>
    <body class="<?= $siteConfig['sitePrefix']; ?>">
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
                                    <img src="<?= $assets . $siteConfig['theme']; ?>/images/brends/<?= $siteConfig['sitePrefix']; ?>/<?= $siteConfig['sitePrefix']; ?>logo.svg" class="header-logo--image img-responsive" alt="Ремонт кофемашин в Москве.">
                                </a>
                                <span class="header-logo--slogan">Ремонт кофемашин в <?= isset($siteConfig['spb']) ? 'Санкт-Петербурге' : 'Москве'; ?>. <br> Качество, гарантия, надёжность!</span>
                            </div>
                            <div class="pull-right">
                                <div class="header-block header-phone">
                                    <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>" class="header-block--thumb"></a>
                                    <p class="header-block--title"><a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a></p>
                                    <p class="header-block--description">
                                        <?= isset($siteConfig['spb']) ? 'Санкт-Петербург, м. Горьковская, Каменноостровский просп., 15' : 'г. Москва, м. Курская, Нижний Сусальный пер., 5, стр. 15'; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-contacts">
                        <noindex>
                            <p class="header-contacts--email"><i class="fas fa-check"></i>Поделитесь в соц. сети и получите скидку</p>
                            <div class="header-contacts--social">
                                <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir,viber,whatsapp,telegram"></div>
                            </div>
                        </noindex>
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
                        <img src="<?= $assets . $siteConfig['theme']; ?>/images/brends/<?= $siteConfig['sitePrefix']; ?>/<?= $siteConfig['sitePrefix']; ?>logo.svg" class="mobile-menu-logo--image" alt="Ремонт кофемашин в Москве.">
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
                            <p class="mobile-nav-phone--description"><?= isset($siteConfig['spb']) ? 'Санкт-Петербург, м. Горьковская, Каменноостровский просп., 15' : 'г. Москва, м. Курская, Нижний Сусальный пер., 5, стр. 15'; ?></p>
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
                                <a href="/" class="footer-logo--url"><img src="<?= $assets . $siteConfig['theme']; ?>/images/brends/<?= $siteConfig['sitePrefix']; ?>/<?= $siteConfig['sitePrefix']; ?>logo.svg" class="header-logo--image img-responsive" alt="Ремонт кофемашин в Москве."></a>
                                <span class="footer-logo--slogan">Ремонт кофемашин в <?= isset($siteConfig['spb']) ? 'Санкт-Петербурге' : 'Москве'; ?>. Качество, гарантия, надёжность!</span>
                            </div>
                            <div class="footer-contacts">
                                <p class="footer-contacts--phone"><a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><i class="fa fa-mobile" aria-hidden="true"></i><?= Yii::$app->session['region']['phone']; ?></a></p>
                                <p class="footer-contacts--email"><i class="fa fa-map-marker" aria-hidden="true"></i><?= isset($siteConfig['spb']) ? 'Санкт-Петербург, м. Горьковская, Каменноостровский просп., 15' : 'г. Москва, м. Курская, Нижний Сусальный пер., 5, стр. 15'; ?></p>
                                <noindex><div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir,viber,whatsapp,telegram"></div></noindex>

                            </div>
                        </div>
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-menu">
                                        <p class="footer-menu--title">Услуги</p>
                                        <ul>
                                            <li><a href="/chistka-gidrosistemy">Чистка гидросистемы </a></li>
                                            <li><a href="/dekaltsinatsiya">Декальцинация </a></li>
                                            <li><a href="/diagnostika">Диагностика </a></li>
                                            <li><a href="/remont-nasosa">Ремонт насоса</a></li>
                                            <li><a href="/chistka-ot-kofeinykh-masel">Чистка от кофейных масел</a></li>
                                            <li><a href="/zamena-zhernovov">Замена жерновов</a></li>
                                            <li><a href="/nastroika-kofemolki">Настройка кофемолки</a></li>
                                            <li><a href="/zamena-uplotnitelei">Замена уплотнителей</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <noindex>
                                        <div class="footer-menu">
                                            <p class="footer-menu--title">Компания</p>
                                            <ul>
                                                <li><a href="/about">О компании</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="/contacts">Контакты</a></li>
                                                <li><a href="/politika">Политика конфиденциальности</a></li>
                                            </ul>
                                        </div>
                                    </noindex>
                                </div>
                                <div class="clearfix visible-sm visible-xs"></div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="footer-menu">
                                        <p class="footer-menu--title">Мы на карте</p>
                                        <div class="footer-map">
                                            <?= isset($siteConfig['spb']) ? '<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac364f553419142c8fa2bff16cf7b959fc03ea4bf2d16ff4f2307776cae2fb24b&amp;source=constructor" width="100%" height="200" frameborder="0"></iframe>' : '<iframe width="100%" height="200" frameborder="0" style="border:0"  src="https://yandex.ru/map-widget/v1/?um=constructor%3A1cb2ded5f272819fb79a4659404800c497bb1cfa37f63795fc64d301c80c28cf&amp;source=constructor" allowfullscreen=""></iframe>'; ?>
                                            					
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <p class="footer-copyright">Ремонт кофемашин в <?= isset($siteConfig['spb']) ? 'Санкт-Петербурге' : 'Москве'; ?>. Сервисный центр №1 © <?= date('Y'); ?>. Все права защищены.</p>
                        </div>
                    </div>
                    <div class="js-content-width"></div>
                </div>
                <i class="background-pattern background-pattern--left background-center background-center--left js-background-pattern"></i>
                <i class="background-pattern background-pattern--right background-center background-center--right js-background-pattern"></i>
            </div>
        </footer>
        <?= helper\widgets\forms\Popup::widget(); ?>
        <script src="/jsAction?files=template.js,19e1de0fb0.js&path=/<?= $siteConfig['theme']; ?>/js&replaceFiles=0,1,2&cache=0"></script>
        <script defer src="<?= $assets . $siteConfig['theme']; ?>/js/jquery.modal.js"></script>
        <script defer src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.activeForm.js"></script>
        <script defer src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.js"></script>
        <script defer src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery.inputmask.bundle.js"></script>
        <script defer src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.validation.js"></script>
        <?= !empty($js['content']) ? $js['content'] : ''; ?>
        <?php
        if (Yii::$app->session->getFlash('success')) {
            echo '<script>$("#popup-send").toggle();</script>';
        }
        ?>
        <script>
        $("form").each(function () {
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
    </body>
</html>
<?php $this->endPage() ?>
<?php \app\widgets\other\Replace::end(); ?>