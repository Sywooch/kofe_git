<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="brkg">
    <div class="brkg_in">
        <div class="Brkg-cont">
            <div class="Brkg-v">
                <div class="Brkg-pic">
                    <img class="Brkg-ph" src="/<?= $assets . $siteConfig['theme'] . '/'; ?>images/Repair-kofemash_450x0_d47.png" alt="Кофемашин">
                    <div class="Brkg-points">
                        <div class="Brkg-point" data-breaking-point="01" style="top: 24.3%; left: 27.7%;"></div>
                        <div class="Brkg-point" data-breaking-point="02" style="top: 46.5%; left: 11.5%;"></div>
                        <div class="Brkg-point" data-breaking-point="03" style="top: 70.2%; left: 11.5%;"></div>
                        <div class="Brkg-point" data-breaking-point="04" style="top: 24.5%; left: 81.8%;"></div>
                        <div class="Brkg-point" data-breaking-point="05" style="top: 53%; left: 85.8%;"></div>
                        <div class="Brkg-point" data-breaking-point="06" style="top: 76.8%; left: 55.3%;"></div>
                        <div class="Brkg-point" data-breaking-point="07" style="top: 55%; left: 66.8%;"></div>
                        <div class="Brkg-point" data-breaking-point="08" style="top: 86.2%; left: 26.4%;"></div>
                    </div>
                </div>
            </div>
            <div class="Brkg-content">
                <div class="Brkg-main">
                    <div class="Brkg-col">
                        <h3 class="Brkg-lab">Частые неисправности</h3>
                        <ul class="Brkg-lst Brkg-lst-acc">
                            <li class="Brkg-it" data-breaking="05">
                                <a class="Brkg-name" href="#">Не работает</a>
                                <div class="Brkg-txt">Проблема может быть в:</br>
                                    — Пустом резервуаре для воды;</br>
                                    — Отсутствии кофе.
                                </div>
                            </li>
                            <li class="Brkg-it" data-breaking="07">
                                <a class="Brkg-name" href="#">Шумит при работе</a>
                                <div class="Brkg-txt">Причиной проблемы ,может быть:</br>
                                    — Засорение кофемашины;</br>
                                    — Проблемы с насосом.
                                </div>
                            </li>
                            <li class="Brkg-it" data-breaking="06">
                                <a class="Brkg-name" href="#">Нет пара</a>
                                <div class="Brkg-txt">Проблема может быть связанна с:</br>
                                    — Неисправностью бойлера;</br>
                                    — Неисправностью пароблока;</br>
                                    — Засорение кальцием.
                                </div>
                            </li>
                            <li class="Brkg-it" data-breaking="04">
                                <a class="Brkg-name" href="#">Не мелет кофе</a>
                                <div class="Brkg-txt">Неисправность связанна с:</br>
                                    — Затупленностью жерновов;</br>
                                    — Неисправностью кофемолки;</br>
                                    — Неисправностью электродвижка кофемолки.
                                </div>
                            </li>
                            <li class="Brkg-it" data-breaking="01">
                                <a class="Brkg-name" href="#">Не наливает воду</a>
                                <div class="Brkg-txt">Данная проблема, может быть вызвана:</br>
                                    — Требуется чистка вашей кофемашины;</br>
                                    — Проблемы с насосом;</br>
                                    — Замена уплотнительных колец;</br>
                                    — Замена датчиков.
                                </div>
                            </li>
                            <li class="Brkg-it" data-breaking="02">
                                <a class="Brkg-name" href="#">Не наливает кофе</a>
                                <div class="Brkg-txt">Неисправность могла быть вызвана данными неполадками:</br>
                                    — Засорение кофемашины кофейными маслами (декофинация);</br>
                                    — Обслуживание гидросистемы;</br>
                                    — Чистка диспенсеров.
                                </div>
                            </li>
                            <li class="Brkg-it" data-breaking="03">
                                <a class="Brkg-name" href="#">Не подает пену</a>
                                <div class="Brkg-txt">Для решения данной проблемы нужно будет:</br>
                                    — Произвести замену капучинатора;</br>
                                    — Провести чистку вашей кофемашины;</br>
                                    — Заменить фильтры;</br>
                                    — Произвести замену жерновов.
                                </div>
                            </li>
                            <li class="Brkg-it" data-breaking="08">
                                <a class="Brkg-name" href="#">Протекает</a>
                                <div class="Brkg-txt">Проблема может быть в:</br>
                                    — поврежденном уплотнении резервуара воды;</br>
                                    — уплотнительных прокладках;</br>
                                    — уплотнении дозатора;</br>
                                    — неплотной посадки соединительных трубок.</br>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="Brkg-col">
                        <h3 class="Brkg-lab">Чаще необходимо</h3>
                        <ul class="Brkg-lst">
                            <ul class="Brkg-lst">
                                <li class="Brkg-it">Диагностика - 0 ₽</li>
                                <li class="Brkg-it">Декальценация - 590 ₽</li>
                                <li class="Brkg-it">Замена ТЭНа - 750 ₽</li>
                                <li class="Brkg-it">Ремонт капучинатора - 850 ₽</li>
                                <li class="Brkg-it">Замена жерновов - 750 ₽</li>
                                <li class="Brkg-it">Ремонт кофемолки - 790 ₽</li>
                                <li class="Brkg-it">Ремонт гидросистемы - 990 ₽</li>
                                <li class="Brkg-it">Ремонт насоса - 700 ₽</li>
                            </ul>                            
                        </ul>
                    </div>
                </div>
                <div class="Brkg-harakat">
                    <a class="reviews__all" href="/uslugi-i-ceny">Смотреть все</a>
                </div>
            </div>
        </div>
    </div>
</section>