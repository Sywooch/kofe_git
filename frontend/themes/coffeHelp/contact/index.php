<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<div class="container theme-showcase" role="main">
    <section class="breadcrumbs">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li>Контактная информация</li>
            </ol>
        </div>
        <div class="row">
            <h1> Контактная информация</h1>
        </div>
    </section>
    <section class="who who-contacts">
        <div class="row">
            <div class="col-sm-9 left-col">
                <h3>Телефон и почта</h3>
                <div class="row contacts-container">
                    <div class="col-lg-6 l">
                        <p>Единый справочный телефон</p>
                        <div class="phone one"> <a href="tel:+74951339049" class="phone-h"><span class="header-phone-code-part">+7 (495) </span> <span class="header-phone-number-part"> 133-90-49</span></a></div>
                        <a href="mailto:service@technobit24.ru"><span>service@technobit24.ru</span></a>
                    </div>
                    <div class="col-lg-6 r"> Сервисный центр &laquo;Технобыт&raquo;<br/> Работаем с 7:00 до 22:00, без выходных<br/> Наши специалисты выезжают на заказы по всей Москве и до 30 км от МКАД</div>
                </div>
                <div class="row alert"> <img src="../ui/img/icons/alert-sign.png" alt=""/> Заявки на ремонт принимаются каждый день, без выходных и праздников</div>
                <section class="section_form_order_bottom">
                    <div class="form-order-cont">
                        <span class="form-order-title">заказать звонок</span>
                        <form> <input type="text" placeholder="Как вас зовут?" name="name"> <input type="text" placeholder="Номер телефона" name="phone"> <input type="submit" class="call-master" value="Отправить"></form>
                        <span class="form-order-desc">Мы перезвоним вам в течение 5 минут</span>
                    </div>
                </section>
                <h3 class="title-mar" style="margin-top:40px;">Выезд мастера</h3>
                <p>Чтобы сэкономить свое время, вы можете вызвать мастера на дом. Это абсолютно бесплатная услуга. Наш мастер приедет к вам в течение 1 часа. Если ремонт невозможно осуществить на выезде, мы бесплатно доставим вашу технику в сервисный центр. Таким образом, вы получите:</p>
                <ul class="how_to_order_list">
                    <li>бесплатный выезд мастера;</li>
                    <li>бесплатную доставку в сервисный центр;</li>
                    <li>экономию времени и сил</li>
                </ul>
                <h3 class="title-mar">Центральный офис</h3>
                <p>Основной офис компании находится по адресу: ул. Народного Ополчения, 34, с.2, офис 105. Просим наших клиентов и партнеров заранее сообщать о визите по телефону.</p>
                <div id="map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A151d09ce446dcefca9122e9b82c2071710cff169157caa69dff14efea2cbcc03&amp;width=100%25&amp;height=460&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
            <div class="col-sm-3 right-col">
                <section class="sidebar">
                    <div class="tb_sidebar_cont">
                        <span class="tb_sidebar_title">Нас выбирают, потому что:</span>
                        <div class="tb_sidebar_item">
                            <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">выезд и диагностика — 0 руб</span> <span class="tb_sidebar_extra_text">Определим стоимость ремонта.</span></div>
                            <img class="tb_sidebar_item__img" src="img/%21mini_page/coins.png">
                        </div>
                        <div class="tb_sidebar_item">
                            <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">фирменные запчасти</span> <span class="tb_sidebar_extra_text">От официальных поставщиков.</span></div>
                            <img class="tb_sidebar_item__img" src="img/%21mini_page/washer.png">
                        </div>
                        <div class="tb_sidebar_item">
                            <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">гарантия на все работы</span> <span class="tb_sidebar_extra_text">Выдаем квитанцию с гарантийным талоном.</span></div>
                            <img class="tb_sidebar_item__img" src="img/%21mini_page/shield.png">
                        </div>
                        <div class="tb_sidebar_item">
                            <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">работаем ежедневно</span> <span class="tb_sidebar_extra_text">Даже в выходные и праздники.</span></div>
                            <img class="tb_sidebar_item__img" src="img/%21mini_page/calendar.png">
                        </div>
                        <div class="reviews_sidebar">
                            <h4>Отзывы</h4>
                            <div class="review_block">
                                <div class="title">Ремонт стиральной машины</div>
                                <div class="text">Огромное спасибо мастеру Евгению за ремонт моей посудомоечной машины</div>
                                <div class="name">Светлана, 24.03.2017</div>
                            </div>
                            <div class="review_block">
                                <div class="title">Ремонт стиральной машины</div>
                                <div class="text">Неплохой сервис, оперативно приехали, сделали ремонт. Все устроило</div>
                                <div class="name">Александр, 05.05.2017</div>
                            </div>
                        </div>
                        <form class="tb_sidebar_form"> 
                            <img src="img/icons/sidebar_head.png"> 
                            <span class="tb_sidebar_title">Бесплатная консультация</span> 
                            <span class="tb_sidebar_extra_text">Не уверены в заказе, обратитесь за консультацией.</span> 
                            <input type="text" name="phone" placeholder="Номер телефона">
                            <input type="button" class="call-master" value="Отправить">
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section class="what_to_do">
        <div class="col-xs-12" style="background: url('img/what-to-do/dishwasher.png') bottom left no-repeat #f4f6f6;">
            <div class="row">
                <h3>Что делать, если сломалась посудомоечная машина?</h3>
                <p>Качественный сервис и правильное использование обеспечат посудомоечной машине длительный срок службы. Наши специалисты отремонтируют технику и проконсультируют вас по ее эксплуатации.</p>
                <p>Оформите заявку на ремонт, заполнив <a href="#form_order">форму</a> на сайте или позвонив по телефону   <a class="phone-common lptracker_phone"></a>. Мы получаем вашу заявку, согласовываем время выезда мастера.</p>
            </div>
        </div>
    </section>
    <section class="how_to_order">
        <div class="inner_how_to_order">
            <div class="col-xs-12">
                <h3>Как заказать ремонт посудомоечной машины?</h3>
            </div>
            <div class="col-xs-3">
                <div class="row">
                    <h4>1.</h4>
                    <p>Мы получаем вашу заявку, согласовываем время выезда мастера.</p>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="row">
                    <h4>2.</h4>
                    <p>В назначенное время мастер выезжает к вам домой для диагностики неисправного прибора, определяет причину поломки, предлагает варианты решения проблемы.</p>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="row">
                    <h4>3.</h4>
                    <p>В случае вашего согласия мастер незамедлительно приступает к ремонту. Ремонт осуществляется оперативно на месте.</p>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="row">
                    <h4>4.</h4>
                    <p>После окончания ремонта мастер выписывает вам гарантийный талон на произведенные работы и установленные детали.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sale" data-speed="3">
        <h3>Мы ценим наших клиентов, поэтому<br>предоставляем скидку 15%</h3>
        <div class="row">
            <div class="col-xs-4">
                <p>При повторном обращении<br>в нашу компанию</p>
            </div>
            <div class="col-xs-4">
                <p>На ремонт двух и более бытовых приборов</p>
            </div>
            <div class="col-xs-4">
                <p>Пенсионерам и многодетным семьям</p>
            </div>
        </div>
    </section>
</div>
</div>
<div class="container theme-showcase" role="main">
    <hr class="big_line">
    <section class="about">
        <div class="row">
            <h3>Поддерживаем качество сервиса на уровне мировых стандартов</h3>
            <div class="row">
                <div class="col-xs-12">
                    <p> СЦ &laquo;Технобыт&raquo; работает круглосуточно, 7 дней в неделю и отдыхает только 1 января.<br> Ответим каждому, приедем быстро, осмотрим тщательно, починим качественно.<br> Всегда бесплатно: консультации по эксплуатации, гарантия на работы и детали.<br></p>
                    <p> Компания СЦ &laquo;Технобыт&raquo; предоставляет полный спектр услуг по ремонту бытовой техники практически всех марок и моделей как отечественного, так и импортного производства.</p>
                    <p> Многолетний опыт работы и высокий профессионализм наших инженеров позволяет точно на месте определить характер неисправности и устранить поломку в максимально короткий срок.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="order">
        <form>
            <div class="form_order_bg">
                <div id="form_order" class="order_form">
                    <h3>Онлайн-заказ</h3>
                    <div class="row">
                        <div class="col-xs-6" style="padding-right: 14px;">
                            <div class="input-group-lg"> <input id="order_name" type="text" class="form-control" placeholder="Как вас зовут?" name="name"></div>
                            <br>
                            <div class="input-group-lg"> <input id="order_phone" type="text" class="form-control" placeholder="Ваш номер телефона *" name="phone"></div>
                            <br>
                        </div>
                        <div class="col-xs-6">
                            <div class="input-group-lg"><textarea id="order_text" type="text" class="form-control" rows="4" name="comment" placeholder="Опишите пожалуйста, что нужно сделать" style="height: 110px;"></textarea></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <hr style="  margin-top: 17px;  margin-bottom: 37px;  border: 0;  border-top: 1px solid #e4e4e4; position: relative; width: 725px; left: -55px;">
                        </div>
                    </div>
                    <div class="row" style="text-align: left;">
                        <div class="col-xs-6"> <button type="button" class="btn btn-default call-master">ОТПРАВИТЬ ЗАЯВКУ</button></div>
                        <div class="col-xs-6">
                            <p>Работаем с физическими и юридическими лицами. Наличный и безналичный расчет.</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>