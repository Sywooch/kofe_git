<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
$assets = Yii::getAlias('@web');
$isHome = Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index' ? true : false;
$isModelPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'model' ? true : false;
$isBrandPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'brand' ? true : false;
$siteConfig = app\components\CController::getSiteConfig();
if ($siteConfig['mono'])
    $mono_brand = \app\components\CController::$monoBrand;
$js = app\components\CController::$js;
?>
<?php \app\widgets\other\Replace::begin(['params' => $siteConfig]); ?>
<!DOCTYPE html>
<html lang="ru"> 
    <head>  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="icon" type="image/x-icon" href="<?= $assets ?>/favicon.ico">

<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lte IE 7]><script src="js/IE8.js" type="text/javascript"></script><![endif]-->
        <!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->
        <style>
<?= file_get_contents(Yii::getAlias('@frontend') . '/web/' . $siteConfig['sitePrefix'] . 'css/' . $siteConfig['sitePrefix'] . 'all.css'); ?>
            #banner ul {list-style-type: disc;
                        padding-left: 20px;
                        margin-bottom: 10px;
            }#ask2 .container p {font-size: 24px;} #banner h2, #banner h3 {font-family: "NeuronExtraBold",cursive;clear: both;padding-top: 15px;margin: 0px;}#banner p {font-size: 15px;float: none;clear: both;margin-bottom: 15px;}
            #brands .owl-stage .owl-item {
                max-width: 135px ! important;
            }
        </style>
    </head>    
    <body id="index" class="home <?= $siteConfig['sitePrefix']; ?><?= $isHome ? ' video' : ''; ?><?= $isModelPage || $isBrandPage ? ' banners' : ''; ?><?= $isModelPage ? ' model-page' : ''; ?>">
        <img style="opacity: 0;width:100%;height:100%;position: absolute;z-index: -999999999;left: 0px;top: 0px;" src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>coffee_machine.png" alt="">
        <img style="opacity: 0;width:100%;height:100%;position: absolute;z-index: -999999999;left: 0px;top: 0px;" src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>contectbg2.jpg" alt="">
        <img style="opacity: 0;width:100%;height:100%;position: absolute;z-index: -999999999;left: 0px;top: 0px;" src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>bgsale.jpg" alt="">
        <?php $this->beginBody() ?>
        <?php if ($isHome): ?>
            <div class="bg-all">
                <?php if (in_array($siteConfig['category_id'], [2])): ?><div id="particles-js"></div><?php endif; ?>
                <?php if (in_array($siteConfig['category_id'], [4])): ?>
                    <div id="signals">
                        <span class="signal s1"></span>
                        <span class="signal s2"></span>
                        <span class="signal s3"></span>
                        <span class="signal s4"></span>
                        <span class="signal s5"></span>
                        <span class="signal s6"></span>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <?php if ($isHome && isset($siteConfig['spb-multi'])): ?>  
                <img src="/uploads/images/bg-header-video.jpg"/>                
                <video poster="" id="bgvid" playsinline autoplay muted loop>
                    <source src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>video/<?= $siteConfig['sitePrefix']; ?>.webm" type="video/webm">
                    <source src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>video/<?= $siteConfig['sitePrefix']; ?>.mp4" type="video/mp4">
                </video>
            <?php endif; ?>
            <?php if (!$siteConfig['mono']): ?>  
                <section id="top">
                    <div class="container">
                        <ul>
                            <li>Работаем без выходных с 08:00 до 22:00</li>
                            <li class="selected-region">Ваш город: <span class="select-region"><?= Yii::$app->session['region']['title']; ?></span></li>
                        </ul>
                    </div>
                </section>
            <?php endif; ?>
            <section id="header" class="wow bounceInUp ">
                <div class="container">
                    <div class="logo">
                        <?php if (isset($siteConfig['change-logo'])): ?> 
                            <?php if ($isHome): ?><a href="/"><img src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>logo-footer.svg" alt="<?= app\components\CController::$category['full_title']; ?>"></a><?php endif; ?>
                            <?php if (!$isHome): ?><a href="/"><img src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>logo.svg" alt="<?= app\components\CController::$category['full_title']; ?>"></a><?php endif; ?>
                        <?php else: ?>
                            <a href="/"><img src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>logo.svg" alt="<?= app\components\CController::$category['full_title']; ?>"></a>
                        <?php endif; ?>
                    </div>
                    <?php if ($isModelPage || $isBrandPage): ?>
                        <div class="logo-breand">
                            <?php
                            if ($isModelPage) {
                                $sql = 'select image, title from {{%pages}} where id = ' . (int) $_GET['data']['parent'] . ' and active = 1 limit 1';
                                $brand = \Yii::$app->db->createCommand($sql)->queryOne();
                            }
                            ?>
                            <span class="brand-title"><?= $isModelPage ? $brand['title'] : $_GET['data']['title'] ?></span>                        
                        </div>
                    <?php endif; ?>
                    <div class="mobile-menu">
                        <div class="nav-icon2">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="nav">
                        <ul>
                            <li><a href="/uslugi-i-ceny"><?= $siteConfig['mono'] ? 'Прайс-лист' : 'Услуги и цены' ?></a></li>
                            <li><a href="/o-kompanii">О компании</a></li>                        
                            <?php if ($siteConfig['mono']): ?><li><a href="/models">Модели <?= app\components\CController::$monoBrand['title']; ?></a></li><?php else: ?><li><a href="/brendy">Все бренды</a></li><?php endif; ?>
                            <li><a href="/kontakty">Контакты</a></li>
                        </ul>
                    </div>
                    <div>
                        <div class="tel">
                            <a class="phone <?= Yii::$app->session['region']['class']; ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                        </div>                        
                        <div class="clear"></div>
                        <span class="time-work"><span>Ежедневно</span> с 08:00 до 22:00</span>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
            <?php if ($siteConfig['category_id'] == 7): ?>
                <div class="container mobi-tels colorborder">
                    <a class="mobi-numbers colortext" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                    <span class="mobi-time colortext">Ежедневно с 08:00 до 22:00</span>
                </div>
            <?php endif; ?>
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

            <?php
            if ($isHome || (isset($_GET['data']) && $_GET['data']['url'] == 'o-kompanii') || (isset($_GET['data']) && $_GET['data']['url'] == 'kontakty'))
                echo \app\widgets\lists\Reviews::widget();
            ?>

            <?php if ($siteConfig['mono']): ?>
                <section id="ask2">
                    <div class="container colorbg">
                        <div class="img"><img src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>coffee_machine.png" alt=""></div>
                        <div class="info">
                            <div class="h2">
                                Не нашли свою поломку?
                            </div>
                            <p id="ask-text">Свяжитесь с нами по телефону <b><?= Yii::$app->session['region']['phone']; ?></b> <br>или закажите бесплатную консультацию.</p>
                            <div class="clear"></div>
                            <?= \app\widgets\forms\CallBack::widget(['metrika' => 'home_order_button', 'id' => 'ne-nashli']); ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                </section>
            <?php endif; ?>

            <?php if ($siteConfig['mono']): ?>
                <section id="garantiya">
                    <div class="container">
                        <div class="img">
                            <img src="/images/garantiya.jpg" alt="">
                            <div class="logos"><img src="/brendlogo/<?= $siteConfig['sitePrefix']; ?>logo.svg" alt=""></div>
                        </div>
                        <div class="text">
                            <div class="h2">Гарантия до 365 дней на ремонт и запчасти</div>
                            <p>Дадим железобетонную гарантию на произведенный ремонт и замененные комплектующие. Работаем на свою репутацию и на Ваши рекомендации!</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </section>
            <?php endif; ?>

            <?= \app\widgets\forms\Ask::widget(); ?>
            <section id="footer">
                <div class="container">
                    <p> © <?= date('Y'); ?> <?= ucfirst($_SERVER['HTTP_HOST']); ?> <?= str_replace(' и область', '', Yii::$app->session['region']['title']); ?></p>
                    <?php if (!$siteConfig['mono']): ?><p>Ваш город: <span class="select-region"><?= Yii::$app->session['region']['title']; ?></span></p><?php endif; ?>
                    <div class="tel">
                        <a class="phone <?= Yii::$app->session['region']['class']; ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                    </div>
                </div>
            </section>
            <div id="scroller">
                <i class="fa fa-chevron-up" aria-hidden="true"></i>
            </div>
            <div class="popup error animated">
                <div class="wight">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    <h4>Произошла ошибка!</h4>
                    <p>Телефон — это поле обязательно.</p>
                    <div class="close">OK</div>
                </div>
            </div>
            <div class="popup politica-info animated">
                <div class="wight">
                    <div class="politic-close"><i class="fa fa-times" aria-hidden="true"></i></div>    
                    <h4>Политика конфиденциальности и обработки персональной информации</h4>
                    <div class="full-text">
                    </div>
                </div>
            </div>
            <?php if (isset($siteConfig['region-sel'])): ?>
                <div class="popup regions animated">
                    <noindex>
                        <div class="wight">  
                            <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>              
                            <h4>Выберите ваш город</h4>
                            <ul>
                                <?php foreach (Yii::$app->params['regions'] as $region): ?>
                                    <li>
                                        <a rel="nofollow" href="?region=<?= $region['id']; ?>"><?= $region['title']; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>                
                        </div>
                    </noindex>
                </div>
            <?php endif; ?>
            <div class="popup good animated">
                <div class="wight">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <h4>Заявка отправлена!</h4>
                    <p>Спасибо за заявку. Мы вам перезвоним.</p>
                    <div class="close">OK</div>
                </div>
            </div>
            <?= \app\widgets\forms\Order::widget(); ?>
            <?php $this->registerJsFile($assets . '/' . $siteConfig['sitePrefix'] . 'js/' . $siteConfig['sitePrefix'] . 'all.js?v=17'); ?>
            <?php $this->endBody() ?>    
            <?= !empty($js['content']) ? $js['content'] : ''; ?>
            <script type="text/javascript">
                $(document).ready(function () {
                    $(".<?= $siteConfig['sitePrefix']; ?>politic-close").click(function () {
                        $(".<?= $siteConfig['sitePrefix']; ?>politica-info").toggleClass("<?= $siteConfig['sitePrefix']; ?>active");});$(".<?= $siteConfig['sitePrefix']; ?>politica").click(function () {
                        $(".<?= $siteConfig['sitePrefix']; ?>politica-info").toggleClass("<?= $siteConfig['sitePrefix']; ?>active");
                    });
                    $("body").on("click", "#bt-open", function () {
                        $("#openinfo").toggleClass("<?= $siteConfig['sitePrefix']; ?>active");
                        return false;
                    });
                    $('body').on("keyup", ".<?= $siteConfig['sitePrefix']; ?>phone", function () {
                        var v = $(this).val().substring(4, 6);
                        if ($(this).val().length >= 18 && $(this).val().indexOf("_") == -1) {
                            $.post("/order-send", {phone: $(this).val(), title: $("h1").text()});
                        }
                    });
                });
                $("#show-services2").click(function () {
                    $("#services-table2:visible").length ? ($("#services-table2").hide(), $(this).text("Показать цены по прочим неисправностям")) : ($("#services-table2").show(), $(this).text("Цены по прочим неисправностям"))
                });
                $("form").each(function () {
                    $(this).append("<input type=\"hidden\" name=\"h1\" value=\"" + $("h1").text() + "\">")
                });</script>
            <?php if (!Yii::$app->user->isGuest): ?>
                <div id="loadings"><img src="/images/loading.gif"></div>
                <script>
                    $(document).ready(function () {
                        $(".<?= $siteConfig['sitePrefix']; ?>delete-model").on("click", function () {
                            var id = $(this).data("id");
                            var el = $(this).parents("li");
                            //if (confirm("?"))
                            {
                                //$("#loadings").show();
                                $.get("/model-delete", {id: id}, function (resp) {
                                    if (resp == 'success') {
                                        el.css("background-color", "rgba(241, 162, 162, 0.53)");
                                        //el.remove();
                                    }
                                    //$("#loadings").hide();
                                });
                            }
                            return false;
                        });
                    });
                </script>
                <style> 
                    .<?= $siteConfig['sitePrefix']; ?>edits {
                        width: auto ! important;
                        float: right;                        
                        margin-right: 15px;
                    }
                    .<?= $siteConfig['sitePrefix']; ?>edits a {
                        float: left;
                        width: 20px;
                        padding: 0px ! important;
                        margin-left: 5px;
                    }
                    .<?= $siteConfig['sitePrefix']; ?>edits a img {
                        width: 100%;
                    }
                    #loadings {
                        position: fixed;
                        width: 100%;
                        height: 100%;
                        top: 0px;
                        left: 0px;
                        padding-top: 15%;
                        text-align: center;
                        z-index: 99999999;
                        background: rgba(0, 0, 0, 0.33);
                        display: none;
                    }
                    #loadings img {
                    }
                </style>
            <?php endif; ?>
            <?php if (in_array($siteConfig['category_id'], [2, 4])): ?>
                <script src="/js/particles.js"></script>
                <script src="/js/app.js"></script>
                <script src="/js/wow.min.js"></script>
                <script>
                    new WOW().init();
                </script>
            <?php endif; ?>
            <?php if (in_array($siteConfig['category_id'], [5])): ?>
                <script src="/js/particles.js"></script>
                <script src="/js/app2.js"></script>
            <?php endif; ?>
            <?php
            $roistatid = '';
            if (isset($siteConfig['spb']))
                $roistatid = '73f4732fa0bd932f55b5701b2a4be7ac';
            elseif ($siteConfig['mono'] && !isset($siteConfig['spb'])) {
                $roistatid = '59aa76d4f6e16b05176872ca59a9dad0';
            }
            ?>
            <script>(function (w, d, s, h, id) {
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
    <?php
    if (Yii::$app->session->getFlash('success')) {
        echo '<script>$(".' . $siteConfig['sitePrefix'] . 'popup.' . $siteConfig['sitePrefix'] . 'good").addClass("' . $siteConfig['sitePrefix'] . 'active");</script>';
    }
    ?>

    <?php if ($siteConfig['stickyMenu']): ?><script>$("#header").sticky({topSpacing: 0});</script><?php endif; ?>
</html>
<?php $this->endPage() ?>
<?php \app\widgets\other\Replace::end(); ?>