<?php
$assets = Yii::getAlias('@web');
$this->title = $page['meta_title'];
?>
<section id="banner">
    <div class="container">
        <div class="left-img">
            <img src="<?= $assets ?>/images/coffee_machine.png" alt="">
        </div>
        <div class="right-text">
            <div class="h1">
                <h1><?= $_GET['data']['meta_h1']; ?></h1>
            </div>
            <p>
                <?= $_GET['data']['description']; ?>                
            </p>
            <div class="happy-time">
                <img src="<?= $assets ?>/images/clock.svg" alt="">
                <p>Счастливые часы! <br>33% скидка на услуги с <?= date('H'); ?>:00 до <?= date('H') + 1; ?>:00</p>
            </div>
            <?= \app\widgets\forms\CallBack::widget(['metrika' => 'home_order_button']); ?>
        </div>
    </div>
    <div class="clear"></div>
</section>
<?= \app\widgets\lists\PopularBrands::widget(); ?>
<?= \app\widgets\lists\Neispravnost::widget(['metrika' => 'call-me-home']); ?>
<?= \app\widgets\other\Advantage::widget(); ?>
<section id="skidka">
    <div class="container">
        <h3>Счастливые часы!</h3>
        <p>33% скидка на услуги с <?= date('H'); ?>:00.<?= date('H') + 1; ?>:00. До конца акции осталось <?= 60 - date('i'); ?> минут</p>
        <span class="more"><div>Получить скидку</div></span>
    </div>
</section>
<section id="text-block">
    <div class="container">
        <?= $_GET['data']['full_description']; ?>        
    </div>
    <span class="more"><div>Читать далее</div></span>
</section>