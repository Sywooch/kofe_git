<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($page['meta_title']) ? $page['meta_title'] : \app\components\CController::$category['full_title'] . ' в ' . Yii::$app->session['region']['titleRod'];
?>
<main class="main shadow">
    <div class="row row-main banner">
        <div class="col-12 content">
            <div class="main-col content-slider content-slider_flex">
                <div class="features text-theme-snow">
                    <h1 class="features__title"><?= !empty($page['meta_h1']) ? $page['meta_h1'] : \app\components\CController::$category['full_title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
                    <div class="features__text"><?= $page['description']; ?></div>
                    <div class="row icons-banner">
                        <div class="col-l-12 col-5"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/car.svg" alt="">Бесплатная доставка кофемашины в пределах МКАД</div>
                        <div class="col-l-12 col-5"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/clock.svg" alt="">В среднем, кофемашина находится в СЦ не более 24 часов</div>
                        <div class="col-l-12 col-5"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/quote.svg" alt="">За 8 лет мы отремонтировали более 30 000 кофемашин</div>
                        <div class="col-l-12 col-5"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/calendar.svg" alt="">Выдаём официальную гарантию СЦ до 1 года</div>
                    </div>
                </div>
            </div>
            <?= mr_coffee\widgets\forms\Main::widget(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12 content">
            <div class="main-col">
                <?= mr_coffee\widgets\lists\PopularFaults::widget(); ?>
                <div class="wrapper-main">
                    <?= mr_coffee\widgets\other\Ht::widget(); ?>
                    <section class="section-margin">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="mt10">Преимущества</h3>
                                <div class="view-more">
                                    <div class="view-more__content view-more__content--bracket-list">
                                        <div class="bracket-list">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="bracket-list__item">Опыт каждого инженера по ремонту кофемашин - <b class="text-theme-black">более 10 лет.</b> Каждая кофемашина перед передачей клиенту - проходит контроль качества.</div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="bracket-list__item">Удобное расположение сервисного центра. Имеется <b class="text-theme-black">бесплатная</b> парковка для клиентов.</div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="bracket-list__item">Предоставляем <b class="text-theme-black">ОФИЦИАЛЬНУЮ</b> гарантию до 1 года. Гарантии подлежат услуги нашего сервисного центра и все заменённые комплектующие.</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="bracket-list__item">Специалист выезжает на заказ <b class="text-theme-black">в течении 30 минут</b> после согласования. Курьерская служба - Бесплатна.</div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="bracket-list__item">Наш сервисный центр проводит обучение инженеров по <b class="text-theme-black">Европейской технологии.</b> Каждый сотрудник проходит тестирование и после допускается к выполнению ремонта.</div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="bracket-list__item">На время ремонта - предоставляем аналогичную <b class="text-theme-black">подменную кофемашину</b> совершенно бесплатно.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="view-more__link mb15" href="#">Открыть еще</a>
                                </div>
                                <div class="bracket-list__pride mt10 mb20">Выполнили более 50 000 заказов за&nbsp;8&nbsp;лет</div>
                            </div>
                        </div>
                    </section>
                    <div class="hide-moretablet side-block--mobile mb0 mt25">
                        <section class="panel mb40">
                            <h4 class="panel__caption">Вопросы</h4>
                            <div class="article">
                                <div class="article__title text-theme-yellowgreen mt5">Виктор</div>
                                <!-- Подгружаем из базы вопросы -->
                                <p class="article__text">Здравствуйте!
                                    выбираю морозильник 
                                    из Атлант,Shivaki,Indesit,Gorenjie.
                                    Что порекомендуете иcходя из Вашего опыта?
                                </p>
                            </div>
                            <div class="article hide-for-tablet">
                                <div class="article__title text-theme-yellowgreen mt5">Острянская Виктория Дмитриевна</div>
                                <p class="article__text">Возможна ли оплата работы мастера с банковской карты,или только наличные?</p>
                            </div>
                            <div class="panel__footer"><a class="button button--dark button--small" href="answer/index.html">Все вопросы</a></div>
                        </section>
                    </div>
                    <section class="section-margin">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="mt10">Как заказать ремонт кофемашины в нашем сервисном центре</h3>
                                <b class="text-theme-black">Вы можете воспользоваться наиболее удобным для Вас способом:</b>
                                <div class="support-methods-list">
                                    <div class="support-methods-item">
                                        <div class="row">
                                            <div class="col-4 col-xs-12 supports-intro">
                                                <div class="supports-icon"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/decorative/phone.svg" alt="phone"></div>
                                                <div class="support-type">
                                                    <div class="support-type__text">Позвонив нам: </div>
                                                    <div class="supports-type__time">с 8:00 до 22:00</div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="support-text"><b>
                                                        8 (499) 408-60-59                                        </b>
                                                    </b>
                                                    Заявки принимаются без обеда и выходных.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="support-methods-item">
                                        <div class="row">
                                            <div class="col-4 col-xs-12 supports-intro">
                                                <div class="supports-icon"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/decorative/mouse.svg" alt="mouse"></div>
                                                <div class="support-type">
                                                    <a class="link support-type__text js-popup" href="#" data-container="#popup" data-content="/include/popup.php?ref=www.mr-master.ru%2F">Онлайн заявка</a>
                                                    <div class="supports-type__time">в режиме: 24\7</div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="support-text">
                                                    На любой странице нашего сайта есть онлайн-формы. Заполнив необходимые поля вы автоматически <b class="text-theme-black">резервируете скидку в 10%.</b> Наши сотрудники свяжутся с Вами в ближайшее время и проконсультируют Вас по всем возникшим вопросам.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="hide-moretablet side-block--mobile mt30">
                        <section class="panel mb40">
                            <h4 class="panel__caption">Советы</h4>
                            <div class="article">
                                <div class="article__title text-theme-yellowgreen mt5">ПОЖЕЛАНИЯ</div>
                                <p class="article__text">Надеемся что выше приведённая информация вам пригодиться,и вы не станете учиться на своих ошибках.</p>
                            </div>
                            <div class="panel__footer"><a class="button button--dark button--small" href="advices/index.html">Все советы</a></div>
                        </section>
                    </div>
                    <section class="section-margin articles">
                        <h3 class="articles__title">Отзывы</h3>
                        <div class="article-list">
                            <div class="article-list__item">
                                <header>
                                    <time class="datetime">15 Декабря 2017</time>
                                    <h5 class="mb0 mt0 text-theme-yellowgreen">Лидия Григорьевна</h5>
                                </header>
                                <p class="article-list__item-text">Заказала проводку кабеля на два телевизора. Приехал мастер во время без опоздания, свою работу сделал на отлично. Рада что обратилась в этот сервисный центр. Рекомендую </p>
                            </div>
                            <div class="article-list__item">
                                <header>
                                    <time class="datetime">11 Сентября 2017</time>
                                    <h5 class="mb0 mt0 text-theme-yellowgreen">Валерий Владимирович </h5>
                                </header>
                                <p class="article-list__item-text">Данный сервис посоветовала мне моя знакомая. Заказал ремонт стиральной машины. Приехал мастер профессионал своего дела и устранил поломку машины. Был ремонт модульного блока. Машина работает без нареканий. </p>
                            </div>
                        </div>
                        <a class="button button--dark button--small" href="response/index.html">Все отзывы</a>
                    </section>
                    <div class="hide-moretablet side-block--mobile side-block--small-tablet">
                        <section class="js-ajax mb40 ">
                            <form method="post" action="https://www.mr-master.ru/include/ajax/form_discount.php" name="repairs-request" class="panel js-required-form">
                                <h4 class="panel__caption text-red">Хочешь скидку?</h4>
                                <p class="mt0">Получи купон c персональной скидкой на свой телефон.</p>
                                <label class="form-lbl form-lbl--for-input js-inputmask-phone required"><span class="form-lbl__text">Телефон</span>
                                    <input name="phone" type="tel" required="" placeholder="+7 (___) ___ __-__">
                                </label>
                                <div class="panel__footer mt15">
                                    <button type="submit" class="button button--red button--small">Получить скидку</button>
                                    <div class="checkbox-field checkbox-field--size_s text-theme-black mt15">Согласен на обработку данных. &nbsp; <a class="agreem" href="privacy/index.html" target="_blank">Соглашение</a></div>
                                </div>
                            </form>
                            <div class="form__success panel discont">
                                <div class="congratulation">
                                    <div class="congratulation__content">
                                        <div class="red-text congratulation__caption">Поздравляем!</div>
                                        <div>Мы отправили на ваш номер </div>
                                        <div class="congratulation__number"></div>
                                        <div class="congratulation__text">персональный купон со скидкой.</div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <section class="map section-margin">
                        <h3><a class="map__link hide-moretablet" href="maps_wm/index.html"><span class="relative">Карта ремонтов</span></a></h3>
                        <div class="hide-for-tablet">
                            <h3>Карта ремонтов</h3>
                            <div class="districts">
                                <div class="tab"><a class="tab-link tab-link--active">Москва</a></div>
                                <div class="districts__section tabcontent" id="City">
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">A</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yzao/akademicheskiy/index.html">Академический</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/svao/altufevo/index.html">Альтуфьево</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">Б</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/svao/babushkinskij/index.html">Бабушкинский</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/svao/bibrevo/index.html">Бибирево</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yao/biryulevo/index.html">Бирюлево</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yao/brateevo/index.html">Братеево</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yzao/butovo/index.html">Бутово</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">В</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yao/vidnoe/index.html">Видное</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yvao/vykhino-zhulebino/index.html">Выхино</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">Г</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yzao/gagarinskij/index.html">Гагаринский</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">Д</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yao/donskoy/index.html">Даниловский</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">Ж</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yvao/vykhino-zhulebino/index.html">Жулебино</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">З</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yzao/zjuzino/index.html">Зюзино</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yao/zayblikovo/index.html">Зябликово</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">И</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/vao/izmaylovo/index.html">Измайлово</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">К</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yvao/kapotnya/index.html">Капотня</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yzao/konkovo/index.html">Коньково</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yzao/kotlovka/index.html">Котловка</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/cao/krasnoselskiy/index.html">Красносельский</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/zao/krylatskoe/index.html">Крылатское</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yvao/kuzminki/index.html">Кузьминки</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/zao/kuncevo/index.html">Кунцево</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/szao/kurkino/index.html">Куркино</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">Л</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yvao/lefortovo/index.html">Лефортово</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yzao/lomonosovski/index.html">Ломоносовский</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yvao/lubercy/index.html">Люберцы</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yvao/lyublino/index.html">Люблино</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">М</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yvao/marino/index.html">Марьино</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/svao/medvedkovo/index.html">Медведково</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/szao/mitino/index.html">Митино</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/zao/mozhajskij/index.html">Можайский</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yao/moskvoreche-saburovo/index.html">Москворечье-Сабурово</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">Н</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yao/nagatino/index.html">Нагатино</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yao/nagatinskiy-zaton/index.html">Нагатинский Затон</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yao/nagorniy/index.html">Нагорный</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yvao/nekrasovka/index.html">Некрасовка</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yvao/nizhegorodskiy/index.html">Нижегородский</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/vao/novogireevo/index.html">Новогиреево</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/vao/novokosino/index.html">Новокосино</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">О</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yzao/obruchevskiy/index.html">Обручевский</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yao/orehovo/index.html">Орехово-Борисово</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/svao/otradnoe/index.html">Отрадное</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">П</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/vao/perovo/index.html">Перово</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yvao/pechatniki/index.html">Печатники</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">Р</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yvao/ryazansky/index.html">Рязанский</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">С</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/svao/sviblovo/index.html">Свиблово</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/sao/sokol/index.html">Сокол</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/vao/sokolniki/index.html">Сокольники</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/zao/solncevo/index.html">Солнцево</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/szao/strogino/index.html">Строгино</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">Т</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yvao/tekstilshiki/index.html">Текстильщики</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yzao/teplyjj_stan/index.html">Тёплый стан</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/sao/timiryazevskij/index.html">Тимирязевский</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/tao/troick/index.html">Троицк</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/szao/tushino/index.html">Тушино</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">Ц</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yao/tsaricino/index.html">Царицыно</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">Ч</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yzao/cheryomushki/index.html">Черемушки</a></li>
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yao/chertanovo/index.html">Чертаново</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">Щ</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yzao/sherbinka/index.html">Щербинка</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">Ю</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yvao/juzhnoportovyj/index.html">Южнопортовый</a></li>
                                        </ul>
                                    </div>
                                    <div class="districts__section__item">
                                        <span class="districts-list__caps">Я</span>
                                        <ul class="districts-list">
                                            <li class="districts-list__item"><a class="link districts-list__link" href="service/remont-stiralnih-mashin/map/yzao/yasenevo/index.html">Ясенево</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="region-districts__section-list tabcontent" id="Region">
                                    <p>SomeText</p>
                                </div>
                                <a class="button button--dark button--small text-transform-upper" href="maps_wm/index.html">Все районы</a>
                            </div>
                        </div>
                    </section>
                    <div class="hide-moretablet side-block--mobile side-block--small-tablet">
                        <section class="panel panel--list-image mb40">
                            <h4 class="panel__caption">Мы специализируемся на&nbsp;ремонте</h4>
                            <ul class="list-image reset-list">
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/aeg/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/aeg.png" alt="aeg"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/ardo/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/ardo.png" alt="ardo"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/ariston/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/ariston.png" alt="ariston"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/asko/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/asko.png" alt="asko"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/bauknecht/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/bauknecht.png" alt="bauknecht"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/beko/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/beko.png" alt="beko"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/bosch/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/bosch.png" alt="bosch"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/brandt/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/brandt.png" alt="brandt"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/candy/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/candy.png" alt="candy"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/daewoo/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/daewoo.png" alt="daewoo"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/electrolux/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/electrolux.png" alt="electrolux"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/euronova/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/euronova.png" alt="euronova"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/general_electric/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/healthcare.png" alt="healthcare"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/gorenje/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/gorenje.png" alt="gorenje"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/hansa/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/hansa.png" alt="hansa"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/indesit/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/indesit.png" alt="indesit"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/kaiser/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/kaiser.png" alt="kaiser"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/lg/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/lg.png" alt="lg"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/miele/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/miele.png" alt="miele"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/otsein/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/otsein.png" alt="otsein"></a></li>
                                <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/philco/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/philco.png" alt="philco"></a></li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
            <div class="side-col hide-for-tablet">
                <aside>
                    <section class="panel panel--list-image mb40">
                        <h4 class="panel__caption">Мы специализируемся на&nbsp;ремонте</h4>
                        <ul class="list-image reset-list">
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/aeg/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/aeg.png" alt="aeg"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/ardo/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/ardo.png" alt="ardo"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/ariston/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/ariston.png" alt="ariston"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/asko/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/asko.png" alt="asko"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/bauknecht/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/bauknecht.png" alt="bauknecht"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/beko/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/beko.png" alt="beko"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/bosch/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/bosch.png" alt="bosch"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/brandt/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/brandt.png" alt="brandt"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/candy/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/candy.png" alt="candy"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/daewoo/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/daewoo.png" alt="daewoo"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/electrolux/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/electrolux.png" alt="electrolux"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/euronova/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/euronova.png" alt="euronova"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/general_electric/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/healthcare.png" alt="healthcare"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/gorenje/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/gorenje.png" alt="gorenje"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/hansa/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/hansa.png" alt="hansa"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/indesit/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/indesit.png" alt="indesit"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/kaiser/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/kaiser.png" alt="kaiser"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/lg/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/lg.png" alt="lg"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/miele/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/miele.png" alt="miele"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/otsein/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/otsein.png" alt="otsein"></a></li>
                            <li class="list-image__item"><a href="service/remont-stiralnih-mashin/brands/philco/index.html" class="link--reset"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/firm-marks/philco.png" alt="philco"></a></li>
                        </ul>
                    </section>
                    <section class="panel mb40">
                        <h4 class="panel__caption mb5">Новости</h4>
                        <article class="article">
                            <time class="datetime">17 Апреля 2017</time>
                            <div class="article__text article__text--news">
                                <div class="article__text-link"><a href="news/1260/index.html">Мы прошли долгий путь для повышения качества и готовы воплотить новые условия в жизнь. Вся гарантия на ремонт увеличена и теперь вы можете подтвердить проверку качества по телефону диспетчеру.</a></div>
                                <div class="article__text-preview">Мы прошли долгий путь для повышения качества и готовы воплотить новые условия в жизнь. Вся гарантия на ремонт увеличена и теперь вы можете подтвердить проверку качества по телефону диспетчеру.</div>
                            </div>
                        </article>
                        <article class="article">
                            <time class="datetime">18 Мая 2016</time>
                            <div class="article__text article__text--news">
                                <div class="article__text-link"><a href="news/1182/index.html">Новы раздел <a href="service/remont-stiralnih-mashin/breakings/index.html">основные поломки стиральных машин</a>. Теперь можно узнать подробные симптомы.</a></div>
                                <div class="article__text-preview">Новы раздел <a href="service/remont-stiralnih-mashin/breakings/index.html">основные поломки стиральных машин</a>. Теперь можно узнать подробные симптомы.</div>
                            </div>
                        </article>
                        <div class="panel__footer mt30"><a class="button button--dark button--small" href="news/index.html">Все новости</a></div>
                    </section>
                    <section class="panel mb40">
                        <h4 class="panel__caption">Вопросы</h4>
                        <!--Тут тоже подгружаем вопросы из базы -->
                        <section class="article">
                            <div class="article__title text-theme-yellowgreen mt5">Виктор</div>
                            <p class="article__text">Здравствуйте!
                                выбираю морозильник 
                                из Атлант,Shivaki,Indesit,Gorenjie.
                                Что порекомендуете иcходя из Вашего опыта?
                            </p>
                        </section>
                        <section class="article hide-for-tablet">
                            <div class="article__title text-theme-yellowgreen mt5">Острянская Виктория Дмитриевна</div>
                            <p class="article__text">Возможна ли оплата работы мастера с банковской карты,или только наличные?</p>
                        </section>
                        <div class="panel__footer"><a class="button button--dark button--small" href="answer/index.html">Все вопросы</a></div>
                    </section>
                    <section class="panel mb40">
                        <h4 class="panel__caption">Полезные советы</h4>
                        <section class="article">
                            <p class="article__text">По уходу за кофемашиной. Специально для Вас от наших инженеров по ремонту кофемашин.</p>
                        </section>
                        <div class="panel__footer"><a class="button button--dark button--small" href="advices/index.html">Все советы</a></div>
                    </section>
                </aside>
            </div>
        </div>
    </div>
</main>