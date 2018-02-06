<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $pageInfo['meta_title'];
?>
<header class="header header__brand">
    <?= professionals\widgets\menu\MainMenu::widget(); ?>
    <?= professionals\widgets\forms\MainPageForm::widget(['pageInfo' => $pageInfo['meta_h1'], 'page' => $pageInfo]); ?>
</header>
<?= professionals\widgets\lists\AllBrands::widget(); ?>
<?= professionals\widgets\forms\Today::widget(); ?>
<?= professionals\widgets\other\Advantage::widget(); ?>
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 6, 'title' => 'Частые неисправности', 'is_popular' => true, 'type' => 2]); ?>
<?= professionals\widgets\lists\PopularBrands::widget(); ?>
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 5, 'title' => 'Популярные услуги', 'is_popular' => true, 'type' => 1, 'view' => 'popular-services', 'form' => false]); ?>
<?= professionals\widgets\forms\Countdown::widget(); ?>
<?= professionals\widgets\other\Masters::widget(); ?>
<?= professionals\widgets\other\Advantage::widget(['view' => 'advantage1']); ?>
<?= professionals\widgets\lists\LastReviews::widget(); ?>