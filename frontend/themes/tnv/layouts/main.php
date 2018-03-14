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
        <?= $content; ?>
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