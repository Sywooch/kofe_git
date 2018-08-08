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
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <?= !empty($js['yandex']) ? $js['yandex'] : ''; ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="<?= $assets . $siteConfig['theme'] . '/'; ?>favicon.ico" type="image/x-icon">
        <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/and.css?15249142434142" type="text/css"  rel="stylesheet" />
        <link href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/main.css?152948323866623" type="text/css"  data-template-style="true"  rel="stylesheet" />
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?php
        if (!Yii::$app->user->isGuest) {
            echo '<div style="float: left; z-index: 99999;position: absolute;" class="container">';
            $domain = $_SERVER['SERVER_NAME'];
            if (isset($_GET['data']['is_service'])) {
                if (count(explode('/', Yii::$app->request->pathInfo)) > 1) {
                    echo '<a target="_blank" href="http://admin.' . $domain . '/seo/create/?url=' . Yii::$app->request->pathInfo . '&site_id=' . $siteConfig['id'] . '">Ред. эту страницу.</a>';
                } else {
                    echo '<a target="_blank" href="http://admin.' . $domain . '/seo/create/?url=' . Yii::$app->request->pathInfo . '&site_id=' . $siteConfig['id'] . '">Ред. эту страницу.</a><br>';
                    echo '<a target="_blank" href="http://admin.' . $domain . '/services/update/' . $_GET['data']['id'] . '">Ред. глобальную страницу</a>';
                }
            } else {
                echo '<a target="_blank" href="http://admin.' . $domain . '/seo/create/?url=' . Yii::$app->request->pathInfo . '&site_id=' . $siteConfig['id'] . '">Ред. эту страницу.</a><br>';
                if (!empty($_GET['data']))
                    echo '<a target="_blank" href="http://admin.' . $domain . '/page/update/' . $_GET['data']['id'] . '">Ред. глобальную страницу</a>';
            }
            echo '</div>';
        }
        ?>
        <div class="canvas js-slide">
            <header class="header header--mb0">
                <div class="header-top hide-for-tablet">
                    <div class="row">
                        <div class="col-2 col-md-12 header-top__item">
                            <div class="select select-location">
                                <div class="select__selected">Москва и Московская область</div>
                                <div class="select-list">
                                    <div class="select-list__item">
                                        <a href="#">Санкт-Петербург</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-10 col-md-12 header-top__item">
                            <nav class="nav">
                                <a class="nav__item" href="#">Цены</a>
                                <a class="nav__item" href="#">Вопрос-ответ</a>
                                <a class="nav__item" href="#">Отзывы</a>
                                <a class="nav__item" href="#">Карта ремонта</a>
                                <a class="nav__item" href="#">Вакансии</a>
                                <a class="nav__item" href="#">Контакты</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row hide-for-tablet">
                    <div class="col-12">
                        <div class="header-bottom">
                            <a class="logo hide-for-tablet" href="/">
                                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logo_mr.svg" alt="logo">
                            </a>                      
                            <div class="header-bottom__right">
                                <div class="header-bottom__large hide-for-tablet">
                                    <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row hide-for-tablet">
                    <div class="col-12">
                        <div class="nav-main__wrapper">
                            <nav class="nav-main">
                                <div class="nav-main__caption">Типы кофемашин:</div>
                                <div class="nav-main__links">
                                    <a class="nav-main__link" href="#">Эспрессо-комбайны</a>
                                    <a class="nav-main__link" href="#">Автоматические</a>
                                    <a class="nav-main__link" href="#">Полуавтоматические</a>
                                    <a class="nav-main__link" href="#">Рожковые</a>
                                    <a class="nav-main__link" href="#">Капельные</a>
                                    <a class="nav-main__link" href="#">Порционные</a>
                                    <a class="nav-main__link" href="#">Капсульные</a>
                                    <a class="nav-main__link" href="#">Чалдовые</a>
                                </div>
                                <div class="nav-main__more">
                                    Ещё               
                                    <div class="nav-main-sub"></div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-mobile">
                    <div class="row">
                        <div class="col-12 header-mobile__col">
                            <div class="hamburger js-side-toggle">
                                <div class="hamburger__item hamburger__item--top"></div>
                                <div class="hamburger__item hamburger__item--middle"></div>
                                <div class="hamburger__item hamburger__item--bottom"></div>
                            </div>
                            <a class="logo logo--mobile" href="/"> <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logo-mr.svg" alt="logo"></a>
                            <a class="phone-img--mobile contacts__link" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"></a>
                        </div>
                    </div>
                </div>
            </header>
            <?= $content; ?>
            <footer class="footer">
                <div class="footer__middle">
                    <div class="row">
                        <div class="col-3 col-md-12">
                            <a class="logo logo--mobile" href="/"> 
                                <img class="hide-for-tablet" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logo-white.svg" alt="logo">
                                <img class="hide-moretablet" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/logo-mobile-white.svg" alt="logo">
                            </a>
                            <div class="contacts">
                                <div class="contacts__item">
                                    <a class="contacts__link" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                                </div>
                                <div class="contacts__item">
                                    <p>г. Москва, м. Калужская, Профсоюзная, 88\20</p>
                                </div>
                                <div class="social-links">
                                    <a class="social-links__item social-links__item--whats-up" href="whatsapp://" target="_blank" rel="noopener">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewbox="0 0 26 26">
                                        <path class="fill" fill="#4c5365" d="M0 25.19l1.76-6.26A12.59 12.59 0 0 1 12.6 0a12.58 12.58 0 0 1 0 25.13 12.6 12.6 0 0 1-6.15-1.6zm6.78-3.95l.39.24A10.44 10.44 0 1 0 12.6 2.13 10.45 10.45 0 0 0 3.81 18.2l.26.4-1.01 3.6z"></path>
                                        <path class="fill" fill="#4c5365" d="M9.82 7.05L9.01 7a.98.98 0 0 0-.7.24 3.66 3.66 0 0 0-1.22 1.87c-.29 1.29.15 2.87 1.31 4.45a13.2 13.2 0 0 0 7.13 5.18c1.23.35 2.2.12 2.95-.36.59-.38.99-.98 1.14-1.67l.13-.61a.43.43 0 0 0-.23-.47l-2.76-1.27a.43.43 0 0 0-.51.12l-1.08 1.41c-.09.1-.23.15-.35.1a8.51 8.51 0 0 1-4.59-3.92.34.34 0 0 1 .04-.35l1.04-1.2c.1-.12.13-.29.07-.44L10.19 7.3a.4.4 0 0 0-.37-.25z"></path>
                                        </svg>
                                    </a>
                                    <a class="social-links__item social-links__item--telegrem" href="telegram://" target="_blank" rel="noopener">
                                        <svg id="SVGDoc" width="44" height="44" viewbox="0 0 44 44">
                                        <defs>
                                        <path id="Path-1" d="M183.42007,5814.2579c-0.15082,-0.07874 -0.45603,0.12782 -0.45603,0.12782l-10.68404,6.77443c0,0 1.54717,5.01564 1.62866,5.30451c0.09512,0.40884 0.45603,0.57519 0.45603,0.57519l0.39088,-4.66541l8.72964,-7.73308c0,0 0.08567,-0.30473 -0.06514,-0.38346z"></path>
                                        <path id="Path-2" d="M174.74746,5822.31c0,0 -0.43056,4.40977 -0.45603,4.6015c-0.02547,0.19167 0.29368,0.29143 0.58632,0.06391c0.95036,-0.73886 2.73616,-2.55639 2.73616,-2.55639z"></path>
                                        <path id="Path-3" d="M185.43777,5811.19007c-0.52821,0.15434 -5.37479,1.91282 -9.77199,3.64285c-3.89394,1.53211 -7.12619,2.92023 -7.42671,3.06767c-0.97661,0.31936 -1.99355,1.01316 -0.39088,1.72557c0.75127,0.3685 4.42997,1.53383 4.42997,1.53383c0,0 10.37127,-6.57862 10.68404,-6.77444c0.47909,-0.31986 0.79147,-0.02914 0.32573,0.44737c-0.20625,0.19582 -8.5342,7.47745 -8.5342,7.47745c0.14437,-0.00154 6.56886,4.81956 6.90554,5.17669c1.10599,0.90285 2.02469,0.41151 2.21498,-0.57519c0.03942,-0.17799 1.07844,-4.46685 1.88925,-8.43609c0.58632,-2.87032 1.05707,-5.6989 1.17264,-6.32707c0.16958,-1.06026 -0.22684,-1.31207 -1.49837,-0.95864z"></path>
                                        </defs>
                                        <g transform="matrix(1,0,0,1,-156,-5797)">
                                        <use class="fill" xlink:href="#Path-1" fill="#4c5365" fill-opacity="1"></use>
                                        <use class="fill" xlink:href="#Path-2" fill="#4c5365" fill-opacity="1"></use>
                                        <use class="fill" xlink:href="#Path-3" fill="#4c5365" fill-opacity="1"></use>
                                        </g>
                                        </svg>
                                    </a>
                                    <a class="social-links__item social-links__item--viber" href="viber://" target="_blank" rel="noopener">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewbox="0 0 25 25">
                                        <path class="fill" fill="#4c5365" d="M24.29 5.92l-.01-.03c-.57-2.32-3.16-4.82-5.54-5.33l-.03-.01a31 31 0 0 0-11.6 0l-.03.01c-2.37.51-4.97 3.01-5.54 5.33l-.01.03a22.72 22.72 0 0 0 0 9.78l.01.03c.55 2.22 2.95 4.6 5.24 5.26v2.59c0 .94 1.14 1.4 1.79.72l2.63-2.73a30.63 30.63 0 0 0 7.51-.5l.03-.01c2.38-.52 4.97-3.01 5.54-5.33l.01-.03c.71-3.24.71-6.54 0-9.78zm-2.08 9.31c-.38 1.52-2.35 3.4-3.91 3.75-2.05.39-4.11.55-6.17.5a.15.15 0 0 0-.11.04l-1.92 1.97-2.04 2.09a.24.24 0 0 1-.41-.16v-4.3a.14.14 0 0 0-.12-.14c-1.57-.35-3.53-2.23-3.92-3.75a20.59 20.59 0 0 1 0-8.84C4 4.87 5.96 2.99 7.53 2.64c3.57-.68 7.19-.68 10.77 0 1.56.35 3.53 2.23 3.91 3.75.64 2.93.64 5.91 0 8.84z"></path>
                                        <path class="fill" fill="#4c5365" d="M16.6 16.84c-.24-.08-.47-.13-.68-.21-2.2-.92-4.23-2.1-5.84-3.91a15.3 15.3 0 0 1-2.23-3.41c-.29-.59-.53-1.19-.78-1.79-.22-.55.11-1.12.46-1.53.32-.39.75-.69 1.2-.91.36-.17.71-.07.97.23a12.8 12.8 0 0 1 1.49 2.09c.26.47.19 1.04-.28 1.35a4.03 4.03 0 0 0-.56.51.71.71 0 0 0-.05.62 5.56 5.56 0 0 0 3.13 3.46c.25.1.51.23.8.19.49-.05.65-.59.99-.87.34-.28.76-.28 1.13-.05.36.23.71.47 1.06.72.34.24.68.48.99.76.31.27.41.62.24.98a3.33 3.33 0 0 1-1.42 1.57c-.19.1-.41.13-.62.2-.24-.08.21-.07 0 0zM15.14 9.49c-.24 0-.37-.13-.39-.35l-.07-.46c-.08-.3-.23-.57-.48-.75a1.18 1.18 0 0 0-.39-.19c-.18-.05-.36-.04-.54-.08-.19-.05-.3-.2-.26-.38.02-.16.18-.29.36-.28 1.12.08 1.92.66 2.03 1.98.01.09.02.19 0 .27-.04.16-.15.23-.26.24-.24 0 .11-.01 0 0z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a class="button button--send  js-popup" href="#" data-container="#popup" data-content="/include/popup.php?ref=www.mr-master.ru%2F">Вызвать мастера</a>
                            </div>
                        </div>
                        <div class="col-9 hide-for-tablet">
                            <div class="row nav-gray">
                                <div class="col-4 nav-gray__group">
                                    <h5 class="nav-gray__caption">Популярные неисправности</h5>
                                    <ul class="nav-gray__list">
                                        <li class="nav-gray__item"><a class="nav-gray__link" href="service/remont-stiralnih-mashin/index.html">Не делает пену</a></li>
                                        <li class="nav-gray__item"><a class="nav-gray__link" href="service/refrigerator/index.html">Не включается</a></li>
                                        <li class="nav-gray__item"><a class="nav-gray__link" href="service/tv/index.html">Не подаёт воду</a></li>
                                        <li class="nav-gray__item"><a class="nav-gray__link" href="service/dish/index.html">Не мелет кофе</a></li>
                                        <li class="nav-gray__item"><a class="nav-gray__link" href="service/cabel/index.html">Протекает</a></li>
                                    </ul>
                                </div>
                                <div class="col-4 nav-gray__group">
                                    <h5 class="nav-gray__caption">Популярные бренды</h5>
                                    <ul class="nav-gray__list">
                                        <li class="nav-gray__item"><a class="nav-gray__link" href="price/index.html">Jura</a></li>
                                        <li class="nav-gray__item"><a class="nav-gray__link" href="service/remont-stiralnih-mashin/map/index.html">Bosch</a></li>
                                        <li class="nav-gray__item"><a class="nav-gray__link" href="answer/index.html">Delonghi</a></li>
                                        <li class="nav-gray__item"><a class="nav-gray__link" href="advices/index.html">Saeco</a></li>
                                        <li class="nav-gray__item"><a class="nav-gray__link" href="response/index.html">Siemens</a></li>
                                    </ul>
                                </div>
                                <div class="col-4 nav-gray__group">
                                    <h5 class="nav-gray__caption">Компания</h5>
                                    <ul class="nav-gray__list">
                                        <li class="nav-gray__item"><a class="nav-gray__link" href="vacancy/index.html">О компании</a></li>
                                        <li class="nav-gray__item"><a class="nav-gray__link" href="contact/index.html">Вопросы и Ответы</a></li>
                                        <li class="nav-gray__item"><a class="nav-gray__link" href="contact/index.html">Контакты</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="row">
                        <div class="col-12">
                            <div class="counter"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright">
                                <div class="copyright__text">© «Mr-Coffee», 2008-2018 год.</div>
                                <div class="copyright__text">Все права защищены</div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <aside class="aside js-slide js-slide-aside">
            <div class="select select-location select-location--aside">
                <div class="select__selected">Москва и Московская область</div>
                <div class="select-list">
                    <div class="select-list__item">
                        <a href="#">Санкт-Петербург</a>
                    </div>
                </div>
            </div>
            <nav class="side-menu">
                <a class="side-menu__item side-menu__item--submenu">Услуги по ремонту</a>
                <div class="sub-menu">
                    <a class="side-menu__item  sub-menu__item" href="#">Стиральные машины</a>
                    <a class="side-menu__item  sub-menu__item" href="#">Посудомоечные машины</a>
                    <a class="side-menu__item  sub-menu__item" href="#">Холодильники</a>
                    <a class="side-menu__item  sub-menu__item" href="#">Телевизоры</a>
                    <a class="side-menu__item  sub-menu__item" href="#">Прокладка кабеля</a>
                </div>
                <a class="side-menu__item" href="#">Цены</a>
                <a class="side-menu__item" href="#">Вопрос-ответ</a>
                <a class="side-menu__item" href="#">Отзывы</a>
                <a class="side-menu__item" href="#">Карта ремонта</a>
                <a class="side-menu__item" href="#">Вакансии</a>
                <a class="side-menu__item" href="#">Контакты</a>
            </nav>
        </aside>
        <div class="popup-bg js-popup-bg">
            <div class="popup form-popup" id="popup">
                <div class="popup__close popup__close--form js-popup-close">
                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/decorative/close_red.svg" alt="close">
                </div>
                <div class="popup__loaded js-popup-loaded">
                    <div class="form form-popup js-ajax">
                        <h3 class="form__title">Заявка на ремонт (-5%)</h3>
                        <form name="SIMPLE_FORM_1" action="/include/popup.php?ref=www.mr-master.ru%2F" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="sessid" id="sessid" value="ff8b3abcf13034068f87f350bc926bad" class="focus"><input type="hidden" name="WEB_FORM_ID" value="1" class="focus">   
                            <input type="hidden" name="web_form_apply" value="Y" class="focus">
                            <div class="error-message-form"></div>
                            <div class="row">
                                <label class="form-lbl col-6 col-md-12  hide-for-tablet">
                                    <span class="form-lbl__text">Как вас зовут*</span>
                                    <input type="text" class="inputtext" name="form_text_1" value="" size="30">                  
                                </label>
                                <label class="form-lbl col-6 col-md-12  js-inputmask-phone required">
                                    <span class="form-lbl__text">Телефон*</span>
                                    <input type="text" class="inputtext" name="form_text_2" value="" size="20" placeholder="+7 (___) ___ __-__">                  
                                </label>
                                <label class="form-lbl hide-moretablet col-md-12">
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
                                            <option value="4"> Ремонт стиральной машины</option>
                                            <option value="5">Ремонт холодильника</option>
                                            <option value="7">Ремонт телевизоров</option>
                                            <option value="8">Ремонт посудомоечных машин</option>
                                            <option value="9">Прокладка телевизионного кабеля</option>
                                            <option value="10">Ремонт микроволновых печей</option>
                                            <option value="11">Подключение бытовой техники</option>
                                        </select>
                                    </div>
                                </label>
                                <label class="hide-moretablet col-md-12 form-lbl mb0">
                                    <span class="form-lbl__text">Описание поломки</span>
                                    <textarea name="form_textarea_6" class="form__textarea" placeholder="Опишите проблему..."></textarea>
                                </label>
                                <input type="hidden" name="form_text_24" value="945536917.1531898309" class="focus">
                                <input type="hidden" name="form_text_25" value="utm_source=; utm_medium=; utm_campaign=; utm_content=; utm_term=" class="focus">
                                <input type="text" value="" name="text2" style="display: none;">
                                <input type="hidden" name="form_text_27" value="www.mr-master.ru/" class="focus">
                                <div class="mt20 col-12">
                                    <button class="col-4 col-md-12 button button--wide g-recaptcha" data-sitekey="6Le0AmYUAAAAAJPvqwRgds2_DrTp6pWf2RyrZdFC" data-callback="{alert('captch');}" name="web_form_submit" type="submit">Отправить</button>
                                </div>
                                <div class="checkbox-field checkbox-field--size_s text-theme-black mt15">Согласен на обработку данных. &nbsp; <a class="agreem" href="/privacy/" target="_blank">Соглашение</a></div>
                            </div>
                        </form>
                        <div class="row form__success">
                            <div class="col-12 text-center">
                                <h3>Ожидайте звонка!</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/main.js?" async="async"></script>
    </body>
</html>