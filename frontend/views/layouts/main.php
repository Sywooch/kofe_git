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
?>
<?php \app\widgets\other\Replace::begin(['params' => $siteConfig]); ?>
<!DOCTYPE html>
<html lang="en"> 
    <head>  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="icon" href="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>favicon.ico?v=4">
        <link rel="stylesheet" async href="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>css/<?= $siteConfig['sitePrefix']; ?>all.css?v=20" type="text/css" />
        <link async href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" />
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if lte IE 7]><script src="js/IE8.js" type="text/javascript"></script><![endif]-->
        <!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->
        <style>#ask-text {font-size: 22px !important;}#banner ul {list-style-type: disc;
    padding-left: 20px;
    margin-bottom: 10px;
}#ask2 .container p {font-size: 24px;} #banner h2, #banner h3 {font-family: "NeuronExtraBold",cursive;clear: both;padding-top: 15px;margin: 0px;}#banner p {font-size: 15px;float: none;clear: both;margin-bottom: 15px;}</style>
    </head>    
    <body id="index" class="home<?= $isHome ? ' video' : ''; ?><?= $isModelPage || $isBrandPage ? ' banners' : ''; ?><?= $isModelPage ? ' model-page' : ''; ?>">

        <?php $this->beginBody() ?>
        <?php if ($isHome): ?>
            <div class="bg-all">
            <?php endif; ?>
            <?php if ($isHome && !$siteConfig['mono']): ?>  
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
            <section id="header">
                <div class="container">
                    <div class="logo">
                        <?php if (isset($siteConfig['change-logo'])): ?>
                            <?php if ($isHome): ?><a href="/"><img src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>logo-footer.svg?v=2" alt="ремонт кофемашин"></a><?php endif; ?>
                            <?php if (!$isHome): ?><a href="/"><img src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>logo.svg?v=2" alt="ремонт кофемашин"></a><?php endif; ?>
                        <?php else: ?>
                            <a href="/"><img src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>logo.svg?v=2" alt="ремонт кофемашин"></a>
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
                            <li><a href="/uslugi-i-ceny">Услуги и цены</a></li>
                            <li><a href="/o-kompanii">О компании</a></li>                        
                            <?php if ($siteConfig['mono']): ?><li><a href="/models">Все модели</a></li><?php else: ?><li><a href="/brendy">Все бренды</a></li><?php endif; ?>
                            <li><a href="/kontakty">Контакты</a></li>
                        </ul>
                    </div>
                    <div>
                        <div class="tel">
                            <a class="phone <?= Yii::$app->session['region']['class']; ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                        </div>
                        <?php if (!$siteConfig['mono']): ?> 
                            <div class="st-set">
                                <a target="_blank" class="telegram" href="https://t.me/Remontkofe_bot"><img src="/images/telegram.png"></a>
                                <a target="_blank" class="vk" href="https://vk.me/-152167342"><img src="/images/vk.png"></a>
                            </div>
                        <?php endif; ?>
                        <div class="clear"></div>
                        <span class="time-work">Ежедневно с 08:00 до 22:00</span>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
            <?php
            if (!Yii::$app->user->isGuest) {
                echo '<div style="float: left;" class="container">';
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
            <?php if (!$siteConfig['mono']): ?>
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
            <?php endif; ?>

            <?php if ($siteConfig['mono']): ?>
                <section id="ask2">
                    <div class="container">
                        <div class="img"><img src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>coffee_machine.png" alt=""></div>
                        <div class="info">
                            <div class="h2">
                                Не нашли свою поломку?
                            </div>
                            <p id="ask-text">Свяжитесь с нами по телефону <b><?= Yii::$app->session['region']['phone']; ?></b> сейчас и мы поможем разобраться</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </section>
            <?php endif; ?>

            <?= \app\widgets\forms\Ask::widget(); ?>
            <section id="footer">
                <div class="container">
                    <p> © 2017 <?= ucfirst($_SERVER['HTTP_HOST']); ?></p>
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