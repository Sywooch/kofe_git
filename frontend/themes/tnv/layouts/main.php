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
$siteConfig = app\components\CController::getSiteConfig();
$js = app\components\CController::$js;
?>
<?php \app\widgets\other\Replace::begin(['params' => $siteConfig]); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>    
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="shortcut icon" href="<?= $assets . $siteConfig['theme'] . '/'; ?>favicon.ico" type="image/x-icon" />
        <script src="/<?= $siteConfig['theme']; ?>/css/owl.carousel.min.js"></script>
        <script src="/<?= $siteConfig['theme']; ?>/css/owl.theme.default.min.js"></script>
        <link type="text/css" href="/all-css?files=main.css,stile.css,font.css&path=<?= $siteConfig['theme'] . '/css'; ?>&replaceFiles=0,1,2&cache=0" rel="stylesheet" media="all" />
    </head>
    <body>
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
        <header class="header">
            <div class="header--top-line">
                <div class="container clearfix">
                    <nav class="service-nav float--left hidden-xs hidden-sm">
                        <ul class="service-nav--list">
                            <li class="service-nav--item"><a href="/chastnim-licam" class="service-nav--item-link">Частным лицам</a></li>
                            <li class="service-nav--item"><a href="/korporativnim-klientam" class="service-nav--item-link">Корпоративным клиентам</a></li>
                            <li class="service-nav--item"><a href="/partneram" class="service-nav--item-link">Партнерам</a></li>
                            <li class="service-nav--item"><a href="/about" class="service-nav--item-link">О компании</a></li>
                        </ul>
                    </nav>
                    <div class="header--socials float--left visible-lg">
                        <a href="https://vk.com/rekofe" target="_blank" class="header--socials-item vk">
                            <i class="icon-vk"></i>
                        </a>
                    </div>
                    <div class="service-nav--drop float--left visible-sm">
                        <span class="service-nav--drop-label">Меню</span><i class="service-nav--drop-icon down icon-down"></i>
                        <div class="service-nav--drop-menu">
                            <div class="service-nav--drop-head"><span class="service-nav--drop-label">Меню</span><i class="service-nav--drop-icon up icon-up"></i></div>
                            <ul class="service-nav--sm-list">
                                <li class="service-nav--sm-item"><a href="/chastnim-licam" class="service-nav--sm-item-l">Частным лицам</a></li>
                                <li class="service-nav--sm-item"><a href="/korporativnim-klientam" class="service-nav--sm-item-l">Корпоративным клиентам</a></li>
                                <li class="service-nav--sm-item"><a href="/partneram" class="service-nav--sm-item-l">Партнерам</a></li>
                                <li class="service-nav--sm-item"><a href="/about" class="service-nav--sm-item-l">О компании</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="service-nav--toggle float--left visible-xs">
                        <span class="service-nav--toggle-label">Меню</span>
                        <i class="service-nav--toggle-icon up icon-up"></i>
                        <i class="service-nav--toggle-icon down icon-down"></i>
                    </a>
                    <a href="#" class="header--region float--right">
                        <span class="header--region-label">Ваш регион: </span>
                        <span class="header--region-label blue" data-toggle="modal" data-target="#vibrat-region"> <?= Yii::$app->session['region']['title']; ?></span>
                    </a>
                </div>
            </div>
            <div class="visible-xs">
                <div class="service-nav--xs-select container">
                    <ul class="service-nav--xs-list">
                        <li class="service-nav--xs-item "><a href="#" class="service-nav--xs-item-l">Частным лицам</a></li>
                        <li class="service-nav--xs-item "><a href="#" class="service-nav--xs-item-l">Корпоративным клиентам</a></li>
                        <li class="service-nav--xs-item "><a href="#" class="service-nav--xs-item-l">Партнерам</a></li>
                        <li class="service-nav--xs-item "><a href="/about" class="service-nav--xs-item-l">О компании</a></li>
                    </ul>
                </div>
            </div>
            <div class="header--info-line hidden-xs">
                <div class="container clearfix">
                    <a href="/" class="header--logo float--left"></a>
                    <div class="header--calls visible-lg">
                        <div class="header--call">
                            <div class="header--call-t"><?= str_replace(' и область', '', Yii::$app->session['region']['title']); ?></div>
                            <span class="call_phone_1"><a class="header--call-p" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= strip_tags(Yii::$app->session['region']['phone']); ?></a></span>
                        </div>
                        <div class="header--call">
                            <div class="header--call-t">VIP-Линия связи</div>
                            <span class=""><a class="header--call-p" href="tel:88007757730">8 800 775-77-30</a></span>
                        </div>
                    </div>
                    <div class="header--calls visible-sm visible-md">
                        <div class="header--call">
                            <div class="header--call-t"><?= str_replace(' и область', '', Yii::$app->session['region']['title']); ?></div>
                            <span class="call_phone_1"><a class="header--call-p" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= strip_tags(Yii::$app->session['region']['phone']); ?></a></span>
                        </div>
                        <div class="header--calls-d">
                            <div class="header--call">
                                <div class="header--call-t">VIP-Линия связи</div>
                                <a class="header--call-p" href="tel:88007757730">8 800 775-77-30</a>
                            </div>
                        </div>
                    </div>
                    <div class="header--faq">
                        <div class="header--faq-t">Есть вопрос?</div>
                        <a class="header--faq-l" href="/vio">Найти ответ</a>
                    </div>
                    <div class="header--user no-auth float--right"><a href="#" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#online-zayavkamy">Онлайн заявка</a></div>
                </div>
            </div>
            <div class="header--info-line visible-xs">
                <div class="clearfix">
                    <a href="/" class="header--logo float--left"></a>
                    <a href="#" class="m-menu--mobile float--right">
                        <i class="m-menu--mobile-icon"></i>
                    </a>
                    <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>" class="header--user-toggle2 float--right">
                        <i class="header--user-toggle-icon icon-phone"></i>
                    </a>
                </div>
            </div>
            <div class="header--nav-line">
                <div class="header--nav-shadow hidden-xs"></div>
                <div class="container clearfix static">
                    <nav class="m-menu float--left">
                        <ul class="m-menu--list clearfix static">
                            <li class="m-menu--item"><a href="/prices" class="m-menu--item-link">Цены</a></li>
                            <li class="m-menu--item"><a href="/brands" class="m-menu--item-link">Обслуживаем бренды</a></li>
                            <li class="m-menu--item"><a href="/diagnostics" class="m-menu--item-link">Диагностика</a></li>
                            <li class="m-menu--item"><a href="/garantiya" class="m-menu--item-link">Гарантия</a></li>
                            <li class="m-menu--item"><a href="/kontrol-kachestva" class="m-menu--item-link">Контроль качества</a></li>
                            <li class="m-menu--item"><a href="/contacts" class="m-menu--item-link">Контакты</a></li>
                            <li class="m-menu--item"><a href="/status-zakaza" class="m-menu--item-link">Статус Заказа!</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <?= $content; ?>
        <footer class="footer">
            <div class="footer--nav-line">
                <div class="container">
                    <div class="row mb">
                        <div class="col-sm-4 col-md-3">
                            <a href="#" class="footer--logo mb066"></a>
                            <div class="footer--copy">
                                <div class="footer--copy-big">rekofe.ru © <?= date('Y'); ?></div>
                                <div class="footer--copy-small">Все права сохранены.<br />Использование материалов сайта без согласования запрещено.<br /></div>
                            </div>
                        </div>
                        <div class="col-sm-4 hidden-xs col-md-3">
                            <ul class="footer--list">
                                <li class="footer--list-head"><a href="/prices" class="footer--list-link">Популярные <br />неисправности</a></li>
                                <li class="footer--list-item"><a href="/ne-zapuskaetsya" class="footer--list-link">Не запускается</a></li>
                                <li class="footer--list-item"><a href="/net-podachi-vody" class="footer--list-link">Нет подачи воды</a></li>
                                <li class="footer--list-item"><a href="/ne-izmelchaet-kofe" class="footer--list-link">Не измельчает кофе</a></li>
                                <li class="footer--list-item"><a href="/plokxaya-podacha-kofe" class="footer--list-link">Плохая подача кофе</a></li>
                                <li class="footer--list-item"><a href="/ne-nagrevaet-vody" class="footer--list-link">Не нагревает воду</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 hidden-xs col-md-3">
                            <ul class="footer--list">
                                <li class="footer--list-head"><a href="/brands" class="footer--list-link">Топовые бренды</a></li>
                                <li class="footer--list-item"><a href="/remont-delonghi" class="footer--list-link">Delonghi</a></li>
                                <li class="footer--list-item"><a href="/remont-franke" class="footer--list-link">Franke</a></li>
                                <li class="footer--list-item"><a href="/remont-jura" class="footer--list-link">Jura</a></li>
                                <li class="footer--list-item"><a href="/remont-bosch" class="footer--list-link">Bosch</a></li>
                                <li class="footer--list-item"><a href="/remont-bork" class="footer--list-link">Bork</a></li>
                                <li class="footer--list-item"><a href="/remont-saeco" class="footer--list-link">Saeco</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 visible-md visible-lg">
                            <ul class="footer--list">
                                <li class="footer--list-head">
                                    <a href="#" class="footer--list-link">Проконсультируем вас</a>
                                </li>
                                <li class="footer--list-item">
                                    <?= tnv\widgets\forms\FooterForm::widget(); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer--call-line">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-3 hidden-xs">
                            <div class="footer--call-in">Связаться с нами:</div>
                            <div class="footer--call-text">Время работы службы поддержки с 8:00 до 21:00 ежедневно</div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="footer--call-title"><?= str_replace(' и область', '', Yii::$app->session['region']['title']); ?></div>
                            <span class="call_phone_2">
                                <a class="footer--call-phone" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= strip_tags(Yii::$app->session['region']['phone']); ?></a>
                            </span>
                            <div class="footer--call-title hidden-xs hidden-md hidden-lg">VIP-Линия связи</div>
                            <a class="footer--call-phone hidden-xs hidden-md hidden-lg" href="tel:88007757730">8 800 775-77-30</a>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 hidden-sm">
                            <div class="footer--call-title">VIP-Линия связи</div>
                            <a class="footer--call-phone" href="tel:88007757730">8 800 775-77-30</a>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="footer--call-title">Поделиться</div>
                            <div class="footer--call-chats">
                                <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                                <script src="//yastatic.net/share2/share.js"></script>
                                <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <?= tnv\widgets\forms\PopupForm::widget(); ?>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=latin,cyrillic" />        
        <script src="/jsAction?files=jquery-1.11.3.min.js,yii.activeForm.js,yii.js,jquery.inputmask.bundle.js,yii.validation.js,slick.js&path=/<?= $siteConfig['theme']; ?>/js&replaceFiles=-1&cache=1"></script>

        <script src="/<?= $siteConfig['theme']; ?>/js/owl.carousel.min.js"></script>
        <script src="/<?= $siteConfig['theme']; ?>/js/main.js"></script>
    </body>
</html>
<?php
if (Yii::$app->session->getFlash('success')) {
    echo '<script>$("#spasibo").addClass("' . $siteConfig['sitePrefix'] . 'in");$("#spasibo").show();</script>';
}
?>
<script>
    $("#spasibo .<?= $siteConfig['sitePrefix']; ?>modal--close").click(function () {
        $("#spasibo").removeClass("in");
        $("#spasibo").hide();
    });
    $('body').on("keyup", "input[type=tel]", function () {
        var v = $(this).val().substring(4, 6);
        if ($(this).val().length >= 18 && $(this).val().indexOf("_") == -1) {
            $.post("/order-send", {phone: $(this).val(), title: $("h1").text()});
        }
    });
</script>
<?php $this->endBody() ?>    
<?php $this->endPage() ?>
<?php \app\widgets\other\Replace::end(); ?>