<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($model['meta_title']) ? $model['meta_title'] : $model['title'];
?>
<header class="header header__about">
    <?= professionals\widgets\menu\MainMenu::widget(); ?>
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-11 col-sm-14">
                    <h1 class="title title__1 light"><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title']; ?></h1>
                </div>
                <div class="col-lg-12 col-md-11 col-sm-10 col-md-offset-2">
                    <div class="hero_why-we">
                        <?= $model['description']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= professionals\widgets\forms\Today::widget(['sectionClass' => 'you-get__dark']); ?>
</header>
<section class="solutions">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <div class="solution solution--closed">
                    <?= professionals\widgets\lists\PopularFaults::widget(['limit' => 100, 'title' => 'Неисправности которые мы устраняем:', 'is_popular' => true, 'type' => 2, 'view' => 'servicesTable', 'form' => false]); ?>                    
                </div>
                <div class="solution solution--closed">
                    <?= professionals\widgets\lists\PopularFaults::widget(['limit' => 100, 'title' => 'Услуги которые мы предоставляем: ', 'is_popular' => true, 'type' => 1, 'view' => 'servicesTable', 'form' => false]); ?>                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php if (!empty($model['full_description'])): ?>
    <section class="seo-text">
        <div class="container">
            <div class="row">
                <div class="col-xs-24">
                    <?= $model['full_description']; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?= professionals\widgets\other\Advantage::widget(['view' => 'advantage1']); ?>
<?= professionals\widgets\other\Masters::widget(); ?>
<?= professionals\widgets\forms\Countdown::widget(); ?>
<?= professionals\widgets\lists\LastReviews::widget(); ?>
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 5, 'title' => 'Услуги которые мы предоставляем: ', 'is_popular' => true, 'type' => 1, 'view' => 'popular-services', 'form' => false]); ?>