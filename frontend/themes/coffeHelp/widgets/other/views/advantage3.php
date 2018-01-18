<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="col-sm-3 right-col">
    <section class="sidebar">
        <div class="tb_sidebar_cont">
            <span class="tb_sidebar_title">Нас выбирают, потому что:</span>
            <div class="tb_sidebar_item">
                <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">Бесплатная диагностика</span> <span class="tb_sidebar_extra_text">Проведём диагностику устройства.</span></div>
                <img class="tb_sidebar_item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/washer.png">
            </div>
            <div class="tb_sidebar_item">
                <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">Фирменные запчасти</span> <span class="tb_sidebar_extra_text">Имеем в наличии основные запчасти для кофемашин.</span></div>
                

                <img class="tb_sidebar_item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/shield.png">
            </div>
            <div class="tb_sidebar_item">
                <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">Форма оплаты</span> <span class="tb_sidebar_extra_text">Принимаем не только наличные, но и безнал и карты.</span></div>
                

                <img class="tb_sidebar_item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/coins.png">
            </div>
            <div class="tb_sidebar_item">
                <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">Работаем ежедневно</span> <span class="tb_sidebar_extra_text">Работаем и в праздники и в выходные.</span></div>
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
                <a href="/reviews" class="btn">Еще</a>
            </div>
            <form class="tb_sidebar_form"> 
                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/icons/sidebar_head.png"> 
                <span class="tb_sidebar_title">Нужна консультация?</span> 
                <span class="tb_sidebar_extra_text">Если у Вас возникли вопросы, обратитесь к нашим специалистам.</span> 
                <input type="text" name="phone" placeholder="Номер телефона">
                <input type="button" class="call-master" value="Отправить">
            </form>
        </div>
    </section>
</div>