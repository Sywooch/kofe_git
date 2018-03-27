<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $pageInfo['meta_title'];
?>
<div class="bl-heading" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-heading.jpg);">
    <div class="container">
        <div class="heading">Авторизованный сервисный центр </div>
        <h1 class="heading-description"><?= $pageInfo['meta_h1']; ?></h1>
    </div>
</div>
<?= remont_coffee\widgets\other\Advantage::widget(); ?>


<?= remont_coffee\widgets\lists\TopServices::widget(); ?>

<?= remont_coffee\widgets\lists\PopularModels::widget(); ?>

<?= remont_coffee\widgets\lists\AllBrands::widget(['h' => false]); ?>