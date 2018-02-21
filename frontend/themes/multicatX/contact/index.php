<?php 
$breadcrumbs = [    
    $pageInfo['title'],
];
$this->title = $pageInfo['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="clear"></div>
<div id="content" class="colorborder">
    <div class="inner_container">
        <div class="breadcrumb">
            <a href="/">Главная</a>
            <a href="#">Контакты</a>
        </div>
    </div>
    <div class="inner_container">
        <div id="content" class="my-text">
            <h1 class="colortext">Контакты</h1>
            <p>Гарантия на ремонт Xiaomi</p>
            <p>Гарантийный сервисный центр Xiaomi – ваш надежный помощник по оперативному ремонту вышедшей из строя техники. К вашим услугам – быстрое и качественное восстановление всех устройств китайского производителя. </p>
        </div>
    </div>
    <div class="main_container kakrabotaem_container colorbg">
        <div id="rumiservice13" class="inner_container" style="padding: 0px;">
            <div id="rumiservice13_header">Как мы работаем?</div>
            <div class="rumiservice13_blocks">
                <div class="rumiservice13_block rumiservice13_block1">
                    <div class="rumiservice13_block_circle">
                        <div class="rumiservice13_block_circle_number">1</div>
                        <div class="rumiservice13_block_circle_image"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>/images/rumiservice13_block1.png"></div>
                    </div>
                    <div class="rumiservice13_block_text">
                        Вы оставляете заявку<br>на сайте или по телефону
                    </div>
                </div>
                <div class="rumiservice13_block rumiservice13_block2">
                    <div class="rumiservice13_block_circle">
                        <div class="rumiservice13_block_circle_number">2</div>
                        <div class="rumiservice13_block_circle_image"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>/images/rumiservice13_block2.png"></div>
                    </div>
                    <div class="rumiservice13_block_text">
                        Проводится бесплатная<br>диагностика после которой<br>станут известны сроки
                    </div>
                </div>
                <div class="rumiservice13_block rumiservice13_block3">
                    <div class="rumiservice13_block_circle">
                        <div class="rumiservice13_block_circle_number">3</div>
                        <div class="rumiservice13_block_circle_image"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>/images/rumiservice13_block3.png"></div>
                    </div>
                    <div class="rumiservice13_block_text">
                        Мы звоним вам и только<br>после вашего подтверждения<br>начинаем ремонт
                    </div>
                </div>
                <div class="rumiservice13_block rumiservice13_block4">
                    <div class="rumiservice13_block_circle">
                        <div class="rumiservice13_block_circle_number">4</div>
                        <div class="rumiservice13_block_circle_image"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>/images/rumiservice13_block4.png"></div>
                    </div>
                    <div class="rumiservice13_block_text">
                        Вы забираете готовый<br>аппарат из ремонта 
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= multicatX\widgets\forms\FooterForm::widget(); ?>