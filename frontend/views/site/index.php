<?php
$assets = Yii::getAlias('@web');
$this->title = $page['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
?>
<section id="banner">
    <div class="container">
        <div class="left-img">
            <img src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>coffee_machine.png" alt="">
        </div>
        <div class="right-text">
            <div class="h1">
                <h1>Ремонт кофемашин<?= $siteConfig['mono'] ? ' ' . \app\components\CController::$monoBrand['title'] : ''; ?> в <?= Yii::$app->session['region']['titleRod']; ?> с гарантией до 1 года!</h1>
            </div>
            <p>
                <?= strip_tags($_GET['data']['description'], '<p><a><img><div></span>'); ?>                
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
</div>
<?= !$siteConfig['mono'] ? \app\widgets\lists\PopularBrands::widget() : ''; ?>
<?= \app\widgets\lists\Neispravnost::widget(['metrika' => 'call-me-home']); ?>
<?= $siteConfig['mono'] ? \app\widgets\lists\Models::widget(['mono' => true, 'parent' => $siteConfig['brand-id']]) : ''; ?>
<?= \app\widgets\other\Advantage::widget(); ?>
<section id="skidka">
    <div class="container">
        <h3>Счастливые часы!</h3>
        <p>33% скидка на услуги с <?= date('H'); ?>:00 до <?= date('H') + 1; ?>:00. До конца акции осталось <?= 60 - date('i'); ?> минут</p>
        <span class="more"><div>Получить скидку</div></span>
    </div>
</section>
<section id="text-block">
    <div class="container">
        <?= strip_tags($_GET['data']['full_description'], '<p><a><img><div></span>'); ?>        
    </div>
    <span class="more"><div>Читать далее</div></span>
</section>