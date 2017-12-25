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
                <form action="">
                    <input type="tel" name="" placeholder="+7 (___) ___-__-__" aria-required="true">
                    <button class="colorbg">Заказать сейчас</button>
                </form>
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
    <div class="main_container">
        <div id="rumiservice7" class="inner_container">
            <div class="rumiservice7_topper">
                <div class="rumiservice7_header">Популярные услуги:</div>
                <div class="rumiservice7_buttons">
                    <div class="rumiservice7_button colortexthover rumiservice7_button_active" button_id="1">Ремонт смартфонов</div>
                    <div class="rumiservice7_button colortexthover " button_id="2">Планшеты</div>
                    <div class="rumiservice7_button colortexthover " button_id="3">Гаджеты</div>
                </div>
            </div>
            <div class="rumiservice7_blocks_container">
                <div class="rumiservice7_blocks rumiservice7_block1" style="display: block;">
                    <div class="rumiservice7_table_header">
                        <div class="rumiservice_column_1">Наименование позиции</div>
                        <div class="rumiservice_column_2">Стоимость *</div>
                        <div class="rumiservice_column_3">Время</div>
                        <div class="rumiservice_column_4"></div>
                    </div>
                    <div class="rumiservice7_table_content">
                        <div class="rumiservice7_table_tr rumiservice7_table_tr_odd">
                            <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/razblokirovat-graficheskiy-klyuch-dlya-planshetov-xiaomi.html">Разблокировать графический ключ для планшетов Xiaomi</a></div>
                            <div class="rumiservice_column_2">1 000 руб.</div>
                            <div class="rumiservice_column_3">от 30 мин.</div>
                            <div class="rumiservice_column_4">
                                <span class="has_problem" onclick="addToCart('516');">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 108.27 108.27" style="enable-background:new 0 0 108.27 108.27;" xml:space="preserve">
                                    <g>
                                    <path class="colorsvg" d="M51.954,66.588c-9.284-7.634-15.483-17.054-18.742-22.414l-2.431-4.583c0.85-0.912,7.332-7.853,10.141-11.619
                                          c3.53-4.729-1.588-9-1.588-9S24.933,4.569,21.651,1.712c-3.282-2.861-7.06-1.272-7.06-1.272C7.693,4.897,0.542,8.772,0.113,27.408
                                          C0.097,44.856,13.342,62.852,27.665,76.784c14.346,15.734,34.043,31.504,53.086,31.486c18.634-0.425,22.508-7.575,26.965-14.473
                                          c0,0,1.59-3.775-1.268-7.06c-2.86-3.284-17.265-17.688-17.265-17.688s-4.268-5.119-8.998-1.586
                                          c-3.525,2.635-9.855,8.496-11.38,9.917C68.808,77.385,58.219,71.74,51.954,66.588z"/>
                                    </g>
                                    </svg>
                                    <span class="colortexthover">Решить проблему</span>
                                </span>
                            </div>
                        </div>
                        <div class="rumiservice7_table_tr ">
                            <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/remont-noutbuka-xiaomi-mi-notebook-pro/diagnostika-dlya-xiaomi-mi-notebook-pro.html">Диагностика для Xiaomi Mi Notebook Pro</a></div>
                            <div class="rumiservice_column_2">бесплатно</div>
                            <div class="rumiservice_column_3">от 40 мин.</div>
                            <div class="rumiservice_column_4">
                                <span class="has_problem" onclick="addToCart('516');">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 108.27 108.27" style="enable-background:new 0 0 108.27 108.27;" xml:space="preserve">
                                    <g>
                                    <path class="colorsvg" d="M51.954,66.588c-9.284-7.634-15.483-17.054-18.742-22.414l-2.431-4.583c0.85-0.912,7.332-7.853,10.141-11.619
                                          c3.53-4.729-1.588-9-1.588-9S24.933,4.569,21.651,1.712c-3.282-2.861-7.06-1.272-7.06-1.272C7.693,4.897,0.542,8.772,0.113,27.408
                                          C0.097,44.856,13.342,62.852,27.665,76.784c14.346,15.734,34.043,31.504,53.086,31.486c18.634-0.425,22.508-7.575,26.965-14.473
                                          c0,0,1.59-3.775-1.268-7.06c-2.86-3.284-17.265-17.688-17.265-17.688s-4.268-5.119-8.998-1.586
                                          c-3.525,2.635-9.855,8.496-11.38,9.917C68.808,77.385,58.219,71.74,51.954,66.588z"/>
                                    </g>
                                    </svg>
                                    <span class="colortexthover">Решить проблему</span>
                                </span>
                            </div>
                        </div>
                        <div class="rumiservice7_table_tr rumiservice7_table_tr_odd">
                            <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/zamena-modulya-displeya.html">Замена модуля дисплея планшетов Xiaomi</a></div>
                            <div class="rumiservice_column_2">по согласованию</div>
                            <div class="rumiservice_column_3">от 1,5 час.</div>
                            <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('87');"><span class="colortexthover">Решить проблему</span></span></div>
                        </div>
                        <div class="rumiservice7_table_tr ">
                            <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/obnovlenie-po-bez-sohraneniya-dannyih-dlya-planshetov-xiaomi.html">Обновление ПО без сохранения данных для планшетов Xiaomi</a></div>
                            <div class="rumiservice_column_2">500 руб.</div>
                            <div class="rumiservice_column_3">от 20 мин.</div>
                            <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('419');"><span class="colortexthover">Решить проблему</span></span></div>
                        </div>
                        <div class="rumiservice7_table_tr rumiservice7_table_tr_odd">
                            <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/zamena-akkumulyatora-dlya-planshetov-xiaomi.html">Замена аккумулятора для планшета Xiaomi</a></div>
                            <div class="rumiservice_column_2">по согласованию</div>
                            <div class="rumiservice_column_3">от 20 мин.</div>
                            <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('416');"><span class="colortexthover">Решить проблему</span></span></div>
                        </div>
                        <div class="rumiservice7_table_tr_container">
                            <div class="rumiservice7_table_tr ">
                                <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/zamena-razyema-naushnikov-dlya-planshetov-xiaomi.html">Замена разъема наушников для планшетов Xiaomi</a></div>
                                <div class="rumiservice_column_2">по согласованию</div>
                                <div class="rumiservice_column_3">от 1,5 час.</div>
                                <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('417');"><span class="colortexthover">Решить проблему</span></span></div>
                            </div>
                            <div class="rumiservice7_table_tr rumiservice7_table_tr_odd">
                                <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/slojnyiy-programmnyiy-remont-dlya-planshetov-xiaomi.html">Сложный программный ремонт для планшетов Xiaomi</a></div>
                                <div class="rumiservice_column_2">от 2 000 руб.</div>
                                <div class="rumiservice_column_3">от 2 час.</div>
                                <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('463');"><span class="colortexthover">Решить проблему</span></span></div>
                            </div>
                            <div class="rumiservice7_table_tr ">
                                <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/zamena-razyema-zaryadki-dlya-plansheta-xiaomi.html">Замена разъема зарядки</a></div>
                                <div class="rumiservice_column_2">по согласованию</div>
                                <div class="rumiservice_column_3"></div>
                                <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('418');"><span class="colortexthover">Решить проблему</span></span></div>
                            </div>
                        </div>
                        <div class="rumiservice7_show_all colorbg"><span>Показать все</span></div>
                    </div>
                </div>
                <div class="rumiservice7_blocks rumiservice7_block2" style="display: none;">
                    <div class="rumiservice7_table_header">
                        <div class="rumiservice_column_1">Наименование позиции</div>
                        <div class="rumiservice_column_2">Стоимость *</div>
                        <div class="rumiservice_column_3">Время</div>
                        <div class="rumiservice_column_4"></div>
                    </div>
                    <div class="rumiservice7_table_content">
                        <div class="rumiservice7_table_tr rumiservice7_table_tr_odd">
                            <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/razblokirovat-graficheskiy-klyuch-dlya-planshetov-xiaomi.html">Разблокировать графический ключ для планшетов Xiaomi</a></div>
                            <div class="rumiservice_column_2">1 000 руб.</div>
                            <div class="rumiservice_column_3">от 30 мин.</div>
                            <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('516');"><span class="colortexthover">Решить проблему</span></span></div>
                        </div>
                        <div class="rumiservice7_table_tr ">
                            <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/remont-noutbuka-xiaomi-mi-notebook-pro/diagnostika-dlya-xiaomi-mi-notebook-pro.html">Диагностика для Xiaomi Mi Notebook Pro</a></div>
                            <div class="rumiservice_column_2">бесплатно</div>
                            <div class="rumiservice_column_3">от 40 мин.</div>
                            <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('650');"><span class="colortexthover">Решить проблему</span></span></div>
                        </div>
                        <div class="rumiservice7_table_tr rumiservice7_table_tr_odd">
                            <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/zamena-modulya-displeya.html">Замена модуля дисплея планшетов Xiaomi</a></div>
                            <div class="rumiservice_column_2">по согласованию</div>
                            <div class="rumiservice_column_3">от 1,5 час.</div>
                            <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('87');"><span class="colortexthover">Решить проблему</span></span></div>
                        </div>
                        <div class="rumiservice7_table_tr ">
                            <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/obnovlenie-po-bez-sohraneniya-dannyih-dlya-planshetov-xiaomi.html">Обновление ПО без сохранения данных для планшетов Xiaomi</a></div>
                            <div class="rumiservice_column_2">500 руб.</div>
                            <div class="rumiservice_column_3">от 20 мин.</div>
                            <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('419');"><span class="colortexthover">Решить проблему</span></span></div>
                        </div>
                        <div class="rumiservice7_table_tr rumiservice7_table_tr_odd">
                            <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/zamena-akkumulyatora-dlya-planshetov-xiaomi.html">Замена аккумулятора для планшета Xiaomi</a></div>
                            <div class="rumiservice_column_2">по согласованию</div>
                            <div class="rumiservice_column_3">от 20 мин.</div>
                            <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('416');"><span class="colortexthover">Решить проблему</span></span></div>
                        </div>
                        <div class="rumiservice7_table_tr_container">
                            <div class="rumiservice7_table_tr ">
                                <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/zamena-razyema-naushnikov-dlya-planshetov-xiaomi.html">Замена разъема наушников для планшетов Xiaomi</a></div>
                                <div class="rumiservice_column_2">по согласованию</div>
                                <div class="rumiservice_column_3">от 1,5 час.</div>
                                <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('417');"><span class="colortexthover">Решить проблему</span></span></div>
                            </div>
                            <div class="rumiservice7_table_tr rumiservice7_table_tr_odd">
                                <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/slojnyiy-programmnyiy-remont-dlya-planshetov-xiaomi.html">Сложный программный ремонт для планшетов Xiaomi</a></div>
                                <div class="rumiservice_column_2">от 2 000 руб.</div>
                                <div class="rumiservice_column_3">от 2 час.</div>
                                <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('463');"><span class="colortexthover">Решить проблему</span></span></div>
                            </div>
                            <div class="rumiservice7_table_tr ">
                                <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/zamena-razyema-zaryadki-dlya-plansheta-xiaomi.html">Замена разъема зарядки</a></div>
                                <div class="rumiservice_column_2">по согласованию</div>
                                <div class="rumiservice_column_3"></div>
                                <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('418');"><span class="colortexthover">Решить проблему</span></span></div>
                            </div>
                        </div>
                        <div class="rumiservice7_show_all colorbg"><span>Показать все</span></div>
                    </div>
                </div>
                <div class="rumiservice7_blocks rumiservice7_block3" style="display: none;">
                    <div class="rumiservice7_table_header">
                        <div class="rumiservice_column_1">Наименование позиции</div>
                        <div class="rumiservice_column_2">Стоимость *</div>
                        <div class="rumiservice_column_3">Время</div>
                        <div class="rumiservice_column_4"></div>
                    </div>
                    <div class="rumiservice7_table_content">
                        <div class="rumiservice7_table_tr rumiservice7_table_tr_odd">
                            <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/razblokirovat-graficheskiy-klyuch-dlya-planshetov-xiaomi.html">Разблокировать графический ключ для планшетов Xiaomi</a></div>
                            <div class="rumiservice_column_2">1 000 руб.</div>
                            <div class="rumiservice_column_3">от 30 мин.</div>
                            <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('516');"><span class="colortexthover">Решить проблему</span></span></div>
                        </div>
                        <div class="rumiservice7_table_tr ">
                            <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/remont-noutbuka-xiaomi-mi-notebook-pro/diagnostika-dlya-xiaomi-mi-notebook-pro.html">Диагностика для Xiaomi Mi Notebook Pro</a></div>
                            <div class="rumiservice_column_2">бесплатно</div>
                            <div class="rumiservice_column_3">от 40 мин.</div>
                            <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('650');"><span class="colortexthover">Решить проблему</span></span></div>
                        </div>
                        <div class="rumiservice7_table_tr rumiservice7_table_tr_odd">
                            <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/zamena-modulya-displeya.html">Замена модуля дисплея планшетов Xiaomi</a></div>
                            <div class="rumiservice_column_2">по согласованию</div>
                            <div class="rumiservice_column_3">от 1,5 час.</div>
                            <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('87');"><span class="colortexthover">Решить проблему</span></span></div>
                        </div>
                        <div class="rumiservice7_table_tr ">
                            <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/obnovlenie-po-bez-sohraneniya-dannyih-dlya-planshetov-xiaomi.html">Обновление ПО без сохранения данных для планшетов Xiaomi</a></div>
                            <div class="rumiservice_column_2">500 руб.</div>
                            <div class="rumiservice_column_3">от 20 мин.</div>
                            <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('419');"><span class="colortexthover">Решить проблему</span></span></div>
                        </div>
                        <div class="rumiservice7_table_tr rumiservice7_table_tr_odd">
                            <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/zamena-akkumulyatora-dlya-planshetov-xiaomi.html">Замена аккумулятора для планшета Xiaomi</a></div>
                            <div class="rumiservice_column_2">по согласованию</div>
                            <div class="rumiservice_column_3">от 20 мин.</div>
                            <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('416');"><span class="colortexthover">Решить проблему</span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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