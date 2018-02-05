<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<header class="header header__faults">
    <?= professionals\widgets\menu\MainMenu::widget(); ?>
</header>
<section class="solutions solutions__services">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <div class="hero_suggestion">
                    <h1 class="title title__1 light"><?= !empty($model['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title']; ?></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-24">
                <?= professionals\widgets\forms\Today::widget(['sectionClass' => '']); ?>
                <div class="solution solution--closed">
                    <?= professionals\widgets\lists\PopularFaults::widget(['limit' => 100, 'title' => 'Популярные неисправности', 'is_popular' => true, 'type' => 2, 'view' => 'servicesTable', 'form' => false]); ?>                    
                </div>
                <?= professionals\widgets\other\YouGet::widget(); ?>
                <?= professionals\widgets\forms\Today::widget(); ?>
            </div>
        </div>
    </div>
</section>
<?= professionals\widgets\other\Advantage::widget(); ?>
<?= professionals\widgets\forms\Countdown::widget(); ?>
<?= professionals\widgets\lists\PopularBrands::widget(); ?>
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 5, 'title' => 'Популярные услуги', 'is_popular' => true, 'type' => 1, 'view' => 'popular-services', 'form' => false]); ?>
<?= professionals\widgets\other\Masters::widget(); ?>
<?= professionals\widgets\other\Advantage::widget(['view' => 'advantage1']); ?>
<?= professionals\widgets\lists\LastReviews::widget(); ?>