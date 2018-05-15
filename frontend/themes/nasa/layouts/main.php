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
<html>
    <head>
        <meta charset=utf-8>
        <meta content="width=device-width, initial-scale=1" name=viewport>
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link href="<?= $assets . $siteConfig['theme']; ?>/img/brands/delonghi/favicon-32.png" rel=icon sizes=32x32 type=image/png>
        <link href="<?= $assets . $siteConfig['theme']; ?>/img/brands/delonghi/favicon-16.png" rel=icon sizes=16x16 type=image/png>
        <link href="<?= $assets . $siteConfig['theme']; ?>/css/delonghi.main.css" rel=stylesheet>        
    </head>
    <body class="brand-delonghi template-<?= $isServicePage ? 'fault' : 'home'; ?>">
        <?php $this->beginBody() ?>
        <header class=header>
            <div class="d-lg-none d-md-block d-none header__nav-tablet">
                <div class=container>
                    <div class=col-12>
                        <nav>
                            <li>
                                <a href=http://delonghi.kofemashini.com/pricelist/>Прайс-лист</a>
                            <li>
                                <a href=http://delonghi.kofemashini.com/models/>Модели <?= app\components\CController::$monoBrand['title']; ?></a>
                            <li>
                                <a href=http://delonghi.kofemashini.com/contacts/>Контакты</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class=container>
                <div class=row>
                    <div class="align-self-center col-4 col-lg-9 text-md-left">
                        <a class="d-md-none header__mobile mr-3" data-target=.header__nav-mobile data-toggle=collapse href=#>
                            <img alt=Навигация src="<?= $assets . $siteConfig['theme']; ?>/img/icons/nav-mobile.png"> 
                        </a>
                        <a class=header__logo href=index.html>
                            <img alt="Ремонт DeLonghi" src="<?= $assets . $siteConfig['theme']; ?>/img/brands/delonghi/logo.png"> 
                        </a>
                        <nav class=header__nav>
                            <li>
                                <a href=http://delonghi.kofemashini.com/pricelist/>Прайс-лист</a>
                                </li>
                            <li>
                                <a href=http://delonghi.kofemashini.com/models/>Модели <?= app\components\CController::$monoBrand['title']; ?></a>
                            <li>
                                <a href=http://delonghi.kofemashini.com/contacts/>Контакты</a>
                        </nav>
                    </div>
                    <div class="align-self-center col-8 col-lg-3 text-right">
                        <div class=header__phone>
                            <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>">
                                <span><?= Yii::$app->session['region']['phone']; ?></span>
                            </a>
                        </div>
                        <div class=header__schedule>Ежедневно с 07:00 до 24:00</div>
                    </div>
                    <div class="col-12 d-block d-md-none">
                        <ul class="collapse header__nav-mobile">
                            <li><a href=http://delonghi.kofemashini.com/pricelist/>Прайс-лист</a>
                            <li><a href=http://delonghi.kofemashini.com/models/>Модели <?= app\components\CController::$monoBrand['title']; ?></a>
                            <li><a href=http://delonghi.kofemashini.com/contacts/>Контакты</a>
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
        <footer class=footer>
            <div class=container>
                <div class="align-items-center row">
                    <div class="col-lg-3 col-md-4 d-md-block d-none text-left">
                        <a class=footer__logo href=index.html>
                            <img alt="Ремонт DeLonghi" src="<?= $assets . $siteConfig['theme']; ?>/img/brands/delonghi/logo.png"> 
                        </a> 
                    </div>
                    <div class="col-lg-6 col-md-4"></div>
                    <div class="col-lg-3 col-md-4 text-center">
                        <div class=footer__phone><a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><span><?= Yii::$app->session['region']['phone']; ?></span></a> </div>
                    </div>
                </div>
                <div class=footer__divider></div>
                <div class=row>
                    <div class="col-lg-3 col-md-4 text-center text-md-left">
                        <div class="footer__copyright mb-2"><a href="/"><?= ucfirst($_SERVER['HTTP_HOST']); ?></a> &copy; <?= date('Y'); ?></div>
                    </div>
                    <div class="col-lg-9 col-md-8 text-center text-md-right">
                        <div class=footer__policy>* <a href=http://delonghi.kofemashini.com/policy/ target=_blank>Политика конфиденциальности и обработки персональных данных</a></div>
                    </div>
                </div>
            </div>
        </footer>
        <div aria-hidden=true aria-labelledby=modalOrder class="fade modal" id=modalOrder role=dialog tabindex=-1>
            <div class="modal-dialog modal-dialog-centered" role=document>
                <div class=modal-content>
                    <div class=modal-body><button aria-label=Close class=close data-dismiss=modal type=button><span aria-hidden=true>&times;</span> </button>
                        <div class="px-5 py-5">
                            <h3>Заказ ремонта кофемашины</h3>
                            <p>Введите Ваш номер телефона. Мы свяжемся с Вами в течение 2 минут.
                            <form action=http://delonghi.kofemashini.com/order.php class=form-order method=post>
                                <div class="form-group mb-md-4">
                                    <input class=form-control name=phone placeholder="Номер телефона *" required type=tel> 
                                </div> 
                                <button class="btn btn-block btn-primary" type=submit>Заказать ремонт</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div aria-hidden=true aria-labelledby=modalPromo class="fade modal" id=modalPromo role=dialog tabindex=-1>
            <div class="modal-dialog modal-dialog-centered" role=document>
                <div class=modal-content>
                    <div class=modal-body><button aria-label=Close class=close data-dismiss=modal type=button><span aria-hidden=true>&times;</span> </button>
                        <div class="px-5 py-5">
                            <h3>Дарим 25% скидку на ремонт кофемашины</h3>
                            <p>Просто введите Ваш номер телефона и мы свяжемся с Вами в течение 2 минут.
                            <form action=http://delonghi.kofemashini.com/order.php class=form-order method=post>
                                <div class="form-group mb-md-4">
                                    <input class=form-control name=phone placeholder="Номер телефона *" required type=tel> 
                                </div> 
                                <button class="btn btn-block btn-primary" type=submit>Заказать ремонт</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery-1.11.3.min.js"></script>   
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.activeForm.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery.inputmask.bundle.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.validation.js"></script>
        <script defer src="<?= $assets . $siteConfig['theme']; ?>/js/main.js"></script>
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