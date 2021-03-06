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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
            "http://www.w3.org/TR/html4/strict.dtd">
<html>    
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="shortcut icon" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/home.ico" type="image/x-icon">        
        <link type="text/css" href="/all-css?files=fonts.css,owl.carousel.css,owl.theme.default.css,font-awesome.css,jquery.fancybox.min.css,reset.css,global.css,bootstrap.min.css,bootstrap-theme.min.css,style.min.css,home.css,horizontal.css,jquery-ui.css&path=<?= $siteConfig['theme'] . '/css'; ?>&replaceFiles=-1&cache=1" rel="stylesheet" media="all" />
    </head>
    <body>
        <?= remont_coffee\widgets\forms\SidebarForm::widget(); ?>
        <?php $this->beginBody() ?>
        <div class="container header">
            <div class="row logo-line">
                <div class="logo-image">
                    <a href="/"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?php if ($siteConfig['id'] == 53): ?>j/<?php endif; ?>logo.svg" /></a>
                </div>
                <a class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'm-telefon-spb' : 'm-telefon-msk' ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>" class="phone-mobile"></a>
                <div class="top-advantages">
                    <span class="item">
                        Произведем супер ремонт за 1 день!
                    </span>
                    <span class="item">
                        Работаем с юр. и частными лицами!
                    </span>
                    <span class="item">
                        Ремонтируем в сервисе и на выезде!
                    </span>
                    <span class="item">
                        Даем реальную гарантию до 1 года!
                    </span>
                </div>
                <div class="logo-phone">
                    <a class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'telefon-spb' : 'telefon-msk' ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                    <span>
                    <?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'г. Санкт-Петербург, Гжатская улица, 21к2' : 'г. Москва, Кастанаевская <br>улица, 17' ?>
                </span>
                </div>
            </div>
        </div>

        <div class="menushka">
            <div class="container header">
                <div class=" menu-line">
                    <nav class="navbar navbar-default navigation">
                        <div class="navbar-header for-nav-tel">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'telefon-spb' : 'telefon-msk' ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                        </div>
                        <div class="collapse navbar-collapse navigation" id="main-menu">
                            <ul id="menu-home" class="nav navbar-nav">
                                <li id="menu-item-1504" class="<?= Yii::$app->request->pathInfo == '' ? ' current-menu-item' : '' ?> "><a href="/"> Главная</a></li>
                                <li id="menu-item-1479" class="<?= Yii::$app->request->pathInfo == 'stoimost-remonta' ? ' current-menu-item' : '' ?>"><a href="/stoimost-remonta">Стоимость ремонта</a></li>
                                <li id="menu-item-5948" class="<?= Yii::$app->request->pathInfo == 'vse-obsluzhivaemye-brendy' ? ' current-menu-item' : '' ?>"><a href="/vse-obsluzhivaemye-brendy">Все обслуживаемые бренды</a></li>
                                <li id="menu-item-1477" class="<?= Yii::$app->request->pathInfo == 'kurerskaya-sluzhba' ? ' current-menu-item' : '' ?>"><a href="/kurerskaya-sluzhba">Курьерская служба</a></li>
                                <li id="menu-item-1477" class="<?= Yii::$app->request->pathInfo == 'garantiya' ? ' current-menu-item' : '' ?>"><a href="/garantiya">Гарантия</a></li>
                                <li id="menu-item-1478" class="<?= Yii::$app->request->pathInfo == 'kontakty' ? ' current-menu-item' : '' ?>"><a href="/kontakty">Контакты</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
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
        <div class="gl-footer">
            <div class="container">
                <div class="navigation info">
                    <div class="img-logo">
                        <a href="/"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?php if ($siteConfig['id'] == 53): ?>j/<?php endif; ?>logo2.svg" /></a>
                    </div>
                    <p><?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'г. Санкт-Петербург, Гжатская улица, 21к2' : 'г. Москва, Кастанаевская улица, 17' ?></p>
                    <p><a class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'telefon-spb' : 'telefon-msk' ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a></p>
                    <p>Работаем ежедневно c 09:00 до 20:00 без выходных и праздничных дней</p>
                    <p><?= $_SERVER['HTTP_HOST']; ?> © <?= date('Y'); ?></p>
                </div>
                <div class="navigation">
                    <ul class="menu-footer">
                        <li><p>Меню</p></li>
                        <li><a href="/voprosy-otvety">Вопросы ответы</a></li>
                        <li><a href="/diagnostika">Диагностика</a></li>
                        <li><a href="/srochnyj-remont">Срочный ремонт</a></li>
                        <li><a href="/dostavka">Доставка</a></li>
                        <li><a href="/oplata">Оплата</a></li>
                        <li><a href="/polzovatelskoe-soglashenie">Пользовательское соглашение</a></li>
                    </ul>
                </div>
                <div class="navigation">
                    <ul class="menu-footer">
                        <li><p>Статьи и советы</p></li>
                        <?= isset($siteConfig['spb']) && $siteConfig['spb'] ? '<li><a href="/fakti-o-kofe">Факты о кофе</a></li>
                        <li><a href="/zolotoy-kofe">"Золотой" кофе</a></li>
                        <li><a href="/kofe-pyatna">Советы по удалению кофейных пятен</a></li>
                        <li><a href="/istoriya-kofe">История кофе</a></li>' : '<li><a href="/vibor-kofe-dlya-sebya">Как выбрать кофе для кофемашин</a></li>
                        <li><a href="/soveti-dlya-vashey-kofemaschini">Советы по обслуживанию кофемашин</a></li>
                        <li><a href="/dlya-chego-nudjen-filtr-kofemachine">Для чего кофемашине нужен фильтр?</a></li>
                        <li><a href="/chto-takoye-kapuchino">Что такое капучино?</a></li>' ?>
                    </ul>
                </div>
                <div class="navigation">
                    <ul class="menu-footer">
                        <li><p>Популярные неисправности</p></li>
                        <li><a href="/ne-vklyuchaetsya">Не включается</a></li>
                        <li><a href="/protekaet">Протекает</a></li>
                        <li><a href="/ne-nalivaet-kofe">Не наливает кофе</a></li>
                        <li><a href="/net-para">Нет пара</a></li>
                        <li><a href="/ne-greet-vodu">Не греет воду</a></li>
                        <li><a href="/vydaet-oshibku">Выдает ошибку</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?= !empty($js['content']) ? $js['content'] : ''; ?>
        <?php
        $roistat_n = '23,24';
        $roistatid = 'f13bbfe1cb8b20ef560688ad98cabdf5';
        if (isset($siteConfig['spb'])) {
            $roistatid = '2f469666c78f7e3bd3c60cbad9831ee1';
            $roistat_n = '30,29';
        }
        ?>
        
    </body>
</html>
<script src="/jsAction?files=jquery-1.11.3.min.js,yii.activeForm.js,yii.js,jquery.inputmask.bundle.js,yii.validation.js,bootstrap.min.js,jquery.fancybox.min.js,sly.min.js,plugins.js,owl.carousel.js,jquery.sticky.js,jquery-ui.js,global.js&path=/<?= $siteConfig['theme']; ?>/js&replaceFiles=-1&cache=1"></script>
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