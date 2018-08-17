<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<main class="main shadow">
    <div class="row">
        <div class="col-12 content">
            <div class="main-col">
                <div class="breadcrumbs">
                    <a href="#" class="breadcrumbs__item" title="Главная">Ремонт кофемашин</a>
                    <span class="breadcrumbs__item-current">FRANKE</span>
                </div>
                <h1 class="mt10 mb10"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : app\components\CController::$category['full_title'] . ' ' . $pageInfo['title']; ?></h1>
                <div class="row works">
                    <div class="col-12">
                        <div class="banner banner--small" style="background-image: url('/<?= $siteConfig['theme']; ?>/images/remont-i-servis-kofemashin-kopiya.jpg');">
                            <div class="banner--small__content">
                                <h3 class="banner__title">Гарантия на все виды работ <br>от 6 месяцев</h3>
                                <a class="button button--send js-popup" href="#" data-container="#popup">ЗАКАЗАТЬ РЕМОНТ</a>
                            </div>
                            <div class="brend-logo">
                                <img src="<?= $assets . '/'; ?>uploads/images/<?= $pageInfo['image']; ?>" />
                            </div>
                        </div>
                        <?= mr_coffee\widgets\other\Ht::widget(); ?>                        
                        <section class="section make-order">
                            <div class="row">
                                <div class="col-12">                                    
                                    <div class="view-more">
                                        <div class="view-more__content view-more__content--make-order">
                                            <?= str_replace('#brand_en#', $pageInfo['title'], $pageInfo['description']); ?>
                                        </div>
                                        <a class="view-more__link" href="#">Открыть еще</a>
                                    </div>
                                    <a class="button button--send js-popup" href="#" data-container="#popup">Заказать ремонт</a>
                                </div>
                            </div>
                        </section>
                        <div class="hide-moretablet side-block--mobile side-block--small-tablet mb35"></div>
                        <div class="section-margin">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mt0 mb0">Цены на ремонт</h3>
                                </div>
                                <div class="view-more view-more--table-info">
                                    <div class="view-more__content view-more__content--table-info">
                                        <table class="table-info mt5">
                                            <thead>
                                                <tr>
                                                    <th>Поломка</th>
                                                    <th>Время&nbsp;ремонта</th>
                                                    <th>Стоимость</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="table-info__item">
                                                    <td class="table-info__cell table-info__cell--service">Выезд мастера</td>
                                                    <td class="table-info__cell table-info__cell--time">В день обращения</td>
                                                    <td class="table-info__cell table-info__cell--price text-blue">Бесплатно</td>
                                                </tr>
                                                <tr class="table-info__item">
                                                    <td class="table-info__cell table-info__cell--service">Диагностика поломки</td>
                                                    <td class="table-info__cell table-info__cell--time">20-50 минут</td>
                                                    <td class="table-info__cell table-info__cell--price text-blue">Бесплатно<sup class="text-theme-blood">*</sup></td>
                                                </tr>
                                                <tr class="table-info__item">
                                                    <td class="table-info__cell table-info__cell--service">Замена кнопки</td>
                                                    <td class="table-info__cell table-info__cell--time">30-50 минут</td>
                                                    <td class="table-info__cell table-info__cell--price text-theme-blood">От 1250 руб.</td>
                                                </tr>
                                                <tr class="table-info__item">
                                                    <td class="table-info__cell table-info__cell--service">Замена петли люка</td>
                                                    <td class="table-info__cell table-info__cell--time">30-50 минут</td>
                                                    <td class="table-info__cell table-info__cell--price text-theme-blood">От 1300 руб.</td>
                                                </tr>
                                                <tr class="table-info__item">
                                                    <td class="table-info__cell table-info__cell--service">Замена помпы</td>
                                                    <td class="table-info__cell table-info__cell--time">40-80 минут</td>
                                                    <td class="table-info__cell table-info__cell--price text-theme-blood">От 1900 руб.</td>
                                                </tr>
                                                <tr class="table-info__item">
                                                    <td class="table-info__cell table-info__cell--service">Замена тена</td>
                                                    <td class="table-info__cell table-info__cell--time">30-70 минут</td>
                                                    <td class="table-info__cell table-info__cell--price text-theme-blood">От 2000 руб.</td>
                                                </tr>
                                                <tr class="table-info__item">
                                                    <td class="table-info__cell table-info__cell--service">Замена подшипников</td>
                                                    <td class="table-info__cell table-info__cell--time">1-4 часа</td>
                                                    <td class="table-info__cell table-info__cell--price text-theme-blood">От 2300 руб.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-12"><a class="mb0 view-more__link" href="#">Открыть еще</a></div>
                                </div>
                                <div class="col-12">
                                    <p>В стоимость ремонта не входит цена детали. <a href="../../price/stiralnie-mashiny/index.html">Все цены на ремонт</a></p>
                                    <p>Если цена на ремонт стиральной машины Вас не устроит, Вы оплачиваете только диагностику. В случае согласия на ремонт диагностика проводится бесплатно. Кроме того, мы не берём оплату за вызов мастера. При этом в большинстве случаев мы выполняем ремонт стиральных машин на дому, что экономит ещё и Ваше время.</p>
                                </div>
                            </div>
                        </div>
                        <section>
                            <h3 class="mt0 mb0">Модели FRANKE</h3>
                            <div class="districts__section">
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">A</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yzao/akademicheskiy/index.html">Академический</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="svao/altufevo/index.html">Альтуфьево</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">Б</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="svao/babushkinskij/index.html">Бабушкинский</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="svao/bibrevo/index.html">Бибирево</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yao/biryulevo/index.html">Бирюлево</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yao/brateevo/index.html">Братеево</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yzao/butovo/index.html">Бутово</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">В</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yao/vidnoe/index.html">Видное</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yvao/vykhino-zhulebino/index.html">Выхино</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">Г</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yzao/gagarinskij/index.html">Гагаринский</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">Д</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yao/donskoy/index.html">Даниловский</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">Ж</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yvao/vykhino-zhulebino/index.html">Жулебино</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">З</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yzao/zjuzino/index.html">Зюзино</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yao/zayblikovo/index.html">Зябликово</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">И</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="vao/izmaylovo/index.html">Измайлово</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">К</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yvao/kapotnya/index.html">Капотня</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yzao/konkovo/index.html">Коньково</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yzao/kotlovka/index.html">Котловка</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="cao/krasnoselskiy/index.html">Красносельский</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="zao/krylatskoe/index.html">Крылатское</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yvao/kuzminki/index.html">Кузьминки</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="zao/kuncevo/index.html">Кунцево</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="szao/kurkino/index.html">Куркино</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">Л</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yvao/lefortovo/index.html">Лефортово</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yzao/lomonosovski/index.html">Ломоносовский</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yvao/lubercy/index.html">Люберцы</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yvao/lyublino/index.html">Люблино</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">М</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yvao/marino/index.html">Марьино</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="svao/medvedkovo/index.html">Медведково</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="szao/mitino/index.html">Митино</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="zao/mozhajskij/index.html">Можайский</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yao/moskvoreche-saburovo/index.html">Москворечье-Сабурово</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">Н</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yao/nagatino/index.html">Нагатино</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yao/nagatinskiy-zaton/index.html">Нагатинский Затон</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yao/nagorniy/index.html">Нагорный</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yvao/nekrasovka/index.html">Некрасовка</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yvao/nizhegorodskiy/index.html">Нижегородский</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="vao/novogireevo/index.html">Новогиреево</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="vao/novokosino/index.html">Новокосино</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">О</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yzao/obruchevskiy/index.html">Обручевский</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yao/orehovo/index.html">Орехово-Борисово</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="svao/otradnoe/index.html">Отрадное</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">П</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="vao/perovo/index.html">Перово</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yvao/pechatniki/index.html">Печатники</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">Р</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yvao/ryazansky/index.html">Рязанский</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">С</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="svao/sviblovo/index.html">Свиблово</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="sao/sokol/index.html">Сокол</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="vao/sokolniki/index.html">Сокольники</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="zao/solncevo/index.html">Солнцево</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="szao/strogino/index.html">Строгино</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">Т</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yvao/tekstilshiki/index.html">Текстильщики</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yzao/teplyjj_stan/index.html">Тёплый стан</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="sao/timiryazevskij/index.html">Тимирязевский</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="tao/troick/index.html">Троицк</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="szao/tushino/index.html">Тушино</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">Ц</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yao/tsaricino/index.html">Царицыно</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">Ч</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yzao/cheryomushki/index.html">Черемушки</a></li>
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yao/chertanovo/index.html">Чертаново</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">Щ</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yzao/sherbinka/index.html">Щербинка</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">Ю</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yvao/juzhnoportovyj/index.html">Южнопортовый</a></li>
                                    </ul>
                                </div>
                                <div class="districts__section__item">
                                    <span class="districts-list__caps">Я</span>
                                    <ul class="districts-list">
                                        <li class="districts-list__item"><a class="link districts-list__link" href="yzao/yasenevo/index.html">Ясенево</a></li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <section class="section-margin">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mt10">Преимущества</h3>
                                    <div class="view-more">
                                        <div class="view-more__content view-more__content--bracket-list">
                                            <div class="bracket-list">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="bracket-list__item">Опыт работы компании <b class="text-theme-black">более 15 лет</b>.В нашей компании опытные мастера, регулярно повышающие свою квалификацию</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="bracket-list__item">Приём заявок <b class="text-theme-black">круглосуточно</b> по интернету и SMS. По телефону с 8:00 до 24:00 часов.</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="bracket-list__item">Гарантия на ремонт <b class="text-theme-black">от 6 месяцев</b>, применение оригинальных и сертифицированных запасных частей</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="bracket-list__item">Сотрудники отдела контроля и качества <b class="text-theme-black">проконтролируют</b> произведенный ремонт и при необходимости внимательно выслушают замечания и предложения</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="bracket-list__item">Выезд специалиста <b class="text-theme-black">в день обращения</b> или в любое удобное для вас время</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="bracket-list__item"><b class="text-theme-black">Каждый клиент</b> получит подарочную карту-наклейку со статусом «клиент компании Mr.Master» c последующей скидкой на ремонт любой бытовой техники <span>10%.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="view-more__link mb15" href="#">Открыть еще</a>
                                    </div>
                                    <div class="bracket-list__pride mt10 mb20">Выполнили более 50 000 заказов за&nbsp;6&nbsp;лет</div>
                                </div>
                            </div>
                        </section>
                        <div class="hide-moretablet side-block--mobile mb0 mt25">
                        </div>
                        <section class="section-margin">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mt10">Как вызвать мастера</h3>
                                    <b class="text-theme-black">Чтобы сделать заказ, воспользуйтесь наиболее удобным для вас способом:</b>
                                    <div class="support-methods-list">
                                        <div class="support-methods-item">
                                            <div class="row">
                                                <div class="col-4 col-xs-12 supports-intro">
                                                    <div class="supports-icon"><img src="images/decorative/phone.svg" alt="phone"></div>
                                                    <div class="support-type">
                                                        <div class="support-type__text">По телефону: </div>
                                                        <div class="supports-type__time">с 8:00 до 24:00</div>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="support-text"><b>
                                                            8 (499) 408-60-59                                            </b>
                                                        или
                                                        <b>
                                                            8 (909) 151-19-22.
                                                        </b>
                                                        Заявки принимаются без обеда и выходных.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="support-methods-item">
                                            <div class="row">
                                                <div class="col-4 col-xs-12 supports-intro">
                                                    <div class="supports-icon"><img src="images/decorative/mouse.svg" alt="mouse"></div>
                                                    <div class="support-type">
                                                        <a class="link support-type__text js-popup" href="#" data-container="#popup" data-content="../../include/popup9c81.html?ref=www.mr-master.ru%2Fservice%2Fremont-stiralnih-mashin%2F">Заявка онлайн</a>
                                                        <div class="supports-type__time">круглосуточно</div>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="support-text">
                                                        На всех страницах нашего сайта в правой части расположена <b>специальная форма,</b>
                                                        заполнив которую вы можете вызвать мастера для ремонта
                                                        стиральных машин на дому. <br>
                                                        Нам необходимы ваши контактные данные, модель бытовой техники и
                                                        краткое описание проблемы. После отправки указанной информации
                                                        специалисты «Mr.Master» свяжутся с вами в кратчайшее
                                                        время.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="support-methods-item">
                                            <div class="row">
                                                <div class="col-4 col-xs-12 supports-intro">
                                                    <div class="supports-icon"><img src="images/decorative/sms.svg" alt="sms"></div>
                                                    <div class="support-type">
                                                        <div class="support-type__text">По SMS </div>
                                                        <div class="support-type__time">круглосуточно</div>
                                                    </div>
                                                </div>
                                                <div class="col-8 support-text">На номер
                                                    8 (909) 151-19-22.
                                                    Например: <b>«стиральная машина, Анна, 9:00-21:00»</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="hide-moretablet side-block--mobile mt30">
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
                            <a class="button button--dark button--small" href="../../response/index.html">Все отзывы</a>
                        </section>
                        <div class="hide-moretablet side-block--mobile side-block--small-tablet">
                        </div>
                        <section class="map section-margin">
                            <h3><a class="map__link hide-moretablet" href="../../maps_wm/index.html"><span class="relative">Карта ремонтов</span></a></h3>
                            <div class="hide-for-tablet">
                                <h3>Карта ремонтов</h3>
                                <div class="districts">
                                    <div class="tab"><a class="tab-link tab-link--active">Москва</a></div>
                                    <div class="districts__section tabcontent" id="City">
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">A</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yzao/akademicheskiy/index.html">Академический</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="svao/altufevo/index.html">Альтуфьево</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">Б</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="svao/babushkinskij/index.html">Бабушкинский</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="svao/bibrevo/index.html">Бибирево</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yao/biryulevo/index.html">Бирюлево</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yao/brateevo/index.html">Братеево</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yzao/butovo/index.html">Бутово</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">В</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yao/vidnoe/index.html">Видное</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yvao/vykhino-zhulebino/index.html">Выхино</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">Г</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yzao/gagarinskij/index.html">Гагаринский</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">Д</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yao/donskoy/index.html">Даниловский</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">Ж</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yvao/vykhino-zhulebino/index.html">Жулебино</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">З</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yzao/zjuzino/index.html">Зюзино</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yao/zayblikovo/index.html">Зябликово</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">И</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="vao/izmaylovo/index.html">Измайлово</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">К</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yvao/kapotnya/index.html">Капотня</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yzao/konkovo/index.html">Коньково</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yzao/kotlovka/index.html">Котловка</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="cao/krasnoselskiy/index.html">Красносельский</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="zao/krylatskoe/index.html">Крылатское</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yvao/kuzminki/index.html">Кузьминки</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="zao/kuncevo/index.html">Кунцево</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="szao/kurkino/index.html">Куркино</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">Л</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yvao/lefortovo/index.html">Лефортово</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yzao/lomonosovski/index.html">Ломоносовский</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yvao/lubercy/index.html">Люберцы</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yvao/lyublino/index.html">Люблино</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">М</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yvao/marino/index.html">Марьино</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="svao/medvedkovo/index.html">Медведково</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="szao/mitino/index.html">Митино</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="zao/mozhajskij/index.html">Можайский</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yao/moskvoreche-saburovo/index.html">Москворечье-Сабурово</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">Н</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yao/nagatino/index.html">Нагатино</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yao/nagatinskiy-zaton/index.html">Нагатинский Затон</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yao/nagorniy/index.html">Нагорный</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yvao/nekrasovka/index.html">Некрасовка</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yvao/nizhegorodskiy/index.html">Нижегородский</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="vao/novogireevo/index.html">Новогиреево</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="vao/novokosino/index.html">Новокосино</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">О</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yzao/obruchevskiy/index.html">Обручевский</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yao/orehovo/index.html">Орехово-Борисово</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="svao/otradnoe/index.html">Отрадное</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">П</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="vao/perovo/index.html">Перово</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yvao/pechatniki/index.html">Печатники</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">Р</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yvao/ryazansky/index.html">Рязанский</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">С</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="svao/sviblovo/index.html">Свиблово</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="sao/sokol/index.html">Сокол</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="vao/sokolniki/index.html">Сокольники</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="zao/solncevo/index.html">Солнцево</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="szao/strogino/index.html">Строгино</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">Т</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yvao/tekstilshiki/index.html">Текстильщики</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yzao/teplyjj_stan/index.html">Тёплый стан</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="sao/timiryazevskij/index.html">Тимирязевский</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="tao/troick/index.html">Троицк</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="szao/tushino/index.html">Тушино</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">Ц</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yao/tsaricino/index.html">Царицыно</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">Ч</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yzao/cheryomushki/index.html">Черемушки</a></li>
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yao/chertanovo/index.html">Чертаново</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">Щ</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yzao/sherbinka/index.html">Щербинка</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">Ю</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yvao/juzhnoportovyj/index.html">Южнопортовый</a></li>
                                            </ul>
                                        </div>
                                        <div class="districts__section__item">
                                            <span class="districts-list__caps">Я</span>
                                            <ul class="districts-list">
                                                <li class="districts-list__item"><a class="link districts-list__link" href="yzao/yasenevo/index.html">Ясенево</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="region-districts__section-list tabcontent" id="Region">
                                        <p>SomeText</p>
                                    </div>
                                    <a class="button button--dark button--small text-transform-upper" href="../../maps_wm/index.html">Все районы</a>
                                </div>
                            </div>
                        </section>
                        <section class="section-margin">
                            <h3>Ремонт стиральных машин на дому</h3>
                            <div class="image-and-discount">
                                <div class="carwashes-image"></div>
                                <div class="discount-info">
                                    <div class="discount-info__text-and-btn">
                                        <div class="discount-info__text text-bold">Скидка при оформлении онлайн-заявки</div>
                                        <a class="button js-popup" href="#" data-container="#popup" data-content="../../include/popup9c81.html?ref=www.mr-master.ru%2Fservice%2Fremont-stiralnih-mashin%2F">Оформить заявку</a>
                                    </div>
                                    <div class="discount-value text-theme-blood">10%</div>
                                </div>
                            </div>
                            <div class="view-more">
                                <div class="view-more__content view-more__content--addition-company">
                                    <p>Сломалась стиральная машина? Неожиданность возникшей проблемы тянет за собой целый ряд вопросов, на которые хочешь, не хочешь, но нужно найти ответы:</p>
                                    <ul>
                                        <li>где найти специалиста, который устранит возникшие неисправности и восстановить работоспособность техники;</li>
                                        <li>насколько серьезна поломка и можно ли возникшие неисправности и восстановить работоспособность техники;</li>
                                        <li>как доставить оборудование в сервис.</li>
                                    </ul>
                                    <p>Двигаясь в подобном направлении, можно потерять много времени и столкнуться с необходимостью явно завышенных незапланированных трат. Поэтому многие предпочитают отказаться от попыток починки и отправляются в магазин за покупкой новой машинки.</p>
                                    <p>На самом деле, существует другая альтернатива, выбор которой оборачивается значительной экономией времени, сил и денег. Если вы обратитесь за помощью в Mr-Master, вам на помощь придут квалифицированные мастера, которые оперативно справятся с возникшей проблемой. Причем выполнят ремонт стиральной машины на дому, что исключает необходимость поиска вариантов транспортировки этой товой техники.</p>
                                    <h4>В чем особенность предложения</h4>
                                    <p>Не имеет значения, какая на улице погода или как далеко вы живете, наш мастер выедет по указанному адресу в удобное для клиента время. Имея при себе полный комплект необходимых инструментов, специалист проведет диагностику и выявит причины неисправности.</p>
                                    <p>Грамотность и оперативность выполнения этого этапа позволит значительно сократить время работы. Все последующие действия проводятся со знанием дела и максимально аккуратно. Вам не придется переживать по поводу предстоящей уборки: мы не оставляем за собой мусора.</p>
                                    <p>Чем обусловлены такие короткие сроки и возможность гарантии на проделанную работу?  </p>
                                    <h4>Почему именно мы?</h4>
                                    <p>Всегда вовремя, без дополнительных наценок и с гарантией — наше предложение строится именно на этих принципах. Наши сотрудники готовы прийти на помощь в день обращения, в удобное для клиента время. Стоимость услуги оговаривается заранее, до начала работы. При желании клиент вправе отказаться от обслуживания и оплатить лишь стоимость диагностики.</p>
                                    <p>Нужно срочно починить вашу стиральную машину? Звоните
                                        8 (499) 408-60-59                            или
                                        8 (909) 151-19-22                            , оставляйте свои заявки. И ждите мастера в день звонка!
                                    </p>
                                </div>
                                <a class="view-more__link" href="#">Открыть еще</a>
                            </div>
                        </section>
                        <div class="hide-moretablet side-block--mobile side-block--small-tablet">
                        </div>
                    </div>
                </div>
            </div>
            <div class="side-col hide-for-tablet">
                <aside>
                    <div class="panel form js-ajax" style='margin-top: 40px'>
                        <h4 class="panel__caption text-red">Заявка на ремонт (-5%)</h4>
                        <form name="SIMPLE_FORM_1" action="https://www.mr-master.ru/advices/" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="eb6d97c7ebe2e1949d8f462386486f5f" />
                            <input type="hidden" name="WEB_FORM_ID" value="1" />
                            <input type="hidden" name="web_form_apply" value="Y">
                            <label class="form-lbl js-inputmask-phone required">
                                <span class="form-lbl__text">Телефон*</span>
                                <input type="text"  class="inputtext"  name="form_text_2" value="" size="20" />                
                            </label>
                            <label class="form-lbl">
                                <span class="form-lbl__text">Вид ремонта</span>
                                <div class="select">
                                    <div class="select__selected"> Ремонт стиральной машины</div>
                                    <div class="select-list">
                                        <div class="select-list__item"> Ремонт стиральной машины</div>
                                        <div class="select-list__item">Ремонт холодильника</div>
                                        <div class="select-list__item">Ремонт телевизоров</div>
                                        <div class="select-list__item">Ремонт посудомоечных машин</div>
                                        <div class="select-list__item">Прокладка телевизионного кабеля</div>
                                        <div class="select-list__item">Ремонт микроволновых печей</div>
                                        <div class="select-list__item">Подключение бытовой техники</div>
                                    </div>
                                    <select name="form_dropdown_new_field_27977">
                                        <option value="4" > Ремонт стиральной машины</option>
                                        <option value="5" >Ремонт холодильника</option>
                                        <option value="7" >Ремонт телевизоров</option>
                                        <option value="8" >Ремонт посудомоечных машин</option>
                                        <option value="9" >Прокладка телевизионного кабеля</option>
                                        <option value="10" >Ремонт микроволновых печей</option>
                                        <option value="11" >Подключение бытовой техники</option>
                                    </select>
                                </div>
                            </label>
                            <label class="form-lbl">
                                <span class="form-lbl__text">Описание поломки</span>
                                <textarea name="form_textarea_6" placeholder="Опишите проблему..." ></textarea>
                            </label>
                            <input type="hidden" name="form_text_24" value="">
                            <input type="hidden" name="form_text_25" value="utm_source=; utm_medium=; utm_campaign=; utm_content=; utm_term=">
                            <input type="hidden" name="form_text_27" value="www.mr-master.ru/advices/">
                            <button class="button button--wide" type="submit" name="web_form_submit">Отправить</button>
                            <div class="checkbox-field checkbox-field--size_s text-theme-black mt15">Согласен на обработку данных. &nbsp; <a class="agreem" href="../privacy/index.html" target="_blank">Соглашение</a></div>
                        </form>
                        <div class="row form__success">
                            <div class="col-12 text-center">
                                <h3>Ожидайте звонка!</h3>
                            </div>
                        </div>
                    </div>
                    <section class="js-ajax mb40 mt40">
                        <form method="post" action="https://www.mr-master.ru/include/ajax/form_discount.php" name="repairs-request" class="panel js-required-form">
                            <input type="hidden" name="form_code" value="want_discount">
                            <input type="hidden" name="url" value="www.mr-master.ru%2Fadvices%2F">
                            <h4 class="panel__caption text-red">Хочешь скидку?</h4>
                            <p class="mt0">Получи купон c персональной скидкой на свой телефон.</p>
                            <label class="form-lbl form-lbl--for-input js-inputmask-phone required"><span class="form-lbl__text">Телефон</span>
                                <input name="phone" type="tel" required="" placeholder="+7 (___) ___ __-__">
                            </label>
                            <div class="panel__footer mt15">
                                <button type="submit" class="button button--red button--small">Получить скидку</button>
                                <div class="checkbox-field checkbox-field--size_s text-theme-black mt15">Согласен на обработку данных. &nbsp; <a class="agreem" href="../privacy/index.html" target="_blank">Соглашение</a></div>
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
                    <section class="panel panel--list-image mb40">
                        <h4 class="panel__caption">Мы специализируемся на&nbsp;ремонте</h4>
                        <ul class="list-image reset-list">
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/aeg/index.html" class="link--reset"><img src="images/firm-marks/aeg.png" alt="aeg"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/ardo/index.html" class="link--reset"><img src="images/firm-marks/ardo.png" alt="ardo"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/ariston/index.html" class="link--reset"><img src="images/firm-marks/ariston.png" alt="ariston"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/asko/index.html" class="link--reset"><img src="images/firm-marks/asko.png" alt="asko"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/bauknecht/index.html" class="link--reset"><img src="images/firm-marks/bauknecht.png" alt="bauknecht"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/beko/index.html" class="link--reset"><img src="images/firm-marks/beko.png" alt="beko"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/bosch/index.html" class="link--reset"><img src="images/firm-marks/bosch.png" alt="bosch"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/brandt/index.html" class="link--reset"><img src="images/firm-marks/brandt.png" alt="brandt"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/candy/index.html" class="link--reset"><img src="images/firm-marks/candy.png" alt="candy"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/daewoo/index.html" class="link--reset"><img src="images/firm-marks/daewoo.png" alt="daewoo"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/electrolux/index.html" class="link--reset"><img src="images/firm-marks/electrolux.png" alt="electrolux"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/euronova/index.html" class="link--reset"><img src="images/firm-marks/euronova.png" alt="euronova"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/general_electric/index.html" class="link--reset"><img src="images/firm-marks/healthcare.png" alt="healthcare"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/gorenje/index.html" class="link--reset"><img src="images/firm-marks/gorenje.png" alt="gorenje"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/hansa/index.html" class="link--reset"><img src="images/firm-marks/hansa.png" alt="hansa"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/indesit/index.html" class="link--reset"><img src="images/firm-marks/indesit.png" alt="indesit"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/kaiser/index.html" class="link--reset"><img src="images/firm-marks/kaiser.png" alt="kaiser"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/lg/index.html" class="link--reset"><img src="images/firm-marks/lg.png" alt="lg"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/miele/index.html" class="link--reset"><img src="images/firm-marks/miele.png" alt="miele"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/otsein/index.html" class="link--reset"><img src="images/firm-marks/otsein.png" alt="otsein"></a></li>
                            <li class="list-image__item"><a href="../service/remont-stiralnih-mashin/brands/philco/index.html" class="link--reset"><img src="images/firm-marks/philco.png" alt="philco"></a></li>
                        </ul>
                    </section>
                    <a href="../answer/index.html" class="panel-top panel link--reset mb40">
                        <h4 class="panel__caption">Задайте вопрос специалисту</h4>
                        <div class="panel-top__advice">Или найдите свой ответ в разделе FAQ</div>
                    </a>
                    <section class="panel mb40">
                        <h4 class="panel__caption mb5">Новости</h4>
                        <article class="article">
                            <time class="datetime">17 Апреля 2017</time>
                            <div class="article__text article__text--news">
                                <div class="article__text-link">
                                    <a href="../news/1260/index.html">Мы прошли долгий путь для повышения качества и готовы воплотить новые условия в жизнь. Вся гарантия на ремонт увеличена и теперь вы можете подтвердить проверку качества по телефону диспетчеру.</a>
                                </div>
                                <div class="article__text-preview">Мы прошли долгий путь для повышения качества и готовы воплотить новые условия в жизнь. Вся гарантия на ремонт увеличена и теперь вы можете подтвердить проверку качества по телефону диспетчеру.</div>
                            </div>
                        </article>
                        <article class="article">
                            <time class="datetime">18 Мая 2016</time>
                            <div class="article__text article__text--news">
                                <div class="article__text-link">
                                    <a href="#">Новы раздел</a> 
                                    <a href="#">основные поломки стиральных машин.</a>
                                    <a href="#"> Теперь можно узнать подробные симптомы.</a>
                                </div>
                                <div class="article__text-preview">
                                    Новы раздел 
                                    <a href="../service/remont-stiralnih-mashin/breakings/index.html">основные поломки стиральных машин.</a>
                                    Теперь можно узнать подробные симптомы.
                                </div>
                            </div>
                        </article>
                        <div class="panel__footer mt30"><a class="button button--dark button--small" href="../news/index.html">Все новости</a></div>
                    </section>
                    <section class="panel mb40">
                        <h4 class="panel__caption">Вопросы</h4>
                        <div class="article">
                            <div class="article__title text-theme-yellowgreen mt5">Виктор</div>
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
                    <section class="panel mb40">
                        <h4 class="panel__caption">Советы</h4>
                        <section class="article">
                            <div class="article__title text-theme-yellowgreen mt5">ПОЖЕЛАНИЯ</div>
                            <p class="article__text">Надеемся что выше приведённая информация вам пригодиться,и вы не станете учиться на своих ошибках.</p>
                        </section>
                        <div class="panel__footer"><a class="button button--dark button--small" href="index.html">Все советы</a></div>
                    </section>
                </aside>
            </div>
        </div>
    </div>
</main>