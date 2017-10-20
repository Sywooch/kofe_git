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
<html lang="en"> 
    <head>  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="icon" type="image/x-icon" href="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>favicon.ico">

<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lte IE 7]><script src="js/IE8.js" type="text/javascript"></script><![endif]-->
        <!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->
        <style>
<?= file_get_contents(Yii::getAlias('@frontend') . '/web/' . $siteConfig['sitePrefix'] . 'css/' . $siteConfig['sitePrefix'] . 'all.css'); ?>
            #banner ul {list-style-type: disc;
                        padding-left: 20px;
                        margin-bottom: 10px;
            }#ask2 .container p {font-size: 24px;} #banner h2, #banner h3 {font-family: "NeuronExtraBold",cursive;clear: both;padding-top: 15px;margin: 0px;}#banner p {font-size: 15px;float: none;clear: both;margin-bottom: 15px;}
        </style>
    </head>    
    <body id="index" class="home <?= $siteConfig['sitePrefix']; ?><?= $isHome ? ' video' : ''; ?><?= $isModelPage || $isBrandPage ? ' banners' : ''; ?><?= $isModelPage ? ' model-page' : ''; ?>">
        <img style="opacity: 0;width:100%;height:100%;position: absolute;z-index: -999999999;" src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>coffee_machine.png" alt="">
        <img style="opacity: 0;width:100%;height:100%;position: absolute;z-index: -999999999;" src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>contectbg2.jpg" alt="">
        <img style="opacity: 0;width:100%;height:100%;position: absolute;z-index: -999999999;" src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>bgsale.jpg" alt="">
        <?php $this->beginBody() ?>
        <?php if ($isHome): ?>
            <div class="bg-all">
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
            <section id="header">
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
            <script>$("form").each(function () {
                    $(this).append("<input type=\"hidden\" name=\"h1\" value=\"" + $("h1").text() + "\">")});</script>
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