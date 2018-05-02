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
                                г. Москва, ул. Бутырский Вал, 10
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
                    <h2 class="choose__title">Что с Вашей кофемашиной?
                    </h2>
                    <div class="choose__nav">
                        <div class="tabs">
                            <div class="tabs__item active" data-val="iphone">Выберите неисправность или услугу
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
                                    <button class="btn btn--fw">Получить скидку 30%</button>
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
                            <div class="item__text">Наш сервисный центр выдаёт специальный бланк СКК<br/>где описываются все заменённые комплектующие и <br/>их серийные номера<br/><span>(при возможности)</span>
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
                            <div class="item__text">Мы отвечаем своей репутацией перед клиентами и выполняем все ремонтные работы точно в срок. Даже если случится форс-мажор, Вы будете немедленно уведомлены об этом.
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
                    <h2 class="hot__title">Специальное предложение до <сегодняшняя дата><br>
                        <span>Оставьте заявку прямо сейчас</span>
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
                                        <p>Оставляю отзыв, чтобы выразить благодарность специалисту вашей мастерской. Мастера мы вызывали на дом, так как кофемашина Bosch гудела, но не перемалывала зерна. Несмотря на высокую стоимость нашей кофемашины, у нее довольно быстро затупились жернова. Проблему мастер нашел очень быстро, выполнил замену и выписал гарантию. Отдельно стоит отметить, что у мастера при себе уже были запчасти, так что нам не пришлось терять время на их поиск. Спасибо, что цените своих клиентов!</p>
                                    </div>
                                    <div class="author">
                                        <div class="author__name">Илья Павердин
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__text item__text--small">
                                        <p>Выражаю вам благодарность за качественную работу, которую вы заслужили своим профессионализмом. Я рад, что довелось повстречать действительно хороших специалистов, которые выполнили ремонт моей кофемашины Saeco за такое короткое время. Отвозил кофемашину на профилактику в сервисный центр, там сделали чистку от накипи и кофейных масел, бесплатно настроили и сразу отзвонились. Обошлась мне услуга совсем недорого, в будущем буду обращаться только к вам.</p>
                                    </div>
                                    <div class="author">
                                        <div class="author__name">Андрей Фисташков
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__text">
                                        <p>Моя кофемашина Delonghi сломалась очень внезапно, пришлось срочно заняться поиском хорошего и недорогого мастера по ремонту. Позвонила и вызвала курьера, он приехал в назначенное мной время и забрал кофемашину. Уже к обеду сообщили о выполненном ремонте. Очень удобно, что у них есть несколько способов оплаты, в прежнем сц такого преимущества не было. </p>
                                    </div>
                                    <div class="author">
                                        <div class="author__name">Александра Горина
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item__text">
                                        <p>Пару недель назад обращался в Love-Kofe, чтобы показать офисную кофемашину Jura, которая перестала включаться после сильного перепада напряжения. Мастер провел диагностику и сразу же озвучил стоимость и время работы. Меня все устроило. Уже на следующий день отзвонился менеджер и сообщил, что все готово. Обслуживанием я остался очень доволен, сервисный центр к обращению рекомендую.</p>
                                    </div>
                                    <div class="author">
                                        <div class="author__name">Илья Рапунцев
                                        </div>
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
                                        <div class="item__title">Как определяется цена на ремонт кофемашины?
                                        </div>
                                    </div>
                                    <div class="item__text" style="display: none;">
                                        <p>Цена на ремонт кофемашины устанавливается индивидуально для всех, на основе информации о поломке, полученной после проведения диагностики. Мастер учитывает не только разновидность и тяжесть неисправности, но и стоимость запчасти на замену. Сразу после диагностики вам сообщат полную стоимость за услуги, и приступят к их осуществлению только после вашего согласия.  </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item__wrap">
                                    <div class="item__head">
                                        <div class="item__title">Диагностика неисправной кофемашины в вашей мастерской бесплатна?
                                        </div>
                                    </div>
                                    <div class="item__text" style="display: none;">
                                        <p>Диагностика в нашем сервисном центре бесплатна, если вы соглашаетесь на ремонт в нашей сервисной мастерской. В случае отказа от наших услуг, диагностика оплачивается по установленному тарифу, с которым вы можете ознакомиться в прайс-листе, на странице нашего сайта. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item__wrap">
                                    <div class="item__head">
                                        <div class="item__title">Как долго длится ремонт кофемашины?
                                        </div>
                                    </div>
                                    <div class="item__text" style="display: none;">
                                        <p>Длительность технических работ над кофемашиной зависит от сложности поломки в ее механизме. Сроки работ определяются для каждой кофемашины персонально, по итогам полученных диагностических данных. Ремонтные работы завершаются в рамках установленных мастером сроков, так что вы получите кофемашину в оговоренное время. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <div class="item">
                                <div class="item__wrap">
                                    <div class="item__head">
                                        <div class="item__title">Можно ли вызвать сервисного мастера на нужный адрес?
                                        </div>
                                    </div>
                                    <div class="item__text" style="display: none;">
                                        <p>Да, наша компания предоставляет услугу «Мастер на выезде». Если решили воспользоваться данной услугой, то необходимо предоставить мастеру такие данные как: бренд и модель кофемашины, ее эксплуатационный срок и подаваемые признаки неисправности. Информация нужна для того, чтобы мастер смог собрать необходимые запчасти и оборудование для успешного ремонта.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item__wrap">
                                    <div class="item__head">
                                        <div class="item__title">Вы даёте гарантию на отремонтированный кофеаппарат?
                                        </div>
                                    </div>
                                    <div class="item__text" style="display: none;">
                                        <p>Конечно же наша сервисная компания выдает гарантийную квитанцию на услуги мастера и использованные при замене комплектующие. Длительность гарантийного срока зависит от сложности устраненной поломки и вида задействованной запчасти, и устанавливается мастером. </p>
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
                                        <p>Да. Мы напрямую сотрудничаем с производителями кофемашин и закупаем необходимые детали напрямую у них.</p>
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
                                <div class="item__title">Как выбрать красивую функциональную кофемашину для дома?
                                </div>
                                <div class="item__desc">
                                    <p>ГОднако стоит учесть, что профессиональные кофемашины вряд ли подойдут для домаш...</p>
                                </div>
                                <a class="btn btn--fw" href="javascript:;" data-fancybox="post1" data-src="#post1">Подробнее</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__wrap">
                                <div class="item__img">
                                </div>
                                <div class="item__title">Идеальный вариант кофемашины для дома
                                </div>
                                <div class="item__desc">
                                    <p>Для экономии пространства, большинство потребителей...</p>
                                </div>
                                <a class="btn btn--fw" href="javascript:;" data-fancybox="post2" data-src="#post2">Подробнее</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__wrap">
                                <div class="item__img">
                                </div>
                                <div class="item__title">Какой кофейный аппарат выбрать для офиса?
                                </div>
                                <div class="item__desc">
                                    <p>Легкость в использовании состоит в том, что при приготовлении...</p>
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
                        <h3>Как выбрать красивую функциональную кофемашину для дома?</h3>
                         <p>Встретить утро со свежезаваренной чашкой ароматного кофе – прекрасный способ отлично поднять себе настроение. Как вы знаете, сейчас кофе и кофейные напитки имеют актуальность не только в кофейнях и офисах, но и дома. Однако стоит учесть, что профессиональные кофемашины вряд ли подойдут для домашнего использования, как и бытовые – для промышленных масштабов.</p>
                         <p>При приобретении кофемашин стоит сосредоточить свое внимание на действительно важных вещах, как функциональность и характеристики. Также довольно важную роль при выборе аппарата, играет и фирма-производитель кофейной машины. В этой статье мы разберем, как выбрать кофеварочную машину для дома и офиса, и что учесть при покупке устройства.   </p>
                    </div>
                </div>
                <div class="post__modal" id="post2" style="display: none;">
                    <div class="body">
                        <h3>Идеальный вариант кофемашины для дома</h3>
                        <p>При приобретении аппарата для дома, вам следует учитывать размер помещения, в котором вы планируете поставить кофемашину. Для экономии пространства, большинство потребителей выбирают компактные модели, большой выбор которых предоставляет компании Saeco и Jura. Конечно кофемашины от двух этих производителей стоят немного дороже других аналогичных устройств, но за этой суммой стоит по-настоящему высокое качество и надежность.</p>
                        <p>Стоит также отметить, что наиболее популярны по разновидности среди кофемашин – капсульные и зерновые модели. Хотя среди любителей кофе популярностью пользуются капсульные модели, автоматические кофеаппараты использующие зерновой кофе, более подходящие в плане экономии и вкусовых качеств напитка. К тому же, в отличие от капсул, зернового кофе хватит на более долгое время. </p>
                    </div>
                </div>
                <div class="post__modal" id="post3" style="display: none;">
                    <div class="body">
                        <h3>Какой кофейный аппарат выбрать для офиса?</h3>
                        <p>Если для дома можно приобрести кофемашину исходя из личных предпочтений, то для офиса лучше покупать быструю и мощную модель, которая требует минимум внимания и сможет обслужить большое количество пользователей. Чтобы обеспечить офисных сотрудников качественным напитком, стоит купить капсульную кофемашину, так как она имеет ряд преимуществ:</p>
                        <ul>
                            <li>простой интуитивный интерфейс</li>
                            <li>неприхотливость в уходе</li>
                            <li>высокая производительность </li>
                            <li>хорошая функциональность</li>
                            <li>идеальная цена</li>
                        </ul>
                        <p>Легкость в использовании состоит в том, что при приготовлении напитка вам нужно вставить капсулу в устройство и нажать кнопки. Уход за капсульной кофемашиной сложностей тоже не вызывает, так как емкости устройства легко чистятся даже без специализированных чистящих веществ. А конкретное подразделение на порции, выражающееся в одной капсуле – одной порции кофе, обеспечивает оптимальное употребление напитка.</p>
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
                        <h2 class="end__title">Мы работаем в выходные и праздники!<br/>Позвоните нам и курьер выедет в течение 30 минут!
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