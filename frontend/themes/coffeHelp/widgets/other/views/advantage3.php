<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="col-sm-3 right-col">
    <section class="sidebar">
        <div class="tb_sidebar_cont">
            <span class="tb_sidebar_title">Нас выбирают, потому что:</span>
            <div class="tb_sidebar_item">
                <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">выезд и диагностика — 0 руб</span> <span class="tb_sidebar_extra_text">Определим стоимость ремонта.</span></div>
                <img class="tb_sidebar_item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/coins.png">
            </div>
            <div class="tb_sidebar_item">
                <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">фирменные запчасти</span> <span class="tb_sidebar_extra_text">От официальных поставщиков.</span></div>
                <img class="tb_sidebar_item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/washer.png">
            </div>
            <div class="tb_sidebar_item">
                <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">гарантия на все работы</span> <span class="tb_sidebar_extra_text">Выдаем квитанцию с гарантийным талоном.</span></div>
                <img class="tb_sidebar_item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/shield.png">
            </div>
            <div class="tb_sidebar_item">
                <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">работаем ежедневно</span> <span class="tb_sidebar_extra_text">Даже в выходные и праздники.</span></div>
                <img class="tb_sidebar_item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/calendar.png">
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
                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/icons/sidebar_head.png"> 
                <span class="tb_sidebar_title">Бесплатная консультация</span> 
                <span class="tb_sidebar_extra_text">Не уверены в заказе, обратитесь за консультацией.</span> 
                <input type="text" name="phone" placeholder="Номер телефона">
                <input type="button" class="call-master" value="Отправить">
            </form>
        </div>
    </section>
</div>