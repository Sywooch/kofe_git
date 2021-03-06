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
$domain = $_SERVER['SERVER_NAME'];
$domain = str_replace('admin.', '', $domain);
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
        <link rel="stylesheet" href="<?= $assets ?>/multicat/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="<?= $assets ?>/multicat/css/owl.carousel.min.css" type="text/css" />
        <link rel="stylesheet" href="<?= $assets ?>/multicat/css/owl.theme.default.min.css" type="text/css" />
        <link rel="stylesheet" href="<?= $assets ?>/multicat/css/font-awesome.css" type="text/css" />
        <link rel="stylesheet" href="<?= $assets ?>/multicat/css/horizontal.css" type="text/css" />
        <link rel="stylesheet" href="<?= $assets ?>/multicat/css/<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'spb/' : '' ?>colors.css" type="text/css" />
        <link rel="stylesheet" href="<?= $assets ?>/multicat/css/<?= \app\components\CController::$monoBrand['url']; ?>.css" type="text/css" />
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if lte IE 7]><script src="js/IE8.js" type="text/javascript"></script><![endif]-->
        <!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->
        <link rel="stylesheet" href="<?= $assets ?>/multicat/css/<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'spb/' : '' ?>main.css" type="text/css" />
        <style>
        </style>
    </head>
    <body id="index" class="index <?= \app\components\CController::$monoBrand['url']; ?>">
        <?php $this->beginBody() ?>
        <header id="header" class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'colorborder' : '' ?>">            
            <div class="container">
                <a class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'spb-mobi-number' : 'mobi-number' ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
                <div class="logo">
                    <a href="/"><img src="<?= $assets ?>/multicat/images/<?= \app\components\CController::$monoBrand['url']; ?><?= isset($siteConfig['spb']) && $siteConfig['spb'] ? '2' : '' ?>.svg"></a>
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
                <div class="topcontactinfo <?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'colorborder' : '' ?>">
                    <div class="boxcontact">
                        <div class="left">
                            <?php if (strpos($domain, '.repair') !== false): ?>
                                <a href="/kontakty">г. Санкт-Петербург, ул. Ефимова</a>
                                <span class="times">ТЦ "Пик"</span>
                            <?php else: ?>
                                <a href="/kontakty">г. Москва, ул. Барклая, 8.</a>
                                <span class="times">ТЦ "Горбушка", этаж 2.</span>
                            <?php endif; ?>
                        </div>
                        <div class="right">
                            <a class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'phone_spb' : 'phone_msk' ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!--<div class="btn-for-contact"><i class="fa fa-angle-down" aria-hidden="true"></i></div>-->
                </div>
                <a class="btn yellow open-popup <?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'colorbg' : 'colortext' ?>" data-tab="popup2" onclick="return false;" href="#">Записаться на ремонт</a>
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
        <footer class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'colorborder' : '' ?>">
            <div class="container">
                <div class="body">
                    <div class="left">
                        <span>Сэкономьте <br>свое время</span>
                        <p>Вызовите мастера на дом<br> или офис абсолютно<br> бесплатно.</p>
                        <a class="btn out-icon green open-popup colorbg colorbghover" data-tab="popup1" onclick="return false;" href="#">Вызвать мастера</a>
                        <img src="<?= $assets ?>/multicat/images/<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'spb/' : '' ?>/master.png">
                    </div>
                    <div class="right">
                        <div class="title">Наш сервисный центр</div>
                        <div class="content">
                            <ul class="footer-map-menu">
                                <li class="active"><a onclick="return false;" href="#" data-tab="local1"><?php if (strpos($domain, '.repair') !== false): ?>Спасская<?php else: ?>Багратионовская<?php endif; ?></a></li>
                            </ul>
                            <div id="local1" class="footer-map active">
                                <div class="info">
                                    <div class="img"><img src="<?= $assets ?>/multicat/images/<?= \app\components\CController::$monoBrand['url']; ?>.jpg" alt=""></div>
                                    <div class="text">
                                        <?php if (strpos($domain, '.repair') !== false): ?>
                                            <p>г. Санкт-Петербург, ул. Ефимова, ТЦ "Пик"</p>
                                        <?php else: ?>
                                            <p>г. Москва, ул. Барклая, 8. ТЦ "Горбушка", этаж 2.</p>
                                        <?php endif; ?>

                                        <a class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'phone_spb' : 'phone_msk' ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                                        <span>Ежедневно с 09:00 до 20:00</span>
                                    </div>
                                </div>
                                <?php if (strpos($domain, '.repair') !== false): ?>
                                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac87b88869fa43f105708b90817caf31e7368b8b3777d377866f0e45ed6b86d84&amp;width=780&amp;height=253&amp;lang=ru_RU&amp;scroll=true"></script>
                                <?php else: ?>
                                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A03f102fa2cd31744e0f04472e92d78d74b67f3fe56752d25ee4a17e8616a4368&amp;width=780&amp;height=255&amp;lang=ru_RU&amp;scroll=true"></script></script>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="bottom-menu">
                    <div class="logo">
                        <img src="<?= $assets ?>/multicat/images/<?= \app\components\CController::$monoBrand['url']; ?>2.svg">
                        <span>© 2010 - <?= date('Y'); ?> <br><?= ucfirst($_SERVER['HTTP_HOST']); ?></span>
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
                        <a href="#" class="btn green open-popup colorbg colorbghover" data-tab="popup2" onclick="return false;">Записаться на ремонт</a>
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
                    <p>Мы производим ремонт бытовой техники <?= \app\components\CController::$monoBrand['title']; ?>, начиная с обычной диагностики и заканчивая заменой и ремонтом всех внутренних деталей бытовой техники. Наш сервисный центр может решить любую проблему, возникшую с вашей бытовой техникой и именно поэтому мы лидируем среди всех сервисных центров!</p>
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
                <div class="left" style="background-image: url(<?= $assets ?>/multicat/images/popupbg.jpg"></div>
                <div class="right start">
                    <i class="close"></i>
                    <div class="title">Записаться на ремонт</div>
                    <p>Мы производим ремонт бытовой техники <?= \app\components\CController::$monoBrand['title']; ?>, начиная с обычной диагностики и заканчивая заменой и ремонтом всех внутренних деталей бытовой техники. Наш сервисный центр может решить любую проблему, возникшую с вашей бытовой техникой и именно поэтому мы лидируем среди всех сервисных центров!</p>
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
        <?php
        $roistat_n = '17,18';
        $roistatid = '314cc36ae97e480950a604b5c5a729f7';
        if (isset($siteConfig['spb'])) {
            $roistatid = 'e9bb7c25ae12c1eea627cb04cdb83f4b';
            $roistat_n = '31,32';
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
    });
    $('body').on("keyup", "input[type=tel]", function () {
            var v = $(this).val().substring(4, 6);
            if ($(this).val().length >= 18 && $(this).val().indexOf("_") == -1) {
                $.post("/order-send", {phone: $(this).val(), title: $("h1").text()});
            }
        });
    </script>
<script src="<?= $assets ?>/multicat/js/main.js?v=5"></script>
<?php
if (Yii::$app->session->getFlash('success')) {
    echo '<script>$(".popup .finish, .popup, #popup2").addClass("active");</script>';
}
?>
<?php $this->endBody() ?>    
<?php $this->endPage() ?>