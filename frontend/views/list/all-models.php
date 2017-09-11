<?php 
$siteConfig = app\components\CController::getSiteConfig();
?>
<section id="banner">
    <div class="container">
        <div class="full-text">
            <div class="h1">
                <h1>Ремонтируем модели <?= \app\components\CController::$monoBrand['title']; ?>:</h1>
            </div>            
            <p>Опытные мастера и большой склад запчастей позволяют ремонтировать все популярные модели кофемашин. Если у вас есть вопросы, то оставляйте онлайн-заявку, наши специалисты по работе с клиентами свяжутся с вами в течение 15 минут. Если хотите обратиться вне очереди, звоните по тел. <a class="phone moskva" href="tel:+74999554097">8 (499) 955-40-97</a></p>
        </div>
    </div>
    <div class="clear"></div>
    <span class="more"><div>Заказать ремонт</div></span>
</section>
<?= \app\widgets\lists\Models::widget(['parent' => $siteConfig['brand-id'], 'brand' => \app\components\CController::$monoBrand['title']]); ?>