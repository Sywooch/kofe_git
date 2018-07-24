<?php
$this->title = $model['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
$breadcrumbs = [
    $model['title'],
];
?>
<div class="prosto-stranici-text">
    <div class="page-wrap">
        <h1><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title'] ?></h1>
        <?= $model['description']; ?>
    </div>
</div>
<?= coffee_repair\widgets\forms\Order::widget(); ?>
<?= coffee_repair\widgets\lists\PopularBrands::widget(); ?>