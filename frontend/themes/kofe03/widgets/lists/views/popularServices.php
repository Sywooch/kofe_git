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
                        <div class="breaking__point" data-breaking-point="01" style="top: 10%; left: 45%;"></div>
                        <div class="breaking__point" data-breaking-point="02" style="top: 28%; left: 10%;"></div>
                        <div class="breaking__point" data-breaking-point="03" style="top: 39%; left: 35%;"></div>
                        <div class="breaking__point" data-breaking-point="04" style="top: 27%; left: 53%;"></div>
                        <div class="breaking__point" data-breaking-point="05" style="top: 54%; left: 24%;"></div>
                        <div class="breaking__point" data-breaking-point="06" style="top: 46%; left: 55%;"></div>
                        <div class="breaking__point" data-breaking-point="07" style="top: 63%; left: 97%;"></div>
                        <div class="breaking__point" data-breaking-point="08" style="top: 91%; left: 66%;"></div>
                        <div class="breaking__point" data-breaking-point="09" style="top: 19%; left: 64%;"></div>
                        <div class="breaking__point" data-breaking-point="10" style="top: 15%; left: 87%;"></div>
                    </div>
                </div>
            </div>
            <div class="breaking__content">
                <div class="breaking__main">
                    <div class="breaking__column">
                        <h3 class="breaking__label">Частые неисправности</h3>
                        <ul class="breaking__list breaking__list_accordion">
                            <li class="breaking__item" data-breaking="01">
                                <a class="breaking__name" href="#">Не работает</a>
                                <div class="breaking__text">Проблема может быть в:</br>
                                    — пустом резервуаре для воды;</br>
                                    — отсутствии кофе.
                                </div>
                            </li>
                            <li class="breaking__item" data-breaking="02">
                                <a class="breaking__name" href="#">Шумит при работе</a>
                                <div class="breaking__text">Проблема может быть в:</br>
                                    — отсутствии воды;</br>
                                    — пережатой трубки подачи воды.
                                </div>
                            </li>
                            <li class="breaking__item" data-breaking="03">
                                <a class="breaking__name" href="#">Не качает воду</a>
                                <div class="breaking__text">Проблема может быть в:</br>
                                    — протечке;</br>
                                    — датчике уровня воды;</br>
                                    — панели управления.
                                </div>
                            </li>
                            <li class="breaking__item" data-breaking="04">
                                <a class="breaking__name" href="#">Не мелет кофе</a>
                                <div class="breaking__text">Проблема может быть в:</br>
                                    — блоке управления;</br>
                                    — работе двигателя;</br>
                                    — кофеводе.
                                </div>
                            </li>
                            <li class="breaking__item" data-breaking="05">
                                <a class="breaking__name" href="#">Не видит воду</a>
                                <div class="breaking__text">Проблема может быть в:</br>
                                    — датчике уровня воды;</br>
                                    — влаги внутри корпуса.
                                </div>
                            </li>
                            <li class="breaking__item" data-breaking="06">
                                <a class="breaking__name" href="#">Не наливает кофе</a>
                                <div class="breaking__text">Проблема может быть в:</br>
                                    — засорах;</br>
                                    — помпе;</br>
                                    — бройлере.
                                </div>
                            </li>
                            <li class="breaking__item" data-breaking="07">
                                <a class="breaking__name" href="#">Не подает пену</a>
                                <div class="breaking__text">Проблема может быть в:</br>
                                    — плохом молоке;</br>
                                    — засоренном воздушном канале.
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
                            <li class="breaking__item" data-breaking="09">
                                <a class="breaking__name" href="#">Не нагревает воду</a>
                                <div class="breaking__text">Проблема может быть в:</br>
                                    — нагревательном элементе;</br>
                                    — контроллере;</br>
                                    — некачественной воде.
                                </div>
                            </li>
                            <li class="breaking__item" data-breaking="10">
                                <a class="breaking__name" href="#">Не реагирует на кнопки</a>
                                <div class="breaking__text">Проблема может быть в:</br>
                                    — блоке управления;</br>
                                    — забитых, грязных кнопках;</br>
                                    — сгоревшем предохранителе.
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