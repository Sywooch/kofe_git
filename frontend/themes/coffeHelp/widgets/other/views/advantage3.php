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
            <?= coffeHelp\widgets\lists\LastReviews::widget(['limit' => 2]); ?>
            <?= coffeHelp\widgets\forms\SideForm::widget(); ?>            
        </div>
    </section>
</div>