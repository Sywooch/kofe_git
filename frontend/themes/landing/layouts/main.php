<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

//use multicat\Test;

AppAsset::register($this);
$assets = Yii::getAlias('@web');
$isHome = Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index' ? true : false;
$isModelPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'model' ? true : false;
$isBrandPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'brand' ? true : false;
$siteConfig = app\components\CController::getSiteConfig();
$js = app\components\CController::$js;
$domain = $_SERVER['SERVER_NAME'];
$domain = str_replace('admin.', '', $domain);
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>        
        <link rel="shortcut icon" href="<?= $assets . $siteConfig['theme'] . '/'; ?>favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/main.css" />
    </head>
    <body class="page">
        <div class="page__wrap">
            <header class="header" id="header">
                <div class="header__nav">
                    <div class="humburger">
                        <div class="humburger__wrap">
                            <div class="humburger__line humburger__line--1">
                            </div>
                            <div class="humburger__line humburger__line--2">
                            </div>
                            <div class="humburger__line humburger__line--3">
                            </div>
                        </div>
                    </div>
                    <a class="logo" href="#"><img class="logo__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/logo.svg" alt="Logo" title=""/><span class="logo__text">Сервисый центр по <br/>ремонту кофемашин</span></a>
                    <div class="header__menu">
                        <ul class="menu">
                            <li class="menu__item"><a class="menu__link" href="#choose">Прайс</a>
                            </li>
                            <li class="menu__item"><a class="menu__link" href="#advantage">Почему мы?</a>
                            </li>
                            <li class="menu__item"><a class="menu__link" href="#how">Стадии работ</a>
                            </li>
                            <li class="menu__item"><a class="menu__link" href="#hot">Акции</a>
                            </li>
                            <li class="menu__item"><a class="menu__link" href="#percent">Скидки</a>
                            </li>
                            <li class="menu__item"><a class="menu__link" href="#review">Отзывы клиентов</a>
                            </li>
                            <li class="menu__item"><a class="menu__link" href="#clients">Наши клиенты</a>
                            </li>
                            <li class="menu__item"><a class="menu__link" href="#contacts">Контакты</a>
                            </li>
                        </ul>
                    </div>
                    <div class="contact">
                        <div class="address">
                            <div class="ic ic--marker">
                            </div>
                            <div class="address__text">
                                г. Москва, Профсоюзная, 88/20
                                <div class="address__desc">c 09:00 до 20:00<br/>и без выходных
                                </div>
                            </div>
                        </div>
                        <div class="phone">
                            <div class="phone__item">
                                <span class="call_phone_1"><a class="phone__nr roistat">8 (499) 350-59-60</a></span>
                                <div class="phone__desc">Есть вопросы? Звоните!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="header__block">
                        <h1 class="header__title">Ремонт кофемашин в Москве
                        </h1>
                        <div class="print"> <span class="text"></span>
                        </div>
                        <div class="header__subtitle">Курьер приедет в любую точку Москвы менее чем за <span class="accent">1 час </span>а<br/>сервисный центр проведёт ремонт кофемашины не дольше <span class="accent">24 часов</span>
                        </div>
                        <div class="consult">
                            <div class="btn-wrap">
                                <a class="btn" href="javascript:;" data-fancybox="modal1" data-src="#mainModal">Заказать ремонт</a>
                                <div class="btn-wrap__text">Перезвоним за 27 секунд
                                </div>
                            </div>
                            <div class="desc">
                                <div class="desc__title">График работы с 09:00 до 20:00
                                </div>
                                <div class="desc__text">Приедем за неисправной кофемашиной в выходные
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="illustrate">
                        <img class="img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/illustratee.png" srcset="<?= $assets . $siteConfig['theme'] . '/'; ?>img/illustratee_retina.png 2x" alt="" role="presentation"/>
                    </div>
                </div>
            </header>
            <div class="free" id="free">
                <div class="container">
                    <div class="free__body">
                        <h2 class="free__title">Предоставляем РЕАЛЬНО бесплатную диагностику!
                        </h2>
                        <div class="free__subtitle">Наш сервисный центр, единственный в Москве, который предоставляет РЕАЛЬНО бесплатную диагностику.<br/>Если Вы отказываетесь от ремонта, Вы ничего не платите!
                        </div>
                        <div class="block">
                            <div class="block__img"><img class="img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/customer-service.svg" alt="" role="presentation"/>
                            </div>
                            <div class="block__text">
                                <div class="block__title">Обязательно проинформируем
                                </div>
                                <div class="block__par">Вам будет предоставлен ИНДИВИДУАЛЬНЫЙ менеджер, который будет сообщать Вам о стадиях ремонта кофемашины. Кстати, доставка отремантированной кофемашины у нас бесплатна!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="free__form">
                        <form class="form default" id="freeForm" data-ga="FormMaterFree" data-yam="free_master">
                            <div class="form__title">Вызовите нашего инженера для бесплатной диагностики кофемашины.
                            </div>
                            <div class="form__field"><input class="form__input form__input--fw" type="tel" name="phone" placeholder="+7 (___) ___-____"/>
                            </div>
                            <input class="source" type="hidden" name="source" value=""/>
                            <input class="term" type="hidden" name="term" value=""/>
                            <input class="campaign" type="hidden" name="campaign" value=""/>
                            <input class="content" type="hidden" name="content" value=""/>
                            <input class="medium" type="hidden" name="medium" value=""/>
                            <input name="formname" type="hidden" value="Вызвать мастера(2-й экран)"/>
                            <div class="form__field form__field--btn">
                                <button class="btn btn--fw">Вызвать мастера
                                </button>
                            </div>
                            <div class="form__desc">Ремонт выполняется специализицироваными инженерами и с использованием оригинальных комплектующих!
                            </div>
                            <div class="policy"><input class="policy__input" type="checkbox" name="policy" id="policy-free" checked="checked"/>
                                <label class="policy__label" for="policy-free">
                                    <span class="box"></span>
                                    <span class="text">Я согласен с условиями  <a href="doc/politics.docx">политики конфиденциальности </a></span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="choose" id="choose">
                <div class="container">
                    <h2 class="choose__title">Неисправности, которые мы устраняем и услуги, которые мы предоставляем
                    </h2>
                    <div class="choose__subtitle">У нас нет скрытых платежей. Цены складываются из трёх факторов: стоимость заменённой детали, стоимость произведённых работ, удалённость от МКАД.
                    </div>
                    <div class="choose__nav">
                        <div class="tabs">
                            <div class="tabs__item active" data-val="iphone">Кофемашины
                            </div>
                        </div>
                        <div class="lists">
                            <ul class="list" id="iphone">
                                <li class="list__item active" data-val="iPhone X" data-attr="X">Неисправности</li>
                                <li class="list__item" data-val="iPhone 8 Plus" data-attr="8+">Услуги</li>
                                <li class="list__item" data-val="iPhone 8" data-attr="8">Остальные услуги</li>
                            </ul>
                        </div>
                    </div>
                    <div class="choose__body">
                        <div class="choose__grids">
                            <div class="choose__grid" id="iphone1">
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена дисплея" data-time="20 минут">
                                        <div class="item__title">Замена дисплея
                                        </div>
                                        <div class="bottom">
                                            <div class="price">24990 руб.
                                            </div>
                                            <div class="time">20 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена стекла" data-time="60 минут">
                                        <div class="item__title">Замена стекла
                                        </div>
                                        <div class="bottom">
                                            <div class="price">24990 руб.
                                            </div>
                                            <div class="time">20 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена аккумулятора" data-time="10 минут">
                                        <div class="item__title">Замена аккумулятора
                                        </div>
                                        <div class="bottom">
                                            <div class="price">4990 руб.
                                            </div>
                                            <div class="time">10 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена корпуса (любой цвет)" data-time="60 минут">
                                        <div class="item__title">Замена корпуса (любой цвет)
                                        </div>
                                        <div class="bottom">
                                            <div class="price">24990 руб.
                                            </div>
                                            <div class="time">60 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена основной камеры" data-time="10 минут">
                                        <div class="item__title">Замена основной камеры
                                        </div>
                                        <div class="bottom">
                                            <div class="price">6990 руб.
                                            </div>
                                            <div class="time">10 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена фронтальной камеры" data-time="15 минут">
                                        <div class="item__title">Замена фронтальной камеры
                                        </div>
                                        <div class="bottom">
                                            <div class="price">4990 руб.
                                            </div>
                                            <div class="time">15 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена кнопки включения" data-time="30 минут">
                                        <div class="item__title">Замена кнопки включения
                                        </div>
                                        <div class="bottom">
                                            <div class="price">4990 руб.
                                            </div>
                                            <div class="time">30 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена кнопки вибро" data-time="30 минут">
                                        <div class="item__title">Замена кнопки вибро
                                        </div>
                                        <div class="bottom">
                                            <div class="price">4990 руб.
                                            </div>
                                            <div class="time">30 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена нижнего динамика" data-time="15 минут">
                                        <div class="item__title">Замена нижнего динамика
                                        </div>
                                        <div class="bottom">
                                            <div class="price">4990 руб.
                                            </div>
                                            <div class="time">15 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена разъема наушников" data-time="15 минут">
                                        <div class="item__title">Замена разъема наушников
                                        </div>
                                        <div class="bottom">
                                            <div class="price">4990 руб.
                                            </div>
                                            <div class="time">15 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена слухового динамика" data-time="15 минут">
                                        <div class="item__title">Замена слухового динамика
                                        </div>
                                        <div class="bottom">
                                            <div class="price">4990 руб.
                                            </div>
                                            <div class="time">15 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена кнопки Home" data-time="10 минут">
                                        <div class="item__title">Замена кнопки Home
                                        </div>
                                        <div class="bottom">
                                            <div class="price">от 1490 руб.
                                            </div>
                                            <div class="time">10 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена кнопок громкости" data-time="30 минут">
                                        <div class="item__title">Замена кнопок громкости
                                        </div>
                                        <div class="bottom">
                                            <div class="price">4990 руб.
                                            </div>
                                            <div class="time">30 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена разъема зарядки" data-time="20 минут">
                                        <div class="item__title">Замена разъема зарядки
                                        </div>
                                        <div class="bottom">
                                            <div class="price">4990 руб.
                                            </div>
                                            <div class="time">20 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Наклеить защитное стекло" data-time="5 минут">
                                        <div class="item__title">Наклеить защитное стекло
                                        </div>
                                        <div class="bottom">
                                            <div class="price">от 1490 руб.
                                            </div>
                                            <div class="time">5 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Перепрошивка" data-time="60 минут">
                                        <div class="item__title">Перепрошивка
                                        </div>
                                        <div class="bottom">
                                            <div class="price">990 руб.
                                            </div>
                                            <div class="time">60 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Залит водой" data-time="60 минут">
                                        <div class="item__title">Залит водой
                                        </div>
                                        <div class="bottom">
                                            <div class="price">от 1490 руб.
                                            </div>
                                            <div class="time">60 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Не включается" data-time="60 минут">
                                        <div class="item__title">Не включается
                                        </div>
                                        <div class="bottom">
                                            <div class="price">от 1490 руб.
                                            </div>
                                            <div class="time">60 минут<span>от</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="choose__grid" id="ipad1" style="display: none;">
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена дисплея" data-time="60 минут">
                                        <div class="item__title">Замена дисплея
                                        </div>
                                        <div class="bottom">
                                            <div class="price">13990 руб.
                                            </div>
                                            <div class="time">60 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена стекла" data-time="60 минут">
                                        <div class="item__title">Замена стекла
                                        </div>
                                        <div class="bottom">
                                            <div class="price">13990 руб.
                                            </div>
                                            <div class="time">60 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена аккумулятора" data-time="60 минут">
                                        <div class="item__title">Замена аккумулятора
                                        </div>
                                        <div class="bottom">
                                            <div class="price">4390 руб.
                                            </div>
                                            <div class="time">60 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена корпуса" data-time="30 минут">
                                        <div class="item__title">Замена корпуса
                                        </div>
                                        <div class="bottom">
                                            <div class="price">7990 руб.
                                            </div>
                                            <div class="time">30 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена основной камеры" data-time="20 минут">
                                        <div class="item__title">Замена основной камеры 
                                        </div>
                                        <div class="bottom">
                                            <div class="price">3490 руб.
                                            </div>
                                            <div class="time">20 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Замена фронтальной камеры" data-time="20 минут">
                                        <div class="item__title">Замена фронтальной камеры 
                                        </div>
                                        <div class="bottom">
                                            <div class="price">3490 руб.
                                            </div>
                                            <div class="time">20 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Попала влага" data-time="60 минут">
                                        <div class="item__title">Попала влага
                                        </div>
                                        <div class="bottom">
                                            <div class="price">от 990 руб.
                                            </div>
                                            <div class="time">60 минут<span>от</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Не включается" data-time="60 минут">
                                        <div class="item__title">Не включается
                                        </div>
                                        <div class="bottom">
                                            <div class="price">от 990 руб.
                                            </div>
                                            <div class="time">60 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Перепрошивка" data-time="60 минут">
                                        <div class="item__title">Перепрошивка
                                        </div>
                                        <div class="bottom">
                                            <div class="price">от 990 руб.
                                            </div>
                                            <div class="time">60 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__wrap" data-title="Проблема c Wi-Fi" data-time="60 минут">
                                        <div class="item__title">Проблема c Wi-Fi
                                        </div>
                                        <div class="bottom">
                                            <div class="price">от 990 руб.
                                            </div>
                                            <div class="time">60 минут
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="choose__forms">
                            <form class="form" id="iphone2">
                                <div class="form__title">Заказать ремонт кофемашины по акции
                                </div>
                                <div class="form__subtitle">Закажите ремонт сейчас и получите скидку  30% 
                                </div>
                                <div class="form__selects">

                                    <div class="form__field">
                                        <select class="form__select" id="phone-repair" name="repair" data-placeholder="Выберите неисправность">
                                            <option value="">Выберите неисправность</option>
                                            <option value="Замена стекла">Замена стекла</option>
                                            <option value="Замена корпуса (любой цвет)">Замена корпуса (любой цвет)</option>
                                            <option value="Замена кнопки включения">Замена кнопки включения</option>
                                            <option value="Замена фронтальной камеры">Замена фронтальной камеры</option>
                                            <option value="Замена кнопки вибро">Замена кнопки вибро</option>
                                            <option value="Замена нижнего динамика">Замена нижнего динамика</option>
                                            <option value="Замена разъема наушников">Замена разъема наушников</option>
                                            <option value="Замена слухового динамика">Замена слухового динамика</option>
                                            <option value="Залит водой">Залит водой</option>
                                            <option value="Замена дисплея">Замена дисплея</option>
                                            <option value="Замена аккумулятора">Замена аккумулятора</option>
                                            <option value="Замена кнопки Home">Замена кнопки Home</option>
                                            <option value="Замена основной камеры">Замена основной камеры</option>
                                            <option value="Замена кнопок громкости">Замена кнопок громкости</option>
                                            <option value="Замена разъема зарядки">Замена разъема зарядки</option>
                                            <option value="Наклеить защитное стекло">Наклеить защитное стекло</option>
                                            <option value="Перепрошивка">Перепрошивка</option>
                                            <option value="Не включается">Не включается</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form__field">
                                    <input class="form__input form__input--fw" type="tel" name="phone" placeholder="+7 (___) ___-____"/>
                                </div>
                                <input class="source" type="hidden" name="source" value=""/>
                                <input class="term" type="hidden" name="term" value=""/>
                                <input class="campaign" type="hidden" name="campaign" value=""/>
                                <input class="content" type="hidden" name="content" value=""/>
                                <input class="medium" type="hidden" name="medium" value=""/>
                                <input class="input-price" type="hidden" name="price" value="0"/>
                                <input name="formname" type="hidden" value="Вызвать мастера (3-й экран)"/>
                                <div class="form__field form__field--btn">
                                    <button class="btn btn--fw">Заказать сейчас</button>
                                </div>
                                <div class="policy">
                                    <input class="policy__input" type="checkbox" name="policy" id="policy-form1" checked="checked"/>
                                    <label class="policy__label" for="policy-form1">
                                        <span class="box"></span>
                                        <span class="text">Я согласен с условиями  <a href="doc/politics.docx">политики конфиденциальности</span>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="desc">
                        <div class="desc__text">С вашей кофемашиной что-то другое?
                        </div>
                        <div class="desc__contact">Позвоните, мы обязательно Вам поможем!<span class="call_phone_2"><a class="roistat">8 (499) 350-59-60</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="advantage" id="advantage">
                <div class="container">
                    <div class="advantage__grid">
                        <div class="item">
                            <div class="ic ic--screwdriver">
                            </div>
                            <div class="item__text">Ремонт кофемашин проводится дешевле<br/> на 30% чем в других сервисных центрах!
                            </div>
                        </div>
                        <div class="item">
                            <div class="ic ic--settings">
                            </div>
                            <div class="item__text">Удобное расположение нашего сервисного центра и <br/>бесплатная парковка!
                            </div>
                        </div>
                        <div class="item">
                            <div class="ic ic--car">
                            </div>
                            <div class="item__text">Бесплатный выезд <br/>в пределах МКАД
                            </div>
                        </div>
                        <div class="item">
                            <div class="ic ic--calendar">
                            </div>
                            <div class="item__text">Гарантия до 1 года на все виды <br/>работ и заменённые детали
                            </div>
                        </div>
                    </div>
                    <div class="advantage__grid">
                        <div class="item">
                            <div class="ic ic--clock">
                            </div>
                            <div class="item__text">Среднее время ремонта не превышает 24 часов
                            </div>
                        </div>
                        <div class="item">
                            <div class="ic ic--credit">
                            </div>
                            <div class="item__text">Оплата банковской <br/>картой, перечислением или наличными без %
                            </div>
                        </div>
                        <div class="item">
                            <div class="ic ic--quote">
                            </div>
                            <div class="item__text">За 2017 год мы отремантировали более 2000 кофемашин. <br/>50% из них по рекомендациям клиентов
                            </div>
                        </div>
                        <div class="item">
                            <div class="ic ic--phone">
                            </div>
                            <div class="item__text">В работе используются только только <br/>оригинальные комплектующие
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="how" id="how">
                <div class="container">
                    <div class="how__tabs">
                        <div class="tab active" data-tab="home">
                            <div class="tab__ic">
                                <div class="ic ic--rocket">
                                </div>
                            </div>
                            <div class="tab__desc">
                                <div class="tab__text">Как мы работаем
                                </div>
                                <div class="tab__title">До оформления договора
                                </div>
                            </div>
                        </div>
                        <div class="tab" data-tab="office">
                            <div class="tab__ic">
                                <div class="ic ic--circle">
                                </div>
                            </div>
                            <div class="tab__desc">
                                <div class="tab__text">Как мы работаем
                                </div>
                                <div class="tab__title">После оформления <span>договора</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="how__blocks">
                        <div class="block" id="home">
                            <div class="block__list">
                                <div class="block__item">
                                    <div class="ic ic--ring">
                                    </div>
                                    <div class="step">Шаг 1
                                    </div>
                                    <div class="block__text">Вы заказываете услуги на нашем сайте или просто позвонив нам.
                                    </div>
                                </div>
                                <div class="block__item">
                                    <div class="ic ic--calendar-1">
                                    </div>
                                    <div class="step">Шаг 2
                                    </div>
                                    <div class="block__text">Мы связываемся с Вами и обговариваем все детали.
                                    </div>
                                </div>
                                <div class="block__item">
                                    <div class="ic ic--check-phone">
                                    </div>
                                    <div class="step">Шаг 3
                                    </div>
                                    <div class="block__text">Курьер забирает неисправную кофемашину по указанному Вами адресу с выдачей специального бланка о заборе.
                                    </div>
                                </div>
                                <div class="block__item">
                                    <div class="ic ic--phone-glass">
                                    </div>
                                    <div class="step">Шаг 4
                                    </div>
                                    <div class="block__text">Проводится бесплатная диагностика устройства и оформляется договор.
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap">
                                <a class="btn btn--violete" href="javascript:;" data-fancybox="modal2" data-src="#masterModal">Вызвать мастера</a>
                            </div>
                            <div class="traffic">
                                <div class="traffic__title">С нами, вы сэкономите 30% своего времени!</div>
                                <div class="traffic__val">Сейчас пробки в Москве -<span class="yandex__traffic js-yandex-traffic"><a class="link link_black_yes" href="#"><i class="b-ico traffic__icon b-ico-traffic-yw"></i></a></span>
                                </div>
                                <div class="traffic__text">Но наши курьеры всё равно приедут точно в срок
                                </div>
                            </div>
                        </div>
                        <div class="block" id="office" style="display: none;">
                            <div class="block__list">
                                <div class="block__item">
                                    <div class="ic ic--ring-viol">
                                    </div>
                                    <div class="step">Шаг 1
                                    </div>
                                    <div class="block__text">После оформления договора, мастер незамедлительно проводит ремонт кофемашины.
                                    </div>
                                </div>
                                <div class="block__item">
                                    <div class="ic ic--check-phone-viol">
                                    </div>
                                    <div class="step">Шаг 2
                                    </div>
                                    <div class="block__text">Служба Контроля Качества проводит проверку произведённого ремонта и выдаёт гарантию до 1 года!
                                    </div>
                                </div>
                                <div class="block__item">
                                    <div class="ic ic--phone-glass-viol">
                                    </div>
                                    <div class="step">Шаг 3
                                    </div>
                                    <div class="block__text">Курьер доставляет исправную кофемашину по указанному Вами адресу!
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap"><a class="btn" href="javascript:;" data-fancybox="modal6" data-src="#repairModal">Да, я хочу починить свою кофемашину</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="safe" id="safe">
                <div class="container">
                    <h2 class="safe__title">Почему мы, а не вон тот сервисный центр за углом?
                    </h2>
                    <div class="safe__subtitle">Почему у нас безопасно и удобно?
                    </div>
                    <div class="safe__block">
                        <div class="item">
                            <div class="item__problem">Вас могут обмануть и <br/>установить <br/>не оригинальные комплектующие<br/>
                            </div>
                            <div class="item__text">Наш сервисный центр выдаёт специальный бланк СКК<br/>где описываются все заменнённые комплектующие и <br/>их серийные номера<br/><span>(при возможности)</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__problem">Кофемашину могут произвести <br/>ненужные замены и<br/>по этой причине появятся<br/>скрытые платежи
                            </div>
                            <div class="item__text">Мы приобретаем комплектующие напрямую у производителей кофейного оборудования. Собственный склад позволяет хранить приоритетные запасные части для каждой кофемашины, а перед установкой - проводится вскрытие пломбы.
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__problem">Срок ремонта может очень сильно затянуться.
                            </div>
                            <div class="item__text">Мы отвечаем своей репутацией перед клиентами и выполняем все ремонтные работы точно в срок. Даже если случится форс-мажор, Вы будете немедленно уведомленны об этом.
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__problem">Вас могут оставить<br/>без кофемашины<br/>на долгий срок<br/>
                            </div>
                            <div class="item__text">В среднем ремонт кофемашины занимает не более 24 часов, но даже на этом время мы можем предложить Вам подменную кофемашину!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top" id="top">
                <div class="container">
                    <h2 class="top__title">Самые популярные неисправности
                    </h2>
                    <div class="top__subtitle">которые встречаются у наших клиентов
                    </div>
                    <div class="top__slider">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="cirle">Разбился<br/>экран</div>
                            </div>
                            <div class="item">
                                <div class="cirle">Разряжается<br/>быстро</div>
                            </div>
                            <div class="item">
                                <div class="cirle">Телефон<br/>“утонул”</div>
                            </div>
                            <div class="item">
                                <div class="cirle">Не работает<br/>динамик или <br/>микрофон</div>
                            </div>
                            <div class="item">
                                <div class="cirle">Перестал<br/>заряжаться</div>
                            </div>
                            <div class="item">
                                <div class="cirle">Не работает<br/>кнопка домой</div>
                            </div>
                            <div class="item">
                                <div class="cirle">Не работает<br/>связь или wi-fi</div>
                            </div>
                            <div class="item">
                                <div class="cirle">Не<br/>включается</div>
                            </div>
                        </div>
                    </div>
                    <div class="top__form">
                        <form class="form default" id="topForm">
                            <div class="form__title">Вызовите мастера для проведения бесплатной диагностики.
                            </div>
                            <div class="form__field"><input class="form__input form__input--fw" type="tel" name="phone" placeholder="+7 (___) ___-____"/>
                            </div>
                            <input class="source" type="hidden" name="source" value=""/>
                            <input class="term" type="hidden" name="term" value=""/>
                            <input class="campaign" type="hidden" name="campaign" value=""/>
                            <input class="content" type="hidden" name="content" value=""/>
                            <input class="medium" type="hidden" name="medium" value=""/>
                            <input name="formname" type="hidden" value="Вызвать мастера (7-й экран)"/>
                            <div class="form__field form__field--btn">
                                <button class="btn btn--fw">Вызвать мастера
                                </button>
                            </div>
                            <div class="form__desc">Ремонт выполняется специализицироваными инженерами и с использованием оригинальных комплектующих!
                            </div>
                            <div class="policy"><input class="policy__input" type="checkbox" name="policy" id="policy3" checked="checked"/>
                                <label class="policy__label" for="policy3"><span class="box"></span><span class="text">Я согласен с условиями  <a href="doc/politics.docx">политики конфиденциальности</a></span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="parBox" id="parBox">
                    <div class="parBox__item">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/top/1.png" alt="top1"/>
                        <div class="text">Не наливает<br/> кофе</div>
                    </div>
                    <div class="parBox__item">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/top/2.png" alt="top2"/>
                        <div class="text">Не делает<br/> пену</div>
                    </div>
                    <div class="parBox__item">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/top/3.png" alt="top3"/>
                        <div class="text">Не делает<br/> кофе</div>
                    </div>
                    <div class="parBox__item">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/top/4.png" alt="top4"/>
                        <div class="text">Кофе слишком <br/> холодный <br/> или горячий</div>
                    </div>
                    <div class="parBox__item">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/top/5.png" alt="top5"/>
                        <div class="text">Не греет<br/> воду</div>
                    </div>
                    <div class="parBox__item">
                        <div class="text">Выдает<br/> ошибку</div>
                    </div>
                    <div class="parBox__item">
                        <div class="text">Плохо течет<br/> кофе</div>
                    </div>
                    <div class="parBox__item">
                        <div class="text">Не<br/>включается</div>
                    </div>
                </div>
            </div>
            <div class="cashback" id="cashback">
                <div class="container">
                    <div class="cashback__content">
                        <div class="cashback__body">
                            <h2 class="cashback__title">Скидка 15% при заказе услуг с сайта!
                            </h2>
                            <div class="cashback__subtitle">Мы любим Вас радовать и поэтому дадим скидку 15% прямо сейчас! 
                            </div>
                            <div class="btn-wrap"><a class="btn btn--white" href="javascript:;" data-fancybox="modal3" data-src="#cashbackModal">Скидка? Да, хочу!</a>
                            </div>
                        </div>
                        <div class="cashback__img-wrap"><img class="cashback__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/sale.svg" alt="" role="presentation"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hot" id="hot">
                <div class="container">
                    <h2 class="hot__title">Мы так-же устраиваем и акции!<br>
                        <span>например, сегодня действуют следующие акции:</span>
                    </h2>
                    <div class="hot__block">
                        <div class="item">
                            <div class="item__wrap">
                                <div class="item__img-wrap"><img class="item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/sale.svg" srcset="img/hot1_2.png 2x" alt="" role="presentation"/>
                                </div>
                                <div class="item__body">
                                    <div class="item__title">Скидка на комплексную чистку кофемашины -
                                    </div>
                                    <div class="item__large">50%
                                    </div>
                                    <div class="btn-wrap"><a class="btn btn--fw" href="javascript:;" data-fancybox="modal4" data-src="#glassModal">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__wrap">
                                <div class="item__img-wrap"><img class="item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/sale.svg" srcset="img/hot2_2.png 2x" alt="" role="presentation"/>
                                </div>
                                <div class="item__body">
                                    <div class="item__title">Скидка на годовую комплексную профилактику -
                                    </div>
                                    <div class="item__large">30%
                                    </div>
                                    <div class="btn-wrap"><a class="btn btn--fw" href="javascript:;" data-fancybox="modal5" data-src="#studentModal">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="percent" id="percent">
                <div class="container">
                    <div class="percent__block">
                        <div class="item">
                            <div class="item__nr">5<span class="per">%</span>
                            </div>
                            <div class="item__text">При заказе сегодня
                            </div>
                            <a class="item__link" href="javascript:;" data-fancybox="modal5per" data-src="#cashbackModal">Оставить заявку</a>
                        </div>
                        <div class="item">
                            <div class="item__nr">10<span class="per">%</span>
                            </div>
                            <div class="item__text">За подписку на нас <br/>в социальных сетях
                            </div>
                            <a class="item__link" href="https://vk.com/lovekoferu" target="_blank">Вступить в группу</a>
                        </div>
                        <div class="item">
                            <div class="item__nr">15<span class="per">%</span>
                            </div>
                            <div class="item__text">Клиентам, <br/>которые порекомендуют нас <br/> своим друзьям, коллегам! <br/>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__nr"> <span class="to">до</span>30<span class="per">%</span>
                            </div>
                            <div class="item__text">При ремонте 2х или <br/>более кофемашин сразу
                            </div>
                            <a class="item__link" href="javascript:;" data-fancybox="modalmaster" data-src="#masterModal">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review" id="review">
                <div class="container">
                    <div class="block">
                        <div class="block__head">
                            <div class="block__title">Более 500 положительных отзывов
                            </div>
                            <div class="block__subtitle">Прочитайте что люди говорят о нас
                            </div>
                        </div>
                        <div class="block__body">
                            <div class="slider owl-carousel">
                                <div class="item">
                                    <div class="item__text">
                                        <p>#отзыв #мирдолжензнать Ребята, хочу выразить огромную благодарность за новый экран на моём iPhone 6!!!! Вы сами приехали(!!!),быстро, а самое главное качественно все заменили, по самой лучшей цене в Москве! Буду рекомендовать Вас всем знакомым спасибо огромное за вашу работу! Моему счастью нет предела!</p>
                                    </div>
                                    <div class="author">
                                        <div class="author__name">Компания “Тавро”
                                        </div>
                                        <a class="author__link" target="_blank" href="https://www.instagram.com/p/BEHlHiLErJ_/?taken-by=ifixit24">Ссылка на отзыв</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__text item__text--small">
                                        <p>Менять целиком дисплей на новых моделях iPhone очень дорого, поэтому специально для прекрасной @hey__helen взялись за замену только лишь стекла на iPhone 6s Plus, и сделали это качественно, выполнив работу всего за час! Все делается на профессиональном оборудовании, дается гарантия!<br/>Как можно видеть на фото, дисплей треснул сбоку, поэтому трещина пошла прямо под защитным стеклом! Если бы изначально стояло наше карбоновое стекло, которое защищает всю поверхность экрана, то такого бы не произошло. На новый экранчик мы его поставили, так что теперь она может спать спокойно </p>
                                    </div>
                                    <div class="author">
                                        <div class="author__name">Елена Головко
                                        </div>
                                        <a class="author__link" target="_blank" href="https://www.instagram.com/p/BGqs2VKkrMg/?taken-by=ifixit24">Ссылка на отзыв</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__text">
                                        <p>Если случилось несчастье с вашим техническим другом, то вам помогут в @ifixit24 быстро и качественно, @atmosphere_music рекомендует</p>
                                    </div>
                                    <div class="author">
                                        <div class="author__name">Ольга Бутусова
                                        </div>
                                        <a class="author__link" target="_blank" href="https://www.instagram.com/p/BKD9x2xAyWa/">Ссылка на отзыв</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__text">
                                        <p>Ну а теперь более подробное фото. Проблема решена ребятами из @ifixit24 , спасибо им! Счастью нет предела, снова фото в зеркале и не только. Так что если вдруг беда-бегом к ним <br/>(центр Москвы,качество, цены супер)</p>
                                    </div>
                                    <div class="author">
                                        <div class="author__name">Наталья Сазонова
                                        </div>
                                        <a class="author__link" target="_blank" href="https://www.instagram.com/p/BNCcaD4gc13/">Ссылка на отзыв</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__text">
                                        <p>Спасибо @ifixit24 за быстрое и вежливое обслуживание! Рекомендую! Если скажете, что от меня - сделают скидку! Подробнее: @ifixit24</p>
                                    </div>
                                    <div class="author">
                                        <div class="author__name">Екатерина
                                        </div>
                                        <a class="author__link" target="_blank" href="https://www.instagram.com/p/BU9s6GtgFoG/">Ссылка на отзыв</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__text">
                                        <p>Вчера заехали к нашему @alexbodunkov , и поставили защитное стекло на мою семерочку+за пару минут. Если вам вдруг понадобится хороший сервис, то лучше @ifixit24 не найти</p>
                                    </div>
                                    <div class="author">
                                        <div class="author__name">Алина
                                        </div>
                                        <a class="author__link" target="_blank" href="https://www.instagram.com/p/BYrFKftAqnh/">Ссылка на отзыв</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clients" id="clients">
                <div class="container">
                    <h2 class="clients__title">Наши клиенты
                    </h2>
                    <div class="clients__subtitle">За время работы сервиса мы ремонтировали кофемашины<br/> крупных компаний.
                    </div>
                    <!--<div class="tabs">
                       <div class="tabs__item active" data-tab="company">Компании
                       </div>
                    </div>-->
                    <div class="blocks">
                        <div class="block" id="company">
                            <div class="block__list">
                                <a class="item" href="<?= $assets . $siteConfig['theme'] . '/'; ?>img/clients/company1-review1.jpg" data-fancybox="group2-1">
                                    <span class="item__img-wrap">
                                        <img class="item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/clients/company1.png" alt="" role="presentation"/>
                                    </span>
                                </a>
                                <a class="item" href="<?= $assets . $siteConfig['theme'] . '/'; ?>img/clients/company2-review1.jpg" data-fancybox="group2-2">
                                    <span class="item__img-wrap">
                                        <img class="item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/clients/company2.png" alt="" role="presentation"/>
                                    </span>
                                </a>
                                <a class="item" href="<?= $assets . $siteConfig['theme'] . '/'; ?>img/clients/company3-review1.jpg" data-fancybox="group2-3">
                                    <span class="item__img-wrap">
                                        <img class="item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/clients/company3.png" alt="" role="presentation"/>
                                    </span>
                                </a>
                                <a class="item" href="<?= $assets . $siteConfig['theme'] . '/'; ?>img/clients/company4-review1.jpg" data-fancybox="group2-4">
                                    <span class="item__img-wrap">
                                        <img class="item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/clients/company4.png" alt="" role="presentation"/>
                                    </span>
                                </a>
                                <a class="item" href="<?= $assets . $siteConfig['theme'] . '/'; ?>img/clients/company5-review1.jpg" data-fancybox="group2-5">
                                    <span class="item__img-wrap">
                                        <img class="item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/clients/company5.png" alt="" role="presentation"/>
                                    </span>
                                </a>
                                <a class="item" href="<?= $assets . $siteConfig['theme'] . '/'; ?>img/clients/company6-review1.jpg" data-fancybox="group2-6">
                                    <span class="item__img-wrap">
                                        <img class="item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/clients/company6.png" alt="" role="presentation"/>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="photo" id="photo">
                <div class="container">
                    <div class="photo__title-wrap">
                        <h2 class="photo__title">Бренды, которые мы обслуживаем
                        </h2>
                    </div>
                    <div class="brend">
                        <div class="item">
                            <img src="http://remontkofe.ru/uploads/images/melitta.png" alt="" role="presentation"/>
                        </div>

                        <div class="item">
                            <img src="http://remontkofe.ru/uploads/images/melitta.png" alt="" role="presentation"/>
                        </div>

                        <div class="item">
                            <img src="http://remontkofe.ru/uploads/images/melitta.png" alt="" role="presentation"/>
                        </div>

                        <div class="item">
                            <img src="http://remontkofe.ru/uploads/images/melitta.png" alt="" role="presentation"/>
                        </div>

                        <div class="item">
                            <img src="http://remontkofe.ru/uploads/images/melitta.png" alt="" role="presentation"/>
                        </div>

                        <div class="item">
                            <img src="http://remontkofe.ru/uploads/images/melitta.png" alt="" role="presentation"/>
                        </div>

                        <div class="item">
                            <img src="http://remontkofe.ru/uploads/images/melitta.png" alt="" role="presentation"/>
                        </div>

                        <div class="item">
                            <img src="http://remontkofe.ru/uploads/images/melitta.png" alt="" role="presentation"/>
                        </div>

                        <div class="item">
                            <img src="http://remontkofe.ru/uploads/images/melitta.png" alt="" role="presentation"/>
                        </div>

                        <div class="item">
                            <img src="http://remontkofe.ru/uploads/images/melitta.png" alt="" role="presentation"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team" id="team">
                <div class="container">
                    <div class="team__block">
                        <div class="body">
                            <div class="body__title">Специалисты нашего сервисного центра<br/>ежегодно проходят курсы повышения квалификации
                            </div>
                            <div class="body__subtitle">До того как ижненер будет допущен к ремонту кофемашин наших клиентов - мы проводим специальное дополнительное обучение и тестирование
                            </div>
                        </div>
                        <div class="img-wrap"><img class="img-wrap__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/team-bg.png" srcset="img/team-bg_2.png 2x" alt="" role="presentation"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq" id="faq">
                <div class="container">
                    <h2 class="faq__title">Часто задаваемые вопросы
                    </h2>
                    <div class="faq__grid">
                        <div class="block">
                            <div class="item">
                                <div class="item__wrap">
                                    <div class="item__head">
                                        <div class="item__title">Выезд мастера бесплатный?
                                        </div>
                                    </div>
                                    <div class="item__text" style="display: none;">
                                        <p>Да, выезд мастера в пределах МКАД бесплатный, если Вы хотите вызвать мастера за пределы МКАД, позвоните нам или оставьте заявку, мы соориентируем по цене </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item__wrap">
                                    <div class="item__head">
                                        <div class="item__title">Мастер может приехать ко мне на работу?
                                        </div>
                                    </div>
                                    <div class="item__text" style="display: none;">
                                        <p>Да, мастер может приехать к Вам на работу, а так же может приехать к Вам в домой, в спортзал, в ресторан или кафе и даже в ночной клуб</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item__wrap">
                                    <div class="item__head">
                                        <div class="item__title">Мне нужно будет платить, если мастер приедет, а после диагностики я откажусь от ремонта?
                                        </div>
                                    </div>
                                    <div class="item__text" style="display: none;">
                                        <p>Нет, не нужно. Мастер бесплатно приедет к Вам, найдёт поломку и озвучит стоимость ремонта. Если Вы отказываетесь от ремонта, Вы ничего не платите!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <div class="item">
                                <div class="item__wrap">
                                    <div class="item__head">
                                        <div class="item__title">Какие гарантии даёт мастер?
                                        </div>
                                    </div>
                                    <div class="item__text" style="display: none;">
                                        <p>После ремонта Вам выдадут акт выполненных работ с гарантией от сервиса (от 3 месяцев до 1 года)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item__wrap">
                                    <div class="item__head">
                                        <div class="item__title">Когда мастер сможет приехать?
                                        </div>
                                    </div>
                                    <div class="item__text" style="display: none;">
                                        <p>Мастер может приехать к Вам через 30 - 60 минут. Время зависит от удалённости.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item__wrap">
                                    <div class="item__head">
                                        <div class="item__title">Запчасти у вас оригинальные?
                                        </div>
                                    </div>
                                    <div class="item__text" style="display: none;">
                                        <p>Да, мы используем оригинальные запчасти.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news" id="news">
                <div class="container">
                    <h2 class="news__title">Советы от наших экспертов
                    </h2>
                    <div class="news__subtitle">Как продлить срок службы кофемашин
                    </div>
                    <div class="news__grid">
                        <div class="item">
                            <div class="item__wrap">
                                <div class="item__img">
                                </div>
                                <div class="item__title">Что можно сделать, если Айфон не включается?
                                </div>
                                <div class="item__desc">
                                    <p>Главное расслабьтесь, без паники! Ничто не вечно, но</p>
                                </div>
                                <a class="btn btn--fw" href="javascript:;" data-fancybox="post1" data-src="#post1">Подробнее</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__wrap">
                                <div class="item__img">
                                </div>
                                <div class="item__title">Как самостоятельно настроить iPhone?
                                </div>
                                <div class="item__desc">
                                    <p>Первоначальная настройка iPhone своими руками</p>
                                </div>
                                <a class="btn btn--fw" href="javascript:;" data-fancybox="post2" data-src="#post2">Подробнее</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__wrap">
                                <div class="item__img">
                                </div>
                                <div class="item__title">У iPhone перестал заряжаться аккумулятор
                                </div>
                                <div class="item__desc">
                                    <p>iPhone перестал заряжаться или быстро теряет заряд? Главное не путать...</p>
                                </div>
                                <a class="btn btn--fw" href="javascript:;" data-fancybox="post3" data-src="#post3">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post">
                <div class="post__modal" id="post1" style="display: none;">
                    <div class="body">
                        <h3>Что можно сделать, если Айфон не включается?</h3>
                        <p>Самое главное, это, выражаясь словами одного известного киногероя: «Отставить панику!». Данная рекомендация актуальна для любой «нештатной ситуации», в том числе и для той, когда Айфон не реагирует на нажатие кнопки «Power».</p>
                        <p>Причины у этой проблемы могут быть разными, но есть несколько почти универсальных способов её устранения.</p>
                        <p>Сразу отметим, что речь не идет о случаях, когда устройство перестало работать, например, после падения с двухметровой высоты на кафельную плитку, здесь всё ясно и надо сразу обращаться в сервис. Но иногда ничто не предвещает неприятностей, и вдруг устройство перестает работать. Вот тогда и следует проверить насколько серьезна проблема и попробовать решить её самостоятельно. </p>
                        <p> <strong>Итак, что можно сделать?</strong></p>
                        <ol>
                            <li>Если устройство долго находилось на морозе, то причина именно в этом. Надо просто перенести его в теплое помещение и поставить на зарядку. Проблема будет решена. Дело в том, что, аккумуляторы, которыми комплектуются айфоны, крайне чувствительны к низким температурам и очень быстро разряжаются на морозе. Здесь самое важное: ни в коем случае не пытаться прогревать устройство феном или другим нагревательным    прибором. Это может привести к действительно серьезной поломке!</li>
                            <li>Если устройство не подвергалось воздействию низких температур, все равно необходимо убедиться, что его аккумулятор заряжен. Просто поставьте айфон на зарядку и подождите минут 15. Прибор должен будет включиться сам.</li>
                            <li>Возможно, причина в программном сбое. Его можно устранить, произведя «жесткую» перезагрузку устройства. Для этого надо нажать и удерживать примерно 15 сек. комбинацию из двух клавиш: «Power» и «Home» (в Айфоне-7 вместо «Home» использовать кнопку «минус»). После начала перезагрузки дождаться её полного завершения.</li>
                            <li>Попробовать зарядить аккумулятор, поменяв кабель и зарядное устройство. Возможно, вышли из строя именно они.</li>
                        </ol>
                        <p> <strong>Если перечисленные действия не помогли</strong></p>
                        <p>Значит, имеет место физическая поломка каких-то внутренних элементов устройства. Независимо от её конкретных причин, помочь здесь может только профессиональная диагностика и ремонт. <br/>Поэтому необходимо обратиться в сервис.  </p>
                        <p> <strong>ВАЖНО! </strong>Использовать для зарядки айфона неоригинальный кабель – очень рискованно. А если делать это постоянно, то выход из строя одного из контроллеров (зарядки или питания) практически неизбежен. После этого айфон перестанет заряжаться, поскольку контроллер не будет отдавать соответствующую команду. Причина в том, что неоригинальные провода очень сильно нагреваются в процессе зарядки, вызывая тем самым перегрев контроллеров, который и приводит к их поломке. Поэтому мы настоятельно советуем пользоваться только оригинальными зарядными устройствами или кабелями производства компании Ugreen.</p>
                    </div>
                </div>
                <div class="post__modal" id="post2" style="display: none;">
                    <div class="body">
                        <h3>Как самостоятельно настроить iPhone?</h3>
                        <p>Чтобы настроить iPhone специалистов привлекать не нужно, любой пользователь может это сделать сам.</p>
                        <p> <b>Общий алгоритм действий по первоначальной настройке iPhone.</b></p>
                        <ul>
                            <li>- включить устройство;</li>
                            <li>- выбрать страну местопребывания и язык;</li>
                            <li>- подключиться к сетям: Wifi, сотовой и iTunes.</li>
                            <li>- включить, либо отключить геолокацию.</li>
                            <li>- настроить Touch ID и установить пароль (с этим можно повременить).</li>
                        </ul>
                        <p>Если устройство только что куплено, нужно выбрать в меню пункт «настроить как новый». Если устройство настраивается не в первый раз, то можно либо настроить его «как новое», либо восстановить прежние настройки (при наличии резервных копий) из iTunes или iCloud (последнее даже не требует подключения к компьютеру), выбрав соответствующий пункт меню.</p>
                        <ul>
                            <li>- завести (обновить) учетную запись Apple ID</li>
                            <li>- принять пользовательское соглашение.   </li>
                            <li>- настроить Siri</li>
                            <li>- настроить кнопку «Home» (это можно отложить на какое-то время).</li>
                            <li>- настроить режим диагностики (просто выбрать один из вариантов: включить либо отключить автоматическую отправку)</li>
                            <li>- нажать на «Приступить к работе».</li>
                        </ul>
                        <p> <b>Немного подробнее о некоторых конкретных настройках</b></p>
                        <p> <b><i>Служба геолокации</i></b></p>
                        <p>Эта служба, будучи включенной непрерывно, значительно ускоряет скорость разрядки аккумулятора. Поэтому, если в ней нет особой необходимости, лучше её отключить. Но при этом, рекомендуем сохранить настройку для программы «поиск iPhone», поскольку некоторый риск потери устройства или его кражи полностью исключить нельзя.  </p>
                        <p> <b><i>Установка iTunes</i></b></p>
                        <p>Эту программу надо установить, поскольку именно с её помощью производится загрузка на устройство музыки и видео, а также рингтонов.</p>
                        <p> <b> <i>Почта на iPhone</i></b></p>
                        <ul>
                            <li>- подключить устройство к интернету.</li>
                            <li>- последовательно пройти в меню, выбирая: «настройки», «почта», «создать новую учетную запись».</li>
                            <li>- Заполнить необходимые поля: свое имя, адрес электронной почты, установить пароль и т.д.</li>
                            <li>- Нажать «далее» и подтвердить сохранение.  </li>
                        </ul>
                        <p> <b> <i>Настройка wifi</i></b></p>
                        <p>Здесь нет ничего сложного. Надо просто зайти в настройки, выбрать «wifi», далее выбрать свою сеть и ввести актуальный пароль.</p>
                        <p>Устройство запоминает введенные данные, поэтому в дальнейшем подключение к совей сети wifi будет выполняться автоматически.</p>
                        <p>Настройка видео для iPhone</p>
                        <p>Здесь просто нужно помнить, что для загрузки и воспроизведения видеофайлов в iPhone подходит только один формат «Quik time».</p>
                        <p>Поэтому, если требуется загрузить в устройство видофайл любого другого формата, необходимо его сначала переконвертировать в Quik time.</p>
                    </div>
                </div>
                <div class="post__modal" id="post3" style="display: none;">
                    <div class="body">
                        <h3>Как самостоятельно настроить iPhone?</h3>
                        <p>Одна из самых неприятных неполадок, которая может случиться с iPhone – это быстрая потеря заряда аккумулятора и/или отказ при попытке его зарядить.</p>
                        <p>Причина здесь достаточно очевидна: налицо проблемы либо с самим аккумулятором, либо с контроллером зарядки.</p>
                        <p>Но сначала имеет смысл проверить и другие, пусть маловероятные варианты. Может быть не всё так страшно и можно обойтись без обращения в сервис.</p>
                        <p>ВАЖНО! Невозможность зарядить аккумулятор и его быстрая разрядка – это разные неполадки и они могут иметь различные причины. Так, быстрая разрядка устройства часто бывает связана с постоянной работой некоторых приложений (геолокация и т.д.), нерационально выставленными настройками, и просто с очень интенсивным использованием устройства. Но причиной нарушения процесса зарядки указанные факторы оказаться не могут.  </p>
                        <p> <b>Вариант 1</b></p>
                        <p>Прежде всего, если речь идет именно о невозможности зарядить айфон будет разумно проверить, действительно ли дело в самом айфоне. Может быть, вышло из строя зарядное устройство или пришел в негодность кабель? Нужно попробовать заменить и то и другое. Если после этого процесс зарядки запустился, проблема решена. Если нет, теперь мы точно знаем, что дело в самом гаджете. Но возможности пользователя на этом не исчерпаны.</p>
                        <p><b>Вариант 2 </b></p>
                        <p>Причиной неполадки может оказаться и программный сбой. Работой контроллера зарядки руководит одна из программ, прошитых в айфон. Если по какой-то причине в работе данной программы происходит сбой, контроллер начинает работать некорректно (либо перестает работать вообще), что и приводит к проблемам в процессе зарядки.</p>
                        <p>Решением здесь может оказаться принудительная перезагрузка устройства. Надо нажать и удерживать нажатыми в течение примерно 20 сек. одновременно две кнопки: «Power» и «Home». Произойдет перезагрузка устройства, работа ПО восстановится.</p>
                        <p>Если после этого процесс зарядки не запустится, модно проверить ещё один вариант.</p>
                        <p> <b>Вариант 3  </b></p>
                        <p>Причина отказа может заключаться в банальном загрязнении соединительного разъема порта Lightning. Чаще всего разъем оказывается забит, постепенно скопившейся в нем, пылью, которая и мешает установлению нормального контакта при соединении со штекером кабеля зарядного устройства.</p>
                        <p>Прочистить его можно каким-нибудь тонким и мягким инструментом, например, зубочисткой.</p>
                        <p><b>Вариант 4  </b></p>
                        <p>Если все перечисленные выше меры не привели к нормализации процесса зарядки, значит налицо поломка одного из внутренних элементов устройства.</p>
                        <p>И это тот случай, когда без помощи профессионалов обойтись невозможно. Поэтому, следует вызвать обратиться в наш сервисно-ремонтный центр «iFixit24» и вызвать мастера, который прибудет по указанному адресу (в пределах Москвы) в течение часа, выполнит диагностику устройства, установить точную причину неполадок и произведет необходимый ремонт.</p>
                        <p>В своей работе мы используем только оригинальные запчасти и комплектующие. После выполнения диагностики, мастер рассчитает и сообщит клиенту точную итоговую стоимость ремонта. Сам вызов мастера и его приезд – бесплатны!   </p>
                        <p><i>На все виды выполненных работ предоставляется гарантия!   </i></p>
                    </div>
                </div>
                <div class="post__modal" id="post4" style="display: none;">
                    <div class="body">
                        <h3>Если iphone завис…</h3>
                        <p><i>В наше время практически у всех имеется какой-нибудь смартфон, а каждый третий является владельцем и пользователем iphone. Но (как и любое компьютерное устройство) айфон тоже способен зависнуть. </i></p>
                        <p> <b>Причины зависаний и корректные способы перезагрузки</b></p>
                        <p>Стандартной причиной зависаний является перегрузка оперативной памяти. Приложения и игры становятся все сложнее и мощнее, но при этом повышаются и системные требования. Производители компьютерной техники отвечают ростом характеристик своих изделий. Практически каждый современный гаджет способен поддерживать одновременную работу нескольких программ, но при этом нередко происходит перегрузка (переполнение) его оперативной памяти. Что и приводит к зависанию.</p>
                        <p>Самым простым и чаще всего, оптимальным решением при зависании айфона будет отложить его в сторону на какое-то время. Устройство само перезагрузится и снова начнет работать нормально.</p>
                        <p>Бывают случаи, когда айфон самостоятельно не перезагружается или, когда пользователь не может ждать. Тогда можно перезагрузить его принудительно. Для этого надо нажать комбинацию кнопок Home + Power и удерживать её, пока на запустится перезагрузка (экран должен моргнуть, после этого на нем начнется отображение процесса новой загрузки).   </p>
                        <p>С помощью этой же комбинации кнопок можно делать скриншоты.</p>
                        <p>Иногда зависает не всё устройство, а только отдельная программа. Тогда можно использовать опцию принудительного закрытия приложений в iPhone. Но следует учесть, что все накопленные изменения (например, часть прохождения игры) в приложении при его принудительном закрытии будут безвозвратно утрачены.     </p>
                    </div>
                </div>
                <div class="post__modal" id="post5" style="display: none;">
                    <div class="body">
                        <h3>iPhone работает некорректно или зависает, что можно сделать?</h3>
                        <p>Если айфон все время работал нормально, а потом начал часто зависать или глючить, это неприятно и проблему надо решать.</p>
                        <p><i>В наш сервисный центр достаточно часто обращаются пользователи, устройства которых демонстрируют подобные неполадки. Иногда действительно причиной нарушений в работе айфона оказывается поломка и тогда наша помощь необходима. Но довольно часто характер проблемы таков, что пользователь способен решить её самостоятельно, не привлекая к делу специалистов. Об этих случаях и пойдет речь ниже.   </i></p>
                        <p><b>Момент первый. Некорректная перепрошивка.  </b></p>
                        <p>Причиной некорректной работы может быть слишком быстрое начало использования устройства после его перепрошивки. Дело в том, что после завершения процесса прошивки iPhone выполняет индексацию памяти, а данный процесс требует времени. Если начать пользоваться гаджетом до его завершения, вероятен программный сбой и как следствие, некорректная работа устройства в целом.</p>
                        <p>Рекомендация. Произвести повторную перепрошивку устройства. Только на этот раз по завершении процесса собственно перепрошивки не приступать к использованию телефона сразу, а подождать с этим хотя бы два часа. За это время айфон проиндексирует память, и потом будет работать нормально.  </p>
                        <p> <b>Момент второй. Перегруженность спецэффектами и анимацией.</b></p>
                        <p>И анимация и визуальные спецэффекты довольно сильно загружают как процессор, так и оперативную память. Если ими перегрузить устройство, то на саму работу просто не хватит системных ресурсов.</p>
                        <p>Рекомендация. Отключить данные опции. Сделать это можно, зайдя в главное меню и последовательно выбрав: «универсальный доступ», и, затем «отключение анимации».</p>
                        <p>Побочный эффект. При отключенной анимации невозможно пользоваться новыми спецэффектами в программе «сообщения».    </p>
                        <p><b>Момент третий. Эффект прозрачности.</b></p>
                        <p>Этот эффект является одной из наиболее ресурсоемких нововведений Apple.</p>
                        <p>Рекомендация. Снизить степень прозрачности компонентов интерфейса. Для этого потребуется: открыть «настройки», пройти в «главные», затем в «увеличение контраста», где найти опцию «уменьшение прозрачности» и активировать её.</p>
                        <p><b>Момент четвертый. Автоматическое обновление приложений.</b></p>
                        <p>Данная опция также отбирает себе ресурсы системы, особенно в моменты, когда эти обновления в автоматическом режиме начинают загружаться и устанавливаться. По закону подлости это обычно происходит именно тогда, когда пользователю самому нужно использовать системные ресурсы по максимуму. В результате: торможения и зависания.</p>
                        <p>Рекомендация. Отключить опцию «обновления приложений». Это можно сделать через настройки в меню «обновление программ в фоне».  </p>
                        <p><b>Момент пятый. Переполнение памяти.</b></p>
                        <p>Одно из специфических свойств ОС IOS состоит в том, что при высокой степени заполнения оперативной памяти, резко снижается производительность.</p>
                        <p>Рекомендация. Взять за правило периодически отслеживать уровень заполнения памяти. Для нормальной работы системы необходимо наличие хотя бы 1-го Гб незаполненной памяти.</p>
                        <p><b>Момент шестой. Если ничего не помогает</b></p>
                        <p>Тогда возможно довольно радикальное решение. Оно заключается в том, чтобы сбросить все выставленные настройки до «заводских», после чего перезагрузить устройство.</p>
                        <p>Таким образом, система и кэш будут полностью очищены от всего ненужного. Телефон станет работать как совершенно новый.</p>
                        <p> <b>Побочный эффект: </b>будет безвозвратно потеряна вся информация, ранее записанная в устройстве.  </p>
                        <p><b>И последнее, самое эффективное.</b></p>
                        <p>Вызвать мастера сервисно-ремонтной службы «iFixit24», который оперативно приедет по указанному клиентом адресу и быстро решит любую проблему с айфоном (или любым другим устройством от Apple).</p>
                        <p>Сделать это можно, набрав номер 8 499 350 59-60</p>
                        <p>Звонок, а также вызов и приезд мастера – бесплатные.</p>
                        <p>Оплатить понадобится только фактически выполненную работу.</p>
                    </div>
                </div>
                <div class="post__modal" id="post6" style="display: none;">
                    <div class="body">
                        <h3>Забыли собственный пароль к iPad или iPhone? И что теперь делать?</h3>
                        <p>Подобное случается не так уж редко, особенно с устройствами, приобретенными недавно, когда введенный пароль ещё не прочно устоялся в памяти пользователя, особенно если он привык использовать отпечаток в кнопке «Home», и, соответственно, к тому, что пароль для использования своего устройства вводить не требуется.    </p>
                        <p>Ниже мы опишем два наиболее простых метода разблокировки устройства от Apple, как раз на случай забытого пользователем пароля.</p>
                        <p><b>Можно ли сохранить данные при разблокировке устройства? </b></p>
                        <p>Служба поддержки фирмы-производителя (Apple) утверждает, что разблокировать устройством со сбросом пароля и сохранением всей содержащейся на нем информации невозможно. Но можно после разблокировки восстановить утраченные данные, если существует резервная копия содержимого данного мобильного устройства.</p>
                        <p>Таким образом, для пользователей, позаботившихся о создании учетной записи в iTunes и записи резервной копии, проблем не возникнет. Они могут просто подключит свой iPhone (или iPad) к компьютеру с iTunes и восстановить все содержимое своего устройства. Одновременно произойдет сброс старого (забытого) пароля и разблокировка устройства.</p>
                        <p>А вот тем, кто не удосужился завести резервную копию, придется примириться с потерей всех данных. Однако, на это приходится идти, поскольку иначе не удастся разблокировать устройство и снова начать им пользоваться. </p>
                        <p> <b>Подробные инструкции по разблокировке. </b></p>
                        <ol>
                            <li>
                                Итак, вариант первый, для тех, кто зарегистрирован в iTunes и имеет там резервную копию содержания своего планшета или iPhone. Сделать надо следующее:
                                <ul>
                                    <li>- Подключить устройство к компьютеру с iTunes.</li>
                                    <li>- Начать процесс загрузки и установки соответствующего ПО. Здесь придется немного подождать. Возможно, что программа потребует ввести забытый пароль, тогда надо подключить устройство к другому компьютеру. Иначе оно будет стерто.</li>
                                    <li>- По завершении копирования данных выполнить восстановление iPhone нажатием соответствующей кнопки в окне iTunes.</li>
                                </ul>
                            </li>
                            <li>
                                <p>Этот вариант может подойти пользователям, зарегистрированным в iCloud, на устройстве которых активированы опции геолокации и «Найти iPhone». При этом, надо, чтобы само устройство находилось либо в зане охвата Wi-Fi, либо у него был включен режим передачи данных. Если все условия соблюдены, то сделать нужно следующее:</p>
                                <ul>
                                    <li>- открыть на любом из других ваших устройств (ПК, ноутбук, мобильник на Андроид, не имеет значения) страницу iCloud.com/find.</li>
                                    <li>- Авторизоваться через Apple id.</li>
                                    <li>- Нажать «все устройства» (эта кнопка расположена вверху окна).</li>
                                    <li>- Выбрать из появившегося списка то устройство, с которым возникли проблемы.</li>
                                    <li>- Полностью очистить устройство со сбросом пароля, нажав кнопку «стереть».</li>
                                    <li>- На уже разблокированном, но пустом устройстве выбрать либо восстановление с использованием резервной копии, либо настройку устройства, как совершенно нового. Если на iCloud имеется, резервная копия, то можно восстановить все данные, используя её.</li>
                                    <li>- Настроить новый пароль и хорошо его запомнить.   </li>
                                </ul>
                            </li>
                            <li>
                                <p>Если резервной копии не существует или доступ к ней по каким-то причинам невозможен, то утрата всей информации, содержащейся в устройстве неизбежна. В этом случае, единственным выходом будет его возврат к «исходному» состоянию. Сделать это можно так:    </p>
                                <ul>
                                    <li>- Подключить устройство к компьютеру с установленным к iTunes.</li>
                                    <li>- Удерживать одновременно клавиши питания и «Home», пока экран не перестанет светиться, после чего продолжать удерживать уже только «Home». Вскоре экран снова зажжется и на нем сначала появится эмблема Apple, которая через какое-то время сменится значком iTunes. Это будет означать, что активирован режим восстановления.</li>
                                    <li>- В этом режиме, программа iTunes сначала предложит восстановить устройство, а затем, в процессе потребует его обновить. На оба предложения надо ответить «да».   </li>
                                    <li>- Подождать завершения процесса обновления устройства, которое будет выполнено iTunes самостоятельно. После этого останется только настроить устройство, как «новое».</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="contacts" id="contacts">
                <div class="container">
                    <div class="contacts__box">
                        <div class="contacts__wrap">
                            <h2 class="contacts__title">Наши контакты
                            </h2>
                            <div class="metro">
                                <div class="metro__title">Станция метро:
                                </div>
                                <div class="metro__wrap">
                                    <div class="metro__item">
                                        <div class="ic ic--red">
                                        </div>
                                        <div class="name">Белорусская
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="address">
                                <div class="address__text">ул. Бутырский Вал, 10
                                </div>
                                <div class="address__desc">без выходных
                                </div>
                            </div>
                            <div class="phone phone--fr">
                                <div class="phone__wrap">
                                    <div class="phone__text"><a class="phone__nr" href="tel:+79999890110">+7 (999) 989-01-10</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contacts__wrap">
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Acc30ed25b2d645f1d0a2ca996a3c577d8ee81b0c0ec826c52e8bae1659f22c51&amp;source=constructor" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="end" id="end">
                <div class="container">
                    <div class="end__body">
                        <h2 class="end__title">Мы работаем и в выходные,<br/>позвоните нам и курьер сразу-же приедет!
                        </h2>
                        <div class="end__subtitle">Курьер приедет в строго оговоренное время и заберёт кофемашину для проведения диагностики. 
                        </div>
                    </div>
                    <div class="end__form">
                        <form class="form default" id="endForm">
                            <div class="form__title">Хотите мы починим кофемашину не более чем за 24 часа?
                            </div>
                            <div class="form__field"><input class="form__input form__input--fw" type="tel" name="phone" placeholder="+7 (___) ___-____"/>
                            </div>
                            <input class="source" type="hidden" name="source" value=""/>
                            <input class="term" type="hidden" name="term" value=""/>
                            <input class="campaign" type="hidden" name="campaign" value=""/>
                            <input class="content" type="hidden" name="content" value=""/>
                            <input class="medium" type="hidden" name="medium" value=""/>
                            <input name="formname" type="hidden" value="Вызвать мастера (21-й экран)"/>
                            <div class="form__field form__field--btn">
                                <button class="btn btn--fw">Да, хочу!
                                </button>
                            </div>
                            <div class="form__desc">Ремонт выполняется специализицироваными инженерами и с использованием оригинальных комплектующих!
                            </div>
                            <div class="policy"><input class="policy__input" type="checkbox" name="policy" id="policy" checked="checked"/>
                                <label class="policy__label" for="policy"><span class="box"></span><span class="text">Я согласен с условиями  <a href="doc/politics.docx">политики конфиденциальности</a></span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="footer__nav">
                    <a class="logo" href="#"><img class="logo__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/logo.svg" alt="Logo" title=""/><span class="logo__text">Сервисный центр по  <br/>ремонту кофемашин в Москве</span></a>
                    <div class="footer__body">
                        <div class="footer__menu">
                            <ul class="menu">
                                <li class="menu__item anchor"><a class="menu__link" href="#choose">Цены</a>
                                </li>
                                <li class="menu__item anchor"><a class="menu__link" href="#advantage">Преимущества</a>
                                </li>
                                <li class="menu__item anchor"><a class="menu__link" href="#how">Как мы работаем</a>
                                </li>
                                <li class="menu__item anchor"><a class="menu__link" href="#hot">Акции</a>
                                </li>
                                <li class="menu__item anchor"><a class="menu__link" href="#percent">Скидки</a>
                                </li>
                                <li class="menu__item anchor"><a class="menu__link" href="#review">Отзывы</a>
                                </li>
                                <li class="menu__item anchor"><a class="menu__link" href="#clients">Наши клиенты</a>
                                </li>
                                <li class="menu__item anchor"><a class="menu__link" href="#contacts">Контакты</a>
                                </li>
                                <li class="menu__item"><span>Все права защищены</span>
                                </li>
                                <li class="menu__item"><a class="menu__link" href="doc/politics.docx">Политика конфиденциальности               </a>
                                </li>
                                <li class="menu__item"><span>Ремонт кофемашин в Москве</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="up-wrap"><a class="up" href="#header"></a>
            </div>
            <div class="modal" id="mainModal" style="display: none;" >
                <form class="form default" id="mainForm">
                    <div class="form__title">Оставьте заявку и мы Вам
                    </div>
                    <div class="form__subtitle">Перезвоним за 27 секунд
                    </div>
                    <div class="form__field"><input class="form__input form__input--fw" type="tel" name="phone" placeholder="+7 (___) ___-____"/>
                    </div>
                    <input class="source" type="hidden" name="source" value=""/>
                    <input class="term" type="hidden" name="term" value=""/>
                    <input class="campaign" type="hidden" name="campaign" value=""/>
                    <input class="content" type="hidden" name="content" value=""/>
                    <input class="medium" type="hidden" name="medium" value=""/>
                    <input name="formname" type="hidden" value="Получить консультацию (1-й экран)"/>
                    <div class="form__field form__field--btn">
                        <button class="btn btn--fw">Жду звонка
                        </button>
                    </div>
                    <div class="policy"><input class="policy__input" type="checkbox" name="policy" id="policy-modal1" checked="checked"/>
                        <label class="policy__label" for="policy-modal1"><span class="box"></span><span class="text">Я согласен с условиями  <a href="doc/politics.docx">политики конфиденциальности </a></span>
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal" id="masterModal" style="display: none;" >
                <form class="form default" id="masterForm">
                    <div class="form__title">Оставьте заявку на <br/>вызов мастера
                    </div>
                    <div class="form__subtitle">Перезвоним за 7 секунд
                    </div>
                    <div class="form__field"><input class="form__input form__input--fw" type="tel" name="phone" placeholder="+7 (___) ___-____"/>
                    </div>
                    <input class="source" type="hidden" name="source" value=""/>
                    <input class="term" type="hidden" name="term" value=""/>
                    <input class="campaign" type="hidden" name="campaign" value=""/>
                    <input class="content" type="hidden" name="content" value=""/>
                    <input class="medium" type="hidden" name="medium" value=""/>
                    <input name="formname" type="hidden" value="Вызвать мастера (5-й экран)"/>
                    <div class="form__field form__field--btn">
                        <button class="btn btn--fw">Вызвать мастера
                        </button>
                    </div>
                    <div class="policy"><input class="policy__input" type="checkbox" name="policy" id="policy-modal2" checked="checked"/>
                        <label class="policy__label" for="policy-modal2"><span class="box"></span><span class="text">Нажимая на кнопку “Вызвать мастера”, я даю согласие на обработку персональных данных и соглашаюсь с условиями <a href="doc/politics.docx">договора-оферты </a>и <a href="doc/politics.docx">политикой конфиденциальности</a></span>
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal" id="cashbackModal" style="display: none;" >
                <form class="form default" id="cashbackForm">
                    <div class="form__title">Оставьте заявку и получи<br/>5% кэшбэк на первый ремонт
                    </div>
                    <div class="form__subtitle">Перезвоним за 7 секунд
                    </div>
                    <div class="form__field"><input class="form__input form__input--fw" type="tel" name="phone" placeholder="+7 (___) ___-____"/>
                    </div>
                    <input class="source" type="hidden" name="source" value=""/>
                    <input class="term" type="hidden" name="term" value=""/>
                    <input class="campaign" type="hidden" name="campaign" value=""/>
                    <input class="content" type="hidden" name="content" value=""/>
                    <input class="medium" type="hidden" name="medium" value=""/>
                    <input name="formname" type="hidden" value="Получить 5% кэшбэк (8-й экран)"/>
                    <div class="form__field form__field--btn">
                        <button class="btn btn--fw">Получить 5% кэшбэк
                        </button>
                    </div>
                    <div class="policy"><input class="policy__input" type="checkbox" name="policy" id="policy-modal3" checked="checked"/>
                        <label class="policy__label" for="policy-modal3"><span class="box"></span><span class="text">Нажимая на кнопку “Вызвать мастера”, я даю согласие на обработку персональных данных и соглашаюсь с условиями <a href="doc/politics.docx">договора-оферты </a>и <a href="doc/politics.docx">политикой конфиденциальности</a></span>
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal" id="glassModal" style="display: none;">
                <form class="form default" id="glassModal1">
                    <div class="form__title">Оставьте заявку и получи<br/>защитное стекло в подарок
                    </div>
                    <div class="form__subtitle">Перезвоним за 7 секунд
                    </div>
                    <div class="form__field"><input class="form__input form__input--fw" type="tel" name="phone" placeholder="+7 (___) ___-____"/>
                    </div>
                    <input class="source" type="hidden" name="source" value=""/>
                    <input class="term" type="hidden" name="term" value=""/>
                    <input class="campaign" type="hidden" name="campaign" value=""/>
                    <input class="content" type="hidden" name="content" value=""/>
                    <input class="medium" type="hidden" name="medium" value=""/>
                    <input name="formname" type="hidden" value="Получить стекло в подарок (9-й экран)"/>
                    <div class="form__field form__field--btn">
                        <button class="btn btn--fw">Получить стекло в подарок
                        </button>
                    </div>
                    <div class="policy"><input class="policy__input" type="checkbox" name="policy" id="policy-modal4" checked="checked"/>
                        <label class="policy__label" for="policy-modal4"><span class="box"></span><span class="text">Нажимая на кнопку “Вызвать мастера”, я даю согласие на обработку персональных данных и соглашаюсь с условиями <a href="doc/politics.docx">договора-оферты </a>и <a href="doc/politics.docx">политикой конфиденциальности</a></span>
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal" id="studentModal" style="display: none;" >
                <form class="form default" id="studentModal1">
                    <div class="form__title">Ты студент?<br/>Оставь заявку и получи <br/>5% скидку на ремонт
                    </div>
                    <div class="form__subtitle">Перезвоним за 7 секунд<br/>(Необходим студенческий билет)
                    </div>
                    <div class="form__field"><input class="form__input form__input--fw" type="tel" name="phone" placeholder="+7 (___) ___-____"/>
                    </div>
                    <input class="source" type="hidden" name="source" value=""/>
                    <input class="term" type="hidden" name="term" value=""/>
                    <input class="campaign" type="hidden" name="campaign" value=""/>
                    <input class="content" type="hidden" name="content" value=""/>
                    <input class="medium" type="hidden" name="medium" value=""/>
                    <input name="formname" type="hidden" value="Получить скидку 5% (9-й экран)"/>
                    <div class="form__field form__field--btn">
                        <button class="btn btn--fw">Получить скидку 5%
                        </button>
                    </div>
                    <div class="policy"><input class="policy__input" type="checkbox" name="policy" id="policy-modal5" checked="checked"/>
                        <label class="policy__label" for="policy-modal5"><span class="box"></span><span class="text">Нажимая на кнопку “Вызвать мастера”, я даю согласие на обработку персональных данных и соглашаюсь с условиями <a href="doc/politics.docx">договора-оферты </a>и <a href="doc/politics.docx">политикой конфиденциальности</a></span>
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal" id="repairModal" style="display: none;">
                <form class="form default" id="repairModal1">
                    <div class="form__title">Оставьте заявку и запишитесь <br/>на ремонт
                    </div>
                    <div class="form__subtitle">Перезвоним за 7 секунд
                    </div>
                    <div class="form__field"><input class="form__input form__input--fw" type="tel" name="phone" placeholder="+7 (___) ___-____"/>
                    </div>
                    <input class="source" type="hidden" name="source" value=""/>
                    <input class="term" type="hidden" name="term" value=""/>
                    <input class="campaign" type="hidden" name="campaign" value=""/>
                    <input class="content" type="hidden" name="content" value=""/>
                    <input class="medium" type="hidden" name="medium" value=""/>
                    <input name="formname" type="hidden" value="Записаться на ремонт (5-й экран)"/>
                    <div class="form__field form__field--btn">
                        <button class="btn btn--fw">Записаться на ремонт
                        </button>
                    </div>
                    <div class="policy"><input class="policy__input" type="checkbox" name="policy" id="policy-modal6" checked="checked"/>
                        <label class="policy__label" for="policy-modal6"><span class="box"></span><span class="text">Нажимая на кнопку “Вызвать мастера”, я даю согласие на обработку персональных данных и соглашаюсь с условиями <a href="doc/politics.docx">договора-оферты </a>и <a href="doc/politics.docx">политикой конфиденциальности</a></span>
                        </label>
                    </div>
                </form>
            </div>
        </div>
        <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/vendor.css">
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/vendor.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/main.js"></script>
    </body>
</html>