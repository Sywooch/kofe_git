<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<?php if($pageInfo['type'] ==  1): ?>

<?php else: ?>

<?php endif; ?>    
<div class="<?php if($pageInfo['type'] ==  1): ?> service-wrapper<?php endif; ?>">
    <header class="header <?php if($pageInfo['type'] ==  1): ?> header__service<?php else: ?> header__fault<?php endif; ?>">
        <?= professionals\widgets\menu\MainMenu::widget(); ?>
        <div class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 col-md-11 col-sm-14">
                        <div class="hero_order">
                            <div class="hero_fault-icon">
                                <img src="/<?= $siteConfig['theme'] . '/'; ?>media/%D0%BF%D0%B5%D0%BD%D0%B0.png" alt="">
                            </div>
                            <h1 class="title title__1 <?php if($pageInfo['type'] !=  1): ?>light<?php endif; ?> "><?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?></h1>
                            <div class="hero_info">
                                <p>Это полезно знать!</p>
                                <?= str_replace(['#brand_en#', '#model_en#'], $page['title'], $seoText); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-11 col-md-offset-2 col-sm-10 text-right">
                        <div class="hero_brand">
                            <?php if($pageInfo['type'] ==  1): ?>
                                <img src="/<?= $siteConfig['theme'] . '/'; ?>media/brand-service.png" alt="">
                            <?php else: ?>
                                <img src="/<?= $siteConfig['theme'] . '/'; ?>media/brand-all.png" alt="">
                            <?php endif; ?>
                            <div class="hero_price">
                                <p>Средняя цена ремонта:</p>
                                <span><span class="price-nowrap"><span><?= number_format($pageInfo['price'], 0, ' ', ' '); ?></span>&nbsp;руб.</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="solutions <?php if($pageInfo['type'] ==  1): ?> solutions__service<?php endif; ?>">
        <?= professionals\widgets\forms\Today::widget(['sectionClass' => 'you-get__dark']); ?>
    </section>
</div>
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 5, 'title' => 'Услуги которые мы предоставляем: ', 'is_popular' => true, 'type' => 1, 'view' => 'popular-services', 'form' => false]); ?>
<?= professionals\widgets\forms\Countdown::widget(); ?>
<?= professionals\widgets\lists\PopularBrands::widget(); ?>
<?= professionals\widgets\other\Advantage::widget(['view' => 'advantage1']); ?>
<?= professionals\widgets\lists\LastReviews::widget(); ?>