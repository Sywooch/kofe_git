<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<header class="header header__brand">
    <?= professionals\widgets\menu\MainMenu::widget(); ?>
    <?= professionals\widgets\forms\MainPageForm::widget(['pageInfo' => (!empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title']), 'page' => $pageInfo]); ?>
</header>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <div class="solution solution--closed">
                    <?= professionals\widgets\lists\PopularFaults::widget(['limit' => 100, 'title' => 'Неисправности которые мы устраняем:', 'is_popular' => true, 'type' => 2, 'view' => 'servicesTable', 'form' => false]); ?>                    
                </div>
            </div>
        </div>
    </div>
</section>
<?= professionals\widgets\forms\Today::widget(); ?>
<?= professionals\widgets\other\Advantage::widget(); ?>
<?= professionals\widgets\forms\Countdown::widget(); ?>
<?= professionals\widgets\lists\PopularBrands::widget(); ?>
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 5, 'title' => 'Услуги которые мы предоставляем: ', 'is_popular' => true, 'type' => 1, 'view' => 'popular-services', 'form' => false]); ?>
<?= professionals\widgets\other\Masters::widget(); ?>
<?= professionals\widgets\other\Advantage::widget(['view' => 'advantage1']); ?>
<?= professionals\widgets\lists\LastReviews::widget(); ?>