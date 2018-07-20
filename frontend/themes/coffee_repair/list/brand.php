<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
$breadcrumbs = [
    $pageInfo['title'],
];
?>
<?= coffee_repair\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<div class="content1">
    <div class="page-wrap">
        <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
        <img src="/uploads/images/<?= $pageInfo['image']; ?>" alt="Ремонт кофемашин <?= $pageInfo['title'] ?>" title="Обслуживание кофемашин <?= $pageInfo['title'] ?>"/>
        <?php if (!empty($pageInfo['description'])): ?>            
            <?= str_replace('#brand_en#', $pageInfo['title'], $pageInfo['description']); ?>
        <?php endif; ?>
    </div>
</div>
<?= coffee_repair\widgets\forms\Discount::widget(); ?>
<div class="content3">
    <div class="page-wrap">
        <div class="left-block">
        </div>
    </div>
</div>
<?= coffee_repair\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => 1, 'view' => 'services']); ?>
<?= coffee_repair\widgets\lists\Models::widget(['parent' => $pageInfo['id'], 'brand' => $pageInfo['title']]); ?>
<?= coffee_repair\widgets\lists\Neispravnost::widget(['title' => 'Частые неисправности кофемашин', 'type' => 2, 'is_popular' => 1]); ?>