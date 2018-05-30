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
$isServicesPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'services' ? true : false;
$isModelsPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'all-models' ? true : false;
$isContactPage = Yii::$app->controller->id == 'contact' && Yii::$app->controller->action->id == 'index' ? true : false;
$isPage = Yii::$app->controller->id == 'page' && Yii::$app->controller->action->id == 'view' ? true : false;
$siteConfig = app\components\CController::getSiteConfig();
$js = app\components\CController::$js;
$bodyClass = 'home';
if($isServicePage) 
    $bodyClass = 'fault';
elseif($isServicesPage || $isModelsPage || $isContactPage || $isPage)
    $bodyClass = 'page';

?>
<?php \app\widgets\other\Replace::begin(['params' => $siteConfig]); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <meta content="width=device-width, initial-scale=1" name=viewport>
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link href="<?= $assets . $siteConfig['theme']; ?>/img/brands/<?= $siteConfig['sitePrefix']; ?>/favicon-16.png" rel=icon sizes=16x16 type=image/png>
        <link href="/cssAction?file=<?= $assets . $siteConfig['theme']; ?>/css/main.css&cache=0" rel=stylesheet>
        <link href="/cssAction?file=/<?= $siteConfig['theme']; ?>/css/brands/<?= $siteConfig['sitePrefix']; ?>/<?= $siteConfig['sitePrefix']; ?>.css&cache=0" rel=stylesheet>   
    </head>
    <body class="brand-<?= $siteConfig['sitePrefix']; ?> template-<?= $bodyClass; ?>">
        <?php $this->beginBody() ?>
        <header class="header">
            <div class="d-lg-none d-md-block d-none header__nav-tablet">
                <div class="container">
                    <div class="col-12">
                        <nav>
                            <li>
                                <a href="/price-list">Прайс-лист</a>
                            </li>
                            <li>
                                <a href="/models">Модели <?= app\components\CController::$monoBrand['title']; ?></a>
                            </li>
                            <li>
                                <a href="/contacts">Контакты</a>
                            </li>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="align-self-center col-4 col-lg-9 text-md-left">
                        <a class="d-md-none header__mobile mr-3" data-target=".header__nav-mobile" data-toggle="collapse" href="#">
                            <img alt="Навигация" src="<?= $assets . $siteConfig['theme']; ?>/img/icons/nav-mobile.png"> 
                        </a>
                        <a class="header__logo" href="/">
                            <img alt="Ремонт <?= app\components\CController::$monoBrand['title']; ?>" src="<?= $assets . $siteConfig['theme']; ?>/img/brands/<?= $siteConfig['sitePrefix']; ?>/logo.svg"> 
                        </a>
                        <nav class="header__nav">
                            <li>
                                <a href="/price-list">Прайс-лист</a>
                            </li>
                            <li>
                                <a href="/models">Модели <?= app\components\CController::$monoBrand['title']; ?></a>
                            </li>
                            <li>
                                <a href="/contacts">Контакты</a>
                            </li>
                        </nav>
                    </div>
                    <div class="align-self-center col-8 col-lg-3 text-right">
                        <div class="header__phone">
                            <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>">
                                <span><?= Yii::$app->session['region']['phone']; ?></span>
                            </a>
                        </div>
                        <div class="header__schedule">Ежедневно с 07:00 до 24:00</div>
                    </div>
                    <div class="col-12 d-block d-md-none">
                        <ul class="collapse header__nav-mobile">
                            <li><a href="/price-list">Прайс-лист</a>
                            <li><a href="/models">Модели <?= app\components\CController::$monoBrand['title']; ?></a>
                            <li><a href="/contacts">Контакты</a>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
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
        <footer class="footer">
            <div class="container">
                <div class="align-items-center row">
                    <div class="col-lg-3 col-md-4 d-md-block d-none text-left">
                        <a class="footer__logo" href="/">
                            <img alt="Ремонт <?= app\components\CController::$monoBrand['title']; ?>" src="<?= $assets . $siteConfig['theme']; ?>/img/brands/<?= $siteConfig['sitePrefix']; ?>/logo.svg"> 
                        </a> 
                    </div>
                    <div class="col-lg-6 col-md-4"></div>
                    <div class="col-lg-3 col-md-4 text-center">
                        <div class="footer__phone"><a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><span><?= Yii::$app->session['region']['phone']; ?></span></a> </div>
                    </div>
                </div>
                <div class="footer__divider"></div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 text-center text-md-left">
                        <div class="footer__copyright mb-2"><a href="/"><?= ucfirst($_SERVER['HTTP_HOST']); ?></a> &copy; <?= date('Y'); ?></div>
                    </div>
                    <div class="col-lg-9 col-md-8 text-center text-md-right">
                        <div class="footer__policy">* <a href="/policy" target=_blank>Политика конфиденциальности и обработки персональных данных</a></div>
                    </div>
                </div>
            </div>
        </footer>
        <?= nasa\widgets\forms\Popup::widget(); ?>
        <div class="fade modal" id="modalGood">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body"><button aria-label="Close" class="close" data-dismiss="modal" type=button><span aria-hidden="true">&times;</span> </button>
                        <div class="px-5 py-5">
                            <h3>Спасибо за заявку. </h3>
                            <p>Мы Вам перезвоним в самое ближайшее время!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade"></div>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery-1.11.3.min.js"></script>   
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.activeForm.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery.inputmask.bundle.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.validation.js"></script>
        <script defer src="/jsAction?files=main.js&path=/<?= $siteConfig['theme']; ?>/js&replaceFiles=1&cache=0"></script>
        <?= !empty($js['content']) ? $js['content'] : ''; ?>
        <?php
        if (Yii::$app->session->getFlash('success')) {
            echo '<script>$(".' . $siteConfig['sitePrefix'] . 'modal-backdrop").addClass("' . $siteConfig['sitePrefix'] . 'show"); $("#modalGood").addClass("' . $siteConfig['sitePrefix'] . 'show");</script>';
        }
        ?>
        <script>$('body').on("keyup", "input[type=tel]", function () {
            var v = $(this).val().substring(4, 6);
            if ($(this).val().length >= 18 && $(this).val().indexOf("_") == -1) {
                $.post("/order-send", {phone: $(this).val(), title: $("h1").text()});
            }
        });</script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
<?php \app\widgets\other\Replace::end(); ?>