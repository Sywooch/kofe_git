<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="main_container kakrabotaem_container colorbg">
    <div id="rumiservice13" class="inner_container" style="padding: 0px;">
        <div id="rumiservice13_header">Как мы работаем?</div>
        <div class="rumiservice13_blocks">
            <div class="rumiservice13_block rumiservice13_block1">
                <div class="rumiservice13_block_circle">
                    <div class="rumiservice13_block_circle_number">1</div>
                    <div class="rumiservice13_block_circle_image"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/rumiservice13_block1.png"></div>
                </div>
                <div class="rumiservice13_block_text">
                    Вы оставляете заявку на ремонт через сайт или позвонив в сервисный центр.
                </div>
            </div>
            <div class="rumiservice13_block rumiservice13_block2">
                <div class="rumiservice13_block_circle">
                    <div class="rumiservice13_block_circle_number">2</div>
                    <div class="rumiservice13_block_circle_image"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/rumiservice13_block2.png"></div>
                </div>
                <div class="rumiservice13_block_text">
                    Мы проводим бесплатную диагностику и выявляем возникшие проблемы.
                </div>
            </div>
            <div class="rumiservice13_block rumiservice13_block3">
                <div class="rumiservice13_block_circle">
                    <div class="rumiservice13_block_circle_number">3</div>
                    <div class="rumiservice13_block_circle_image"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/rumiservice13_block3.png"></div>
                </div>
                <div class="rumiservice13_block_text">
                    Наш менеджер перезванивает Вам, согласовывает сроки и стоимость ремонта.
                </div>
            </div>
            <div class="rumiservice13_block rumiservice13_block4">
                <div class="rumiservice13_block_circle">
                    <div class="rumiservice13_block_circle_number">4</div>
                    <div class="rumiservice13_block_circle_image"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/rumiservice13_block4.png"></div>
                </div>
                <div class="rumiservice13_block_text">
                    По окончанию ремонта, Вы забираете полностью исправную технику или мы БЕСПЛАТНО доставляем её Вам!
                </div>
            </div>
        </div>
    </div>
</div>