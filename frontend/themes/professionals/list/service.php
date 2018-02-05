<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<div class="service-wrapper">
    <header class="header header__service">
        <?= professionals\widgets\menu\MainMenu::widget(); ?>
        <div class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-11 col-sm-14">
                        <div class="hero_order">
                            <div class="hero_fault-icon">
                                <img src="/<?= $siteConfig['theme'] . '/'; ?>media/%D0%BF%D0%B5%D0%BD%D0%B0.png" alt="">
                            </div>
                            <h1 class="title title__1"><?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?></h1>
                            <div class="hero_info">
                                <?= str_replace(['#brand_en#', '#model_en#'], $page['title'], $seoText); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-11 col-sm-10 col-md-offset-2 text-right hidden-xs">
                        <div class="hero_brand">
                            <img src="/<?= $siteConfig['theme'] . '/'; ?>media/brand-service.png" alt="">
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
    <section class="solutions solutions__service">
        <div class="container">
            <div class="row">
                <div class="col-xs-24">                    
                    <?= professionals\widgets\other\YouGet::widget(); ?>
                    <?= professionals\widgets\forms\Today::widget(['sectionClass' => 'you-get__dark']); ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 5, 'title' => 'Популярные услуги', 'is_popular' => true, 'type' => 1, 'view' => 'popular-services', 'form' => false]); ?>
<?= professionals\widgets\forms\Countdown::widget(); ?>
<?= professionals\widgets\lists\PopularBrands::widget(); ?>
<?= professionals\widgets\other\Advantage::widget(['view' => 'advantage1']); ?>
<?= professionals\widgets\lists\LastReviews::widget(); ?>