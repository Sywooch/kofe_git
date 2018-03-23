<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="breaking">
    <div class="breaking__inner">
        <div class="breaking__container">
            <div class="breaking__view">
                <div class="breaking__picture">
                    <img class="breaking__photo" src="/<?= $assets . $siteConfig['theme'] . '/'; ?>images/Repair-kofemash_450x0_d47.png" alt="Кофемашин">
                    <div class="breaking__points">
                        <div class="breaking__point" data-breaking-point="01" style="top: 24.3%; left: 27.7%;"></div>
                        <div class="breaking__point" data-breaking-point="02" style="top: 46.5%; left: 11.5%;"></div>
                        <div class="breaking__point" data-breaking-point="03" style="top: 70.2%; left: 11.5%;"></div>
                        <div class="breaking__point" data-breaking-point="04" style="top: 24.5%; left: 81.8%;"></div>
                        <div class="breaking__point" data-breaking-point="05" style="top: 53%; left: 85.8%;"></div>
                        <div class="breaking__point" data-breaking-point="06" style="top: 76.8%; left: 55.3%;"></div>
                        <div class="breaking__point" data-breaking-point="07" style="top: 55%; left: 66.8%;"></div>
                        <div class="breaking__point" data-breaking-point="08" style="top: 86.2%; left: 26.4%;"></div>
                    </div>
                </div>
            </div>
            <div class="breaking__content">
                <div class="breaking__main">
                    <div class="breaking__column">
                        <h3 class="breaking__label">Частые неисправности</h3>
                        <ul class="breaking__list breaking__list_accordion">
                            <li class="breaking__item" data-breaking="05">
                                <a class="breaking__name" href="#">Не работает</a>
                                <div class="breaking__text">Проблема может быть в:</br>
                                    — Пустом резервуаре для воды;</br>
                                    — Отсутствии кофе.
                                </div>
                            </li>
                            <li class="breaking__item" data-breaking="07">
                                <a class="breaking__name" href="#">Шумит при работе</a>
                                <div class="breaking__text">Причиной проблемы ,может быть:</br>
                                    — Засорение кофемашины;</br>
                                    — Проблемы с насосом.
                                </div>
                            </li>
                            <li class="breaking__item" data-breaking="06">
                                <a class="breaking__name" href="#">Нет пара</a>
                                <div class="breaking__text">Проблема может быть связанна с:</br>
                                    — Неисправностью бойлера;</br>
                                    — Неисправностью пароблока;</br>
                                    — Засорение кальцием.
                                </div>
                            </li>
                            <li class="breaking__item" data-breaking="04">
                                <a class="breaking__name" href="#">Не мелет кофе</a>
                                <div class="breaking__text">Неисправность связанна с:</br>
                                    — Затупленностью жерновов;</br>
                                    — Неисправностью кофемолки;</br>
                                    — Неисправностью электродвижка кофемолки.
                                </div>
                            </li>
                            <li class="breaking__item" data-breaking="01">
                                <a class="breaking__name" href="#">Не наливает воду</a>
                                <div class="breaking__text">Данная проблема, может быть вызвана:</br>
                                    — Требуется чистка вашей кофемашины;</br>
                                    — Проблемы с насосом;</br>
                                    — Замена уплотнительных колец;</br>
                                    — Замена датчиков.
                                </div>
                            </li>
                            <li class="breaking__item" data-breaking="02">
                                <a class="breaking__name" href="#">Не наливает кофе</a>
                                <div class="breaking__text">Неисправность могла быть вызвана данными неполадками:</br>
                                    — Засорение кофемашины кофейными маслами (декофинация);</br>
                                    — Обслуживание гидросистемы;</br>
                                    — Чистка диспенсеров.
                                </div>
                            </li>
                            <li class="breaking__item" data-breaking="03">
                                <a class="breaking__name" href="#">Не подает пену</a>
                                <div class="breaking__text">Для решения данной проблемы нужно будет:</br>
                                    — Произвести замену капучинатора;</br>
                                    — Провести чистку вашей кофемашины;</br>
                                    — Заменить фильтры;</br>
                                    — Произвести замену жерновов.
                                </div>
                            </li>
                            <li class="breaking__item" data-breaking="08">
                                <a class="breaking__name" href="#">Протекает</a>
                                <div class="breaking__text">Проблема может быть в:</br>
                                    — поврежденном уплотнении резервуара воды;</br>
                                    — уплотнительных прокладках;</br>
                                    — уплотнении дозатора;</br>
                                    — неплотной посадки соединительных трубок.</br>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="breaking__column">
                        <h3 class="breaking__label">Чаще необходимо</h3>
                        <ul class="breaking__list">
                            <ul class="breaking__list">
                                <li class="breaking__item">Диагностика - 0 ₽</li>
                                <li class="breaking__item">Декальценация - 590 ₽</li>
                                <li class="breaking__item">Замена ТЭНа - 750 ₽</li>
                                <li class="breaking__item">Ремонт капучинатора - 850 ₽</li>
                                <li class="breaking__item">Замена жерновов - 750 ₽</li>
                                <li class="breaking__item">Ремонт кофемолки - 790 ₽</li>
                                <li class="breaking__item">Ремонт гидросистемы - 990 ₽</li>
                                <li class="breaking__item">Ремонт насоса - 700 ₽</li>
                            </ul>                            
                        </ul>
                    </div>
                </div>
                <div class="breaking__actions">
                    <a class="reviews__all" href="/uslugi-i-ceny">Смотреть все</a>
                </div>
            </div>
        </div>
    </div>
</section>