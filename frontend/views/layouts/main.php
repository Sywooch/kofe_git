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
?>
<?php \yii\widgets\Spaceless::begin(); ?>	
<!DOCTYPE html>
<html lang="en">
    <head>  

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="icon" href="<?= $assets ?>/images/favicon.ico?v=3">
        <link rel="stylesheet" async href="<?= $assets ?>/css/all.css?v=17" type="text/css" />

        <link async href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" />
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if lte IE 7]><script src="js/IE8.js" type="text/javascript"></script><![endif]-->
        <!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->
    </head>    
    <body id="index" class="home<?= $isHome ? ' video' : ''; ?><?= $isModelPage || $isBrandPage ? ' banners' : ''; ?><?= $isModelPage ? ' model-page' : ''; ?>">
        <?php if ($isHome): ?>
            <div class="header-bg">
                <img src="/uploads/images/bg-header-video.jpg"/>
                <video poster="" id="bgvid" playsinline autoplay muted loop>
                    <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
                    <source src="<?= $assets ?>/video/v2.webm" type="video/webm">
                    <source src="<?= $assets ?>/video/v2.mp4" type="video/mp4">
                </video>
            </div>
        <?php endif; ?>
        <?php $this->beginBody() ?>
        <section id="top">
            <div class="container">
                <ul>
                    <li>Работаем без выходных с 08:00 до 22:00</li>
                    <li class="selected-region">Ваш город: <span class="select-region"><?= Yii::$app->session['region']['title']; ?></span></li>
                </ul>
            </div>
        </section>
        <section id="header">
            <div class="container">
                <div class="logo">
                    <a href="/"><img src="<?= $assets ?>/images/logo.svg?v=1" alt="ремонт кофемашин"></a>
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
                        <!--<img src="<?= $assets ?>/uploads/images/<?= $isModelPage ? $brand['image'] : $_GET['data']['image'] ?>" alt="">-->
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
                        <li><a href="/uslugi-i-ceny">Услуги и цены</a></li>
                        <li><a href="/o-kompanii">О компании</a></li>                        
                        <li><a href="/brendy">Все бренды</a></li>
                        <li><a href="/kontakty">Контакты</a></li>
                    </ul>
                </div>

                <div class="tel">
                    <a class="phone <?= Yii::$app->session['region']['class']; ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                </div>
                <div class="st-set">
                    <a target="_blank" class="telegram" href="https://t.me/Remontkofe_bot"><img src="/images/telegram.png"></a>
                    <a target="_blank" class="vk" href="https://vk.me/-152167342"><img src="/images/vk.png"></a>
                </div>
            </div>
        </section>
        <?php
        if (!Yii::$app->user->isGuest) {
            $domain = $_SERVER['SERVER_NAME'];
            if (isset($_GET['data']['is_service'])) {
                if (count(explode('/', Yii::$app->request->pathInfo)) > 1)
                    echo '<a target="_blank" href="http://admin.' . $domain . '/seo/create/?url=' . Yii::$app->request->pathInfo . '">Ред. страницу</a>';
                else {
                    echo '<a target="_blank" href="http://admin.' . $domain . '/services/update/' . $_GET['data']['id'] . '">Ред. страницу</a>';
                }
            } else {
                echo '<a target="_blank" href="http://admin.' . $domain . '/page/update/' . $_GET['data']['id'] . '">Ред. страницу</a>';
            }
        }
        ?>
        <?= $content; ?>
        <section id="otzvi">
            <div class="container">
                <p class="title"><span>Отзывы   </span> клиентов</p>
                <div class="owl-carousel otziv owl-theme">
                    <div>                        
                        <p class="h3">Шумилин Николай</p>
                        <div class="n-rating-stars" data-bem="{}" data-rate="5">
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                        </div>
                        <p><b>Номер заказа:</b> KM00012</p>
                        <p><b>Достоинства:</b> Скорость выполнения работа</p>
                        <p><b>Комментарий:</b> Сломалась у меня моя рабочая кофе машина, вся кофейня основана на ней,
                            срочно занялся поиском компании которая сможет мне её отремонтировать, причем
                            довольно таки быстро, так как я не мог останавливать работу моего Кофе-шопа,
                            и доставлять неудобства моим постоянным клиентам,
                            в общем, наткнулся на компанию "РемонтКофе" позвонил по телефону, ответил мне
                            приветливый оператор, далее приехал курьер, всё очень быстро сделали<br>
                            Большое спасибо!</p>
                    </div>
                    <div>                        
                        <p class="h3">Иванов Илья</p>
                        <div class="n-rating-stars" data-bem="{}" data-rate="5">
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                        </div>
                        <p><b>Номер заказа:</b> KM00099</p>
                        <p><b>Достоинства:</b> Kонкурентноспособные цены</p>
                        <p><b>Комментарий:</b> Сломал домашнюю кофейную машину, долго думал куда обратиться,
                            коллега по бизнесу Николай посоветовал мне обратиться в компанию,
                            услугами которой он ранее уже пользовался, "РемонтКофе"
                            Позвонил им, ответил оператор, который проконсультировал меня 
                            по вероятным причинам поломки и отправил ко мне курьера, 
                            который приехал и забрал агрегат, по итогам диагностики
                            которые были ясны уже вечером, мне сказали что уже завтра машина будет готова,
                            и учитывая их очень конкурентноспособные цены, меня всё очень устроило!</p>
                    </div>
                    <div>                        
                        <p class="h3">Медведев Гавриил</p>
                        <div class="n-rating-stars" data-bem="{}" data-rate="5">
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                        </div>
                        <p><b>Номер заказа:</b> KM00051</p>
                        <p><b>Достоинства:</b> Возможность вызова курьера</p>
                        <p><b>Комментарий:</b> Жена каким-то волшебным образом умудрилась сломать нашу эсспрессо машину, 
                            она перестала включаться вообще, после следствия, выяснилось что она, 
                            хотела помолоть сахар в кофемолке, но только после поняла, что это глупая затея, 
                            в общем обратился в сервисный центр "РемонтКофе" судя по всему ребята уже давно 
                            работают в этой сфере, да и отзывы у них хорошие. По результатам диагностики,
                            инженер сообщил мне, что в сахар попала малая доля влаги, и мотор кофемолки
                            вклинило из-за него. Так же обнаружилось ещё пара возрастных проблем машины,
                            сделали всё очень оперативно, обратно машину доставили ккурьером, всё очень понравилось,
                            большое спасибо!</p>
                    </div>
                    <div>                        
                        <p class="h3">Игорь Коржов</p>
                        <div class="n-rating-stars" data-bem="{}" data-rate="5">
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                        </div>
                        <p><b>Номер заказа:</b> KM150010</p>
                        <p><b>Достоинства:</b> Отзывчевость</p>
                        <p><b>Комментарий:</b> Здравствуйте! Обратился в этот сервис с поломкой бака для воды ( треснул ).
                            Так как машинка у меня не из дешевых, ребята сказали, что придётся не много подождать.
                            Я честно говоря не так много пью кофе, поэтому без проблем согласился на ожидание.
                            Прошло около 2-х дней, как мне позвонил манеджер Василий и сказал, что моя машинка готова.
                            Спасибо. Буду рекомендовать вас своим знакомым. Желаю вам успехов! <br>
                            С уважением, Игорь К.!</p>
                    </div>
                    <div>                        
                        <p class="h3">Бубнов Артур</p>
                        <div class="n-rating-stars" data-bem="{}" data-rate="5">
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                        </div>
                        <p><b>Номер заказа:</b> KM150268</p>
                        <p><b>Достоинства:</b> Быстро</p>
                        <p><b>Комментарий:</b> Есть кофемашина Saeco lirika one touch проблема была следующая после длительного использования, стало очень плохо подаваться кофе. Капало медленно очень. Пытались почистить ражок не помогло. Обратился в эту компанию. Помогли быстро в день заказа приехал курьер и отвез кофемашинку на диагностику примерно через два часа от звонились и сообщили результаты диагностики. Дал согласие на ремонт вечером следующего дня привезли исправную кофемашину. Пользуемся около недели всё хорошо.</p>
                    </div>
                    <div>                        
                        <p class="h3">Яковлев Александр</p>
                        <div class="n-rating-stars" data-bem="{}" data-rate="5">
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                        </div>
                        <p><b>Номер заказа:</b> KM150359</p>
                        <p><b>Достоинства:</b> Не дорого</p>
                        <p><b>Комментарий:</b> В заведении сломалась кофемашина WMF Presto. Не работала подсветка с одной стороны, кофемолка издавала шумы и не работала, также было подача кофе. Сдал технику на диагностику через курьера, в этот же день позвонили и огласили цену ремонта. Был обрадован, ожидал что будет дороже. Через два дня сам заехал в пункт выдачи техники проверили на месте всё работает. Сейчас работает отлично. Спасибо вам.</p>
                    </div>
                    <div>                        
                        <p class="h3">Гусев Сергей</p>
                        <div class="n-rating-stars" data-bem="{}" data-rate="5">
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                            <i class="n-rating-stars__item"></i>
                        </div>
                        <p><b>Номер заказа:</b> KM150397</p>
                        <p><b>Достоинства:</b> Удобно</p>
                        <p><b>Комментарий:</b> Кофеварка филипс последнее время начала выдавать очень горькое кофе с каким-то послевкусием. Сам открывать чистить не рискнул, побоялся. Позвонил в сервисный центр “Ремонт Кофе” обозначил что требуется чистка. Менеджер компании согласился и предложил курьерскую службу, которая у них бесплатная. Позже позвонили и сказали что требуется только чистка, которая не очень дорогая. На следующий день привезли исправную кофеварку</p>
                    </div>
                </div>
            </div>
        </section>
        <?= \app\widgets\forms\Ask::widget(); ?>
        <section id="footer">
            <div class="container">
                <p> © 1999 - 2017 RemontKofe.ru</p>
                <p>Ваш город: <span class="select-region"><?= Yii::$app->session['region']['title']; ?></span></p>
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
        <div class="popup good animated">
            <div class="wight">
                <i class="fa fa-check" aria-hidden="true"></i>
                <h4>Заявка отправлена!</h4>
                <p>Спасибо за заявку. Мы вам перезвоним.</p>
                <div class="close">OK</div>
            </div>
        </div>
        <?= \app\widgets\forms\Order::widget(); ?>
        <?php $this->registerJsFile($assets . '/js/all.js?v=17'); ?>
        <?php $this->endBody() ?>
        <script>(function(w, d, s, h, id) { w.roistatProjectId = id; w.roistatHost = h; var p = d.location.protocol == "https:" ? "https://" : "http://"; var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/" + id + "/init"; var js = d.createElement(s); js.async = 1; js.src = p + h + u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2); })(window, document, 'script', 'cloud.roistat.com', '5c65647cc157513c77ba30d0814ea7bd');</script>
        <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter45675441 = new Ya.Metrika({ id:45675441, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, ut:"noindex" }); } catch (e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script> <noscript><div><img src="https://mc.yandex.ru/watch/45675441?ut=noindex" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
        <!-- BEGIN JIVOSITE CODE {literal} -->
        <script type='text/javascript'>
            (function(){ var widget_id = 'AjgqSJG9aU'; var d = document; var w = window; function l(){
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/' + widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss); }if (d.readyState == 'complete'){l(); } else{if (w.attachEvent){w.attachEvent('onload', l); } else{w.addEventListener('load', l, false); }}})();</script>
        <!-- {/literal} END JIVOSITE CODE -->
        <!-- BEGIN JIVOSITE INTEGRATION WITH ROISTAT -->
        <script type='text/javascript'>
            var getCookie = window.getCookie = function (name) {
            var matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
            return matches ? decodeURIComponent(matches[1]) : undefined;
            };
            function jivo_onLoadCallback() {
            jivo_api.setUserToken(getCookie('roistat_visit'));
            }
        </script>
        <!-- END JIVOSITE INTEGRATION WITH ROISTAT --> 
    </body>

    <?php
    if (Yii::$app->session->getFlash('success')) {
        echo '<script>$(".popup.good").addClass("active");</script>';
    }
    ?>


</html>
<?php \yii\widgets\Spaceless::end(); ?>
<?php $this->endPage() ?>