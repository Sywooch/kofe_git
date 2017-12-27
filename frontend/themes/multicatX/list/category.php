<div class="clear"></div>
<div id="content" class="colorborder">
    <div class="inner_container">
        <div class="breadcrumb">
            <a href="/">Главная</a>
            <a href="#">Ремонт <?= mb_strtolower($page['full_title'], 'utf8'); ?></a>
        </div>
    </div>
    <div class="inner_container">
        <div id="content" class="my-text">
            <h1 class="colortext"><?= !empty($page['meta_h1']) ? $page['meta_h1'] : $page['title']; ?></h1>
            <?= $page['description']; ?>
        </div>
    </div>
    <?= multicatX\widgets\lists\Models::widget(['models' => $models]); ?>
    <div class="main_container kakrabotaem_container colorbg">
        <div id="rumiservice13" class="inner_container" style="padding: 0px;">
            <div id="rumiservice13_header">Как мы работаем?</div>
            <div class="rumiservice13_blocks">
                <div class="rumiservice13_block rumiservice13_block1">
                    <div class="rumiservice13_block_circle">
                        <div class="rumiservice13_block_circle_number">1</div>
                        <div class="rumiservice13_block_circle_image"><img src="http://service-xiaomi.com/catalog/view/theme/default/image/rumiservice13_block1.png"></div>
                    </div>
                    <div class="rumiservice13_block_text">
                        Вы оставляете заявку<br>на сайте или по телефону
                    </div>
                </div>
                <div class="rumiservice13_block rumiservice13_block2">
                    <div class="rumiservice13_block_circle">
                        <div class="rumiservice13_block_circle_number">2</div>
                        <div class="rumiservice13_block_circle_image"><img src="http://service-xiaomi.com/catalog/view/theme/default/image/rumiservice13_block2.png"></div>
                    </div>
                    <div class="rumiservice13_block_text">
                        Проводится бесплатная<br>диагностика после которой<br>станут известны сроки
                    </div>
                </div>
                <div class="rumiservice13_block rumiservice13_block3">
                    <div class="rumiservice13_block_circle">
                        <div class="rumiservice13_block_circle_number">3</div>
                        <div class="rumiservice13_block_circle_image"><img src="http://service-xiaomi.com/catalog/view/theme/default/image/rumiservice13_block3.png"></div>
                    </div>
                    <div class="rumiservice13_block_text">
                        Мы звоним вам и только<br>после вашего подтверждения<br>начинаем ремонт
                    </div>
                </div>
                <div class="rumiservice13_block rumiservice13_block4">
                    <div class="rumiservice13_block_circle">
                        <div class="rumiservice13_block_circle_number">4</div>
                        <div class="rumiservice13_block_circle_image"><img src="http://service-xiaomi.com/catalog/view/theme/default/image/rumiservice13_block4.png"></div>
                    </div>
                    <div class="rumiservice13_block_text">
                        Вы забираете готовый<br>аппарат из ремонта 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main_container">
    <div id="rumiservice12" class="inner_container">
        <div id="rumiservice12_left">
            <div class="rumiservice12_left_header">Заказать услуги в <span class="colortext">Service-Xiaomi.com</span><br>8 (495) 374-68-64</div>
            <div class="rumiservice12_left_text"></div>
        </div>   
        <div id="rumiservice12_right">
            <div class="rumiservice12_right_right">
                <div class="rumiservice12_right_zagolovok">Введите ваш номер телефона:</div>
                <div class="rumiservice12_right_input">
                    <input type="text" placeholder="Номер телефона *" class="rumiservice12_right_input_2">
                    <div class="rumiservice12_right_input_2_error">Введите номер телефона!</div>
                </div>
                <button class="rumiservice12_right_submit colorbg">
                    Заказать ремонт
                </button>
                <div class="rumiservice12_right_bottomtext">
                    Возможна отправка и доставка<br>курьером
                </div>
            </div>   
        </div>   
    </div>
</div>