<?php 
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $seo['meta_title'];
$h1 = !empty($seo['meta_h1']) ? $seo['meta_h1'] : 'Ремонтируем модели ' .  \app\components\CController::$monoBrand['title'] . ':';
$text = !empty($seo['meta_text1']) ? $seo['meta_text1'] : 'Опытные мастера и большой склад запчастей позволяют ремонтировать все популярные модели кофемашин.
                Если у вас есть вопросы, то оставляйте онлайн-заявку, наши специалисты по работе с клиентами свяжутся с вами в течение 15 минут. 
                Если хотите обратиться вне очереди, звоните по тел. ';
?>
<section id="banner">
    <div class="container">
        <div class="full-text">
            <div class="h1">                
                <h1><?= $h1; ?></h1>
            </div>            
            <p>
                <?= $text; ?>                
            </p>
            <a class="phone moskva" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
        </div>
    </div>
    <div class="clear"></div>
    <span class="more"><div>Заказать ремонт</div></span>
</section>
<?= \app\widgets\lists\Models::widget(['parent' => $siteConfig['brand-id'], 'brand' => \app\components\CController::$monoBrand['title']]); ?>