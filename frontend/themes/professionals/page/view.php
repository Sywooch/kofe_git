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
</header>
<section class="solutions">
    <?= professionals\widgets\forms\Today::widget(['sectionClass' => 'you-get__dark']); ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <?= professionals\widgets\other\YouGet::widget(); ?>
            </div>
        </div>
    </div>
</section>
<?php if (!empty($model['description'])): ?>
<section class="seo-text">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <?= $model['description']; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?= professionals\widgets\other\Advantage::widget(['view' => 'advantage1']); ?>
<?= professionals\widgets\other\Masters::widget(); ?>
<?= professionals\widgets\forms\Countdown::widget(); ?>
<?= professionals\widgets\lists\LastReviews::widget(); ?>
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 5, 'title' => 'Популярные услуги', 'is_popular' => true, 'type' => 1, 'view' => 'popular-services', 'form' => false]); ?>