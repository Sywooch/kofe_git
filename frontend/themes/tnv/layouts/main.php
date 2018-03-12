<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
$assets = '/' . Yii::getAlias('@web');
$isHome = Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index' ? true : false;
$isModelPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'model' ? true : false;
$isBrandPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'brand' ? true : false;
$siteConfig = app\components\CController::getSiteConfig();
$js = app\components\CController::$js;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>    
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <link rel="alternate" type="application/rss+xml" title="Новости компании" href="rss/company" />
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="stylesheet" type="text/css" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/stile.css" />
        <link rel="stylesheet" type="text/css" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/font.css" />

    </head>
    <body>
        <header class="header">
            <div class="header--top-line">
                <div class="container clearfix">
                    <nav class="service-nav float--left hidden-xs hidden-sm">
                        <ul class="service-nav--list">
                            <li class="service-nav--item"><a href="#" class="service-nav--item-link">Частным лицам</a></li>
                            <li class="service-nav--item"><a href="#" class="service-nav--item-link">Корпоративным клиентам</a></li>
                            <li class="service-nav--item"><a href="#" class="service-nav--item-link">Партнерам</a></li>
                            <li class="service-nav--item"><a href="#" class="service-nav--item-link">О компании</a></li>
                        </ul>
                    </nav>
                    <div class="header--socials float--left visible-lg">
                        <a href="#" target="_blank" class="header--socials-item vk">
                            <i class="icon-vk"></i>
                        </a>
                        <a href="#" target="_blank" class="header--socials-item fb">
                            <i class="icon-fb"></i>
                        </a>
                        <a href="#" target="_blank" class="header--socials-item tw">
                            <i class="icon-tw"></i>
                        </a>
                        <a href="#" target="_blank" class="header--socials-item ok">
                            <i class="icon-ok"></i>
                        </a>
                    </div>
                    <div class="service-nav--drop float--left visible-sm">
                        <span class="service-nav--drop-label">Меню</span><i class="service-nav--drop-icon down icon-down"></i>
                        <div class="service-nav--drop-menu">
                            <div class="service-nav--drop-head"><span class="service-nav--drop-label">Меню</span><i class="service-nav--drop-icon up icon-up"></i></div>
                            <ul class="service-nav--sm-list">
                                <li class="service-nav--sm-item"><a href="#" class="service-nav--sm-item-l">Частным лицам</a></li>
                                <li class="service-nav--sm-item"><a href="#" class="service-nav--sm-item-l">Корпоративным клиентам</a></li>
                                <li class="service-nav--sm-item"><a href="#" class="service-nav--sm-item-l">Партнерам</a></li>
                                <li class="service-nav--sm-item"><a href="#" class="service-nav--sm-item-l">О компании</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="service-nav--toggle float--left visible-xs">
                        <span class="service-nav--toggle-label">Меню</span>
                        <i class="service-nav--toggle-icon up icon-up"></i>
                        <i class="service-nav--toggle-icon down icon-down"></i>
                    </a>
                    <a href="#" class="header--region float--right">
                        <span class="header--region-label">Ваш регион:</span>
                        <span class="header--region-label blue">Москва</span>
                    </a>
                </div>
            </div>
            <div class="visible-xs">
                <div class="service-nav--xs-select container">
                    <ul class="service-nav--xs-list">
                        <li class="service-nav--xs-item "><a href="#" class="service-nav--xs-item-l">Частным лицам</a></li>
                        <li class="service-nav--xs-item "><a href="#" class="service-nav--xs-item-l">Корпоративным клиентам</a></li>
                        <li class="service-nav--xs-item "><a href="#" class="service-nav--xs-item-l">Партнерам</a></li>
                        <li class="service-nav--xs-item "><a href="#" class="service-nav--xs-item-l">О компании</a></li>
                    </ul>
                </div>
            </div>
            <div class="header--info-line hidden-xs">
                <div class="container clearfix">
                    <a href="index.html" class="header--logo float--left"></a>
                    <div class="header--calls visible-lg">
                        <div class="header--call">
                            <div class="header--call-t">Москва</div>
                            <span class="call_phone_1"><a class="header--call-p" href="#">8 495 755 67 89</a></span>
                        </div>
                        <div class="header--call">
                            <div class="header--call-t">Россия</div>
                            <span class=""><a class="header--call-p" href="#">8 800 555 67 89</a></span>
                        </div>
                    </div>
                    <div class="header--calls visible-sm visible-md">
                        <div class="header--call">
                            <div class="header--call-t">Москва</div>
                            <span class="call_phone_1"><a class="header--call-p" href="#">8 495 755 67 89</a></span>
                        </div>
                        <div class="header--calls-d">
                            <div class="header--call">
                                <div class="header--call-t">Россия</div>
                                <a class="header--call-p" href="#">8 800 555 67 89</a>
                            </div>
                        </div>
                    </div>
                    <div class="header--chats hidden-sm">
                        <div class="header--chats-t">Онлайн</div>
                        <div class="header--chats-b">
                            <a class="header--chat" tabindex="0" role="button" data-hover="popover" data-popover-id="WhatsappTooltip" data-placement="bottom">
                                <i class="icon-whatsapp-o"></i>
                            </a>
                            <a class="header--chat" tabindex="0" role="button" data-hover="popover" data-popover-id="SkypeTooltip" data-placement="bottom">
                                <i class="icon-skype-o"></i>
                            </a>
                            <a class="header--chat" tabindex="0" role="button" data-hover="popover" data-popover-id="ViberTooltip" data-placement="bottom">
                                <i class="icon-viber-o"></i>
                            </a>
                            <a class="header--chat" tabindex="0" role="button" data-hover="popover" data-popover-id="TelegramTooltip" data-placement="bottom">
                                <i class="icon-telegram-o"></i>
                            </a>
                        </div>
                    </div>
                    <div class="header--chats visible-sm">
                        <div class="header--chats-t">Онлайн</div>
                        <div class="header--chats-b"><a class="header--chat" href="#"><i class="icon-whatsapp-o"></i></a></div>
                        <div class="header--chats-d">
                            <a class="header--chats-r" href="#">
                                <i class="icon-whatsapp-o"></i>
                                <span class="popover-box--chat-t">Whatsapp</span>
                                <span class="popover-box--chat-p">+7 (916) 380-21-81</span>
                                <span class="popover-box--chat-d">Только в режиме чата</span>
                            </a>
                            <a class="header--chats-r" href="#">
                                <i class="icon-skype-o"></i>
                                <span class="popover-box--chat-t">Skype</span>
                                <span class="popover-box--chat-p">ntv-plus.com</span>
                                <span class="popover-box--chat-d">Чат и звонки</span>
                            </a>
                            <a class="header--chats-r" href="#">
                                <i class="icon-viber-o"></i>
                                <span class="popover-box--chat-t">Viber</span>
                                <span class="popover-box--chat-p">+7 (916) 380-21-81</span>
                                <span class="popover-box--chat-d">Только в режиме чата</span>
                            </a>
                            <a class="header--chats-r" href="#">
                                <i class="icon-telegram-o"></i>
                                <span class="popover-box--chat-t">Telegram</span>
                                <span class="popover-box--chat-p">ntvplus_bot</span>
                                <span class="popover-box--chat-d">Только в режиме чата</span>
                            </a>
                        </div>
                    </div>
                    <div class="header--faq">
                        <div class="header--faq-t">Есть вопрос?</div>
                        <a class="header--faq-l" href="#">Найти ответ</a>
                    </div>
                    <div class="header--user no-auth float--right"><a href="#" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#online-zayavkamy">Онлайн заявка</a></div>
                </div>
            </div>
            <div class="header--info-line visible-xs">
                <div class="clearfix">
                    <a href="index.html" class="header--logo float--left"></a>
                    <a href="#" class="m-menu--mobile float--right">
                        <i class="m-menu--mobile-icon"></i>
                    </a>
                    <a href="#" class="header--user-toggle float--right">
                        <i class="header--user-toggle-icon icon-profile"></i>
                    </a>
                </div>
            </div>
            <div class="header--nav-line">
                <div class="header--nav-shadow hidden-xs"></div>
                <div class="container clearfix static">
                    <nav class="m-menu float--left">
                        <ul class="m-menu--list clearfix static">
                            <li class="m-menu--item"><a href="#" class="m-menu--item-link">Цены</a></li>
                            <li class="m-menu--item"><a href="#" class="m-menu--item-link">Диагностика</a></li>
                            <li class="m-menu--item"><a href="#" class="m-menu--item-link">Гарантия</a></li>
                            <li class="m-menu--item"><a href="#" class="m-menu--item-link">Контроль качества</a></li>
                            <li class="m-menu--item"><a href="#" class="m-menu--item-link">Контакты</a></li>
                            <li class="m-menu--item"><a href="#" class="m-menu--item-link">Статус Заказа!</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="popover-box is-chat" id="WhatsappTooltip">
            <a href="#" class="popover-box--chat-l">
                <span class="popover-box--chat-t">Whatsapp</span>
                <span class="popover-box--chat-p">+7 (916) 380-21-81</span>
                <span class="popover-box--chat-d">Только в режиме чата</span>
            </a>
        </div>
        <div class="popover-box is-chat" id="SkypeTooltip">
            <a href="#" class="popover-box--chat-l">
                <span class="popover-box--chat-t">Skype</span>
                <span class="popover-box--chat-p">ntv-plus.com</span>
                <span class="popover-box--chat-d">Чат и звонки</span>
            </a>
        </div>
        <div class="popover-box is-chat" id="ViberTooltip">
            <a href="#" class="popover-box--chat-l">
                <span class="popover-box--chat-t">Viber</span>
                <span class="popover-box--chat-p">+7 (916) 380-21-81</span>
                <span class="popover-box--chat-d">Только в режиме чата</span>
            </a>
        </div>
        <div class="popover-box is-chat" id="TelegramTooltip">
            <a href="#" class="popover-box--chat-l">
                <span class="popover-box--chat-t">Telegram</span>
                <span class="popover-box--chat-p">ntvplus_bot</span>
                <span class="popover-box--chat-d">Только в режиме чата</span>
            </a>
        </div>
        <div class='parent'>
            <div class='slider'>
                <button type="button" id='right' class='right' name="button">
                    <svg version="1.1" id="Capa_1" width='40px' height='40px ' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
                        <g>
                            <path style='fill: #fff;' d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                                  c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z
                                  "/>
                        </g>
                    </svg>
                </button>
                <button type="button" id='left' class='left' name="button">
                    <svg version="1.1" id="Capa_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
                        <g>
                            <path style='fill: #fff;' d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                                  c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
                        </g>
                    </svg>
                </button>
                <svg id='svg2' class='up2' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <circle id='circle1' class='circle1 steap' cx="5%" cy="49%" r="20"  />
                    <circle id='circle2' class='circle2 steap' cx="5%" cy="49%" r="100"  />
                    <circle id='circle3' class='circle3 steap' cx="5%" cy="49%" r="180"  />
                    <circle id='circle4' class='circle4 steap' cx="5%" cy="49%" r="260"  />
                    <circle id='circle5' class='circle5 steap' cx="5%" cy="49%" r="340"  />
                    <circle id='circle6' class='circle6 steap' cx="5%" cy="49%" r="420"  />
                    <circle id='circle7' class='circle7 steap' cx="5%" cy="49%" r="500"  />
                    <circle id='circle8' class='circle8 steap' cx="5%" cy="49%" r="580"  />
                    <circle id='circle9' class='circle9 steap' cx="5%" cy="49%" r="660"  />
                </svg>
                <svg id='svg1' class='up2' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <circle id='circle10' class='circle10 steap' cx="20%" cy="49%" r="20"  />
                    <circle id='circle11' class='circle11 steap' cx="20%" cy="49%" r="100"  />
                    <circle id='circle12' class='circle12 steap' cx="20%" cy="49%" r="180"  />
                    <circle id='circle13' class='circle13 steap' cx="20%" cy="49%" r="260"  />
                    <circle id='circle14' class='circle14 steap' cx="20%" cy="49%" r="340"  />
                    <circle id='circle15' class='circle15 steap' cx="20%" cy="49%" r="420"  />
                    <circle id='circle16' class='circle16 steap' cx="20%" cy="49%" r="500"  />
                    <circle id='circle17' class='circle17 steap' cx="20%" cy="49%" r="580"  />
                    <circle id='circle18' class='circle18 steap' cx="20%" cy="49%" r="660"  />
                </svg>
                <div id='slide1' class='slide1 up1'>
                    <h2>ReKofe - Больше, чем просто сервисный центр</h2>
                    <p>Сервисный центр на протяжении 10 лет выполняет ремонт кофемашин и занимается их обслуживанием с гарантированным качеством. Инженеры нашего сервисного центра разработали собственные методики, благодаря которым - ремонт кофемашин выполняется в максимально короткие сроки.</p>
                </div>
                <div id='slide2' class='slide2'>
                    <h2>Доверяйте профессионалам!</h2>
                    <p>В штате нашей компании работают лишь первоклассные специалисты, которые ежегодно проходят курсы повышения квалификации. Все сотрудники нашего предприятия с должной ответственностью относятся к ремонту кофемашин и выполняют ремонт точно в срок.</p>
                </div>
                <div id='slide3' class='slide3'>
                    <h2>Мы ремонтируем их, чтобы они радовали Вас!</h2>
                    <p>Собственные методики и индивидуальный подход к каждому клиенту - позволяют максимально снизить ожидание завершения ремонта. Данные методики были разработаны нашими инженерами и успешно применяются на практике в течении уже более 10 лет.</p>
                </div>
                <div id='slide4' class='slide4'>
                    <h2>Современные технологии ремонта кофемашин!</h2>
                    <p>Сервисный центр на протяжении 10 лет выполняет ремонт кофемашин и занимается их обслуживанием с гарантированным качеством. Инженеры нашего сервисного центра разработали собственные методики, благодаря которым - ремонт кофемашин выполняется в максимально короткие сроки.</p>
                </div>
            </div>
        </div>
        <div class="mainform">
            <p style="display: inline-block; margin-bottom: 10px; text-align: center; background: #fff; padding: 0px 10px;" class="wide-slider--stitle">Заказать обратный звонок</p>
            <form>
                <label>
                    <div class="form-group field-orderform2-phone required">
                        <input class="form-control form-control" type="tel" name="OrderForm2[phone]" placeholder="Ваш телефон"  />
                    </div>
                </label>
                <div class="mainform-b">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Отправить</button>
                </div>
                <div class="soglasen">
                    <span>
                        <input type="hidden" name="AskForm2[agree]" value="0" />
                        <input type="checkbox" id="askform2-agree" name="AskForm2[agree]" value="1" checked="" />
                    </span>            
                    <span>Согласен с условиями <a href="/policy" target="_blank">обработки персональных данных</a></span>
                </div>
            </form>
            <p></p>
        </div>
        <div class="main-links">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4 mb">
                        <div class="lg-pr">
                            <div class="main-links--title"><span class="">Диагностируем кофемашины</span></div>
                            <div class="richtext main-links--text">
                                <p>Проведение диагностики кофемашин и устранение любых неисправностей. <br> Быстро, Качественно, Надёжно!</p>
                                <p><a class="button-secondary" href="#">Перейти ко всем неисправностям</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <div class="main-links--grid row nogutter">
                            <div class="col-xs-6 col-sm-4">
                                <a href="#" class="main-links--item" data-ga-type="Главная" data-ga-event="Проверка баланса">
                                    <span class="main-links--item-label">
                                        <i class="main-links--item-icon i1"></i>
                                        Не включается
                                        <span>от 550₽</span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <a href="#" class="main-links--item" data-ga-type="Главная" data-ga-event="Проверка баланса">
                                    <span class="main-links--item-label">
                                        <i class="main-links--item-icon i2"></i>
                                        Не включается
                                        <span>от 550₽</span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <a href="#" class="main-links--item" data-ga-type="Главная" data-ga-event="Проверка баланса">
                                    <span class="main-links--item-label">
                                        <i class="main-links--item-icon i3"></i>
                                        Не включается
                                        <span>от 550₽</span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <a href="#" class="main-links--item" data-ga-type="Главная" data-ga-event="Проверка баланса">
                                    <span class="main-links--item-label">
                                        <i class="main-links--item-icon i4"></i>
                                        Не включается
                                        <span>от 550₽</span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <a href="#" class="main-links--item" data-ga-type="Главная" data-ga-event="Проверка баланса">
                                    <span class="main-links--item-label">
                                        <i class="main-links--item-icon i5"></i>
                                        Не включается
                                        <span>от 550₽</span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <a href="#" class="main-links--item" data-ga-type="Главная" data-ga-event="Проверка баланса">
                                    <span class="main-links--item-label">
                                        <i class="main-links--item-icon i6"></i>
                                        Не включается
                                        <span>от 550₽</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-ride="slick" class="feature-slider">
            <div class="slide feature-slider--item" data-role="slide" style="background-image:url( '<?= $assets . $siteConfig['theme'] . '/'; ?>images/bvj.png')" data-flatr="feature-promo 2">
                <div class="container feature-slider--container">
                    <div class="row feature-slider--flex">
                        <div class="feature-slider--text-part col-sm-6 col-xs-12">
                            <div class="tag green feature-slider--tag">НАШИ ПРЕИМУЩЕСТВА</div>
                            <h2 class="feature-slider--title">Новые и фирменные запасные части</h2>
                            <div class="feature-slider--text">В ремонте применяются только качественные комплектующие от известных производителей кофеварочного оборудования!</div>
                            <div class="feature-slider--slides">
                                <div class="feature-slider--slide"></div>
                            </div>
                        </div>
                        <div class="feature-slider--image-part col-sm-6 hidden-xs">
                            <div class="feature-slider--image" style="background-image:url( '<?= $assets . $siteConfig['theme'] . '/'; ?>images/bvj.png')"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide feature-slider--item" data-role="slide" style="background-image:url( '<?= $assets . $siteConfig['theme'] . '/'; ?>images/atl.png')" data-flatr="feature-promo 3">
                <div class="container feature-slider--container">
                    <div class="row feature-slider--flex">
                        <div class="feature-slider--text-part col-sm-6 col-xs-12">
                            <div class="tag green feature-slider--tag">НАШИ ПРЕИМУЩЕСТВА</div>
                            <h2 class="feature-slider--title">Удобная система оплаты</h2>
                            <div class="feature-slider--text">Оплата за услуги сервисного центра осуществляется любым удобным для Вас способом. </div>
                            <div class="feature-slider--slides">
                                <div class="feature-slider--slide"></div>
                            </div>
                        </div>
                        <div class="feature-slider--image-part col-sm-6 hidden-xs">
                            <div class="feature-slider--image" style="background-image:url( '<?= $assets . $siteConfig['theme'] . '/'; ?>images/atl.png')"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide feature-slider--item" data-role="slide" style="background-image:url( '<?= $assets . $siteConfig['theme'] . '/'; ?>images/ll9.png')" data-flatr="feature-promo 4">
                <div class="container feature-slider--container">
                    <div class="row feature-slider--flex">
                        <div class="feature-slider--text-part col-sm-6 col-xs-12">
                            <div class="tag green feature-slider--tag">НАШИ ПРЕИМУЩЕСТВА</div>
                            <h2 class="feature-slider--title">Максимальный комфорт и удобство</h2>
                            <div class="feature-slider--text">Сервисный центр успешно проводит забор неисправного устройства в мастеркую, а так-же, по готовности ремонта - выполняет бесплатную доставку кофемашины по указанному адресу</div>
                            <div class="feature-slider--slides">
                                <div class="feature-slider--slide"></div>
                            </div>
                        </div>
                        <div class="feature-slider--image-part col-sm-6 hidden-xs">
                            <div class="feature-slider--image" style="background-image:url( '<?= $assets . $siteConfig['theme'] . '/'; ?>images/ll9.png')"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container feature-slider--dots" data-role="slider-dots"></div>
        </div>
        <div class="main-calc">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4 mb166">
                        <div class="lg-pr2">
                            <div class="main-calc--title"><span class="">Предоставляем услуги!</span></div>
                            <div class="main-calc--text"><span class="">Инженеры сервисного центра предоставляют следующие услуги по максимально низкой цене. Благодаря прямой поставки комплектующих от производителя, все услуги отпускаются без наценки!</span></div>
                            <form action="">
                                <label style="width: 100%">
                                    <div class="form-group field-orderform2-phone required">
                                        <input class="form-control form-control" type="tel" name="OrderForm2[phone]" placeholder="Ваш телефон"  />
                                    </div>
                                </label>
                                <div class="form__row form__row_submit">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Отправить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-8 visible-md visible-lg">
                        <div class="row">
                            <div class="col-xs-8 col-lg-9">
                                <div class="main-calc--stitle">Популярные услуги в ремонте кофемашин</div>
                            </div>
                            <div class="col-xs-4 col-lg-3"><a href="#" class="btn btn-primary btn-lg btn-block">Все услуги</a></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-lg-6">
                                <div class="package-item mini">
                                    <div class="package-item--head clearfix">
                                        <div class="package-item--info float--left">
                                            <div class="package-item--title"><a href="#">Замена уплотнительного кольца группы</a></div>
                                        </div>
                                        <div class="package-item--counter counter float--right mini">
                                            <div class="counter--digits">
                                                <span>от 149</span>
                                                <div class="counter--label">руб</div>
                                            </div>
                                            <div class="btnmy">Заказать</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-6">
                                <div class="package-item mini">
                                    <div class="package-item--head clearfix">
                                        <div class="package-item--info float--left">
                                            <div class="package-item--title"><a href="#">Замена уплотнительного кольца группы</a></div>
                                        </div>
                                        <div class="package-item--counter counter float--right mini">
                                            <div class="counter--digits">
                                                <span>от 149</span>
                                                <div class="counter--label">руб</div>
                                            </div>
                                            <div class="btnmy">Заказать</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-6">
                                <div class="package-item mini">
                                    <div class="package-item--head clearfix">
                                        <div class="package-item--info float--left">
                                            <div class="package-item--title"><a href="#">Замена уплотнительного кольца группы</a></div>
                                        </div>
                                        <div class="package-item--counter counter float--right mini">
                                            <div class="counter--digits">
                                                <span>от 149</span>
                                                <div class="counter--label">руб</div>
                                            </div>
                                            <div class="btnmy">Заказать</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-6">
                                <div class="package-item mini">
                                    <div class="package-item--head clearfix">
                                        <div class="package-item--info float--left">
                                            <div class="package-item--title"><a href="#">Замена уплотнительного кольца группы</a></div>
                                        </div>
                                        <div class="package-item--counter counter float--right mini">
                                            <div class="counter--digits">
                                                <span>от 149</span>
                                                <div class="counter--label">руб</div>
                                            </div>
                                            <div class="btnmy">Заказать</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-6">
                                <div class="package-item mini">
                                    <div class="package-item--head clearfix">
                                        <div class="package-item--info float--left">
                                            <div class="package-item--title"><a href="#">Замена уплотнительного кольца группы</a></div>
                                        </div>
                                        <div class="package-item--counter counter float--right mini">
                                            <div class="counter--digits">
                                                <span>от 149</span>
                                                <div class="counter--label">руб</div>
                                            </div>
                                            <div class="btnmy">Заказать</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-6">
                                <div class="package-item mini">
                                    <div class="package-item--head clearfix">
                                        <div class="package-item--info float--left">
                                            <div class="package-item--title"><a href="#">Замена уплотнительного кольца группы</a></div>
                                        </div>
                                        <div class="package-item--counter counter float--right mini">
                                            <div class="counter--digits">
                                                <span>от 149</span>
                                                <div class="counter--label">руб</div>
                                            </div>
                                            <div class="btnmy">Заказать</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-6">
                                <div class="package-item mini">
                                    <div class="package-item--head clearfix">
                                        <div class="package-item--info float--left">
                                            <div class="package-item--title"><a href="#">Замена уплотнительного кольца группы</a></div>
                                        </div>
                                        <div class="package-item--counter counter float--right mini">
                                            <div class="counter--digits">
                                                <span>от 149</span>
                                                <div class="counter--label">руб</div>
                                            </div>
                                            <div class="btnmy">Заказать</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-6">
                                <div class="package-item mini">
                                    <div class="package-item--head clearfix">
                                        <div class="package-item--info float--left">
                                            <div class="package-item--title"><a href="#">Замена уплотнительного кольца группы</a></div>
                                        </div>
                                        <div class="package-item--counter counter float--right mini">
                                            <div class="counter--digits">
                                                <span>от 149</span>
                                                <div class="counter--label">руб</div>
                                            </div>
                                            <div class="btnmy">Заказать</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-calc--hr visible-md visible-lg"></div>
            </div>
        </div>
        <div data-slider-step="250" class="wide-slider clearfix">
            <div class="wide-slider--desc mb133">
                <div class="wide-slider--desc-content">
                    <div class="lg-pr">
                        <h2 class="wide-slider--title"><span class="">Ремонтируемые бренды</span></h2>
                        <div class="richtext wide-slider--text">
                            <p>Штат инженеров компании позволяет проводить ремонт кофемашин любых брендов. Каждый мастер ежегодно проходит курсы повышения квалификации, что-бы ремонт выполнялся максимально качественно!</p>
                        </div>
                        <a href="#" class="btn btn-outline btn-lg">Все бренды</a>
                    </div>
                </div>
            </div>
            <div class="wide-slider--content">
                <div class="wide-slider--control clearfix">
                    <h3 class="wide-slider--stitle float--left">Бренды</h3>
                    <div class="wide-slider--buttons float--right">
                        <a href="#" data-toggle="left" class="wide-slider--button prev"><i class="icon-left"></i></a>
                        <a href="#" data-toggle="right" class="wide-slider--button next"><i class="icon-right"></i></a>
                    </div>
                </div>
                <div class="wide-slider--container">
                    <div class="wide-slider--scroller">
                        <div class="channel-link--grid">
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                        </div>
                        <div class="channel-link--grid">
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                        </div>
                        <div class="channel-link--grid">
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                        </div>
                        <div class="channel-link--grid">
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                        </div>
                        <div class="channel-link--grid">
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                        </div>
                        <div class="channel-link--grid">
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                        </div>
                        <div class="channel-link--grid">
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                        </div>
                        <div class="channel-link--grid">
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                        </div>
                        <div class="channel-link--grid">
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                        </div>
                        <div class="channel-link--grid">
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                        </div>
                        <div class="channel-link--grid">
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                            <a href="#" class="channel-link">
                                <span class="channel-link--image">
                                    <img src="http://spb-remont-kofe.ru/uploads/images/bork.png" data-src="http://spb-remont-kofe.ru/uploads/images/bork.png" class="lazyload" />
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-waist" data-flatr="promo-waist 2">
            <div class="main-waist--box">
                <div data-slider-step="225" class="wide-slider clearfix">
                    <div class="wide-slider--desc mb133">
                        <div class="wide-slider--desc-content">
                            <div class="lg-pr">
                                <h2 class="main-waist--title">Наши инженеры</h2>
                                <div class="main-waist--text">
                                    <p>Инженеры сервисного центра, которые за 2017 год провели наибольший ремонт кофемашин. Каждый инженер имеет сертификат международного образца, который позволяет ремонтировать кофемашины всех брендов!</p>
                                </div>
                                <div class="main-waist--btns"><a href="#" class="btn btn-primary btn-lg">Онлайн заявка</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="wide-slider--content">
                        <div class="wide-slider--control clearfix">
                            <div class="wide-slider--buttons float--right"><a href="#" data-toggle="left" class="wide-slider--button prev"><i class="icon-left"></i></a><a href="#" data-toggle="right" class="wide-slider--button next"><i class="icon-right"></i></a></div>
                        </div>
                        <div class="wide-slider--container">
                            <div class="wide-slider--scroller">
                                <div class="film-box">
                                    <div class="film-box--img-cont"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/master/1.jpg" class="film-box--img" /></div>
                                    <div class="film-box--desc">C500</div>
                                </div>
                                <div class="film-box">
                                    <div class="film-box--img-cont"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/master/2.jpg" class="film-box--img" /></div>
                                    <div class="film-box--desc">C500</div>
                                </div>
                                <div class="film-box">
                                    <div class="film-box--img-cont"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/master/3.jpg" class="film-box--img" /></div>
                                    <div class="film-box--desc">C500</div>
                                </div>
                                <div class="film-box">
                                    <div class="film-box--img-cont"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/master/4.jpg" class="film-box--img" /></div>
                                    <div class="film-box--desc">C500</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-slider-step="225" class="wide-slider clearfix">
            <div class="wide-slider--desc mb133">
                <div class="wide-slider--desc-content">
                    <div class="lg-pr">
                        <h2 class="wide-slider--title"><span class="">Популярные модели</span></h2>
                        <div class="richtext wide-slider--text">
                            <p>Самые популярные модели, которые ремонтируются в нашем сервисном центре. Кстати, если в данном списке есть Ваша кофемашины - то Вы получаете <span style="color:red; font-size: 20px;">скидку в размере 30%</span> на ремонт! Мы Вас ждём!</p>
                            <p><a href="#" class="btn btn-primary btn-lg btn-outline">Онлайн заявка</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wide-slider--content">
                <div class="wide-slider--control clearfix">
                    <h3 class="wide-slider--stitle float--left"><span class="">Ремонт кофемашин</span></h3>
                    <div class="wide-slider--buttons float--right"><a href="#" data-toggle="left" class="wide-slider--button prev"><i class="icon-left"></i></a><a href="#" data-toggle="right" class="wide-slider--button next"><i class="icon-right"></i></a></div>
                </div>
                <div class="wide-slider--container">
                    <div class="wide-slider--scroller">
                        <a href="#" class="film-box">
                            <div class="film-box--img-cont"><img src="http://kofe03.ru/uploads/images/thumbs/174x230remont-kofemashin-remont-kofemashin-bork-c500.jpg" class="film-box--img" /></div>
                            <div class="tag green">BORK C500</div>
                        </a>
                        <a href="#" class="film-box">
                            <div class="film-box--img-cont"><img src="http://kofe03.ru/uploads/images/thumbs/174x230remont-kofemashin-remont-kofemashin-bork-c802.jpg" class="film-box--img" /></div>
                            <div class="tag green">BORK C500</div>
                        </a>
                        <a href="#" class="film-box">
                            <div class="film-box--img-cont"><img src="http://kofe03.ru/uploads/images/thumbs/174x230remont-kofemashin-remont-kofemashin-bork-c802-gold.jpg" class="film-box--img" /></div>
                            <div class="tag green">BORK C500</div>
                        </a>
                        <a href="#" class="film-box">
                            <div class="film-box--img-cont"><img src="http://kofe03.ru/uploads/images/thumbs/174x230remont-kofemashin-remont-kofemashin-bork-c500.jpg" class="film-box--img" /></div>
                            <div class="tag green">BORK C500</div>
                        </a>
                        <a href="#" class="film-box">
                            <div class="film-box--img-cont"><img src="http://kofe03.ru/uploads/images/thumbs/174x230remont-kofemashin-remont-kofemashin-bork-c802.jpg" class="film-box--img" /></div>
                            <div class="tag green">BORK C500</div>
                        </a>
                        <a href="#" class="film-box">
                            <div class="film-box--img-cont"><img src="http://kofe03.ru/uploads/images/thumbs/174x230remont-kofemashin-remont-kofemashin-bork-c802-gold.jpg" class="film-box--img" /></div>
                            <div class="tag green">BORK C500</div>
                        </a>
                        <a href="#" class="film-box">
                            <div class="film-box--img-cont"><img src="http://kofe03.ru/uploads/images/thumbs/174x230remont-kofemashin-remont-kofemashin-bork-c500.jpg" class="film-box--img" /></div>
                            <div class="tag green">BORK C500</div>
                        </a>
                        <a href="#" class="film-box">
                            <div class="film-box--img-cont"><img src="http://kofe03.ru/uploads/images/thumbs/174x230remont-kofemashin-remont-kofemashin-bork-c802.jpg" class="film-box--img" /></div>
                            <div class="tag green">BORK C500</div>
                        </a>
                        <a href="#" class="film-box">
                            <div class="film-box--img-cont"><img src="http://kofe03.ru/uploads/images/thumbs/174x230remont-kofemashin-remont-kofemashin-bork-c802-gold.jpg" class="film-box--img" /></div>
                            <div class="tag green">BORK C500</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div data-slider-step="392" class="wide-slider bg clearfix">
            <div class="wide-slider--desc mb133">
                <div class="wide-slider--desc-content">
                    <div class="lg-pr">
                        <h2 class="main-waist--title">Выполненный ремонт</h2>
                        <div class="main-waist--text">
                            <p>Фотографии кофемашин ДО и ПОСЛЕ проведённого ремонта. Все комплектующие, необходимые для ремонта кофемашин являются оригинальтными и проходят проверку перед установкой в кофемашину.</p>
                        </div>
                        <div class="main-waist--btns"><a href="#" class="btn btn-primary btn-lg">Онлайн заявка</a></div>
                    </div>
                </div>
            </div>
            <div class="wide-slider--content">
                <div class="wide-slider--control clearfix">
                    <h3 class="wide-slider--stitle float--left">Последние новости</h3>
                    <div class="wide-slider--buttons float--right"><a href="#" data-toggle="left" class="wide-slider--button prev"><i class="icon-left"></i></a><a href="#" data-toggle="right" class="wide-slider--button next"><i class="icon-right"></i></a></div>
                </div>
                <div class="wide-slider--container">
                    <div class="wide-slider--scroller">
                        <div class="card inline alt-margins" data-flatr="news 1790">
                            <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/IMG_9823.jpg" alt="" class="card--image-img" /></div>
                            <div class="tag green">BORK C500</div>
                        </div>
                        <div class="card inline alt-margins" data-flatr="news 1790">
                            <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/IMG_9844.jpg" alt="" class="card--image-img" /></div>
                            <div class="tag green">BORK C500</div>
                        </div>
                        <div class="card inline alt-margins" data-flatr="news 1790">
                            <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/IMG_9846.jpg" alt="" class="card--image-img" /></div>
                            <div class="tag green">BORK C500</div>
                        </div>
                        <div class="card inline alt-margins" data-flatr="news 1790">
                            <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/IMG_9823.jpg" alt="" class="card--image-img" /></div>
                            <div class="tag green">BORK C500</div>
                        </div>
                        <div class="card inline alt-margins" data-flatr="news 1790">
                            <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/IMG_9844.jpg" alt="" class="card--image-img" /></div>
                            <div class="tag green">BORK C500</div>
                        </div>
                        <div class="card inline alt-margins" data-flatr="news 1790">
                            <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/IMG_9846.jpg" alt="" class="card--image-img" /></div>
                            <div class="tag green">BORK C500</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-slider-step="571" class="wide-slider clearfix">
            <div class="wide-slider--desc mb133">
                <div class="wide-slider--desc-content">
                    <div class="lg-pr">
                        <h2 class="wide-slider--title">Добавить отзыв</h2>
                        <div class="richtext wide-slider--text">
                            <p>Вы посетили сервисный центр и вам выполнили ремонт кофемашины? Оставьте отзыв о впечатлениях и проведённой работе.</p>
                        </div>
                        <form action="">
                            <label style="width: 100%">
                                <div class="form-group field-orderform2-phone required">
                                    <input class="form-control form-control" type="tel" name="OrderForm2[phone]" placeholder="Ваш телефон"  />
                                </div>
                            </label>
                            <div class="form-group row mb " id="">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <label class="form--label ">Оценка</label>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <select name="score" class="selectpicker">
                                        <option value="5">5 - отлично</option>
                                        <option value="4">4 - хорошо</option>
                                        <option value="3">3 - так себе</option>
                                        <option value="2">2 - плохо</option>
                                        <option value="1">1 - ужасно</option>
                                    </select>
                                </div>
                            </div>
                            <label style="width: 100%">
                                <div class="form-group field-orderform2-phone required">
                                    <textarea class="form-control form-control" rows="5" name="text"></textarea>
                                </div>
                            </label>
                            <div class="form__row form__row_submit">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="wide-slider--content">
                <div class="wide-slider--control clearfix">
                    <h3 class="wide-slider--stitle float--left">Отзывы наших клиентов</h3>
                    <div class="wide-slider--buttons float--right"><a href="#" data-toggle="left" class="wide-slider--button prev"><i class="icon-left"></i></a><a href="#" data-toggle="right" class="wide-slider--button next"><i class="icon-right"></i></a></div>
                </div>
                <div class="wide-slider--container">
                    <div class="wide-slider--scroller">
                        <div class="live-box">
                            <div class="live-box--title">Шарипов Абдулазиз</div>
                            <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                            </div>
                            <div class="clearfix">
                                <p><b>Номер заказа:</b>K032372</p>
                                <p><b>Достоинства:</b>Низкая стоимость и качественный сервис</p>
                                <p><b>Комментарий:</b>В моем офисе сломалась кофемашина Philips HD 8654 Series 2100 Easy Cappuccino. Кофе тек совсем тонкой струйкой, а после и вовсе перестал течь. Коллеги с соседнего офиса посоветовали обратиться в сервисный центр «Кофе03», так как сами пользуются их услугами несколько лет. Дали номерок сервисного центра, заказала у них курьера и забрали машину на диагностику. Мастера позвонили на следующий день и сказали, что нужно менять дренажный клапан, старый оказался неисправен. Замена оказалась недорогой, очень быстрой к моему удивлению. Мне все понравилось, так как восстановленная кофеварка стояла на своем месте уже через три дня. Теперь за кофемашину можно и не беспокоиться, кстати в мастерской дали гарантию на несколько месяцев.</p>
                            </div>
                        </div>
                        <div class="live-box">
                            <div class="live-box--title">Шарипов Абдулазиз</div>
                            <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                            </div>
                            <div class="clearfix">
                                <p><b>Номер заказа:</b>K032372</p>
                                <p><b>Достоинства:</b>Низкая стоимость и качественный сервис</p>
                                <p><b>Комментарий:</b>В моем офисе сломалась кофемашина Philips HD 8654 Series 2100 Easy Cappuccino. Кофе тек совсем тонкой струйкой, а после и вовсе перестал течь. Коллеги с соседнего офиса посоветовали обратиться в сервисный центр «Кофе03», так как сами пользуются их услугами несколько лет. Дали номерок сервисного центра, заказала у них курьера и забрали машину на диагностику. Мастера позвонили на следующий день и сказали, что нужно менять дренажный клапан, старый оказался неисправен. Замена оказалась недорогой, очень быстрой к моему удивлению. Мне все понравилось, так как восстановленная кофеварка стояла на своем месте уже через три дня. Теперь за кофемашину можно и не беспокоиться, кстати в мастерской дали гарантию на несколько месяцев.</p>
                            </div>
                        </div>
                        <div class="live-box">
                            <div class="live-box--title">Шарипов Абдулазиз</div>
                            <div class="n-rating-stars" data-bem="{}" data-rate="5">
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                            </div>
                            <div class="clearfix">
                                <p><b>Номер заказа:</b>K032372</p>
                                <p><b>Достоинства:</b>Низкая стоимость и качественный сервис</p>
                                <p><b>Комментарий:</b>В моем офисе сломалась кофемашина Philips HD 8654 Series 2100 Easy Cappuccino. Кофе тек совсем тонкой струйкой, а после и вовсе перестал течь. Коллеги с соседнего офиса посоветовали обратиться в сервисный центр «Кофе03», так как сами пользуются их услугами несколько лет. Дали номерок сервисного центра, заказала у них курьера и забрали машину на диагностику. Мастера позвонили на следующий день и сказали, что нужно менять дренажный клапан, старый оказался неисправен. Замена оказалась недорогой, очень быстрой к моему удивлению. Мне все понравилось, так как восстановленная кофеварка стояла на своем месте уже через три дня. Теперь за кофемашину можно и не беспокоиться, кстати в мастерской дали гарантию на несколько месяцев.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-slider-step="392" class="wide-slider bg clearfix">
            <div class="wide-slider--desc mb133">
                <div class="wide-slider--desc-content">
                    <div class="lg-pr">
                        <h2 class="wide-slider--title"><span class="">Наши новости</span></h2>
                        <div class="richtext wide-slider--text">
                            <p>Новости из мира кофемашин. Всё самое актуальное и новое что необходимо знать.</p>
                            <p><a class="button-secondary" href="#">Все новости</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wide-slider--content">
                <div class="wide-slider--control clearfix">
                    <h3 class="wide-slider--stitle float--left">Последние новости</h3>
                    <div class="wide-slider--buttons float--right"><a href="#" data-toggle="left" class="wide-slider--button prev"><i class="icon-left"></i></a><a href="#" data-toggle="right" class="wide-slider--button next"><i class="icon-right"></i></a></div>
                </div>
                <div class="wide-slider--container">
                    <div class="wide-slider--scroller">
                        <div class="card inline alt-margins" data-flatr="news 1790">
                            <a class="card--image" href="company/novosti/onlajn-tv-dva-mesyatsa-besplatno-1790.html" target=""><img src="http://cdn.ntvplus.ru/files/image/01/15/54/m63.jpg" alt="" class="card--image-img" /></a>
                            <div class="tag green card--tag">Акция</div>
                            <a href="company/novosti/onlajn-tv-dva-mesyatsa-besplatno-1790.html" class="card--title" target="">Онлайн ТВ два месяца бесплатно!</a>
                            <div class="card--brief">Подключите услугу «Онлайн ТВ» и получите два месяца пользования бесплатно.</div>
                        </div>
                        <div class="card inline alt-margins" data-flatr="news 1788">
                            <a class="card--image" href="company/novosti/ntv-plyus-zapuskaet-uslugu-onlajn-tv-dlya-sputnikovyh-abonentov-multiskrin-1788.html" target=""><img src="http://cdn.ntvplus.ru/files/image/01/15/50/hqj.jpg" alt="" class="card--image-img" /></a><a href="company/novosti/ntv-plyus-zapuskaet-uslugu-onlajn-tv-dlya-sputnikovyh-abonentov-multiskrin-1788.html" class="card--title" target="">НТВ‑ПЛЮС запускает услугу «Онлайн ТВ» для спутниковых абонентов («Мультискрин»)</a>
                            <div class="card--brief">Услуга доступна абонентам без дополнительной платы в течение двух месяцев после подключения.</div>
                        </div>
                        <div class="card inline alt-margins" data-flatr="news 1789">
                            <a class="card--image" href="company/novosti/ntv-plyus-pobeditel-konkursa-proekt-goda-global-cio-1789.html" target=""><img src="http://cdn.ntvplus.ru/files/image/01/15/53/list!ntk.jpg" alt="" class="card--image-img" /></a><a href="company/novosti/ntv-plyus-pobeditel-konkursa-proekt-goda-global-cio-1789.html" class="card--title" target="">НТВ‑ПЛЮС – победитель конкурса «Проект года» Global CIO</a>
                            <div class="card--brief">Победа присуждена в номинации «Связь и коммуникации» за организацию вещания в формате сверхвысокой четкости на всей территории России.</div>
                        </div>
                        <div class="card inline alt-margins" data-flatr="news 1787">
                            <a class="card--image" href="company/novosti/ntv-plyus-primet-uchastie-v-20-j-yubilejnoj-vystavke-forume-cstb.html" target=""><img src="http://cdn.ntvplus.ru/files/image/01/15/22/list!4ja.jpg" alt="" class="card--image-img" /></a><a href="company/novosti/ntv-plyus-primet-uchastie-v-20-j-yubilejnoj-vystavke-forume-cstb.html" class="card--title" target="">НТВ‑ПЛЮС примет участие в 20‑й юбилейной выставке‑форуме CSTB.Telecom &amp; Media’2018</a>
                            <div class="card--brief">Мероприятие пройдет с 30 января по 1 февраля 2018 года в Москве.</div>
                        </div>
                        <div class="card inline alt-margins" data-flatr="news 1785">
                            <a class="card--image" href="company/novosti/planovaya-profilaktika-na-telekanalah-ntv-plyus-1785.html" target=""><img src="http://cdn.ntvplus.ru/files/image/00/03/41/43t.jpg" alt="" class="card--image-img" /></a><a href="company/novosti/planovaya-profilaktika-na-telekanalah-ntv-plyus-1785.html" class="card--title" target="">Плановая профилактика на телеканалах НТВ‑ПЛЮС</a>
                            <div class="card--brief">17 января 2018 года с 02:00 до 10:00 по московскому времени на телеканалах НТВ‑ПЛЮС будут проводиться плановые профилактические работы.</div>
                        </div>
                        <div class="card inline alt-margins" data-flatr="news 1784">
                            <a class="card--image" href="company/novosti/izmenenie-v-veschanii-ntv-plyus-1784.html" target=""><img src="http://cdn.ntvplus.ru/files/image/00/04/92/3ym.png" alt="" class="card--image-img" /></a><a href="company/novosti/izmenenie-v-veschanii-ntv-plyus-1784.html" class="card--title" target="">Изменение в вещании НТВ‑ПЛЮС</a>
                            <div class="card--brief">На платформе НТВ‑ПЛЮС прекращено вещание телеканала «Первый Ярославский».</div>
                        </div>
                        <div class="card inline alt-margins" data-flatr="news 1783">
                            <a class="card--image" href="company/novosti/pozdravlyaem-s-novym-godom-1783.html" target=""><img src="http://cdn.ntvplus.ru/files/image/01/15/03/oaf.jpg" alt="" class="card--image-img" /></a><a href="company/novosti/pozdravlyaem-s-novym-godom-1783.html" class="card--title" target="">Поздравляем с Новым годом!</a>
                            <div class="card--brief">От всей души желаем вам и вашим близким счастья в Новом году!</div>
                        </div>
                        <div class="card inline alt-margins" data-flatr="news 1782">
                            <a class="card--image" href="company/novosti/rabota-tsentrov-obsluzhivaniya-v-novogodnie-prazdniki-1782.html" target=""><img src="http://cdn.ntvplus.ru/files/image/00/04/92/3ym.png" alt="" class="card--image-img" /></a><a href="company/novosti/rabota-tsentrov-obsluzhivaniya-v-novogodnie-prazdniki-1782.html" class="card--title" target="">Работа центров обслуживания в новогодние праздники</a>
                            <div class="card--brief">Расписание работы Центров обслуживания и Абонентской службы НТВ‑ПЛЮС.</div>
                        </div>
                        <div class="card inline alt-margins" data-flatr="news 1780">
                            <a class="card--image" href="company/novosti/novye-telekanaly-na-platforme-ntv-plyus-1780.html" target=""><img src="http://cdn.ntvplus.ru/files/image/00/04/93/f52.png" alt="" class="card--image-img" /></a><a href="company/novosti/novye-telekanaly-na-platforme-ntv-plyus-1780.html" class="card--title" target="">Новые телеканалы на платформе НТВ‑ПЛЮС</a>
                            <div class="card--brief">1 января 2018 года на платформе НТВ‑ПЛЮС начнется вещание десяти новых телеканалов.</div>
                        </div>
                        <div class="card inline alt-margins" data-flatr="news 1779">
                            <a class="card--image" href="company/novosti/izmenenie-v-veschanii-ntv-plyus-1779.html" target=""><img src="http://cdn.ntvplus.ru/files/image/00/03/41/43t.jpg" alt="" class="card--image-img" /></a><a href="company/novosti/izmenenie-v-veschanii-ntv-plyus-1779.html" class="card--title" target="">Изменение в вещании НТВ‑ПЛЮС</a>
                            <div class="card--brief">На платформе НТВ‑ПЛЮС прекращается вещание нескольких каналов.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="footer--nav-line">
                <div class="container">
                    <div class="row mb">
                        <div class="col-sm-4 col-md-3">
                            <a href="#" class="footer--logo mb066"></a>
                            <div class="footer--copy">
                                <div class="footer--copy-big">rekofe.ru © 2018</div>
                                <div class="footer--copy-small">Все права сохранены.<br />Использование материалов сайта без согласования запрещено.<br /></div>
                            </div>
                        </div>
                        <div class="col-sm-4 hidden-xs col-md-3">
                            <ul class="footer--list">
                                <li class="footer--list-head"><a href="buy/index.html" class="footer--list-link">Популярные <br />неисправности</a></li>
                                <li class="footer--list-item"><a href="buy/gde-kupit.html" class="footer--list-link">Не включается</a></li>
                                <li class="footer--list-item"><a href="buy/coverage.html" class="footer--list-link">Не мелет кофе</a></li>
                                <li class="footer--list-item"><a href="buy/actions.html" class="footer--list-link">Протекает</a></li>
                                <li class="footer--list-item"><a href="buy/coverage.html" class="footer--list-link">Не мелет кофе</a></li>
                                <li class="footer--list-item"><a href="buy/actions.html" class="footer--list-link">Протекает</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 hidden-xs col-md-3">
                            <ul class="footer--list">
                                <li class="footer--list-head"><a href="channels/index.html" class="footer--list-link">Топовые бренды</a></li>
                                <li class="footer--list-item"><a href="channels/index.html" class="footer--list-link">Delonghi</a></li>
                                <li class="footer--list-item"><a href="https://ntvplus.tv/" class="footer--list-link">Jura</a></li>
                                <li class="footer--list-item"><a href="channels/archive.html" class="footer--list-link">Faema</a></li>
                                <li class="footer--list-item"><a href="channels/archive.html" class="footer--list-link">Gaggia</a></li>
                                <li class="footer--list-item"><a href="channels/archive.html" class="footer--list-link">Bork</a></li>
                                <li class="footer--list-item"><a href="channels/satellite-internet.html" class="footer--list-link">Franke</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 visible-md visible-lg">
                            <ul class="footer--list">
                                <li class="footer--list-head">
                                    <a href="#" class="footer--list-link">Проконсультируем вас</a>
                                </li>
                                <li class="footer--list-item">
                                    <form action="">
                                        <label style="width: 100%">
                                            <div class="form-group field-orderform2-phone required">
                                                <input class="form-control form-control" type="tel" name="OrderForm2[phone]" placeholder="Ваш телефон"  />
                                            </div>
                                        </label>
                                        <div class="form__row form__row_submit">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">Отправить</button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer--call-line">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-3 hidden-xs">
                            <div class="footer--call-in">Связаться с нами:</div>
                            <div class="footer--call-text">Время работы службы поддержки с 8:00 до 21:00 ежедневно</div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="footer--call-title">Москва</div>
                            <span class="call_phone_2"><a class="footer--call-phone" href="tel:+74957556789">8 495 755 67 89</a></span>
                            <div class="footer--call-title hidden-xs hidden-md hidden-lg">Россия</div>
                            <a class="footer--call-phone hidden-xs hidden-md hidden-lg" href="tel:88005556789">8 800 555 67 89</a>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 hidden-sm">
                            <div class="footer--call-title">Россия</div>
                            <a class="footer--call-phone" href="tel:88005556789">8 800 555 67 89</a>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="footer--call-title">Поделиться</div>
                            <div class="footer--call-chats"></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div id="online-zayavkamy" tabindex="-1" role="dialog" class="modal iframe fade">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" data-dismiss="modal" aria-label="Close" class="modal--close"><span class="modal--close-label visible-xs">Закрыть</span><i class="modal--close-icon"></i></a>
                        <div class="modal--title"> Онлайн заявка </div>
                    </div>
                    <div class="modal-body modal-form">
                        <form action="">
                            <input class="form-control " type="hidden" name="product" value="" />
                            <div class="form-group row mb " id="">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <label class="form--label "> Ваше телефон </label>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <input class="form-control " type="text" name="name" value="" data-fv-notempty="true" data-fv-blank="true" data-fv-notempty-message="Введите имя" />
                                </div>
                            </div>
                            <div class="mainform-b mb">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=latin,cyrillic" />
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery-1.11.3.min.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.activeForm.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery.inputmask.bundle.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/yii.validation.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/jquery-ui.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/main.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/slick.js"></script>
        <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/pr.js"></script>
    </body>
</html>