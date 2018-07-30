<?php
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="wrapper__header-block wrapper__header-block--price">
    <div class="wrapper__header-block-pattern"></div>
</div>
<div class="promo-block promo-block--about">
    <div class="container">
        <div class="row">
            <div class="promo promo--price">
                <div class="promo__logo col-lg-5 col-sm-7 col-xs-17">
                    <a href="/">
                        <img src="/<?= $siteConfig['theme'] . '/'; ?>media/logo--inner_6BXZU7h.png" alt="">
                    </a>
                    <div class="promo-logo__city">Москва</div>
                </div>
                <div class="promo__phone col-lg-offset-12 col-lg-7 col-sm-offset-1 col-sm-9 col-xs-20">
                    <div class="promo-phone__time">
                        <span>Без выходных</span> с 7:00 до 21:30
                    </div>
                    <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>" rel="nofollow" class="promo-phone__number promo-phone__number--blue">
                        <?= Yii::$app->session['region']['phone']; ?>
                    </a>
                </div>
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <div class="promo-service">
                    <div class="col-lg-14 col-sm-17">
                        <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] ?></h1>
                    </div>
                    <div class="promo-service__text">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonials">
    <div class="container">
        <div class="row">
            <div class="testimonials-items">
                <div class="testimonials-item col-lg-24 col-sm-24">
                    <div class="testimonials-item__header">
                        <div class="testimonials-header__title col-lg-11 col-sm-15 col-xs-24">
                            <div class="testimonials-title__rating col-lg-5 col-sm-5 col-xs-6">
                                <img src="/<?= $siteConfig['theme'] . '/'; ?>media/finger-up_Y8XKJs8.png" alt="">
                            </div>
                            <div class="testimonials-title__text col-lg-19 col-sm-19 col-xs-18">
                                Отзыв от Андрея Романова,
                                ремонт от 05.01.2018
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-content">
                        <div class="testimonials-content__description col-lg-16 col-lg-offset-1 col-sm-16 col-sm-offset-1">
                            <p>
                                Впервые я обратился в сервисный центр OnKofe несколько месяцев назад, когда кофемашина внезапно дала течь. Мастер приехал точно в то время, на которое мы договорились с менеджером. После диагностики выяснилось, что в системе скопилась накипь, из-за чего и возникла протечка. Инженер разобрал аппарат, тщательно вычистил все труднодоступные места, пропустил через машину воду с чистящим средством. Проблема была решена буквально за час.
                            </p>
                        </div>
                        <div class="testimonials-content__master col-lg-5 col-sm-7 col-xs-24">
                            <div class="content-master__title">
                                Мастер-ремонтник:
                                <div class="content-master__name">
                                    Волгжанин Федор
                                </div>
                            </div>
                            <div class="content-master__text">
                                Отзыв добавлен
                                сотрудником OnKofe
                                с разрешения клиента
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="testimonials-content__like col-lg-offset-1 col-xs-24">
                            <div class="content-like__title">
                                Что понравилось:
                            </div>
                            <div class="content-like__text">
                                Быстрый выезд и ремонт, вполне разумные цены
                            </div>
                        </div>
                        <div class="testimonials-content__dislike col-lg-offset-1 col-xs-24">
                            <div class="content-dislike__title">
                                Что не понравилось:
                            </div>
                            <div class="content-dislike__text">
                                Недостатков не обнаружил
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonials-item col-lg-24">
                    <div class="testimonials-item__header">
                        <div class="testimonials-header__title col-lg-11 col-sm-15 col-xs-24">
                            <div class="testimonials-title__rating col-lg-5 col-sm-5 col-xs-6">
                                <img src="/<?= $siteConfig['theme'] . '/'; ?>media/finger-up_Y8XKJs8.png" alt="">
                            </div>
                            <div class="testimonials-title__text col-lg-19 col-sm-19 col-xs-18">
                                Отзыв от Ирины Петровой, ремонт от 12.12.2017
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-content">
                        <div class="testimonials-content__description col-lg-16 col-lg-offset-1 col-sm-16 col-sm-offset-1">
                            <p>
                                Когда у меня сломалась кофемашина, я звонила в несколько фирм. Специалисты из одной из них сказали, что нужно менять модуль управления, назвали какую-то сумасшедшую сумму, поэтому я отказалась от их услуг. Позвонила менеджеру OnKofe. Они тоже прислали инженера, который быстро провел диагностику и заменил небольшую деталь модуля. Сразу же при мне все проверил и дал гарантию на год. Правда, воспользоваться ней так и не получилось, так как кофемашина работает отлично и не глючит.
                            </p>
                        </div>
                        <div class="testimonials-content__master col-lg-5 col-sm-7 col-xs-24">
                            <div class="content-master__title">
                                Мастер-ремонтник:
                                <div class="content-master__name">
                                    Волотко Александр
                                </div>
                            </div>
                            <div class="content-master__text">
                                Отзыв добавлен
                                сотрудником OnKofe
                                с разрешения клиента
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="testimonials-content__like col-lg-offset-1 col-xs-24">
                            <div class="content-like__title">
                                Что понравилось:
                            </div>
                            <div class="content-like__text">
                                Ответственный подход к делу, хороший ремонт
                            </div>
                        </div>
                        <div class="testimonials-content__dislike col-lg-offset-1 col-xs-24">
                            <div class="content-dislike__title">
                                Что не понравилось:
                            </div>
                            <div class="content-dislike__text">
                                Не знаю
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonials-item col-lg-24">
                    <div class="testimonials-item__header">
                        <div class="testimonials-header__title col-lg-11 col-sm-15 col-xs-24">
                            <div class="testimonials-title__rating col-lg-5 col-sm-5 col-xs-6">
                                <img src="/<?= $siteConfig['theme'] . '/'; ?>media/finger-up_Y8XKJs8.png" alt="">
                            </div>
                            <div class="testimonials-title__text col-lg-19 col-sm-19 col-xs-18">
                                Отзыв от Максима Горного,
                                ремонт от 28.11.2017
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-content testimonials-content--answer">
                        <div class="testimonials-content__description col-lg-16 col-lg-offset-1 col-sm-16 col-sm-offset-1">
                            <p>
                                Кофемашина почему-то начала делать очень невкусный кофе с сильной горечью. Долго мучился с ней, но в итоге таки вызвал мастера из сервиса OnKofe. Оказалось, что в системе скопились кофейные масла, придающие горечь. Чистку сделали прямо дома, не забирая устройство в мастерскую. Все доволен, никаких претензий по качеству работы и по цене предъявить не могу.
                            </p>
                        </div>
                        <div class="testimonials-content__master col-lg-5 col-sm-7 col-xs-24">
                            <div class="content-master__title">
                                Мастер-ремонтник:
                                <div class="content-master__name">
                                    Волотко Александр
                                </div>
                            </div>
                            <div class="content-master__text">
                                Отзыв добавлен
                                сотрудником OnKofe
                                с разрешения клиента
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="testimonials-content__like col-lg-offset-1 col-xs-24">
                            <div class="content-like__title">
                                Что понравилось:
                            </div>
                            <div class="content-like__text">
                                Оперативность, низкая цена, квалификация мастера
                            </div>
                        </div>
                        <div class="testimonials-content__dislike col-lg-offset-1 col-xs-24">
                            <div class="content-dislike__title">
                                Что не понравилось:
                            </div>
                            <div class="content-dislike__text">
                                Никаких претензий нет
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= kofefix\widgets\other\Ht::widget(['view' => 'order']); ?>