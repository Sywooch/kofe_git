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
<?php if($siteConfig['id'] == 2): ?>
<noindex>
    <section class="promo-video">
        <div class="container">
            <div class="left">
                <iframe  src="https://www.youtube.com/embed/M3ebpSpcsro?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                <!--<div id="promo-video"></div>-->
            </div>
            <div class="right">
                <div class="title">Здравствуйте</div>
                <p>Сервисный центр по ремонту кофемашин Spb-Remont-Kofe реализует ремонт кофемашин с 2010 года. За это время мы скоординировали работу инженеров таким образом, что все ремонтные услуги выполняются в течении 24 часов с момента Вашего обращения. Все сотрудники предприятия имеют колосcальный опыт в ремонте кофемашин. Сервисный центр работает как с частными так и с юридическими лицами и государственными учреждениями. На все работы, как и на заменённые комплектующие Вам будет предоставлена гарантия сроком до 1 года. Выбирайте профессионалов, сделаем ремонт качественно и ответим за качество нашей работы!</p>
            </div>
        </div>
    </section>
<noindex>
<?php endif; ?>
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