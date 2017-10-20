<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
if ($siteConfig['mono'])
    $this->title = !empty($page['meta_title']) ? $page['meta_title'] :  app\components\CController::$category['full_title'] . ' ' . \app\components\CController::$monoBrand['title'] . ' в Москве срочно и по лучшим ценам!';
else {
    $this->title = $page['meta_title'];
}
?>
<section id="banner">
    <div class="container">
        <div class="left-img">
            <img src="<?= $assets ?>/<?= $siteConfig['sitePrefix']; ?>images/<?= $siteConfig['sitePrefix']; ?>coffee_machine.png" alt="">
        </div>
        <div class="right-text">
            <div class="h1">
                <h1><?= app\components\CController::$category['full_title']; ?><?= $siteConfig['mono'] ? ' ' . \app\components\CController::$monoBrand['title'] : ''; ?> в <?= Yii::$app->session['region']['titleRod']; ?> с гарантией до 1 года!</h1>
            </div>
            
                <?= strip_tags($_GET['data']['description'], '<p><a><img><div></span>'); ?>                
           
            <div class="happy-time colorborder">
                <img src="<?= $assets ?>/images/clock.svg" alt="">
                <p>Акция дня! <br>25% скидка на услуги сегодня</p>
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
        <?php if ($siteConfig['mono'] || isset($siteConfig['spb-multi'])): ?>
        <span class="h3">Дарим 25%</span>
        <p>Сегодня скидка на все услуги по <br>ремонту кофемашин <?= \app\components\CController::$monoBrand['title'] ?></p>
            <span class="more"><div>Получить скидку</div></span>        
        <?php else: ?>
            <span class="h3">Счастливые часы!</span>
            <p>33% скидка на услуги с <?= date('H'); ?>:00 до <?= date('H') + 1; ?>:00. До конца акции осталось <?= 60 - date('i'); ?> минут</p>
            <span class="more"><div>Получить скидку</div></span>
        <?php endif; ?>
    </div>
</section>
<section id="text-block">
    <div class="container">
        <?= strip_tags($_GET['data']['full_description'], '<p><a><img><div><span><h2><h1><h3><ul><li>'); ?>        
    </div>
    <span class="more"><div>Читать далее</div></span>
</section>