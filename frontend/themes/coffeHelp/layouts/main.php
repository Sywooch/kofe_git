<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

//use ifixme\Test;

AppAsset::register($this);
$assets = '/' . Yii::getAlias('@web');
$isHome = Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index' ? true : false;
$isModelPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'model' ? true : false;
$isBrandPage = Yii::$app->controller->id == 'list' && Yii::$app->controller->action->id == 'brand' ? true : false;
$siteConfig = app\components\CController::getSiteConfig();
$js = app\components\CController::$js;
?>
<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Ремонт кофемашин в Москве</title>   
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/main.css">
      <link rel="stylesheet" href="<?= $assets . $siteConfig['theme'] . '/'; ?>css/main2.css">
      <script src="<?= $assets . $siteConfig['theme'] . '/'; ?>js/main.js" async></script>
   </head>
   <body role="document">
      <div id="top-bar" class="navbar navbar-default navbar-fixed-top">
         <div class="container">
            <div class="navbar">
               <div class="col-xs-2">
                  <div class="navbar-logo"><!--<img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/logo-navbar.png">--></div>
               </div>
               <div class="col-xs-7">
                  <div class="navbar-top-form">
                     <form>
                        <div class="col-xs-3"> <span style="color: #4c5052; font-size: 13px;">Обратный звонок</span></div>
                        <div class="col-xs-5"> <input id="phone_number_top_nav" type="text" class="form-control phone text" placeholder="Номер телефона" aria-describedby="sizing-addon1" name="phone"> <button type="button" class="btn btn-small call-master">></button></div>
                        <div class="col-xs-4"> <span style="color: #b4a588; font-size: 13px;">Перезвоним за минуту!</span></div>
                     </form>
                  </div>
               </div>
               <div class="col-xs-3">
                  <div class="navbar-phone">
                     <span class="phone_big_top">
                        <nobr><a href="tel:+74951339049" class="phone-c">+7 (495) 133-90-49</a></nobr>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="bg">
         <div class="sliderbg">
            <section class="header 1">
               <div class="row row_top_menu">
                  <div class="container">
                     <ul class="top_menu_big">
                        <li><a href="#">Услуги и цены</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Гарантия</a></li>
                        <li><a href="#">Контакты</a></li>
                     </ul>
                     <div class="top_menu_right_info"> Ваш регион: Москва и Подмосковье</div>
                  </div>
               </div>
               <div class="container">
                  <div class="row row_header_line">
                     <div class="logo"> <a href="/"></a></div>
                     <div class="top-menu-container">
                        <div class="clock-work-conteiner">
                           <div class="clock-work l"> Работаем без перерывов и выходных<br> <span>с 7:00 до 22:00</span></div>
                           <div class="clock-work r checkin-visit"> Выезжаем по всей Москве<br> и до 30 км от МКАД.</div>
                        </div>
                     </div>
                     <div class="header-ordering">
                        <div class="phone_block_two"> <span class="text">Бесплатный выезд мастера</span> <span class="phone"><a href="tel:+74951339049"><span class="header-phone-code-part">+7 (495) </span> <span class="header-phone-number-part"> 133-90-49</span></a></span> <span class="phone phone2"><a href="tel:+79299468413"><span class="header-phone-code-part">+7 (929) </span> <span class="header-phone-number-part"> 946-84-13</span></a></span></div>
                     </div>
                  </div>
               </div>
            </section>
            <div class="container theme-showcase" role="main">
               <section class="second_navigation" style="height: 78px;">
                  <div class="navbar navbar-second">
                     <div class="container">
                        <div class="navbar">
                           <ul class="nav navbar-nav">
                              <li><a class="coffee-machine" href="#">Типы кофемашин</a></li>
                              <li><a class="lists" href="#">Услуги</a></li>
                              <li><a class="tools" href="#">Неисправности</a></li>
                           </ul>
                           <ul class="nav navbar-nav navbar-right">
                              <li class="order-now"> <a href="#call-modal-form">Заказать ремонт</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="slider">
                  <div class="row">
                     <div class="container">
                        <div class="carousel-inner">
                            <img style="margin-top: 65px;" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/slider/slider1.jpg" alt="Оригинальные запчасти" width="820">
                            <div class="carousel-caption">
                               <h1>Ремонт кофемашин в Москве с гарантией до 1 года!</h1>
                               <p>Мы ремонтируем технику, используя только оригинальные запчасти, рекомендованные производителями. На услуги и детали даем гарантию, потому что уверены в качестве на 100%.</p>
                            </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="who_main">
                  <div class="row sub-level">
                     <div class="col-sm-4">
                        <h3><i>Работаем</i> <span>оперативно</span></h3>
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/who/clock_icon.png">
                        <p> Принимаем заявку, проводим диагностику, предлагаем решения – за 1 час.</p>
                     </div>
                     <div class="col-sm-4">
                        <h3><i>Работаем с</i> <span>гарантией</span></h3>
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/who/contract_icon.png">
                        <p> Если возникает гарантийный случай — все бесплатно исправляем.</p>
                     </div>
                     <div class="col-sm-4">
                        <h3><i>Цены не</i> <span>задираем</span></h3>
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/who/commerse_icon.png">
                        <p> Качественный ремонт не всегда дорогой, и мы тому подтверждение.</p>
                     </div>
                  </div>
                  <div class="row service3">
                      <a class="col-sm-4 panel-body" style="background: url(<?= $assets . $siteConfig['theme'] . '/'; ?>img/bg_kofe1.png) no-repeat;" href="#">
                        <div class="bg_line">
                           <p>Не включается</p>
                        </div>
                    </a>
                    <a class="col-sm-4 panel-body" style="background: url(<?= $assets . $siteConfig['theme'] . '/'; ?>img/bg_kofe1.png) no-repeat;" href="#">
                        <div class="bg_line">
                           <p>Не включается</p>
                        </div>
                    </a>
                    <a class="col-sm-4 panel-body" style="background: url(<?= $assets . $siteConfig['theme'] . '/'; ?>img/bg_kofe1.png) no-repeat;" href="#">
                        <div class="bg_line">
                           <p>Не включается</p>
                        </div>
                    </a>
                    <a class="col-sm-4 panel-body" style="background: url(<?= $assets . $siteConfig['theme'] . '/'; ?>img/bg_kofe1.png) no-repeat;" href="#">
                        <div class="bg_line">
                           <p>Не включается</p>
                        </div>
                    </a>
                    <a class="col-sm-4 panel-body" style="background: url(<?= $assets . $siteConfig['theme'] . '/'; ?>img/bg_kofe1.png) no-repeat;" href="#">
                        <div class="bg_line">
                           <p>Не включается</p>
                        </div>
                    </a>
                    <a class="col-sm-4 panel-body" style="background: url(<?= $assets . $siteConfig['theme'] . '/'; ?>img/bg_kofe1.png) no-repeat;" href="#">
                        <div class="bg_line">
                           <p>Не включается</p>
                        </div>
                    </a>
                  </div>
               </section>
               <section class="brend my">
                   <h3>Поддерживаем бренды</h3>
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/aeg.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/ardo.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/asko.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/beko.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/bosch.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/brandt.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/candy.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/electrolux.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/elenberg.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/gorenje.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/hansa.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/hoover.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/hotpoint-ariston.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/indesit.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/kaiser.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/kuppersberg.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/kuppersbusch.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/lg.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/miele.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/neff.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/samsung.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/siemens.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/smeg.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/vestel.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/vestfrost.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/whirlpool.gif"/></a> 
                   <a href="#" class="brand-page-link"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/brands/md/zanussi.gif"/></a>
                   <p class="moar-brands">и других бренды.</p>
                   <button class="all-brands-show">Все бренды <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/expand-arrow.png"/></button>
                </section>
            </div>
         </div>
      </div>
      <div class="container theme-showcase" role="main">
         <hr class="big_line">
         <section class="about">
            <div class="row">
               <div class="row">
                  <div class="col-xs-12">
                     <h2>Какие поломки можно устранить в нашем сервисном центре</h2>
                     <div style="text-align: justify;">В случае, если ваша кофемашина всё-таки вышла из строя, то не стоит искать причины поломки самостоятельно. Вы можете нанести еще больший вред вашему любимому устройству, чем серьезно усложните работу профессионалам. Лучшим вариантом, будет обратиться в наш сервисный центр. Мы способны справиться со следующими неисправностями:&nbsp;</div><ul><li style="text-align: justify;">не включается или не запускается нужная программа;</li><li style="text-align: justify;">протекание;</li><li style="text-align: justify;">не мелет кофейные зерна;</li><li style="text-align: justify;">проблемы с работой капучинатора;</li><li style="text-align: justify;">проблемы с подачей кофе;</li><li style="text-align: justify;">не нагревается до необходимой температуры.</li></ul><p style="text-align: justify;">Оформите заявку на бесплатное бронирование, позвоните и перечислите менеджеру неисправности вашей кофемашины, который передаст всю информацию мастеру. Специалист нашего сервисного центра бесплатно диагностирует и за обговоренную сумму отремонтирует машину, имеющую поломку любой сложности.</p><h3 style="text-align: justify;">Виды выполняемых работ</h3><div style="text-align: justify;">После проведения диагностических работ, специалисты предлагают одну из следующих услуг:</div><ul><li style="text-align: justify;">Мелкий ремонт - представляет из себя замену шлангов, уплотнителей, прокладок, патрубков, штуцеров и предполагает частичный разбор кофейного оборудования.</li><li style="text-align: justify;">Капитальный ремонт - подразумевает починку или замену блоков заваривания, нагрева, парообразования и платы управления и связан с полным разбором кофеварочного механизма.</li><li style="text-align: justify;">Ремонт с целью профилактики с заменой ножей в кофемольном отсеке и замене помпы не предполагающий разбора.</li><li style="text-align: justify;">Сервисное обслуживание - проведение очистки от накипи, масел, наладка программного обеспечения машины.</li></ul><h3 style="text-align: justify;">Стоимость наших услуг в Москве</h3><div style="text-align: justify;">Обращаясь в наш сервисный центр, клиент получает качественный ремонт по оптимальным ценам и в сжатые&nbsp;сроки. Мы предлагаем выгодные скидки для постоянных клиентов и тем, кто обратился к нам впервые.&nbsp;</div><div style="text-align: justify;">&nbsp;</div><div style="text-align: justify;">Существуют четыре фактора, из которых складывается сумма за ремонт кофемашины. Это - вид и модель агрегата, сложность / легкость поломки, цена на запасные комплектующие и срочность заказа.</div><div style="text-align: justify;">&nbsp;</div><div style="text-align: justify;">Обращайтесь в наш сервисный центр, и ваша кофемашина будет вам благодарна, так как уже завтра она будет отлично работать и располагаться на своем привычном месте!</div>
                  </div>
               </div>
            </div>
         </section>
         <section class="order">
            <div class="row">
               <div class="col-xs-5 form_order_bg">
                  <form>
                      <div id="form_order" class="order_form">
                         <h3>Онлайн-заказ</h3>
                         <div class="row">
                            <div class="col-xs-12" style="padding-right: 14px;">
                               <div class="input-group-lg"> <input id="order_name" type="text" class="form-control" placeholder="Как вас зовут?" name="name"></div>
                               <br>
                               <div class="input-group-lg"> <input id="order_phone" type="text" class="form-control" placeholder="Ваш номер телефона *" name="phone"></div>
                               <br>
                            </div>
                            <div class="col-xs-12">
                               <div class="input-group-lg"><textarea id="order_text" type="text" class="form-control" rows="4" name="comment" placeholder="Опишите пожалуйста, что нужно сделать" style="height: 110px;"></textarea></div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-xs-12">
                               <hr>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-xs-12" style="text-align: center;"> 
                                <button type="button" class="btn btn-default call-master">ОТПРАВИТЬ ЗАЯВКУ</button>
                            </div>
                            <div class="col-xs-12" style="text-align: center;">
                               <p>Работаем с физическими и юридическими лицами. Наличный и безналичный расчет.</p>
                            </div>
                         </div>
                      </div>
                  </form>
               </div>
               <div class="col-xs-7 goroda">
                   <h3>Обслуживаемые города МО</h3>
                   <div class="row">
                        <a href="#">Балашиха</a>
                        <a href="#">Химки</a>
                        <a href="#">Подольск</a>
                        <a href="#">Королёв</a>
                        <a href="#">Люберцы</a>
                        <a href="#">Мытищи</a>
                        <a href="#">Электросталь</a>
                        <a href="#">Железнодорожный</a>
                        <a href="#">Коломна</a>
                        <a href="#">Одинцово</a>
                        <a href="#">Красногорск</a>
                        <a href="#">Серпухов</a>
                        <a href="#">Орехово-Зуево   </a>
                        <a href="#">Щёлково</a>
                        <a href="#">Домодедово</a>
                        <a href="#">Жуковский</a>
                        <a href="#">Сергиев Посад</a>
                        <a href="#">Пушкино</a>
                        <a href="#">Раменское</a>
                        <a href="#">Ногинск</a>
                   </div>
                   <div class="map">
                       <iframe src="https://api-maps.yandex.ru/frame/v1/-/CZd6mYiq" width="100%" height="282" frameborder="0"></iframe>
                   </div>
               </div> 
            </div>
         </section>
      </div>
      <footer class="bs-docs-footer" role="contentinfo">
         <div class="container">
            <div class="row">
               <div class="col-xs-4">
                  <h5>Ремонт кофемашин</h5>
                  <div class="row">
                     <div class="col-xs-12">
                        <ul>
                           <li><a href="#">Ремонт кофемашин Gaggia</a></li>
                           <li><a href="#">Ремонт кофемашин Jura</a></li>
                           <li><a href="#">Ремонт кофемашин Melitta</a></li>
                           <li><a href="#">Ремонт кофемашин Saeco</a></li>
                           <li><a href="#">Все ремонтируемые бренды</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xs-5">
                  <h5>О компании</h5>
                  <div class="row">
                     <div class="col-xs-5">
                        <ul>
                           <li><a href="#">Вопросы ответы</a></li>
                           <li><a href="#">Диагностика</a></li>
                           <li><a href="#">Срочный ремонт</a></li>
                           <li><a href="#">Доставка</a></li>
                        </ul>
                     </div>
                     <div class="col-xs-5">
                        <ul>
                           <li><a href="#">Отзывы</a></li>
                           <li><a href="#">Оплата</a></li>
                           <li><a href="#">Пользовательское соглашение</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xs-3">
                  <h5>Контактная информация</h5>
                  <p><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/icons/mark.png" style="margin-right: 15px; margin-bottom: 15px; float: left;">ул. Народного Ополчения, 34, с.2, офис 105</p>
                  <div class="footer-phone-cont">
                     <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/icons/phone_footer.png" style="margin-right: 15px;"/>
                     <div class="footer-phone">
                        <nobr> <a href="tel:+74951339049" class="phone-c">+7 (495) 133-90-49</a></nobr>
                        <nobr> <a href="tel:+79299468413" class="phone-c">+7 (929) 946-84-13</a></nobr>
                     </div>
                  </div>
               </div>
            </div>
            <hr>
            <div class="row service-info"> © 2017 </div>
         </div>
         </div>
         <div id="caller_widget" data-toggle="modal" data-target="#callerModal">
            <div id="caller_widget_dribble">
               <div id="caller_widget_fade"></div>
               <div id="caller_widget_button">
                  <div id="caller_widget_button_icon"></div>
               </div>
            </div>
         </div>
         <div class="modal fade" id="callerModal" role="dialog">
            <div class="modal-dialog caller">
               <div class="modal-content">
                  <div id="caller_close"></div>
                  <div class="modal-body">
                     <form>
                        <h3>Хотите, мы вам перезвоним?</h3>
                        <p>Для вызова мастера или подробной консультации оставьте ваш номер телефона</p>
                        <div class="row"> <input name="phone" id="caller_phone" type="text" class="form-control" placeholder="Номер телефона"> <button id="caller_button" type="submit" class="btn btn-default">Перезвоните мне</button></div>
                        <div class="info-text">Свяжемся за 2 минуты</div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="remodal" data-remodal-id="call-modal-form">
            <div id="form-modal">
               <div class="modal-content">
                  <p class="modal-title">Вызов мастера</p>
                  <p class="modal-desc">Мы перезвоним вам в течение минуты для подтверждения заказа.</p>
                  <form id="form-modal-form"> 
                    <input type="text" name="phone" placeholder="Номер телефона">
                    <input type="button" class="call-master" value="Вызвать мастера"></form>
                  <img data-remodal-action="close" class="remodal-close" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/close_modal.png"/>
               </div>
            </div>
         </div>
         <div class="remodal" data-remodal-id="call-modal-success">
            <div class="modal-content">
               <p class="modal-title">Ваша заявка принята</p>
               <p class="modal-desc">Мы перезвоним вам в течение 1 минуты</p>
               <input type="submit" data-remodal-action="confirm" class="call-master remodal-confirm" value="Закрыть"> <img data-remodal-action="close" class="remodal-close" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/close_modal.png"/>
            </div>
         </div>
         <div class="remodal" data-remodal-id="call-modal-error">
            <div class="modal-content">
               <p class="modal-title">Ошибка</p>
               <p class="modal-desc">Проверьте введенный Вами номер. Возможно, вы уже оставили заявку с этого номера.</p>
               <input type="submit" data-remodal-action="confirm" class="call-master remodal-confirm" value="Закрыть"> <img data-remodal-action="close" class="remodal-close" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/close_modal.png"/>
            </div>
         </div>
      </footer>
   </body>
</html>