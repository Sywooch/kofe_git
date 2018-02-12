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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/png" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/favicon-16x16.png" sizes="16x16" />
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/slick-slider.min.css" rel="stylesheet" />
        <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/flipclock.min.css" rel="stylesheet" />
        <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/normalize.css" rel="stylesheet" />
        <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/main.min.css?v=3" rel="stylesheet" />
    </head>
    <body <?= $isHome ? 'class="gl-st"' : ''; ?>>
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
        <?= $content; ?>
        <section class="contacts clearfix" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-sx-24">
                        <h2 class="title title__2">Ремонт кофемашин в Москве</h2>
                        <div class="reviews-list" id="reviews-slider2">
                            <div class="review">
                                <a href="/aviamotornaya"> Авиамоторная</a>
                                <a href="/avtozavodskaya"> Автозаводская</a>
                                <a href="/akademicheskaya"> Академическая</a>
                                <a href="/alekseevskaya"> Алексеевская</a>
                                <a href="/alma-atinskaya"> Алма атинская</a>
                                <a href="/altufevo"> Алтуфьево</a>
                                <a href="/annino"> Аннино</a>
                                <a href="/arbatskaya"> Арбатская</a>
                                <a href="/aehroport"> Аэропорт</a>
                                <a href="/babushkinskaya"> Бабушкинская</a>
                                <a href="/bagrationovskaya"> Багратионовская</a>
                                <a href="/barrikadnaya"> Баррикадная</a>
                                <a href="/baumanskaya"> Бауманская</a>
                                <a href="/begovaya"> Беговая</a>
                                <a href="/belorusskaya"> Белорусская</a>
                            </div>    
                            <div class="review">
                                <a href="/belyaevo"> Беляево</a>
                                <a href="/bibirevo"> Бибирево</a>
                                <a href="/bitcevskij-park"> Битцевский парк</a>
                                <a href="/borisovo"> Борисово</a>
                                <a href="/borovickaya"> Боровицкая</a>
                                <a href="/bratislavskaya"> Братиславская</a>
                                <a href="/bulvar-ushakova"> Бульвар ушакова</a>
                                <a href="/buninskaya-alleya"> Бунинская аллея</a>
                                <a href="/varshavskaya"> Варшавская</a>
                                <a href="/vdnh"> ВДНХ</a>
                                <a href="/vladykino"> Владыкино</a>
                                <a href="/vodnyj-stadion"> Водный стадион</a>
                                <a href="/vojkovskaya"> Войковская</a>
                                <a href="/volzhskaya"> Волжская</a>
                                <a href="/volokolamskaya"> Волоколамская</a>
                            </div>
                            <div class="review">
                                <a href="/vorobevy-gory"> Воробьевы горы</a>
                                <a href="/vystavochnaya"> Выставочная</a>
                                <a href="/vyhino"> Выхино</a>
                                <a href="/delovoj-centr"> Деловой центр</a>
                                <a href="/dinamo"> Динамо</a>
                                <a href="/dmitrovskaya"> Дмитровская</a>
                                <a href="/dobryninskaya"> Добрынинская</a>
                                <a href="/domodedovskaya"> Домодедовская</a>
                                <a href="/dostoevskaya"> Достоевская</a>
                                <a href="/dubrovka"> Дубровка</a>
                                <a href="/zhulebino"> Жулебино</a>
                                <a href="/zyablikovo"> Зябликово</a>
                                <a href="/izmajlovskaya"> Измайловская</a>
                                <a href="/kaluzhskaya"> Калужская</a>
                                <a href="/kantemirovskaya"> Кантемировская</a>
                            </div>    
                            <div class="review">
                                <a href="/kahovskaya"> Каховская</a>
                                <a href="/kashirskaya"> Каширская</a>
                                <a href="/kievskaya"> Киевская</a>
                                <a href="/kitaj-gorod"> Китай город</a>
                                <a href="/kozhuhovskaya"> Кожуховская</a>
                                <a href="/kolomenskaya"> Коломенская</a>
                                <a href="/komsomolskaya"> Комсомольская</a>
                                <a href="/konkovo"> Коньково</a>
                                <a href="/kotelniki"> Котельники</a>
                                <a href="/krasnoselskaya"> Красносельская</a>
                                <a href="/krasnye-vorota"> Красные ворота</a>
                                <a href="/kropotkinskaya"> Кропоткинская</a>
                                <a href="/krylatskoe"> Крылатское</a>
                                <a href="/kuzneckij-most"> Кузнецкий мост</a>
                                <a href="/kuzminki"> Кузьминки</a>
                            </div>                 
                        </div>
                    </div>
                </div>
            </div>
            <div class="map" id="map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A496902849869d51c2dc34829147ee2552994e4c0139c9a80e69bbcc29ece9056&amp;source=constructor" width="100%" height="510" frameborder="0"></iframe>
            </div>
        </section>
        <!-- contacts -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-24">
                        <h4 class="subtitle">О НАС</h4>
                        <p>Устраним любую проблему и выполним ремонт кофемашины максимально быстро и по низкой цене. Команда специалистов работает каждый день, без выходных и праздников.</p>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-24">
                        <h4 class="subtitle">ТИПИЧНЫЕ НЕИСПРАВНОСТИ</h4>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-24">
                                <a href="/ne-nalivaet-kofe">Не наливает кофе</a>
                                <a href="/ne-vklyuchaetsya">Не включается</a>
                                <a href="/ne-greet-vodu">Не греет воду</a>
                                <a href="/protekaet">Протекает</a>
                                <a href="/ne-podaet-vodu">Не подает воду</a>
                            </div>
                            <div class="col-lg-12 col-md-12 hidden-sm">
                                <a href="/plokho-techet-kofe">Плохо течет кофе</a>
                                <a href="/ne-delaet-kofe">Не делает кофе</a>
                                <a href="/vydaet-oshibku">Выдает ошибку</a>
                                <a href="/ne-delaet-penu">Не делает пену</a>
                                <a href="/kofe-slabyi-i-nevkusnyi">Кофе слабый и невкусный</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-24">
                        <h4 class="subtitle">КОНТАКТНАЯ ИНФОРМАЦИЯ</h4>
                        <p>г. Москва, м. Маяковская, Оружейный переулок, 13С2</p>
                        <a class="footer-tel" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                    </div>
                </div>
                <hr style="border-color: rgba(165, 165, 165, 0.1)">
                <div class="row">
                    <div class="col-xs-24">
                        <p>Сервисный центр <?= ucfirst($_SERVER['HTTP_HOST']); ?> <?= date('Y'); ?> © - Качественный ремонт кофемашин в Москве и Области!</p>
                    </div>
                </div>
            </div>
        </footer>
        <div id="kmacb" class="hidden-sm">
            <button class="kmacb-form fancy-btn open hidden-sm">
                <div class="kmacb-circle"></div>
                <div class="kmacb-circle-fill"></div>
                <div class="kmacb-img-circle"></div>
            </button>
        </div>
        <?= professionals\widgets\forms\PopupForm::widget(); ?>
		<?= !empty($js['content']) ? $js['content'] : ''; ?>
    </body>
</html>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery-1.11.3.min.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.activeForm.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery.inputmask.bundle.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.validation.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery-ui.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/flipclock.min.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/slick.min.js"></script>
<script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/app.min.js?v=2"></script>
<?php
if (Yii::$app->session->getFlash('success')) {
    echo '<script>$(".popup.popup_request_full").addClass("popup_active");</script>';
}
?>
<script>$("form").each(function () {
        $(this).append("<input type=\"hidden\" name=\"h1\" value=\"" + $("h1").text() + "\">")
    });</script>
<?php $this->endBody() ?>    
<?php $this->endPage() ?>