<?php
$breadcrumbs = [
    $pageInfo['title'],
];
$this->title = $pageInfo['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="clear"></div>
<?= \app\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="banner">
    <div class="container">
        <div class="full-text">
            <div class="h1">
                <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] ?></h1>
            </div>

            <?= !empty($pageInfo['description']) ? $pageInfo['description'] : '<p>Мы, сервисный центр по ремонту кофемашин &laquo;РемонтКофе&raquo; - команда профессионалов, которые знают все о кофемашинах от А до Я. Наши мастера работают как на выезде, так и в сервисном центре, осуществляя ремонт кофемашин любой сложности.</p>' ?>

            <div class="clear">&nbsp;</div>
            <?php if ($siteConfig['mono'] && !isset($siteConfig['spb'])): ?>
                <div class="msk-contact all-contact active">
                    <h2>Наш адрес в Москве</h2>
                    <?php if ($siteConfig['id'] != 3): ?>
                        <p>                        
                            Номер телефона: <span class="moskva"><?= Yii::$app->session['region']['phone']; ?></span><br />
                            Работаем без выходных с 08:00 до 22:00<br />
                            Центральный офис: м. Войковская, 4-й войковский проезд 6к2
                        </p>
                    <?php endif; ?>
                    <div class="map">
                        <?php if ($siteConfig['id'] == 3): ?>
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Adcf6fdd6f2d88ead38193227d5308583ed71b1841471d0168eccfb7e607f031d&amp;width=100%&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                        <?php else: ?>
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aff5f5860252f4cb5593d5da22cd0aa71e65ebf9ee9a6f2d34ebffc20ca3d411c&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                        <?php endif; ?>
                    </div>
                    <?php if ($siteConfig['id'] == 3): ?>
                        <div id="adresss">
                            <div class="seriy">
                                <h2>г. Москва, Алтуфьевское шоссe 72</h2>
                                <b>
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                         viewBox="0 0 153 153"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Слой_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"/>
                                            <path class="fil0" d="M76 0c42,0 77,34 77,76 0,42 -35,77 -77,77 -42,0 -76,-35 -76,-77 0,-42 34,-76 76,-76zm8 68c-4,10 -8,18 -8,18 0,0 -3,-8 -7,-18 -4,-10 -7,-18 -7,-18 0,0 -5,12 -10,26l-10 27 4 0c2,0 4,0 4,0 0,0 3,-8 6,-17 4,-10 7,-17 7,-17 0,0 2,7 6,15 7,21 7,19 7,19 1,0 0,2 8,-19 3,-8 6,-15 6,-15 0,0 3,7 6,17 4,9 7,17 7,17 0,0 1,0 4,0l4 0 -10 -26c-5,-15 -10,-27 -10,-27 0,0 -3,8 -7,18zm-14 -60c-13,2 -25,6 -36,14 -3,2 -10,9 -12,12 -4,6 -8,14 -10,20 -2,3 -3,9 -3,13 -1,4 -1,14 0,19 1,12 6,23 14,33 2,2 8,9 11,11 9,7 21,12 33,14 4,1 14,1 19,0 12,-2 22,-6 32,-14 3,-2 10,-9 12,-12 5,-6 9,-13 11,-19 1,-4 2,-9 3,-13 1,-5 1,-15 0,-19 -2,-12 -7,-24 -14,-33 -2,-3 -9,-9 -11,-11 -10,-8 -21,-13 -33,-14 -4,-1 -13,-1 -16,-1zm13 10c23,3 42,18 49,39 10,29 -3,60 -30,73 -32,15 -70,-1 -82,-34 -9,-28 4,-60 30,-72 11,-5 22,-7 33,-6z"/>
                                        </g>
                                    </svg>
                                    Алтуфьево
                                </b>
                                <p>ТЦ "Наш", 2 этаж, пав. 14.</p>
                                <span>Время работы: 10:00 - 21:00</span>
                            </div>
                            <div class="svetliy-siniy">
                                <h2>г. Москва, ул. Барклая 8.</h2>
                                <b>
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                         viewBox="0 0 153 153"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Слой_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"/>
                                            <path class="fil0" d="M76 0c42,0 77,34 77,76 0,42 -35,77 -77,77 -42,0 -76,-35 -76,-77 0,-42 34,-76 76,-76zm8 68c-4,10 -8,18 -8,18 0,0 -3,-8 -7,-18 -4,-10 -7,-18 -7,-18 0,0 -5,12 -10,26l-10 27 4 0c2,0 4,0 4,0 0,0 3,-8 6,-17 4,-10 7,-17 7,-17 0,0 2,7 6,15 7,21 7,19 7,19 1,0 0,2 8,-19 3,-8 6,-15 6,-15 0,0 3,7 6,17 4,9 7,17 7,17 0,0 1,0 4,0l4 0 -10 -26c-5,-15 -10,-27 -10,-27 0,0 -3,8 -7,18zm-14 -60c-13,2 -25,6 -36,14 -3,2 -10,9 -12,12 -4,6 -8,14 -10,20 -2,3 -3,9 -3,13 -1,4 -1,14 0,19 1,12 6,23 14,33 2,2 8,9 11,11 9,7 21,12 33,14 4,1 14,1 19,0 12,-2 22,-6 32,-14 3,-2 10,-9 12,-12 5,-6 9,-13 11,-19 1,-4 2,-9 3,-13 1,-5 1,-15 0,-19 -2,-12 -7,-24 -14,-33 -2,-3 -9,-9 -11,-11 -10,-8 -21,-13 -33,-14 -4,-1 -13,-1 -16,-1zm13 10c23,3 42,18 49,39 10,29 -3,60 -30,73 -32,15 -70,-1 -82,-34 -9,-28 4,-60 30,-72 11,-5 22,-7 33,-6z"/>
                                        </g>
                                    </svg>
                                    Багратионовская, Парк Победы, Фили
                                </b>
                                <p>ТЦ "Горбушка", этаж 2, павильон 217.</p>
                                <span>Время работы: 10:00 - 21:00</span>
                            </div>
                            <div class="tyomna-zeleniy">
                                <h2>г. Москва, ул. 4-й Войковский проезд, 6к2</h2>
                                <b>
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                         viewBox="0 0 153 153"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Слой_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"/>
                                            <path class="fil0" d="M76 0c42,0 77,34 77,76 0,42 -35,77 -77,77 -42,0 -76,-35 -76,-77 0,-42 34,-76 76,-76zm8 68c-4,10 -8,18 -8,18 0,0 -3,-8 -7,-18 -4,-10 -7,-18 -7,-18 0,0 -5,12 -10,26l-10 27 4 0c2,0 4,0 4,0 0,0 3,-8 6,-17 4,-10 7,-17 7,-17 0,0 2,7 6,15 7,21 7,19 7,19 1,0 0,2 8,-19 3,-8 6,-15 6,-15 0,0 3,7 6,17 4,9 7,17 7,17 0,0 1,0 4,0l4 0 -10 -26c-5,-15 -10,-27 -10,-27 0,0 -3,8 -7,18zm-14 -60c-13,2 -25,6 -36,14 -3,2 -10,9 -12,12 -4,6 -8,14 -10,20 -2,3 -3,9 -3,13 -1,4 -1,14 0,19 1,12 6,23 14,33 2,2 8,9 11,11 9,7 21,12 33,14 4,1 14,1 19,0 12,-2 22,-6 32,-14 3,-2 10,-9 12,-12 5,-6 9,-13 11,-19 1,-4 2,-9 3,-13 1,-5 1,-15 0,-19 -2,-12 -7,-24 -14,-33 -2,-3 -9,-9 -11,-11 -10,-8 -21,-13 -33,-14 -4,-1 -13,-1 -16,-1zm13 10c23,3 42,18 49,39 10,29 -3,60 -30,73 -32,15 -70,-1 -82,-34 -9,-28 4,-60 30,-72 11,-5 22,-7 33,-6z"/>
                                        </g>
                                    </svg>
                                    Войковская
                                </b>
                                <p>Сервис находится в 14-ти этажке</p>
                                <span>Время работы: 10:00 - 21:00</span>
                            </div>
                            <div class="tyomna-zeleniy">
                                <h2>г. Москва, бул. Ореховый 15.</h2>
                                <b>
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                         viewBox="0 0 153 153"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Слой_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"/>
                                            <path class="fil0" d="M76 0c42,0 77,34 77,76 0,42 -35,77 -77,77 -42,0 -76,-35 -76,-77 0,-42 34,-76 76,-76zm8 68c-4,10 -8,18 -8,18 0,0 -3,-8 -7,-18 -4,-10 -7,-18 -7,-18 0,0 -5,12 -10,26l-10 27 4 0c2,0 4,0 4,0 0,0 3,-8 6,-17 4,-10 7,-17 7,-17 0,0 2,7 6,15 7,21 7,19 7,19 1,0 0,2 8,-19 3,-8 6,-15 6,-15 0,0 3,7 6,17 4,9 7,17 7,17 0,0 1,0 4,0l4 0 -10 -26c-5,-15 -10,-27 -10,-27 0,0 -3,8 -7,18zm-14 -60c-13,2 -25,6 -36,14 -3,2 -10,9 -12,12 -4,6 -8,14 -10,20 -2,3 -3,9 -3,13 -1,4 -1,14 0,19 1,12 6,23 14,33 2,2 8,9 11,11 9,7 21,12 33,14 4,1 14,1 19,0 12,-2 22,-6 32,-14 3,-2 10,-9 12,-12 5,-6 9,-13 11,-19 1,-4 2,-9 3,-13 1,-5 1,-15 0,-19 -2,-12 -7,-24 -14,-33 -2,-3 -9,-9 -11,-11 -10,-8 -21,-13 -33,-14 -4,-1 -13,-1 -16,-1zm13 10c23,3 42,18 49,39 10,29 -3,60 -30,73 -32,15 -70,-1 -82,-34 -9,-28 4,-60 30,-72 11,-5 22,-7 33,-6z"/>
                                        </g>
                                    </svg>
                                    Домодедовская
                                </b>
                                <p>ТЦ "Галерея Водолей"</p>
                                <span>Время работы: 10:00 - 22:00</span>
                            </div>
                            <div class="oranjiviy">
                                <h2>г. Москва, ул. Ильинка 4.</h2>
                                <b>
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                         viewBox="0 0 153 153"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Слой_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"/>
                                            <path class="fil0" d="M76 0c42,0 77,34 77,76 0,42 -35,77 -77,77 -42,0 -76,-35 -76,-77 0,-42 34,-76 76,-76zm8 68c-4,10 -8,18 -8,18 0,0 -3,-8 -7,-18 -4,-10 -7,-18 -7,-18 0,0 -5,12 -10,26l-10 27 4 0c2,0 4,0 4,0 0,0 3,-8 6,-17 4,-10 7,-17 7,-17 0,0 2,7 6,15 7,21 7,19 7,19 1,0 0,2 8,-19 3,-8 6,-15 6,-15 0,0 3,7 6,17 4,9 7,17 7,17 0,0 1,0 4,0l4 0 -10 -26c-5,-15 -10,-27 -10,-27 0,0 -3,8 -7,18zm-14 -60c-13,2 -25,6 -36,14 -3,2 -10,9 -12,12 -4,6 -8,14 -10,20 -2,3 -3,9 -3,13 -1,4 -1,14 0,19 1,12 6,23 14,33 2,2 8,9 11,11 9,7 21,12 33,14 4,1 14,1 19,0 12,-2 22,-6 32,-14 3,-2 10,-9 12,-12 5,-6 9,-13 11,-19 1,-4 2,-9 3,-13 1,-5 1,-15 0,-19 -2,-12 -7,-24 -14,-33 -2,-3 -9,-9 -11,-11 -10,-8 -21,-13 -33,-14 -4,-1 -13,-1 -16,-1zm13 10c23,3 42,18 49,39 10,29 -3,60 -30,73 -32,15 -70,-1 -82,-34 -9,-28 4,-60 30,-72 11,-5 22,-7 33,-6z"/>
                                        </g>
                                    </svg>
                                    Китай-Город, Площадь Революции
                                </b>
                                <p>Гостинный двор, вход 7, этаж 3, офис 6.</p>
                                <span>Время работы: 10:00 - 20:00</span>
                            </div>
                            <div class="krasniy">
                                <h2>г. Москва, Пр-кт Вернадского, д.41 стр.3.</h2>
                                <b>
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                         viewBox="0 0 153 153"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Слой_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"/>
                                            <path class="fil0" d="M76 0c42,0 77,34 77,76 0,42 -35,77 -77,77 -42,0 -76,-35 -76,-77 0,-42 34,-76 76,-76zm8 68c-4,10 -8,18 -8,18 0,0 -3,-8 -7,-18 -4,-10 -7,-18 -7,-18 0,0 -5,12 -10,26l-10 27 4 0c2,0 4,0 4,0 0,0 3,-8 6,-17 4,-10 7,-17 7,-17 0,0 2,7 6,15 7,21 7,19 7,19 1,0 0,2 8,-19 3,-8 6,-15 6,-15 0,0 3,7 6,17 4,9 7,17 7,17 0,0 1,0 4,0l4 0 -10 -26c-5,-15 -10,-27 -10,-27 0,0 -3,8 -7,18zm-14 -60c-13,2 -25,6 -36,14 -3,2 -10,9 -12,12 -4,6 -8,14 -10,20 -2,3 -3,9 -3,13 -1,4 -1,14 0,19 1,12 6,23 14,33 2,2 8,9 11,11 9,7 21,12 33,14 4,1 14,1 19,0 12,-2 22,-6 32,-14 3,-2 10,-9 12,-12 5,-6 9,-13 11,-19 1,-4 2,-9 3,-13 1,-5 1,-15 0,-19 -2,-12 -7,-24 -14,-33 -2,-3 -9,-9 -11,-11 -10,-8 -21,-13 -33,-14 -4,-1 -13,-1 -16,-1zm13 10c23,3 42,18 49,39 10,29 -3,60 -30,73 -32,15 -70,-1 -82,-34 -9,-28 4,-60 30,-72 11,-5 22,-7 33,-6z"/>
                                        </g>
                                    </svg>
                                    Проспект Вернадского, Юго-Западная
                                </b>
                                <p>ТЦ "Премьер".</p>
                                <span>Время работы: 10:00 - 21:00</span>
                            </div>
                            <div class="oranjiviy">
                                <h2>г. Москва, Профсоюзная улица 56.</h2>
                                <b>
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                         viewBox="0 0 153 153"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Слой_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"/>
                                            <path class="fil0" d="M76 0c42,0 77,34 77,76 0,42 -35,77 -77,77 -42,0 -76,-35 -76,-77 0,-42 34,-76 76,-76zm8 68c-4,10 -8,18 -8,18 0,0 -3,-8 -7,-18 -4,-10 -7,-18 -7,-18 0,0 -5,12 -10,26l-10 27 4 0c2,0 4,0 4,0 0,0 3,-8 6,-17 4,-10 7,-17 7,-17 0,0 2,7 6,15 7,21 7,19 7,19 1,0 0,2 8,-19 3,-8 6,-15 6,-15 0,0 3,7 6,17 4,9 7,17 7,17 0,0 1,0 4,0l4 0 -10 -26c-5,-15 -10,-27 -10,-27 0,0 -3,8 -7,18zm-14 -60c-13,2 -25,6 -36,14 -3,2 -10,9 -12,12 -4,6 -8,14 -10,20 -2,3 -3,9 -3,13 -1,4 -1,14 0,19 1,12 6,23 14,33 2,2 8,9 11,11 9,7 21,12 33,14 4,1 14,1 19,0 12,-2 22,-6 32,-14 3,-2 10,-9 12,-12 5,-6 9,-13 11,-19 1,-4 2,-9 3,-13 1,-5 1,-15 0,-19 -2,-12 -7,-24 -14,-33 -2,-3 -9,-9 -11,-11 -10,-8 -21,-13 -33,-14 -4,-1 -13,-1 -16,-1zm13 10c23,3 42,18 49,39 10,29 -3,60 -30,73 -32,15 -70,-1 -82,-34 -9,-28 4,-60 30,-72 11,-5 22,-7 33,-6z"/>
                                        </g>
                                    </svg>
                                    Новые Черёмушки
                                </b>
                                <p>ТЦ "Черёмушки", павильон А1-24</p>
                                <span>Время работы: 10:00 - 21:00</span>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php elseif (isset($siteConfig['spb'])): ?>
                <div class="msk-contact all-contact active">
                    <h2>Наш адрес в Санкт-Петербурге</h2>
                    <p>                        
                        Номер телефона: <span class="moskva"><?= Yii::$app->session['region']['phone']; ?></span><br />
                        Работаем без выходных с 08:00 до 22:00<br />
                        Центральный офис: м. Сенная площадь, м. Спасская, ул Ефимова 2, ТЦ ПИК, этаж 1, павильон 100
                    </p>
                    <div class="map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aef863b008884b6b061a3182be8f2ee3235ee72e0176c43a2c9681fa7d00a56c5&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (isset($siteConfig['spb-multi']) && !$siteConfig['mono']): ?>                
                <div class="spb-contact all-contact active">
                    <h2>Наш адрес в Санкт-Петербурге</h2>
                    <p>                        
                        Номер телефона: <span class="spb"><?= $siteConfig['phone-2']; ?></span><br />
                        Работаем без выходных с 08:00 до 22:00<br />
                        Центральный офис: м. Садовая, Московский проспект 2/6, подъезд 6, этаж 3
                    </p>
                    <div class="map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A02bc0b2650178a379cf8906d1dfb2db1b82cbeb05854924c3f4516592b4e158f&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                    <?php if (!empty($children) && 3 == 1): ?>
                        <section id="links">
                            <div class="container">
                                <p class="title"><span><?= $pageInfo['icon'] == 'rayon' ? 'Метро' : 'Районы' ?> </span></p>
                            </div>
                            <div class="container">
                                <ul>
                                    <?php foreach ($children as $child): ?>
                                        <li><a href="/<?= $child['url']; ?>"><?= $child['title']; ?></a></li>
                                    <?php endforeach; ?>
                                    <div class="clear"></div>
                                </ul>
                            </div>
                        </section>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if (isset($siteConfig['category_id']) && $siteConfig['category_id'] == 1): ?>                
                <div class="spb-contact all-contact active">
                    <h2><b>Наш адрес в Москве</b></h2>
                    <p>                        
                        Номер телефона: <span class="spb"><?= $siteConfig['phone-1']; ?></span><br />
                        Работаем без выходных с 08:00 до 22:00<br />
                        Центральный офис: м Фили, м. Шелепиха ул. Заречная 1к2, вход со двора
                    </p>
                    <div class="map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A80a5761082e8feb488ee844ffe181aed36c78bbb421ef3139be059a805401e2e&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>                  
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="clear">&nbsp;</div>
</section>
<?php if (!$siteConfig['mono']): ?>
    <section id="ask">
        <div class="container">
            <div>
                <h3>Закажите бесплатную консультацию.</h3>
                <p>Мы свяжемся с Вами в течение 5 минут.</p>
                <?= \app\widgets\forms\CallBack::widget(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>