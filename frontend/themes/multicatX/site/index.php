<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $page['meta_title'] ?: 'Сервисный центр по ремонту кофемашин ' . \app\components\CController::$monoBrand['title'] . '  🍵 Гарантия 👍 Доставка 🚗 Качество';
?>
<div id="notification"></div>
<div class="clear"></div>
<div id="content" class="colorborder">
    <div class="main_container my-banner">
        <video class="bg-video" id="bgvid" playsinline autoplay muted loop>
            <source src="<?= $assets . $siteConfig['theme'] . '/'; ?>video/fix.webm" type="video/webm">
            <source src="<?= $assets . $siteConfig['theme'] . '/'; ?>video/fix.mp4" type="video/mp4">
        </video>
        <div id="rumiservice1" class="inner_container">
            <div class="info">
                <div class="content">
                    <span>01.</span>
                    <p class="title">Ремонт в тот-же день</p>
                    <p>При заказе услуги, мы выполним ремонт в тот-же день, а также бесплатно продиагностируем и доставим кофемашину!</p>
                </div>
                <div class="content">
                    <span>02.</span>
                    <p class="title">Гарантия возврата денег</p>
                    <p>Если ремонт техники был выполнен не надлежащим образом, вернём потраченные средства!</p>
                </div>
                <div class="content">
                    <span>03.</span>
                    <p class="title">Поговорите с экспертом</p>
                    <p>Сертифицированные специалисты проинспектурют вас о том, как избежать возможных проблем связанных с вашей техникой!</p>
                </div>
                <div class="content">
                    <span>04.</span>
                    <p class="title">Обеспечение вашего комфорта под гарантией!</p>
                    <p>Сервисный центр работает по принципам прозрачности и открытости, именно по этому ваша техника в надёжных руках!</p>
                </div>
            </div>
            <div class="form">
                <h1><?= $page['meta_h1']; ?></h1>
                <div class="plashka-in">
                    <h2>Ремонт <?= app\components\CController::$monoBrand['url']; ?>!</h2> 
                    <span>Только <?= app\components\CController::$monoBrand['url']; ?>!</span>
                    <?= $page['description']; ?>
                </div>
                <?= multicatX\widgets\forms\MainPageForm::widget(); ?>                    
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="main_container rainbow_container colorbg">
        <div id="rumiservice2" class="inner_container">
            <div class="rumiservice2_time_aver">Бесплатная диагностика</div>
            <div class="rumiservice2_delivery">Доставка курьером</div>
            <div class="rumiservice2_skobka_line"></div>
            <div class="rumiservice2_time">Ремонт при владельце</div>
            <div class="rumiservice2_guaranty"><span>Гарантия до 3-ех месяцев</span></div>
        </div>
    </div>
    <div class="main_container grey_container">
        <div id="rumiservice4" class="inner_container">
            <div id="home-news">
                <div class="home_header">
                    <span>Вам нужен</span>
                    <strong class="colorbg">надёжный</strong>
                    <span> сервисный центр?</span>
                </div>
                <div class="home_header">
                    <span>Вам нужен</span>
                    <strong class="colorbg">качественный</strong>
                    <span> сервисный центр? </span>
                </div>
                <div class="home_header">
                    <span>Вам нужен</span>
                    <strong class="colorbg">лучший</strong>
                    <span> сервисный центр?</span>
                </div>
            </div>
            <div id="rumiservice4_text">Наша цель - вернуть к жизни Ваше устройство! Для этого у нас есть профессионалы, современные технологии и сервис, не имеющий равных по своему уровню.</div>
            <div class="owl-carousel">
                <div class="rumiservice4_item">
                    <div class="rumiservice4_item_image">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/data/rumiservice4_slider1.png" />
                    </div>
                    <div class="rumiservice4_item_right">
                        <div class="rumiservice4_item_right_header">Гарантия</div>
                        <div class="rumiservice4_item_right_text">
                            На весь выполненный ремонт бытовой техники, а так-же на заменённые комплектующие - Вы получаете гарантию сроком <span class="colortext">до 2-х лет!</span>
                        </div>
                    </div>
                </div>
                <div class="rumiservice4_item">
                    <div class="rumiservice4_item_image">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/data/rumiservice4_slider2.png" />
                    </div>
                    <div class="rumiservice4_item_right">
                        <div class="rumiservice4_item_right_header">Наличие запчастей</div>
                        <div class="rumiservice4_item_right_text">
                            Благодаря наличию собственного склада с зап. частями, <span class="colortext">Вам не придётся ждать</span> поставки необходимой запасной части для вашей бытовой техники. Тем самым срок ремонта кардинально сокращается.
                        </div>
                    </div>
                </div>
                <div class="rumiservice4_item">
                    <div class="rumiservice4_item_image">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/data/rumiservice4_slider3.png" />
                    </div>
                    <div class="rumiservice4_item_right">
                        <div class="rumiservice4_item_right_header">Честные цены и короткие сроки</div>
                        <div class="rumiservice4_item_right_text">
                            Сервисный центр дорожит своей репутацией и выполняет срочный ремонт бытовой техники. А цены на услуги являются самыми <span class="colortext">лучшим в Москве</span>, так как все запасные части заказываются у <span class="colortext">официальных представителей</span> и отпускаются <span class="colortext">без наценок!</span>
                        </div>
                    </div>
                </div>
                <div class="rumiservice4_item">
                    <div class="rumiservice4_item_image">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/data/rumiservice4_slider6.png" />
                    </div>
                    <div class="rumiservice4_item_right">
                        <div class="rumiservice4_item_right_header">Курьерская доставка устройства</div>
                        <div class="rumiservice4_item_right_text">
                            После окончания ремонта наш сервисный центр <span class="colortext">бесплатно доставляет</span> бытовую технику и выдаёт <span class="colortext">обязательную гарантию!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= multicatX\widgets\lists\PopularServices::widget(); ?>
    <div class="main_container grey_container">
        <div id="rumiservice6" class="inner_container">
            <div id="rumiservice6_header">Этапы ремонта</div>
            <div id="rumiservice6_circle">
                <div class="rumiservice6_circle_div rumiservice6_circle_div_active" id="rumiservice6_circle1" slide_num="1">
                    <div class="rumiservice6_circle_div_circle">1</div>
                    <div class="rumiservice6_circle_div_text">Заявка</div>
                </div>
                <div class="rumiservice6_circle_div" id="rumiservice6_circle2" slide_num="2">
                    <div class="rumiservice6_circle_div_circle">2</div>
                    <div class="rumiservice6_circle_div_text">Диагностика</div>
                </div>
                <div class="rumiservice6_circle_div" id="rumiservice6_circle3" slide_num="3">
                    <div class="rumiservice6_circle_div_circle">3</div>
                    <div class="rumiservice6_circle_div_text">Согласование</div>
                </div>
                <div class="rumiservice6_circle_div" id="rumiservice6_circle4" slide_num="4">
                    <div class="rumiservice6_circle_div_circle">4</div>
                    <div class="rumiservice6_circle_div_text">Ремонт</div>
                </div>
                <div class="rumiservice6_circle_div" id="rumiservice6_circle5" slide_num="5">
                    <div class="rumiservice6_circle_div_circle">5</div>
                    <div class="rumiservice6_circle_div_text">Контроль</div>
                </div>
            </div>
            <div class="owl-carousel-2">
                <div class="rumiservice6_item">
                    <div class="rumiservice6_item_image">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100%" height="100%" version="1.1" viewBox="0 0 1727 1727" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path class="fil1" d="M838 1207c4,2 9,3 14,3 8,0 17,-3 24,-10l194 -186 367 0c80,0 146,-65 146,-145l0 -410c0,-81 -66,-146 -146,-146l-672 0c-80,0 -146,65 -146,146l0 410c0,80 66,145 146,145l52 0 0 161c0,14 8,27 21,32zm539 -445c0,-20 -15,-35 -35,-35l-501 0c-19,0 -35,15 -35,35 0,19 16,34 35,34l501 0c20,0 35,-15 35,-34zm-536 -155l501 0c20,0 35,-16 35,-35 0,-20 -15,-35 -35,-35l-501 0c-19,0 -35,15 -35,35 0,19 16,35 35,35zm-76 337c-42,0 -76,-33 -76,-75l0 -410c0,-42 34,-76 76,-76l672 0c42,0 75,34 75,76l0 410c0,42 -33,75 -75,75l-381 0c-9,0 -18,4 -24,10l-146 140 0 -114c0,-20 -15,-35 -34,-35l-87 0 0 -1 0 0z"/>
                        <path class="fil2" d="M1218 1599l0 -466c0,-20 -16,-35 -35,-35 -20,0 -35,15 -35,35l0 466c0,32 -26,58 -58,58l-818 0c-32,0 -58,-26 -58,-58l0 -1471c0,-32 26,-58 58,-58l818 0c32,0 58,26 58,58l0 73c0,19 15,35 35,35 19,0 35,-16 35,-35l0 -73c0,-71 -58,-128 -128,-128l-818 0c-70,0 -127,57 -127,128l0 1471c0,71 57,128 127,128l818 0c71,0 128,-58 128,-128zm-432 -151l-210 0c-19,0 -34,15 -34,35 0,19 15,35 34,35l210 0c19,0 35,-16 35,-35 0,-20 -16,-35 -35,-35z"/>
                        </svg>
                    </div>
                    <div class="rumiservice6_item_right">
                        <div class="rumiservice6_item_right_header">Звонок или заявка с сайта</div>
                        <div class="rumiservice6_item_right_text">
                            Мы можем <span class="colortext">решить Вашу проблему удалённо.</span><br />
                            В случае возникновения программных сбоев в работе<br />
                            смартфона, планшета или другого устройста Xiaomi<br />
                            больше нет необходимости тратить долгое время на<br />
                            дорогу, просто позвоните к нам в сервисный центр.
                        </div>
                    </div>
                </div>
                <div class="rumiservice6_item">
                    <div class="rumiservice6_item_image">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100%" height="100%" version="1.1" viewBox="0 0 1727 1727" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path class="fil1" d="M1244 699c-13,0 -23,11 -23,24 0,254 -205,461 -458,465l32 -32c10,-10 10,-24 0,-34 -9,-9 -24,-9 -33,0l-72 72c-5,5 -7,11 -7,17 0,6 2,12 7,17l72 72c5,4 11,7 17,7 6,0 12,-3 16,-7 10,-9 10,-24 0,-33l-32 -33c279,-3 505,-231 505,-511 0,-13 -11,-24 -24,-24zm-1000 24c0,13 10,23 23,23 13,0 24,-10 24,-23 0,-254 204,-461 457,-465l-32 32c-9,9 -9,24 0,33 5,5 11,7 17,7 6,0 12,-2 16,-7l72 -72c10,-9 10,-24 0,-33l-72 -72c-9,-10 -24,-10 -33,0 -9,9 -9,23 0,33l32 32c-279,4 -504,232 -504,512z"/>
                        <path class="fil2" d="M698 583c-37,15 -67,44 -82,82 -16,37 -16,78 0,116 23,56 78,93 140,93 20,0 39,-4 58,-11 37,-16 66,-45 82,-82 15,-38 15,-79 0,-116 -24,-57 -79,-94 -140,-94 -20,0 -40,4 -58,12zm508 708l-36 25c-122,86 -265,131 -414,131 -399,0 -724,-324 -724,-723 0,-399 325,-724 724,-724 398,0 723,325 723,724 0,170 -60,334 -170,465l-30 35 402 419c19,20 19,52 -1,70 -9,9 -21,14 -34,14 -14,0 -26,-5 -36,-15l-404 -421zm-450 -1192c-345,0 -625,280 -625,625 0,344 280,624 625,624 344,0 624,-280 624,-624 0,-345 -280,-625 -624,-625zm47 311l-10 23c-24,-3 -50,-3 -75,0l-10 -23c-8,-20 -27,-33 -48,-33 -7,0 -13,2 -20,5l-44 18c-13,5 -23,15 -28,28 -6,13 -6,27 0,40l9 23c-20,16 -38,34 -53,54l-23 -10c-7,-3 -13,-4 -20,-4 -21,0 -40,12 -48,32l-19 44c-5,13 -5,27 0,40 6,13 16,23 29,28l23 10c-3,25 -3,51 0,75l-23 10c-13,5 -23,16 -29,28 -5,13 -5,28 0,40l19 45c8,19 27,32 48,32 7,0 13,-2 20,-4l23 -10c16,20 33,38 53,53l-9 24c-11,26 1,57 28,68l44 18c7,3 13,4 20,4 21,0 40,-13 48,-32l10 -24c25,4 51,4 75,0l10 24c8,19 27,32 48,32 7,0 14,-1 20,-4l45 -18c13,-6 23,-16 28,-29 5,-12 5,-27 0,-40l-10 -23c20,-15 38,-33 53,-53l24 10c6,2 13,4 20,4l0 0c21,0 40,-13 48,-33l18 -44c6,-13 6,-27 0,-40 -5,-13 -15,-23 -28,-28l-23 -10c3,-25 3,-50 0,-75l23 -10c13,-5 23,-15 28,-28 6,-13 6,-27 0,-40l-18 -44c-8,-20 -27,-32 -48,-32 -7,0 -14,1 -20,4l-24 9c-15,-20 -33,-38 -53,-53l10 -23c5,-13 5,-27 0,-40 -5,-13 -15,-23 -28,-28l-45 -19c-6,-2 -13,-4 -20,-4 -21,0 -40,13 -48,33zm27 58l17 -41c1,-2 3,-3 4,-3 1,0 2,0 2,1l45 18c1,1 2,2 2,3 1,1 1,2 0,3l-17 41c-4,11 0,23 9,29 27,18 50,40 67,67 7,9 19,13 29,9l41 -17c0,0 1,0 2,0 1,0 3,0 4,3l19 44c1,3 -1,6 -3,7l-41 17c-10,4 -16,15 -14,26 7,32 6,64 0,95 -2,11 4,23 14,27l41 17c2,0 2,2 3,2 0,1 0,3 0,4l-19 44c-1,3 -3,4 -4,4 -1,0 -2,-1 -2,-1l-41 -17c-11,-4 -22,-1 -29,9 -18,27 -40,49 -67,67 -9,6 -13,18 -9,29l17 41c1,1 1,3 0,3 0,1 -1,2 -3,3l-44 18c-1,0 -1,1 -2,1 -2,0 -4,-1 -5,-3l-17 -41c-3,-9 -12,-15 -21,-15 -2,0 -3,1 -5,1 -31,6 -64,6 -95,0 -11,-2 -22,4 -27,14l-16 41c-1,2 -4,3 -5,3 -1,0 -1,-1 -2,-1l-44 -18c-3,-1 -4,-4 -3,-7l17 -41c4,-10 0,-22 -9,-28 -27,-18 -49,-41 -67,-67 -6,-10 -19,-14 -29,-9l-41 17c0,0 -1,0 -1,0 -2,0 -4,-1 -5,-3l-18 -44c-1,-2 -1,-4 0,-4 0,-1 1,-2 2,-3l41 -17c10,-4 16,-15 14,-26 -6,-32 -6,-64 0,-95 2,-11 -4,-23 -14,-27l-41 -17c-2,0 -2,-2 -2,-2 -1,-1 -1,-3 0,-4l18 -45c1,-2 3,-3 5,-3 0,0 1,1 1,1l41 17c11,4 23,0 29,-9 18,-27 40,-49 67,-67 9,-6 13,-19 9,-29l-17 -41c-1,-1 0,-3 0,-3 1,-1 1,-3 3,-3l44 -19c1,0 2,0 2,0 2,0 4,1 5,3l17 41c4,10 15,16 26,14 32,-6 64,-6 96,0 10,2 22,-3 26,-14zm22 215c11,26 11,54 0,80 -11,26 -31,46 -56,56 -13,6 -26,8 -40,8 -43,0 -81,-25 -97,-64 -10,-26 -10,-54 0,-80 11,-26 31,-46 57,-57 13,-5 26,-8 40,-8 42,0 80,26 96,65z"/>
                        </svg>
                    </div>
                    <div class="rumiservice6_item_right">
                        <div class="rumiservice6_item_right_header">Диагностика проблемы</div>
                        <div class="rumiservice6_item_right_text">
                            Мы с лёгкостью сможем <span class="colortext">продиагностировать</span><br />
                            <span class="colortext"> ваши устройства.</span> И сделаем для<br />
                            Вас это бесплатно! Мы знаем все возможные проблемы, поскольку специализируемся исключительно на бренде
                            Xiaomi и решаем самые сложные задачи каждый день.
                        </div>
                    </div>
                </div>
                <div class="rumiservice6_item">
                    <div class="rumiservice6_item_image">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100%" height="100%" version="1.1" viewBox="0 0 1727 1727" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path class="fil1" d="M1336 1336c-126,130 -296,202 -476,204 -176,2 -343,-63 -471,-184l64 -1c19,0 34,-15 34,-35 0,-19 -16,-34 -35,-34l0 0 -149 1c-19,1 -34,16 -34,36l1 148c1,19 16,35 35,35l1 0c19,0 34,-16 34,-35l0 -65c139,132 320,204 512,204 3,0 6,0 9,0 199,-2 386,-82 525,-224 14,-14 14,-36 0,-50 -15,-14 -36,-13 -50,0zm-1018 -994c-13,14 -13,36 1,49 14,14 36,14 49,-1 127,-129 296,-201 476,-203 177,-2 344,63 472,184l-64 0c-20,1 -35,16 -35,36 0,19 16,34 35,34l0 0 149 -2c19,0 35,-15 35,-35l-2 -148c0,-19 -16,-35 -35,-35l0 0c-19,1 -35,16 -35,36l1 64c-141,-134 -326,-206 -521,-204 -200,3 -386,82 -526,225z"/>
                        <path class="fil2" d="M276 847c0,-12 -6,-23 -16,-29 -6,-4 -10,-11 -10,-19l0 -127c0,-44 36,-80 80,-80l28 0c44,0 79,36 79,80l0 127c0,8 -4,15 -10,19 -10,6 -15,17 -15,29l0 123c0,15 9,29 23,36 16,8 98,49 174,112 6,5 9,13 9,21l0 87c0,19 16,35 35,35 20,0 35,-16 35,-35l0 -87c0,-29 -12,-56 -35,-75 -67,-55 -138,-95 -171,-112l0 -89c16,-17 25,-40 25,-64l0 -127c0,-82 -67,-149 -149,-149l-28 0c-82,0 -149,67 -149,149l0 127c0,24 9,47 26,64l0 89c-34,17 -105,57 -172,112 -22,18 -35,45 -35,75l0 87c0,19 16,35 35,35 19,0 35,-16 35,-35l0 -87c0,-8 3,-16 9,-21 76,-63 159,-104 174,-112 14,-7 23,-21 23,-36l0 -123 0 0zm1416 217c-67,-55 -138,-95 -171,-112l0 -88c16,-17 25,-40 25,-64l0 -127c0,-83 -67,-150 -149,-150l-28 0c-82,0 -149,67 -149,150l0 127c0,24 9,47 26,64l0 88c-34,17 -105,57 -172,112 -22,18 -35,45 -35,75l0 87c0,19 16,35 35,35 19,0 35,-16 35,-35l0 -87c0,-8 3,-16 9,-21 76,-63 159,-104 174,-112 14,-7 23,-21 23,-36l0 -123c0,-12 -6,-23 -15,-29 -7,-4 -10,-11 -10,-19l0 -127c0,-44 35,-80 79,-80l28 0c44,0 80,36 80,80l0 127c0,8 -4,15 -10,19 -10,6 -16,17 -16,29l0 123c0,15 9,29 23,36 16,8 98,49 174,112 6,5 9,13 9,21l0 87c0,19 16,35 35,35 20,0 35,-16 35,-35l0 -87c0,-29 -13,-56 -35,-75z"/>
                        </svg>
                    </div>
                    <div class="rumiservice6_item_right">
                        <div class="rumiservice6_item_right_header">Согласование времени и стоимости</div>
                        <div class="rumiservice6_item_right_text">
                            После диагностики устройства, мастер сможет сразу Вам сказать стоимость работы. После провдения оплаты Вы сможете согласовать <span class="colortext">удобное для Вас время</span> проведения<br />
                            ремонтных работ. Мастер согласует с Вами <span class="colortext">удобное время</span> и Вам останется только ждать окончания <span class="colortext">ремонта</span>.
                        </div>
                    </div>
                </div>
                <div class="rumiservice6_item">
                    <div class="rumiservice6_item_image">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100%" height="100%" version="1.1" viewBox="0 0 1727 1727" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path class="fil1" d="M882 1712l86 -35c46,-19 68,-72 49,-118l-22 -54c43,-32 81,-70 113,-113l54 22c22,9 47,9 69,0 22,-9 40,-27 49,-49l36 -86c19,-47 -3,-100 -49,-119l-79 -32c-18,-8 -38,1 -46,19 -7,18 1,38 19,45l79 33c11,4 16,17 12,27l-36 86c-2,5 -6,10 -11,12 -5,2 -11,2 -16,0l-80 -33c-15,-6 -33,-1 -42,13 -36,53 -81,98 -134,134 -14,9 -20,27 -13,42l33 80c4,10 -1,22 -12,27l-86 35c-5,2 -11,2 -16,0 -5,-2 -9,-6 -11,-11l-33 -79c-6,-16 -23,-25 -39,-21 -63,13 -127,12 -190,0 -16,-3 -33,6 -39,21l-33 79c-4,11 -16,15 -27,11l-86 -36c-5,-2 -9,-6 -11,-11 -3,-5 -3,-11 0,-16l32 -79c7,-16 1,-33 -12,-42 -54,-36 -99,-81 -135,-135 -9,-13 -27,-19 -42,-13l-79 33c-6,2 -11,2 -16,0 -5,-2 -9,-6 -11,-11l-36 -87c-2,-5 -2,-10 0,-15 2,-5 6,-10 11,-12l80 -33c15,-6 24,-22 20,-39 -12,-62 -12,-127 0,-189 4,-16 -5,-33 -20,-39l-80 -33c-10,-4 -15,-17 -11,-27l36 -87c4,-10 17,-15 27,-11l79 33c16,6 34,1 43,-13 35,-53 80,-99 134,-134 14,-9 19,-27 13,-42l-33 -80c-2,-5 -2,-10 0,-16 2,-5 6,-9 12,-11l86 -35c5,-3 10,-3 16,0 5,2 9,6 11,11l33 79c7,18 28,27 45,19 18,-7 27,-28 19,-45l-32 -80c-10,-22 -27,-39 -49,-49 -12,-4 -23,-7 -35,-7 -12,0 -24,3 -35,7l-86 36c-22,9 -40,27 -49,49 -9,22 -9,47 0,69l22 54c-43,32 -81,70 -113,113l-54 -22c-46,-19 -99,3 -118,49l-36 86c-19,46 3,99 49,118l53 23c-7,53 -7,107 0,160l-53 22c-22,9 -40,27 -49,49 -9,22 -9,47 0,69l35 87c10,22 27,39 49,49 23,9 47,9 70,0l53 -23c32,44 70,81 114,114l-23 53c-9,23 -9,47 0,69 10,23 27,40 49,49l87 36c46,19 99,-2 118,-49l22 -53c53,8 107,8 160,0l23 53c9,23 26,40 49,49 22,10 46,10 69,0zm-504 -652c1,156 128,282 283,282 1,0 2,0 3,0 75,-1 146,-31 200,-85 53,-54 82,-125 81,-201 0,-19 -15,-35 -34,-35l-1 0c-19,0 -35,16 -34,35 0,58 -22,111 -62,152 -40,41 -94,64 -151,64 0,0 -1,0 -1,0 -118,0 -213,-95 -214,-212 -1,-118 94,-215 212,-216 20,0 35,-16 35,-35 0,-19 -16,-35 -35,-35 0,0 0,0 0,0 -157,1 -283,130 -282,286z"/>
                        <path class="fil2" d="M1250 8l-68 0c-41,0 -75,34 -75,75l0 35c-34,9 -66,23 -97,40l-24 -24c-14,-14 -33,-22 -54,-22 -20,0 -39,7 -53,22l-48 48c-14,14 -22,33 -22,53 0,20 8,39 22,53l25 25c-18,30 -31,63 -40,96l-35 0c-42,0 -76,34 -76,76l0 68c0,41 34,75 76,75l35 0c9,34 22,67 40,97l-25 24c-14,15 -22,34 -22,54 0,20 8,39 22,53l48 48c14,14 33,22 53,22 21,0 40,-8 54,-22l24 -25c31,18 63,31 97,40l0 35c0,42 34,76 75,76l68 0c42,0 76,-34 76,-76l0 -35c34,-9 66,-22 96,-40l25 25c14,14 33,22 53,22 20,0 39,-8 53,-22l48 -48c30,-29 30,-77 0,-107l-24 -24c17,-30 31,-63 40,-97l35 0c41,0 75,-34 75,-75l0 -68c0,-42 -34,-76 -75,-76l-35 0c-9,-33 -23,-66 -40,-96l24 -25c30,-29 30,-77 0,-106l-48 -48c-14,-14 -33,-22 -53,-22 -20,0 -39,7 -53,22l-25 24c-30,-17 -62,-31 -96,-40l0 -35c-1,-41 -34,-75 -76,-75zm-241 510c0,114 93,208 207,208 115,0 208,-94 208,-208 0,-114 -93,-207 -208,-207 -114,0 -207,93 -207,207zm345 0c0,76 -62,138 -138,138 -76,0 -137,-62 -137,-138 0,-75 61,-137 137,-137 76,0 138,62 138,137zm54 -287c6,4 13,6 19,6 9,0 18,-3 25,-10l44 -44c1,-1 3,-2 4,-2 1,0 2,1 4,2l48 48c2,2 2,6 0,8l-44 44c-12,11 -14,30 -5,44 26,38 43,80 52,124 3,16 17,28 34,28l62 0c4,0 6,3 6,6l0 68c0,3 -2,5 -6,5l-62 0c-17,0 -31,12 -34,29 -9,44 -26,86 -52,124 -9,13 -7,32 5,44l44 44c2,2 2,5 0,8l-48 48c-2,1 -3,1 -4,1 -1,0 -3,0 -4,-1l-44 -45c-12,-12 -30,-14 -44,-4 -38,25 -80,42 -124,51 -16,3 -28,18 -28,34l0 63c0,3 -3,5 -6,5l-68 0c-3,0 -6,-2 -6,-5l0 -63c0,-16 -11,-31 -28,-34 -44,-9 -86,-26 -124,-51 -14,-10 -32,-8 -44,4l-44 44c-1,1 -3,2 -4,2 -1,0 -2,-1 -4,-2l-48 -48c-1,-2 -2,-3 -2,-4 0,-1 1,-2 2,-4l44 -44c12,-12 14,-30 5,-44 -26,-38 -43,-80 -52,-124 -3,-16 -18,-28 -34,-28l-62 0c-4,0 -6,-3 -6,-6l0 -68c0,-3 2,-6 6,-6l62 0c16,0 31,-11 34,-28 9,-44 26,-86 52,-124 9,-14 7,-32 -5,-44l-44 -44c-1,-1 -2,-3 -2,-4 0,-1 1,-2 2,-4l48 -48c2,-1 3,-1 4,-1 1,0 3,0 4,1l44 44c12,12 30,14 44,5 38,-26 80,-43 124,-52 16,-3 28,-17 28,-34l0 -62c0,-3 3,-5 6,-5l68 0c3,0 6,2 6,5l0 63c0,16 11,31 28,34 44,9 86,26 124,51z"/>
                        </svg>
                    </div>
                    <div class="rumiservice6_item_right">
                        <div class="rumiservice6_item_right_header">Ремонт неисправного устройства</div>
                        <div class="rumiservice6_item_right_text">
                            Ремонт каждого устройства производится в соответствии <br />
                            с регламентом изделия. Технология ремонта <span class="colortext">неоднократно проверена</span>
                            и каждый мастер имеет <span class="colortext">необходимую квалификацию</span> для выполнения ремонтной работы.
                        </div>
                    </div>
                </div>
                <div class="rumiservice6_item">
                    <div class="rumiservice6_item_image">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="100%" height="100%" version="1.1" viewBox="0 0 1727 1727" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path class="fil1" d="M1680 665c11,-21 13,-45 5,-68 -7,-23 -23,-41 -44,-52l-191 -96c-5,-3 -9,-8 -10,-14l-33 -212c-7,-43 -44,-75 -88,-75 -4,0 -9,1 -14,2l-211 33c-6,1 -12,-1 -16,-5l-151 -152c-17,-17 -40,-26 -63,-26 -24,0 -46,9 -63,26l-152 151c-3,4 -8,6 -13,6 -1,0 -2,0 -3,0l-211 -34c-5,-1 -10,-1 -14,-1 -44,0 -81,32 -88,75l-33 211c-1,6 -5,11 -10,14l-191 97c-21,11 -37,29 -44,52 -8,22 -6,46 5,68l97 190c3,5 3,12 0,17l-97 191c-11,21 -13,45 -5,67 7,23 23,42 44,52l191 97c5,3 9,8 10,14l33 211c7,44 44,75 88,75 4,0 9,0 14,-1l211 -34c6,-1 12,2 16,6l152 151c16,17 39,26 63,26 23,0 46,-9 63,-26l151 -151c4,-4 10,-7 16,-6l212 34c4,1 9,1 14,1 43,0 81,-31 87,-75l34 -211c1,-6 4,-11 9,-14l191 -97c22,-10 37,-29 45,-52 7,-22 5,-46 -6,-67l-97 -191c-3,-5 -3,-12 0,-17l97 -190zm-160 239l97 191c2,4 3,9 1,14 -1,5 -5,9 -9,11l-191 97c-26,13 -43,38 -47,66l-34 211c-1,10 -11,17 -21,15l-212 -33c-4,-1 -9,-1 -14,-1 -23,0 -46,9 -63,26l-150 151c-7,7 -19,7 -26,0l-152 -151c-16,-17 -39,-26 -63,-26 -4,0 -9,0 -14,1l-211 33c-10,2 -20,-5 -22,-15l-33 -211c-4,-28 -22,-53 -47,-66l-191 -97c-5,-2 -8,-6 -10,-11 -1,-5 -1,-10 1,-14l97 -191c14,-25 14,-55 0,-81l-97 -190c-2,-5 -3,-10 -1,-15 2,-5 5,-9 10,-11l191 -97c25,-12 43,-37 47,-65l33 -211c2,-10 12,-18 22,-16l211 34c5,0 9,1 14,1l0 0c24,0 46,-9 63,-26l151 -151c7,-7 20,-7 27,0l151 151c17,17 39,26 63,26 5,0 9,0 14,-1l211 -34c11,-1 20,6 22,16l33 211c5,28 23,53 48,66l191 97c4,2 7,6 9,11 2,5 1,10 -1,14l-97 191c-14,25 -14,55 -1,80z"/>
                        <path class="fil2" d="M1140 653l-156 0 0 -108c0,-58 -17,-99 -51,-124 -53,-39 -122,-19 -130,-17 -14,5 -24,18 -24,34l0 138c0,97 -116,131 -121,133 -2,0 -5,2 -7,3 -11,-9 -26,-14 -41,-14l-100 0c-38,0 -69,31 -69,69l0 345c0,38 31,69 69,69l100 0c17,0 32,-6 45,-17 22,18 49,29 80,29l338 0c82,0 137,-45 147,-120l45 -290c1,-1 1,-3 1,-5 0,-69 -57,-125 -126,-125zm-531 459l-98 0 0 -344 98 0 0 344zm542 -49c0,0 0,1 0,1 -2,16 -8,60 -77,60l-339 0c-31,0 -56,-25 -56,-56l0 -292c20,-6 170,-56 170,-200l0 -109c14,0 31,1 42,10 15,12 23,34 23,68l0 143c0,19 15,35 35,35l191 0c30,0 54,24 55,53l-44 287z"/>
                        </svg>
                    </div>
                    <div class="rumiservice6_item_right">
                        <div class="rumiservice6_item_right_header">Контроль результата работы</div>
                        <div class="rumiservice6_item_right_text">
                            Мы максимально заботимся о качестве проделанной нами работы. После осуществления ремонта Вам позвонит оператор и проверит Вашу удовлетворённость результатом. <span class="colortext">Мы предоставляем гарантию</span> на проделанные нами работы. В течении гарантийного периода Вы сможете повторно обратиться за помощью с возникающими у Вас вопросами.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content" style="background-color: #fff;">
        <div class="inner_container">
            <div id="content" class="my-text"><br>           
                <?= $page['full_description']; ?>       
            </div>
        </div>
    </div>
    <div class="main_container">
        <div id="rumiservice3" class="inner_container">
            <div class="rumiservice3_header">
                Мы уже сделали:
            </div>
            <div class="rumiservice3_buttons">
                <div class="rumiservice3_button_container">
                    <div class="rumiservice3_button colortexthover rumiservice3_button_active" button_id="1" href="smartfonyi/index.html">
                        Ремонт смартфонов       
                    </div>
                    <a href="smartfonyi/index.html" style="display:block;">
                        <span>
                            Все услуги для смартфонов                                   </span>
                    </a>
                </div>
                <div class="rumiservice3_button_container">
                    <div class="rumiservice3_button colortexthover " button_id="2" href="planshetyi/index.html">
                        Планшеты       
                    </div>
                    <a href="planshetyi/index.html" style="display:none;width: 278px;left:-30px;">
                        <span>
                            Все услуги для планшетов и ноутбуков                        </span>
                    </a>
                </div>
                <div class="rumiservice3_button_container">
                    <div class="rumiservice3_button colortexthover " button_id="3" href="gadjetyi/index.html">
                        Гаджеты        
                    </div>
                    <a href="gadjetyi/index.html" style="display:none;">
                        <span>
                            Все услуги для гаджетов          </span>
                    </a>
                </div>
            </div>
            <div class="rumiservice3_blocks rumiservice3_block1" style="">
                <div class="rumiservice3_left_block">
                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/cache/data/rumiservice3-259x440.jpg" />
                </div>
                <div class="rumiservice3_chart">
                    <div class="rumiservice3_chart_bg"></div>
                    <div class="rumiservice3_chart_tooltip">
                        <span>7846</span> устройств за 3 года           
                    </div>
                    <div id="chart1"></div>
                </div>
            </div>
            <div class="rumiservice3_blocks rumiservice3_block2" style="display:none;">
                <div class="rumiservice3_left_block">
                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/cache/data/rumiservice3_image2-259x440.png" />
                </div>
                <div class="rumiservice3_chart">
                    <div class="rumiservice3_chart_bg"></div>
                    <div class="rumiservice3_chart_tooltip">
                        <span>1084</span> устройств за 3 года           
                    </div>
                    <div id="chart2"></div>
                </div>
            </div>
            <div class="rumiservice3_blocks rumiservice3_block3" style="display:none;">
                <div class="rumiservice3_left_block">
                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/cache/data/action-camera-xiaomi-yi-travel-edition-259x440.jpg" />
                </div>
                <div class="rumiservice3_chart">
                    <div class="rumiservice3_chart_bg"></div>
                    <div class="rumiservice3_chart_tooltip">
                        <span>280</span> устройств за 3 года            
                    </div>
                    <div id="chart3"></div>
                </div>
            </div>
        </div>
    </div>

</div>