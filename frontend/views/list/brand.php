<?php
$assets = Yii::getAlias('@web');
$breadcrumbs = [
    app\components\CController::$category['full_title'] . ' ' . $pageInfo['title'],
];
$this->title = $title;
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="clear"></div>
<?= \app\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="banner">
    <div class="container">
        <div class="left-img">
            <?php if ($siteConfig['category_id'] == 4): ?>
                <img src="<?= $assets ?>/uploads/images/<?= $pageInfo['image']; ?>">
            <?php else: ?>
                <img src="<?= $assets ?>/uploads/images/<?= !empty($model['image']) ? $model['image'] : 'coffee_machine.png' ?>" alt="">
            <?php endif; ?>
        </div>
        <div class="right-text">
            <div class="inner-img brend-logo">
                <img src="<?= $assets ?>/uploads/images/<?= $pageInfo['image']; ?>" alt="">
            </div>
            <div class="h1">
                <h1><?= app\components\CController::$category['full_title']; ?> <?= $pageInfo['title']; ?> в <?= Yii::$app->session['region']['titleRod']; ?></h1>
            </div>            
            <?php if (!empty($pageInfo['description'])): ?>
                <?= $pageInfo['description']; ?>
            <?php else: ?>
                <p>  
                    Инженеры нашего сервис центра выполнят <?= mb_strtolower(app\components\CController::$category['rod_title'], 'utf-8'); ?> <?= $pageInfo['title']; ?> в короткие сроки, устранят неисправность любой сложности с гарантией. Вам достаточно оставить заявку через сайт.                    
                </p>
            <?php endif; ?>
            <div class="clear"></div>
            <?= \app\widgets\forms\CallBack::widget(); ?>            
        </div>
    </div>
    <div class="clear"></div>
</section>
<div class="clear"></div>
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
</noindex>
<?php endif; ?>
<?= \app\widgets\lists\Neispravnost::widget(); ?>
<?php if (app\components\CController::$category['id'] != 3 && app\components\CController::$category['id'] != 4) {
    echo \app\widgets\lists\Models::widget(['parent' => $pageInfo['id'], 'brand' => $pageInfo['title']]);
} ?>
<?= \app\widgets\lists\Price::widget(['urlPrefix' => $pageInfo['url'], 'brandPage' => true]); ?>
        <?php if (!empty($pageInfo['full_description'])): ?>
    <section id="text-block"> 
        <div class="container">
    <?= $pageInfo['full_description']; ?>
        </div>
        <span class="more"><div>Читать далее</div></span>
    </section>   
<?php endif; ?>
<?= \app\widgets\other\Advantage::widget(); ?>