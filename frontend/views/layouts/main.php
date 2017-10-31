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
                            <?php if ($isHome): ?><a href="/"><img src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>logo-footer.svg?v=3" alt="<?= app\components\CController::$category['full_title']; ?>"></a><?php endif; ?>
                            <?php if (!$isHome): ?><a href="/"><img src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>logo.svg?v=3" alt="<?= app\components\CController::$category['full_title']; ?>"></a><?php endif; ?>
                        <?php else: ?>
                            <a href="/"><img src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>logo.svg?v=2" alt="<?= app\components\CController::$category['full_title']; ?>"></a>
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
            <?php if (!$siteConfig['mono'] && $siteConfig['category_id'] != 1 && $siteConfig['category_id'] != 3 && $siteConfig['category_id'] != 4 && $siteConfig['category_id'] != 5): ?>
                <section id="otzvi">
                    <div class="container">
                        <p class="title"><span>Отзывы   </span> клиентов</p>
                        <div class="owl-carousel otziv owl-theme">
                            <div>                        
                                <p class="h3">Горчакова Катя</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> KM06028</p>
                                <p><b>Достоинства:</b> Срок ремонта, цены, вызов мастеров в офис</p>
                                <p><b>Комментарий:</b> В нашей компании много людей, которые не могут обойтись без чашки кофе, поэтому работает наша капсульная Nespresso ежедневно и по многу раз. Но нельзя уследить за всеми сотрудниками, кто какие сорта предпочитает, поэтому многие приносят свои капсулы. В итоге кофемашина в один день перестала работать. Вызвали мастеров из сервисного центра «СПБ Ремонт Кофе», приехали быстро. Провели диагностику на месте и сказали, что была использована некачественная капсула. Разобрали кофемашину, вытащили горемычную капсулу, также указали на пару изношенных элементов и сразу заменили их. Ребятам большое спасибо за бесплатную консультацию и скорость работы. Порадовали цены и поэтому попутно заказали компании проведение чистки.</p>
                            </div>
                            <div>                        
                                <p class="h3">Горюнова Анна</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> KM10304</p>
                                <p><b>Достоинства:</b> Стоимость и быстрый результат</p>
                                <p><b>Комментарий:</b> У меня двое маленьких детей – 5 лет и малыш. К сожалению не уследила. Пока варила кашу и приглядывала за малым, старший положил небольшую игрушку в отсек для кофе. В итоге кофемашина Philips HD8828 перестала работать. Сначала расстроилась и даже не знала что делать, так как кофе мой любимый напиток. Потом поискала информацию о сервис-центрах которые ремонтируют кофемашины и нашла СПБ Ремонткофе. Ребятам огромное спасибо. Починили и взяли недорого.</p>
                            </div>
                            <div>                        
                                <p class="h3">Тарханов Пётр</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> KM03082</p>
                                <p><b>Достоинства:</b> Профессионализм мастеров</p>
                                <p><b>Комментарий:</b> У нас бюджетная капсульная кофемашина NESPRESSO Delonghi EN 97.W. Незаменимая помощница в приготовлении любимого всей семьей кофе. У нас много детей и банально забыли про чистку. Стала плохо работать и медленно. Сами не стали трогать, побоялись испортить. Отвезли в сервис центр. Мастер посмотрел, оказалось много накипи. Провели декальцинацию. Цены приемлемые. Советую обращаться в этот сервисный центр. Спасибо вам ребята за профессионализм и знание своего дела.</p>
                            </div>
                            <div>                        
                                <p class="h3">Кочетова Людмила</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> KM034920</p>
                                <p><b>Достоинства:</b> Качество ремонта и срок.</p>
                                <p><b>Комментарий:</b> В сервисный центр Ремонт Кофе в Питере обращалась по причине поломки моей кофемашины WMF, которая стала издавать гул и треск при приготовлении кофе. Времени ждать ремонта у меня не было, поэтому компания предложила бесплатно отвезти мою кофеварку в мастерскую. Курьер подъехал в назначенное время и после некоторого времени со мной связались мастера, сказали, что образовалась воздушная пробка. Ремонт стоил копейки, поэтому решила также провести декальцинацию и замену некоторых деталей. Могу сказать, что после всех действий, вкус кофе стал гораздо лучше и сама кофемашина начала быстрее работать. Отличный сервис, буду рада рекомендовать всем друзьям и родным. С Уважением, Людмила.</p>
                            </div>
                            <div>                        
                                <p class="h3">Кушникова Светлана</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> KM200091</p>
                                <p><b>Достоинства:</b> Очень быстрый ремонт. </p>
                                <p><b>Комментарий:</b> Спасибо, спасибо и еще раз спасибо.  Год назад сын подарил мне очень дорогую кофемашину Saeco HD8919/59. И в пользовании оказалась проста и варила много кофе. Я же кофеман. Готовлю кофе и вдруг на мгновение выключили свет и снова дали, но, видимо, с большим напряжением.  Машина не работает. Что делать. Бегом звоню сыну. Хорошо, что он знает про этот сервисный центр. Позвонил, договорился. Ребята из сервиса приехали, забрали мою машину. Продиагностировали, починили. Хорошо в сервисном центре много запасных частей. Оказалось сгорела плата. Привезли обратно. Все сделали быстро и грамотно. Спасибо.  </p>
                            </div>
                            <div>                        
                                <p class="h3">Андреенко Николай</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> KM020859</p>
                                <p><b>Достоинства:</b> Цены</p>
                                <p><b>Комментарий:</b> На днях моя кофемашинка Jura E6 начала вести себя непредсказуемо и постоянно выдавала различные ошибки. Подумывал уже ехать за новой, но друзья порекомендовали мне обратиться в Вашу компанию и починить её. Сказано - сделано. Позвонил Вам, переговорил с мастером о возможных поломках и стоимости ремонта. Решил что лучше починить старую, нежели тратить деньги и покупать новую. Согласовал сроки когда они смогут взяться за ремонт. Был удивлён что курьер сможет забрать её сегодня, так как звонил то я вечером. Курьер приехал через час, забрал её и ближе к вечеру следующего дня поломки уже были устранены. В итоге оказалось что там, что-то случилось с термоблоком. Всем остался доволен, рекомендую!</p>
                            </div>
                        </div>
                    </div>
                </section>
            <?php elseif ($siteConfig['category_id'] == 3): ?>
                <section id="otzvi">
                    <div class="container">
                        <p class="title"><span>Отзывы </span> клиентов</p>
                        <div class="owl-carousel otziv owl-theme">
                            <div>                        
                                <p class="h3">Карпенцев Леонид</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RL04012</p>
                                <p><b>Достоинства:</b> Быстрый и качественный ремонт</p>
                                <p><b>Комментарий:</b>В последнее время мой ноутбук Acer стал периодически выключаться. Особого значения не придавал, так как сильного беспокойства это не приносило, пока в один чудесный день он не выключился, а запустить я так его и не смог. К ремонту любимого ноутбука подошел со всей ответственностью и выбирал сервис с хорошей репутацией, долгим пребыванием на рынке услуг, с положительными отзывами и как поистине ленивый человек, еще одним важным фактором стала курьерская служба. По всем пунктам подошел Repair-Laptops. Созвонился с ними, курьер подъехал уже через час и забрал ноутбук, оставив договор. Далее мастер позвонил и сказал, что сгорел южный мост. В итоге мы сговорились по стоимости, которая кстати оказалась вполне демократичной. Через пару дней сам заглянул в сервисный центр, где меня ожидал уже полностью работающий ноутбук. Еще дали гарантию, так что всем остался доволен.</p>
                            </div>
                            <div>                        
                                <p class="h3">Чежекова Дарья</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RL01018</p>
                                <p><b>Достоинства:</b> Возможность заказать курьера</p>
                                <p><b>Комментарий:</b>Ноутбук ASUS X 540 LJ стал очень сильно нагреваться даже при самой незначительной работе на нем и издавать шум, которого раньше не замечала. Позвонила знакомым, они сказали, что такие проблемы могут возникнуть, если долгое время не чистить его. Те же друзья посоветовали обратиться в сервис центр Repair-Laptops, сказали, что уже чинились там. Отнесла ноутбук к мастерам, ждать окончания процедуры не стала и поэтому оставила его. Последующие два дня никак не могла за ним заехать и поэтому попросила прислать его курьером. Прибыл мой лэптоп в точно обозначенное время. Я его сразу протестировала и удивилась насколько раньше он оказывается тормозил, а сейчас просто летает. Инженерам из центра огромное спасибо за столь качественную работу.</p>
                            </div>
                            <div>                        
                                <p class="h3">Погодина Эвелина</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RL001129</p>
                                <p><b>Достоинства:</b> Быстро и недорого</p>
                                <p><b>Комментарий:</b>При закрытии ноутбука Dell Inspirion забыла убрать наушники, и повредила матрицу. Происходило все это ночью, так что поломку обнаружила только утром. Мой ноутбук рабочая лошадка и без него я как без рук, так что сразу принялась искать сервисный центр. Очень много хорошего прочитала о Репаир-лаптопс, так же в отзывах очень часто писали о коротких сроках. Обращалась в компанию впервые поэтому не совсем была уверена, что меня ожидает. Но все волнения оказались напрасными, я позвонила в Call-центр, оставила заявку, где указала поломку и модель ноута, мне сразу назвали цену ремонта и сроки. Немного удивилась, думала займет починка неделю и цена будет завысотная. В итоге работа мастера заняла часа три. Благодарю за оперативность и аккуратность.</p>
                            </div>
                            <div>                        
                                <p class="h3">Яковец Катерина</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RL009234</p>
                                <p><b>Достоинства:</b> Быстро, качетсвенно, недорого</p>
                                <p><b>Комментарий:</b>На ноутбуке Samsung внезапно появились неприятные горизонтальные полосы, хотя обращалась я с ним бережно. Пробовала протереть экран и перезагрузить ноутбук, не помогло. Решила спросить совета у брата, он как раз говорил, что чинил свой ноут в каком-то хорошем сервисном центре. Он сказал, что ходил в СЦ «RepairLaptops», где ему отремонтировали поврежденные кнопки клавиатуры. Отвезла свой ноут к их мастеру, после диагностики сказали, что вышла из строя видеокарта. Нужную моей модели деталь нашли прямо на складе, заменили очень быстро и обошлось совсем недорого, так что я довольна. В случае чего, буду обращаться туда.</p>
                            </div>
                            <div>                        
                                <p class="h3">Теплых Валерий</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RL006549</p>
                                <p><b>Достоинства:</b>Хороший сервис за небольшие деньги</p>
                                <p><b>Комментарий:</b>За последние недели мой ноутбук Microsoft Surface стал сильно греться при работе, а в один прекрасный момент и вовсе не захотел включаться. Обратился в сервисный центр «Repair-laptops» потому что он находится совсем рядом с моим домом, да и отзывы на него довольно таки неплохие были. Провели диагностику, специалист сказал, что нужно очистить от пыли и завтра ноутбук можно забирать. Утром позвонил менеджер сервисного центра, как и было обещано, сказал что все готово. Процедура оказалась совсем недорогой, мой ноут работает почти как новенький, совсем не греется. Рекомендую данный сервис всем владельцам ноутбуков.</p>
                            </div>
                            <div>                        
                                <p class="h3">Катин Дмитрий</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RL003082</p>
                                <p><b>Достоинства:</b>Грамотные специалисты</p>
                                <p><b>Комментарий:</b>На моем ноутбуке Packard Bell сломался разъем питания, ну аппарат у меня старый, так что я даже не удивился этому. Пришлось обзванивать ремонтные центры и узнавать стоимость починки, больше всех устроили условия сервисного центра «Репаир Лаптопс». Стоимость ремонта, да и оговоренные сроки меня более чем устроили, так что решил остановиться на них. Заменили очень быстро, отдавал ноутбук утром, ближе к вечеру позвонил оператор центра и сказал забирать лэптоп. Заряжается ноутбук теперь очень хорошо, разъем выглядит прямо как при покупке. В случае подобных ситуаций, теперь знаю куда обращаться за помощью.</p>
                            </div>
                        </div>
                    </div>
                </section>
            <?php elseif ($siteConfig['category_id'] == 5): ?>
                <section id="otzvi">
                    <div class="container">
                        <p class="title"><span>Отзывы </span> клиентов</p>
                        <div class="owl-carousel otziv owl-theme">
                            <div>                        
                                <p class="h3">Николай Шестаков</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RC002161</p>
                                <p><b>Достоинства:</b> Грамотный сервис, быстрый ремонт да ещё и с гарантией.</p>
                                <p><b>Комментарий:</b> Фотоаппарат Canon служит мне верой и правдой на всех праздниках и вылазках уже три года. На последней вылазке на пикник уронил его с приличной высоты, после этого не смог его включить. По приезду домой пришлось шерстить отзывы на сервисные центры. Больше всех приглянулся СЦ «Repair-Cameras», отзывы на него были положительные, да и цены мне показались по карману. Отвез к ним, при мне провели диагностику и сказали, что будет готово через два дня. Через обещанное время отзвонились, приехал туда и на месте все проверил, все работает как прежде. Взяли за работу немного, обещания все выполнили, так в целом меня все устроило. Рекомендую всем, кто ценит качество по доступной цене.</p>
                            </div>
                            <div>                        
                                <p class="h3">Алина Сафонова</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RC016975</p>
                                <p><b>Достоинства:</b> Прекрасный сервис.</p>
                                <p><b>Комментарий:</b> Попользовалась своим Fujifilm всего пять месяцев, как вдруг перестала работать вспышка. Фотик не роняла и обращалась с ним аккуратно, так что было очень неожиданно, что что-то вышло из строя. Пришлось опрашивать знакомых, посоветовали сходить в сервисный центр «Repair-Cameras», мол там точно починят. После диагностики сказали, что сгорел контроллер, нужна замена, а нужная деталь у них имеется. Названная сумма оказалась подъемной, так что я согласилась. На следующий день уже забирала его из мастерской, всем осталась довольна. Фотик уже испробовала на деле, все работает отлично.</p>
                            </div>
                            <div>                        
                                <p class="h3">Валерий Якушев</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RC009732</p>
                                <p><b>Достоинства:</b> Низкие цены, качество и быстрота ремонта.</p>
                                <p><b>Комментарий:</b> На днях уронил свой новенький фотоаппарат Hasselblad прямо на гравий. Экран оказался сильно поврежден, нужно было срочно найти мастера, чтобы посмотрел да сказал, что с этим можно делать. Решил пойти в ближайший от дома сервисный центр «Repair-Cameras», так как прежде их услугами не пользовался, был немного неуверен в их профессионализме. Провели осмотр, сказали, что имеется механическое повреждение экрана, все остальное цело. Несмотря на то, что модель является новой – стоимость замены оказалась очень привлекательной. Сервис-центр пришелся мне по душе, в случае чего знаю куда идти.</p>
                            </div>
                            <div>                        
                                <p class="h3">Ева Пономарёва</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RC006721</p>
                                <p><b>Достоинства:</b> Профессиональные консультанты и мастера</p>
                                <p><b>Комментарий:</b> Долго искала сервисный центр, где могли бы провести качественный ремонт фотоаппарата Samsung. Купила его давно, но за все время работы не было никаких неисправностей, а тут перестала работать вспышка. Друзья подсказали, что можно обратиться в мастерскую Repair-Cameras, где ремонт стоит не так дорого, но при этом выполняют работу качественно. Оставила на сайте компании заявку, через пару минут перезвонили, сразу проинформировали по срокам и стоимости. Я сама приехала на место, там выдали договор и сказали прийти через пару дней. По готовности моего фотоаппарата пришла смс, приехала, все проверила на месте, работает отлично. Молодцы ребята, очень вам благодарна. </p>
                            </div>
                            <div>                        
                                <p class="h3">Евгения Макарова</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RC007648</p>
                                <p><b>Достоинства:</b>Отличный сервисный центр по очень хорошим ценам.</p>
                                <p><b>Комментарий:</b>На фотоаппарате фирмы Sony начали появляться полосы на негативе. Поискала по Яндексу подходящий сервисный центр, чтобы и от дома недалеко, и цены не кусались, и отзывы о компании были хорошие. По всем параметрам понравился сервис Repair-Cameras. Сразу же позвонила им объяснила проблему, меня сориентировали по стоимости. Очень удивилась столь низкой цене на замену матрицы, так как фотографированием увлекаюсь давно и сталкивалась с данной проблемой, но тогда ремонт обошелся гораздо дороже. Мне сказали, что на комплектующие выдается гарантия и на детали нет наценок. Сразу же побежала сдавать. Все сделали очень быстро и качественно, пользуюсь и по сей день. Отличный сервисный центр.</p>
                            </div>
                             <div>                        
                                <p class="h3">Василиса Шубкина</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RC006471</p>
                                <p><b>Достоинства:</b>Грамотно объяснили и быстро всё починили!</p>
                                <p><b>Комментарий:</b> Моя дочка решила самостоятельно поменять объектив на фотоаппарате Sigma, но нечаянно сломала что-то и объектив никак не защелкивался. Обзвонила знакомых, которые имеют фотоаппараты и знают где чинить. Несколько людей порекомендовали сервисный центр Repair-Cameras. Я им позвонила и заказала курьерский забор. Через пару часов мне позвонил мастер, сказал, что провел диагностику и нашел проблему. Очень понравилось, как все грамотно объяснили почему так произошло и как избежать этого в будущем. Все починили быстро и произвели отличное впечатление по всем пунктам. Всем рекомендую обращаться именно в этот сервисный центр за получением качественной помощи.</p>
                            </div>
                        </div>
                    </div>
                </section>
            <?php elseif ($siteConfig['category_id'] == 4): ?>
                <section id="otzvi">
                    <div class="container">
                        <p class="title"><span>Отзывы </span> клиентов</p>
                        <div class="owl-carousel otziv owl-theme">
                            <div>                        
                                <p class="h3">Романова Эльвира</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RW012934</p>
                                <p><b>Достоинства:</b> Грамотные сотрудники и очень быстрый ремонт.</p>
                                <p><b>Комментарий:</b> В сервисный центр Repair-Watch обратилась впервые по рекомендации соседки. Меняла стекло на наручных часах бренда Tissot. Очень волновалась насчет ремонта, так это подарок от мужа и не хотелось, чтобы после починки потеряли вид. Но волновалась зря, так как работают в этой компании настоящие профессионалы. Все сделали очень качественно и стекло выглядит потрясающе, хотя и стоимость невысокая. Особо хотелось бы отметить быстроту исполнения работы, все сделали в течении дня, сразу сказали стоимость. Так что всем ребятам из сервисного центра большое спасибо за грамотное отношение и качество восстановления моих часов.</p>
                            </div>
                            <div>                        
                                <p class="h3">Роман Яковлев</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RW059661</p>
                                <p><b>Достоинства:</b> Быстрый ремонт и качественный сервис.</p>
                                <p><b>Комментарий:</b> Отличный сервисный центр – Repair-Watch. Необходим был срочный ремонт часов фирмы Tissot, почему-то перестали ходить. Часы достаточно дорогие и было немного страшно отдавать их на ремонт. Потом один из коллег на работе посоветовал обратиться именно в данную мастерскую, сказав, что как-то ремонтировал свои часы и все понравилось. Отправился туда вечером, мастер сразу принял часы заполнил форму и один экземпляр дал мне. Ремонт прошел оперативно, заменили какую-то деталь, при этом у них есть собственный склад запчастей и поэтому такие быстрые сроки. По окончанию работ дали гарантию. Часы функционируют исправно. Спасибо. </p>
                            </div>
                            <div>                        
                                <p class="h3">Давид Тихонов</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RW003499</p>
                                <p><b>Достоинства:</b> Качественный сервис за небольшие деньги.</p>
                                <p><b>Комментарий:</b> Уровень сервиса Repair-Watch держится на высокой планке. Обращался к ним дважды. В первый раз менял стекло на часах Orient, во второй раз на этих же часах менял батарейку. Все работы проводились при мне, поэтому смог оценить по достоинству насколько аккуратно обращаются с устройством. После ремонта никаких следов не осталось, а специалист еще дал несколько ценных советов по использованию часов, чтобы поломки были реже и ходили как надо. Среди главных плюсов компании отмечу быстрые сроки и низкую стоимость услуг. Если возникнет неисправность, то буду обращаться именно в этот сервисный центр.</p>
                            </div>
                            <div>                        
                                <p class="h3">Яна Смирнова</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RW113478</p>
                                <p><b>Достоинства:</b> Быстрые сроки ремонта и профессиональные мастера.</p>
                                <p><b>Комментарий:</b> Приобрела себе симпатичные часы VICTORINOX. По прошествии 3 месяцев поняла, что стрелки переводятся очень туго. Побоялась предпринимать что-либо сама, так что решила пойти в сервис центр «Repair-Watch», рядом с местом работы. Там мои часики осмотрели и сказали, что это заводской брак колесика, нужно заменить его. Цена вопроса оказалась недорогой, так что я с легкостью оставила часики им до завтрашнего дня. Во время обеденного перерыва заглянула к ним и забрала готовые часы. Стрелки переводятся легко, ходики на моих руках смотрятся просто отлично. Центр мне понравился, теперь советую его своим знакомым, а сотрудникам хочу сказать большое спасибо за профессионализм.</p>
                            </div>
                            <div>                        
                                <p class="h3">Антон Волокитин</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RW003627</p>
                                <p><b>Достоинства:</b>Очень быстрые сроки ремонта, а главное качественно!</p>
                                <p><b>Комментарий:</b> Ношу свои Patek Philippe уже пару-тройку лет. Три дня назад обнаружил, что часы перестали заводиться. Расстроился знатно, пришлось выискивать в сети хорошие часовые мастерские. По отзывам и ценам пришелся по душе сервисный центр «Repair-Watch», куда я и отправился на следующий день. Место оказалось очень удобно расположено, так что добрался я туда легко и быстро. Мастер посмотрел часы и сказал, что сломалась пружина заводного колеса, поэтому часы не заводятся. Договорились, что часы я смогу забрать завтра утром, а после обеда позвонили и сказали, что уже все сделано. Так что отремонтированные часы я получил в тот же день. Приятно порадовала не только цена за работу, но и скорость, ведь договорились сделать за сутки, а в итоге хватило нескольких часов. Спасибо вам «Repair-Watch».</p>
                            </div>
                             <div>                        
                                <p class="h3">Михаил Родионов</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RW003179</p>
                                <p><b>Достоинства:</b> Возможность посетить сервис в выходные дни.</p>
                                <p><b>Комментарий:</b> Супруга на день рождения подарила мне дорогущие Rolex, проносил часы полтора года, потом при переводе стрелок услышал неприятный треск. сразу же решил отнести их на ремонт, и уже знал куда. Пошел в центр «Repair-Watch», так как ранее чинил там часики своей дочурки, и тогда работа была сделана на отлично. В центре специалист сказал, что скорее всего проблема с зубьями какого-то там внутреннего колеса, так что я оставил часы у мастера на замену компонента. Забрал их на выходных, в свободное время, благо работают они даже в субботу и воскресенье. Часы работают отлично вот уже месяц, сервисный центр вновь не подвел.</p>
                            </div>
                        </div>
                    </div>
                </section>
            <?php elseif ($siteConfig['category_id'] == 1): ?>
                <section id="otzvi">
                    <div class="container">
                        <p class="title"><span>Отзывы   </span> клиентов</p>
                        <div class="owl-carousel otziv owl-theme">
                            <div>                        
                                <p class="h3">Воронов Георгий</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RP04112</p>
                                <p><b>Достоинства:</b> Отличные мастера, полная информация о ремонте</p>
                                <p><b>Комментарий:</b> Сломался разъем зарядки на Xiaomi Redmi Note 4 из-за приложения слишком большой массы и силы при подключении к сети. Долго искал сервисный центр, где смогли бы сделать все быстро без ожидания привоза нужной запчасти. На Яндексе нашел СЦ Repair-Mobiles, позвонил. Диспетчеру назвал модель телефона и поломку, сказали, что нужная деталька есть в наличии. Порадовала грамотность специалистов, по телефону сориентировали по стоимости и времени ремонта. Примчался, сделали все оперативно и очень чисто. Теперь если возникнут еще какие проблемы с телефоном, буду обращаться только сюда. </p>
                            </div>
                            <div>                        
                                <p class="h3">Богданова Виктория</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RP012099</p>
                                <p><b>Достоинства:</b> Быстрый ремонт и качественный сервис</p>
                                <p><b>Комментарий:</b> РепаирМобайлс на сегодняшний день лучший сервис по ремонту, сама проверяла. В один день пришлось дежурить на работе, а мой телефон не поддерживает игры, попросила у коллеги его HTC дабы не скучать. Сижу гоняю его по разным играм, тут аппарат начал очень сильно греться, индикатор зарядки падает и экран потухает. Начала в скором темпе искать мастерскую, чтобы все быстро починили без следов вскрытия, стыдно стало перед коллегой. Почитав отзывы решила обратиться в Репаир Мобайлс, курьер приехал забрал телефон оставил договор, через некоторое время позвонил мастер и сказал, что аккумулятор приказал долго жить. В общем вернули мне опять же курьером полностью исправный телефон уже утром, так что никто ничего не заметил. Спасибо ребятам из сервисного центра.</p>
                            </div>
                            <div>                        
                                <p class="h3">Ширяев Сергей</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RP005531</p>
                                <p><b>Достоинства:</b> Отличный сервис</p>
                                <p><b>Комментарий:</b> Перестал работать интернет на телефоне Samsung, по рекомендациям своих друзей обратился в компанию RepairMobiles. Позвонил, обозначил проблему, предложили доставить телефон курьером, решил поехать сам, так как находится рядом с работой. Когда сдавал телефон мастер при мне провел диагностику и сказал, что проблема в антенном модуле и надо его менять. Сразу сказали сколько это будет это стоить и когда будет готов. Пошел на работу и через час-два пришла смс о готовности моего телефона. Вечером зашел в сервис, проверил телефон все работает на отлично. Оплатил оговоренную сумму, мне еще дали пару советов по улучшению работоспособности аппарата, а то он сильно тормозил у меня. Отличный сервис, грамотные мастера и цены вполне адекватные. </p>
                            </div>
                            <div>                        
                                <p class="h3">Кошелев Станислав</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RP001410</p>
                                <p><b>Достоинства:</b> Лучшие специалисты в городе</p>
                                <p><b>Комментарий:</b> Ношу телефон всегда в переднем кармане брюк, однажды решил помочь мужичку подтолкнуть его жигуленок, который застрял в яме. Пришел домой достаю свой Huawei, а нем трещины по всему дисплею, видимо стукнул пару раз пока машину толкал. Телефон работал, но трещины основательно действовали на нервы. Решил сразу обратиться в уже проверенный сервис Repair-Mobiles, как-то менял у них аккумулятор. Съездил к ним, мастер предложил поменять только стекло, так как моделька у меня старая и есть такая возможность. Вся работа заняла меньше получаса, и цена оказалась намного меньше, чем я предполагал выложить за ремонт. Так что история со счастливым концом, спасибо ребятам из сервис центра за отлично проведенную починку. </p>
                            </div>
                            <div>                        
                                <p class="h3">Морозова Ирина</p>
                                <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                    <i class="n-rating-stars__item"></i>
                                </div>
                                <p><b>Номер заказа:</b> RP077268</p>
                                <p><b>Достоинства:</b> Быстро, качественно. Дают советы</p>
                                <p><b>Комментарий:</b> Полетело программное обеспечение на телефоне OnePlus, и нужно было очень срочно восстановить контакты. Возле моего дома видела вывеску компании RepairMobiles, решила прийти к ним без звонка. Мастера сразу принялись за работу, поколдовали над ним я даже не успела как следует расстроиться, а они уже отдали мне полностью рабочий телефон со всей информацией, что там годами копилась. Сказали, как будет у меня время, чтобы оставила его на пару часов, так как у меня разъем расшатался и аккумулятор начинает вздуваться. В общем от всей души благодарна ребятам за такую быструю работу и проявленное дружелюбие.</p>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
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
            <?= !empty($js['content']) ? \app\components\CController::replaceJS($js['content']) : ''; ?>
            <script type="text/javascript">
                $(document).ready(function () {
                    $(".<?= $siteConfig['sitePrefix']; ?>politic-close").click(function () {
                        $(".<?= $siteConfig['sitePrefix']; ?>politica-info").toggleClass("<?= $siteConfig['sitePrefix']; ?>active");});$(".<?= $siteConfig['sitePrefix']; ?>politica").click(function () {
                        $(".<?= $siteConfig['sitePrefix']; ?>politica-info").toggleClass("<?= $siteConfig['sitePrefix']; ?>active");
                    });$("body").on("click", "#bt-open", function () {
                        $("#openinfo").toggleClass("<?= $siteConfig['sitePrefix']; ?>active");
                        return false;
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
            <script src="/js/particles.js"></script>
            <script src="/js/app.js"></script>
            <script src="/js/wow.min.js"></script>
            <script>
              new WOW().init();
            </script>
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