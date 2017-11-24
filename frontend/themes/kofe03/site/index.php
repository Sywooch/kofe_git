<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $page['meta_title'];
?>
<main class="layout__content" role="main">
    <aside class="poster" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/poster_1.jpg);">
        <div class="poster__inner">
            <?= kofe03\widgets\forms\MainPageForm::widget(); ?>
            <div class="poster__content">
                <h1 class="poster__title" itemprop="name">Срочный ремонт кофемашин</h1>
                <div class="poster__text" itemprop="description">
                    <p>Мы предлагаем доступный и надежный ремонт бытовой техники, электроники и компьютеров на дому у клиента.</p>
                    <p>Работаем во всех районах Москвы и Санкт-Петербурга без перерыва, выходных и праздничных дней. Гарантия и скидки на все виды работ.</p>
                </div>
            </div>
            <div class="poster__actions">
                <a class="poster_button js-popup" data-popup="request" href="#">Вызвать курьера</a>
            </div>
            <footer class="poster__footer">
                <div class="menu__actions">
                    <a class="menu__action js-popup" data-popup="request" href="#">
                        <span class="menu__action-ico">
                            <svg class="menu__action-img" xmlns="http://www.w3.org/2000/svg" width="29" height="35" viewBox="0 0 29 32.56">
                            <path class="menu__action-ico_path" fill-rule="evenodd" d="M14 19c3,0 8,-3 8,-9 0,-1 0,-2 0,-3 0,-2 0,-3 -1,-4 -1,-2 -3,-3 -7,-3 -3,0 -5,1 -6,3 -1,1 -1,2 -1,4 0,1 0,2 0,3 0,6 5,9 7,9zm10 14l0 0 -3 0c0,0 0,-1 0,-1 0,-1 0,-2 0,-2l3 0c0,0 0,0 0,0 0,0 0,0 0,0 0,-1 -2,-2 -3,-2 -1,0 -1,1 -2,1 0,1 -1,1 -1,1l-7 0c-1,-1 -2,-2 -3,-2 -1,0 -3,1 -3,2 0,0 0,0 0,0 0,0 0,0 0,0l0 0 3 0c0,0 0,1 0,2 0,0 0,1 0,1l-3 0c0,0 0,0 0,0 0,0 0,0 0,0 0,1 2,2 3,2l0 0c1,0 1,0 2,-1 0,0 1,-1 1,-1l7 0c1,1 2,2 3,2 0,0 0,0 0,0 1,0 3,-1 3,-2 0,0 0,0 0,0 0,0 0,0 0,0zm5 -4c0,-3 -1,-6 -3,-7 -1,-1 -5,-3 -7,-4l0 0c0,0 0,0 0,0 -1,1 -2,1 -3,2 0,0 0,0 0,0l-2 3 -1 -3c0,0 0,0 0,0 -1,-1 -2,-1 -3,-2 0,0 0,0 0,0 -2,1 -6,3 -7,4 -2,1 -3,6 -3,7 0,0 0,0 0,0 0,0 1,2 4,3 0,0 0,0 1,0 -1,0 -1,-1 -1,-1 -1,-1 -1,-1 0,-2 0,-1 2,-2 4,-2 1,0 3,1 4,2l5 0c1,0 1,0 1,-1 1,0 2,-1 3,-1l0 0 0 0c2,0 4,1 4,2 1,1 1,1 0,2 0,0 0,0 -1,1 1,0 1,0 1,0 3,-1 4,-3 4,-3 0,0 0,0 0,0zm-12 -26c0,1 0,1 -1,2 -1,0 -2,0 -3,0 -1,-1 -1,-1 -1,-2 2,0 3,0 5,0zm-9 5c0,0 0,1 1,1 1,0 2,-2 5,-2 4,0 5,2 6,2 1,0 1,-1 1,-1 0,1 0,1 0,2 0,3 -1,5 -2,6 -2,1 -4,2 -5,2 0,0 -2,-1 -4,-2 -1,-1 -2,-3 -2,-6 0,-1 0,-1 0,-2z"/>
                            </svg>
                        </span>
                        <span class="menu__action-text">Вызвать мастера</span>
                        <span class="menu__action-arrow">
                            <svg class="menu__action-right" xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12">
                            <path class="menu__action-ico_path" d="M1393.6,990.423a1.891,1.891,0,0,1,0-1.153,2.247,2.247,0,0,1,.28-0.461,3.006,3.006,0,0,1,.45-0.438,1.787,1.787,0,0,1,.46-0.277,1.694,1.694,0,0,1,.61-0.093h0.11a1.492,1.492,0,0,1,1.01.508l1.04,0.992q1.545,1.488,3,3L1402,994l-1.44,1.5q-1.455,1.51-3,3l-0.97.935a1.57,1.57,0,0,1-2.1.288,2.949,2.949,0,0,1-.7-0.692,1.63,1.63,0,0,1-.28-0.946,1.731,1.731,0,0,1,.55-1.142l1-1.1h-6.09a1.839,1.839,0,0,1-.9-0.185,2.771,2.771,0,0,1-.51-0.369,2.828,2.828,0,0,1-.37-0.507,1.715,1.715,0,0,1,0-1.569,2.005,2.005,0,0,1,.88-0.877,1.852,1.852,0,0,1,.9-0.184h6.18l-0.61-.588a6.114,6.114,0,0,1-.61-0.635,2.077,2.077,0,0,1-.33-0.508" transform="translate(-1387 -988)"/>
                            </svg>
                        </span>
                    </a>
                    <a class="menu__action js-popup" data-popup="request" href="#">
                        <span class="menu__action-ico">
                            <svg class="menu__action-img" xmlns="http://www.w3.org/2000/svg" width="33" height="28" viewBox="0 0 20.41 31.906">
                            <path class="menu__action-ico_path" fill-rule="evenodd" d="M22 19c-3,-2 -5,3 -6,2 -3,-2 -7,-4 -8,-8 -1,-1 4,-3 2,-6 -6,-6 -5,-5 -9,-1 -5,4 8,22 19,23 3,0 3,-1 5,-3 3,-2 0,-4 -3,-7zm2 -14c-2,-3 -5,-5 -9,-5l0 2c6,1 11,6 12,12l2 0c-1,-4 -2,-7 -5,-9zm-3 9l2 0c-1,-4 -4,-8 -8,-8l-1 2c4,0 6,3 7,6z"/>
                            </svg>
                        </span>
                        <span class="menu__action-text">Заказать звонок</span>
                        <span class="menu__action-arrow">
                            <svg class="menu__action-right" xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12">
                            <path class="menu__action-ico_path" d="M1393.6,990.423a1.891,1.891,0,0,1,0-1.153,2.247,2.247,0,0,1,.28-0.461,3.006,3.006,0,0,1,.45-0.438,1.787,1.787,0,0,1,.46-0.277,1.694,1.694,0,0,1,.61-0.093h0.11a1.492,1.492,0,0,1,1.01.508l1.04,0.992q1.545,1.488,3,3L1402,994l-1.44,1.5q-1.455,1.51-3,3l-0.97.935a1.57,1.57,0,0,1-2.1.288,2.949,2.949,0,0,1-.7-0.692,1.63,1.63,0,0,1-.28-0.946,1.731,1.731,0,0,1,.55-1.142l1-1.1h-6.09a1.839,1.839,0,0,1-.9-0.185,2.771,2.771,0,0,1-.51-0.369,2.828,2.828,0,0,1-.37-0.507,1.715,1.715,0,0,1,0-1.569,2.005,2.005,0,0,1,.88-0.877,1.852,1.852,0,0,1,.9-0.184h6.18l-0.61-.588a6.114,6.114,0,0,1-.61-0.635,2.077,2.077,0,0,1-.33-0.508" transform="translate(-1387 -988)"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </footer>
        </div>
    </aside>
    <section class="popular">
        <div class="popular__inner">
            <h2 class="content__title">Ремонтируем</h2>
            <ul class="popular__list">
                <li class="popular__item">
                    <a class="popular__box" href="#">
                        <div class="popular__cover" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/repair-popular-kofemash.jpg);"></div>
                        <div class="popular__text">
                            <p class="popular__name">Ремонт кофемашин на дому</p>
                            <p class="popular__price">от 450 р.</p>
                        </div>
                    </a>
                </li>
                <li class="popular__item">
                    <a class="popular__box" href="#">
                        <div class="popular__cover" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/repair-popular-kofemash.jpg);"></div>
                        <div class="popular__text">
                            <p class="popular__name">Ремонт кофемашин на дому</p>
                            <p class="popular__price">от 450 р.</p>
                        </div>
                    </a>
                </li>
                <li class="popular__item">
                    <a class="popular__box" href="#">
                        <div class="popular__cover" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/repair-popular-kofemash.jpg);"></div>
                        <div class="popular__text">
                            <p class="popular__name">Ремонт кофемашин на дому</p>
                            <p class="popular__price">от 450 р.</p>
                        </div>
                    </a>
                </li>
                <li class="popular__item">
                    <a class="popular__box" href="#">
                        <div class="popular__cover" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/repair-popular-kofemash.jpg);"></div>
                        <div class="popular__text">
                            <p class="popular__name">Ремонт кофемашин на дому</p>
                            <p class="popular__price">от 450 р.</p>
                        </div>
                    </a>
                </li>
                <li class="popular__item">
                    <a class="popular__box" href="#">
                        <div class="popular__cover" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/repair-popular-kofemash.jpg);"></div>
                        <div class="popular__text">
                            <p class="popular__name">Ремонт кофемашин на дому</p>
                            <p class="popular__price">от 450 р.</p>
                        </div>
                    </a>
                </li>
                <li class="popular__item">
                    <a class="popular__box" href="#">
                        <div class="popular__cover" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/repair-popular-kofemash.jpg);"></div>
                        <div class="popular__text">
                            <p class="popular__name">Ремонт кофемашин на дому</p>
                            <p class="popular__price">от 450 р.</p>
                        </div>
                    </a>
                </li>
                <li class="popular__item">
                    <a class="popular__box" href="#">
                        <div class="popular__cover" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/repair-popular-kofemash.jpg);"></div>
                        <div class="popular__text">
                            <p class="popular__name">Ремонт кофемашин на дому</p>
                            <p class="popular__price">от 450 р.</p>
                        </div>
                    </a>
                </li>
                <li class="popular__item">
                    <a class="popular__box" href="#">
                        <div class="popular__cover" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/repair-popular-kofemash.jpg);"></div>
                        <div class="popular__text">
                            <p class="popular__name">Ремонт кофемашин на дому</p>
                            <p class="popular__price">от 450 р.</p>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="popular__actions">
                <a class="reviews__all" href="#">Показать еще</a>
            </div>
        </div>
    </section>
    <aside class="brands">
        <div class="brands__inner">
            <h3 class="content__subtitle">Мы осуществляем ремонт кофемашин <b>следующих брендов</b></h3>
            <div class="brands__carousel">
                <div class="swiper-container brands__slider">
                    <div class="swiper-wrapper brands__list">
                        <div class="swiper-slide brands__item">
                            <a class="brands__box" href="#">
                                <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logos/brand_bosch.svg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide brands__item">
                            <a class="brands__box" href="#">
                                <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logos/brand_bork.svg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide brands__item">
                            <a class="brands__box" href="#">
                                <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logos/brand_philips.svg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide brands__item">
                            <a class="brands__box" href="#">
                                <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logos/brand_bosch.svg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide brands__item">
                            <a class="brands__box" href="#">
                                <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logos/brand_bork.svg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide brands__item">
                            <a class="brands__box" href="#">
                                <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logos/brand_philips.svg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide brands__item">
                            <a class="brands__box" href="#">
                                <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logos/brand_bosch.svg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide brands__item">
                            <a class="brands__box" href="#">
                                <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logos/brand_bork.svg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide brands__item">
                            <a class="brands__box" href="#">
                                <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logos/brand_philips.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="brands__next"></div>
                <div class="brands__prev"></div>
            </div>
            <div class="brands__pagination"></div>
        </div>
    </aside>
    <section class="breaking">
        <div class="breaking__inner">
            <div class="breaking__container">
                <div class="breaking__view">
                    <div class="breaking__picture">
                        <img class="breaking__photo" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/Repair-kofemash_450x0_d47.png" alt="Кофемашин">
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
                            <h3 class="breaking__label">Обычно ломается</h3>
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
                                        — протечтке;</br>
                                        — датчике уровня воды;</br>
                                        — панеле управления.
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
                                        — влаге внутри корпуса.
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
                                        — неплотной посадке соединительных трубок.</br>
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
                                        — затитых, грязных кнопках;</br>
                                        — сгоревшем предохранителе.
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="breaking__column">
                            <h3 class="breaking__label">Чаще необходимо</h3>
                            <ul class="breaking__list">
                                <li class="breaking__item">Чистка и декальцинация — от 1200&#160;₽</li>
                                <li class="breaking__item">Замена бойлера — от 800&#160;₽</li>
                                <li class="breaking__item">Ремонт капучинатора — от 900&#160;₽</li>
                                <li class="breaking__item">Замена ТЭНа — от 900&#160;₽</li>
                                <li class="breaking__item">Удаление ошибок — от 400&#160;₽</li>
                                <li class="breaking__item">Замена кофемолки — от 950&#160;₽</li>
                                <li class="breaking__item">Замена датчиков  — от 550&#160;₽</li>
                                <li class="breaking__item">Замена дисплея — от 1500&#160;₽</li>
                            </ul>
                        </div>
                    </div>
                    <div class="breaking__actions">
                        <a class="reviews__all" href="#">Смотреть все</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="reviews__inner">
            <h2 class="content__title">Отзывы</h2>
            <div class="reviews__carousel">
                <div class="swiper-container reviews__slider">
                    <div class="swiper-wrapper reviews__list">
                        <article class="swiper-slide reviews__item">
                            <div class="reviews__box">
                                <h4 class="reviews__name">Дарья Кривенко</h4>
                                <time class="reviews__time">9.07.2017</time>
                                <div class="reviews__rating reviews__rating_5"></div>
                                <p class="reviews__text">Собирались в отпуск, нужно было постирать белье. А тут, как на зло, машинка Whirlpool перестала греть. Набрали телефон 8(495)228-42-82, оставили заявку на срочный ремонт.</p>
                                <div class="reviews__more">
                                    <a class="reviews__full js-popup" data-popup="review_1" href="#">Развернуть</a>
                                </div>
                                <div class="reviews__action">
                                </div>
                            </div>
                        </article>
                        <article class="swiper-slide reviews__item">
                            <div class="reviews__box">
                                <h4 class="reviews__name">Ольга Самсонова</h4>
                                <time class="reviews__time">9.01.2017</time>
                                <div class="reviews__rating reviews__rating_5"></div>
                                <p class="reviews__text">Перестала включаться машинка, позвонила в несколько мастерских. Сказали надо везти в сервис. Времени нет, лишних денег на транспортировку тоже.</p>
                                <div class="reviews__more">
                                    <a class="reviews__full js-popup" data-popup="review_2" href="#">Развернуть</a>
                                </div>
                                <div class="reviews__action">
                                </div>
                            </div>
                        </article>
                        <article class="swiper-slide reviews__item">
                            <div class="reviews__box">
                                <h4 class="reviews__name">Семен Попов</h4>
                                <time class="reviews__time">14.05.2017</time>
                                <div class="reviews__rating reviews__rating_5"></div>
                                <p class="reviews__text">Живем в Подмосковных Котельниках. После поломки электрической плиты не знали куда обратиться, хорошо, что друзья посоветовали «Заботливый сервис». Быстро, недорого и качественно. В следующий раз только к вам.</p>
                                <div class="reviews__more">
                                    <a class="reviews__full js-popup" data-popup="review_3" href="#">Развернуть</a>
                                </div>
                                <div class="reviews__action">
                                </div>
                            </div>
                        </article>
                        <article class="swiper-slide reviews__item">
                            <div class="reviews__box">
                                <h4 class="reviews__name">Виталий Шумаков</h4>
                                <time class="reviews__time">24.03.2016</time>
                                <div class="reviews__rating reviews__rating_5"></div>
                                <p class="reviews__text">Не первый раз звоню в "Заботливый сервис" за срочным ремонтом. То дети набедокурят, то мы с женой что-нибудь не то сделали. Вчера вот пришлось срочно вызывать мастера, чтобы он стиральную машину починил - младший сын втихаря закинул в барабан детальки лего. Естественно, слив забило, а грохотало так, что на улице слышно было.</p>
                                <div class="reviews__more">
                                    <a class="reviews__full js-popup" data-popup="review_4" href="#">Развернуть</a>
                                </div>
                                <div class="reviews__action">
                                </div>
                            </div>
                        </article>
                        <article class="swiper-slide reviews__item">
                            <div class="reviews__box">
                                <h4 class="reviews__name">Полина З.</h4>
                                <time class="reviews__time">17.02.2016</time>
                                <div class="reviews__rating reviews__rating_5"></div>
                                <p class="reviews__text">Обратилась в "5+" за ремонтом кофемашины Jura, используем ее на работе каждый день очень активно, не удивительно, что однажды она перестала работать. Весь офис без кофе, народ засыпает. Срочно понадобился спец.</p>
                                <div class="reviews__more">
                                    <a class="reviews__full js-popup" data-popup="review_5" href="#">Развернуть</a>
                                </div>
                                <div class="reviews__action">
                                </div>
                            </div>
                        </article>
                        <article class="swiper-slide reviews__item">
                            <div class="reviews__box">
                                <h4 class="reviews__name">Алена</h4>
                                <time class="reviews__time">22.01.2016</time>
                                <div class="reviews__rating reviews__rating_5"></div>
                                <p class="reviews__text">У меня мастер из "Вежливого сервиса" ремонтировал швейную машинку Веритас и телевизор LG. Оба раза осталась довольна, оба мастера вели себя как опытные профессионалы  выручили меня в самый неприятный момент. Спасибо большое!</p>
                                <div class="reviews__more">
                                    <a class="reviews__full js-popup" data-popup="review_6" href="#">Развернуть</a>
                                </div>
                                <div class="reviews__action">
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="reviews__next"></div>
                <div class="reviews__prev"></div>
            </div>
        </div>
        <p class="reviews__actions">
            <a class="reviews__all" href="#">Все отзывы</a>
        </p>
    </section>
    <aside class="complain">
        <div class="complain__inner">
            <div class="complain__box">
                <h3 class="complain__title">Обратная<span class="br"></span> связь</h3>
                <p class="complain__text">Если поломка произошла внезапно и вносит проблемы в Ваш быт, мы можем устранить её в кратчайшие сроки. Наш курьер заберёт неисправную кофемашину с любого района Москвы и максимально быстро доставит её в СЦ для ремонта.</p>
                <div class="complain__actions">
                    <a class="button button_warning js-popup" data-popup="request" href="#">
                        <img class="button__ico" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/ico_bellfa5f.svg" alt="">
                        <span class="button__label">Вызвать курьера</span>
                    </a>
                </div>
            </div>
        </div>
    </aside>
    <aside class="city">
        <div class="city__inner">
            <h3 class="content__subtitle">Обслуживаемые города <b>МО</b></h3>
            <div class="citys">
                <ul>
                    <li><a href="#">Балашиха</a></li>
                    <li><a href="#">Химки</a></li>
                    <li><a href="#">Подольск</a></li>
                    <li><a href="#">Королёв</a></li>
                    <li><a href="#">Люберцы</a></li>
                    <li><a href="#">Мытищи</a></li>
                    <li><a href="#">Электросталь</a></li>
                    <li><a href="#">Железнодорожный</a></li>
                    <li><a href="#">Коломна</a></li>
                    <li><a href="#">Одинцово</a></li>
                    <li><a href="#">Красногорск</a></li>
                    <li><a href="#">Серпухов</a></li>
                    <li><a href="#">Орехово-Зуево	</a></li>
                    <li><a href="#">Щёлково</a></li>
                    <li><a href="#">Домодедово</a></li>
                    <li><a href="#">Жуковский</a></li>
                    <li><a href="#">Сергиев Посад</a></li>
                    <li><a href="#">Пушкино</a></li>
                    <li><a href="#">Раменское</a></li>
                    <li><a href="#">Ногинск</a></li>
                </ul>
            </div>
        </div>
    </aside>
</main>