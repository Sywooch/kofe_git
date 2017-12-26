<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $page['meta_title'];
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
                <?= $page['description']; ?>
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
            <div id="rumiservice4_header">Вам нужен  <span class="colorbg">надёжный</span>  сервисный центр?</div>
            <div id="rumiservice4_text">Наша цель - вернуть к жизни Ваше устройство! Для этого у нас есть профессионалы, современные технологии и сервис, не имеющий равных по своему уровню.</div>
            <div class="owl-carousel">
                <div class="rumiservice4_item">
                    <div class="rumiservice4_item_image">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/data/rumiservice4_slider1.png" />
                    </div>
                    <div class="rumiservice4_item_right">
                        <div class="rumiservice4_item_right_header">Гарантия</div>
                        <div class="rumiservice4_item_right_text">
                            Отремонтировав свой Xiaomi в нашем сервисном<br />
                            центре, вы <span class="colortext">получите гарантии на выполненные работы</span><br />
                            сроком до 2-ух месяцев, а также гарантийный чек.<br />
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
                            Вам больше <span class="colortext">не придётся ждать</span> поступления запчастей<br />
                            месяцами. У нас самый большой ассортимент запасных<br />
                            частей в наличии. Даже самый сложный ремонт мы можем произвести в максимально короткие сроки.<br />
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
                            Мы дорожим своей репутацией и отзывами клиентов.<br />
                            Срочный ремонт Xiaomi в сервисном центре выполняется<br />
                            по цене обычного – <span class="colortext">без накруток</span>. А сроки составляют<br />
                            <span class="colortext">от 15 минут</span>, в зависимости от сложности работ.<br />
                        </div>
                    </div>
                </div>
                <div class="rumiservice4_item">
                    <div class="rumiservice4_item_image">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/data/rumiservice4_slider4.png" />
                    </div>
                    <div class="rumiservice4_item_right">
                        <div class="rumiservice4_item_right_header">Квалификация мастеров</div>
                        <div class="rumiservice4_item_right_text">
                            Сотрудники компании прошли стажировку на<br />
                            предприятиях в Китае. Это значит, что мы <span class="colortext">с лёгкостью</span><br />
                            <span class="colortext">берёмся даже за самый сложный ремонт</span>, не вынуждая Вас приобретать дорогостоящие запчасти без необходимости.
                        </div>
                    </div>
                </div>
                <div class="rumiservice4_item">
                    <div class="rumiservice4_item_image">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/data/rumiservice4_slider5.png" />
                    </div>
                    <div class="rumiservice4_item_right">
                        <div class="rumiservice4_item_right_header">Узконаправленность</div>
                        <div class="rumiservice4_item_right_text">
                            Наш сервисный центр специализируется на ремонте<br />
                            <span>техники одного бренда Xiaomi</span>. Мы знаем абсолютно<br />
                            всё о ремонте смартфонов, планшетов, гаджетов<br />
                            и любых других устройств компании Xiaomi.
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
                            Отремонтировав свой Xiaomi в нашем сервисном<br />
                            центре, вы <span>получите гарантии на выполненные работы</span><br />
                            сроком до 1 года, на установленные нами сложные<br />
                            комплектующие сроком до 3-х лет.
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
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/data/rumiservice6_slider1.png" />
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
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/data/rumiservice6_slider2.png" />
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
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/data/rumiservice6_slider3.png" />
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
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/data/rumiservice6_slider4.png" />
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
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/data/rumiservice6_slider5.png" />
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