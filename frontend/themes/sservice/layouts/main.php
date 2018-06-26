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
<!DOCTYPE html>
<html lang="ru">    
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/favicon.ico" type="image/x-icon">
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/styles_8560940ca7.min.css" type="text/css" />
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/font-awesome.min.css" type="text/css" />
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
        <header<?= $isHome ? ' style="background-image: url(\'/' . $siteConfig['theme'] . 'images/back.png\');"' : ' class="noindex"' ?>>
            <div class="wrap2">
                <div class="top_head saeco_head">
                    <div class="menu_link"></div>
                    <div class="logo">
                        <a href="/"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logo.png" alt=""></a>
                    </div>
                    <ul class="menu">
                        <li><a href="#">Все модели</a></li>
                        <li><a href="#">Прайс</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                    <span href="#zakaz" class="zakaz inline">заказать звонок</span>
                    <div class="right">
                        <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>" class="tel"><?= Yii::$app->session['region']['phone']; ?></a>
                        <div class="clr"></div>
                        <p class="time">ПН-ВC c 9.00 до 22.00</p>
                    </div>
                </div>
                <?= $isHome ? sservice\widgets\forms\Main::widget(['pageInfo' => $_GET['data']]) : ''; ?>                
            </div>
        </header>
        <?= $content; ?>
        <footer>
            <div class="wrap2 saeco_footer">
                <a href="/" class="logo saeco">
                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logo.png" alt="saecoservice24.ru">
                </a>
                <div class="line"></div>
                <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>" class="tel"><?= Yii::$app->session['region']['phone']; ?></a>
            </div>
        </footer>
        <div style="display: none">
            <div id="zakaz" style="display: inline-block;">
                <h3>Оставьте заявку <span>Мастер наберет вам в течение одной минуты</span></h3>
                <form action="#" method="post" class="zayavka ajax_form">
                    <input type="tel" name="phone" id="phone" class="phone" placeholder="Ваш телефон">
                    <button type="submit">Заказать звонок</button>
                    <span>Нажимая на кнопку «Заказать звонок»,
                        вы даете  согласие на обработку своих
                        персональных данных</span>
                </form>
            </div>
            <a href="#thanks" class="thanks inline"></a>
            <div id="thanks">
                <h3>Спасибо за заявку <span>Мы перезвоним Вам в ближайшее время</span></h3>
            </div>
        </div>
        <?= !empty($js['content']) ? $js['content'] : ''; ?>
        <?php
        if (Yii::$app->session->getFlash('success')) {
            echo '<script>$(".' . $siteConfig['sitePrefix'] . 'modal-backdrop").addClass("' . $siteConfig['sitePrefix'] . 'show"); $("#modalGood").addClass("' . $siteConfig['sitePrefix'] . 'show");</script>';
        }
        ?>
        <script>$("form").each(function () {$(this).append("<input type=\"hidden\" name=\"h1\" value=\"" + $("h1").text() + "\">")});$('body').on("keyup", "input[type=tel]", function () {if ($(this).val().length >= 18 && $(this).val().indexOf("_") == -1) {$.post("/order-send", {phone: $(this).val(), title: $("h1").text()});}});</script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>