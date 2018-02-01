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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="icon" type="image/png" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/favicon-16x16.png" sizes="16x16" />
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/slick-slider.min.css" rel="stylesheet">
        <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/flipclock.min.css" rel="stylesheet">
        <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/main.min.css" rel="stylesheet">
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery.ajax-order.js"></script>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/request.js"></script>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/configurator.js"></script>
    </head>
    <body>
        <?= $content; ?>
        <section class="contacts clearfix" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-xs-24">
                        <div class="form-block form-block__order">
                            <div class="address">
                                <a class="address_phone" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                                <p class="address_location"></p>
                                <div class="address_claim">Бесплатный выезд курьеров по всей Москве + 15 км за МКАД</div>
                            </div>
                            <div class="form dark">
                                <form class="request-form" action="/request/request/" method="post">
                                    <ul>
                                        <li><label for="id_name">Ваше имя</label><input type="text" name="name" id="id_name" placeholder="Ваше имя" maxlength="128" /></li>
                                        <li><label for="id_phone">Телефон</label><input type="text" name="phone" id="id_phone" placeholder="Телефон" required maxlength="15" /></li>
                                    </ul>
                                    <input type="submit" value="Перезвоните мне"/>
                                    <p class="response-message"></p>
                                    <p class="form-policy">
                                        Нажимая на кнопку «Перезвоните мне», вы подтверждаете своё совершеннолетие и соглашаетесь на обработку
                                        персональных данных в соответствии с <a href="#">условиями</a>.
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map" id="map" style="background-position-x: 35%; background-size: cover"></div>
        </section>
        <!-- contacts -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-24">
                        <a href="#" class="footer-logo">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/logo.png" alt="">
                        </a>
                        <span class="slogan slogan__footer">— Ремонт кофемашин в Москве</span>
                    </div>
                </div>
            </div>
        </footer>
        <div id="modalOrder" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalOrder" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button class="modal-close" type="button" data-dismiss="modal">x</button>
                    <div class="form form__request transparent">
                        <h3 class="title title__3 light">Заказать ремонт</h3>
                        <p class="form_claim" style="color:#fff">Оставьте свои данные и наш менеджер свяжется с вами в течение 2 минут</p>
                        <form class="request-form" action="/request/request/" method="post">
                            <ul>
                                <li><label for="id_name">Ваше имя</label><input type="text" name="name" id="id_name" placeholder="Ваше имя" maxlength="128" /></li>
                                <li><label for="id_phone">Телефон</label><input type="text" name="phone" id="id_phone" placeholder="Телефон" required maxlength="15" /></li>
                            </ul>
                            <input type="submit" value="Перезвоните мне"/>
                            <p class="response-message"></p>
                            <p class="form-policy">
                                Нажимая на кнопку «Перезвоните мне», вы подтверждаете своё совершеннолетие и соглашаетесь на обработку
                                персональных данных в соответствии с <a href="#">условиями</a>.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/app.min.js"></script>
    </body>
</html>