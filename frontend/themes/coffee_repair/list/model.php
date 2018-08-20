<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
$breadcrumbs = [
    '/' . $brand['url'] => 'Ремонт кофемашин ' . $brand['title'],
    'Ремонт ' . $brand['title'] . ' ' . $pageInfo['title'],
];
?>
<?= coffee_repair\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<div class="content1 model_info">
    <div class="page-wrap">
        <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
        <div class="img"><img src="/uploads/images/<?= $pageInfo['image']; ?>" Title="Ремонт и обслуживание кофемашины <?= $brand['title'] . ' ' . $pageInfo['title']; ?> в сервисе и на дому" alt="Ремонт кофемашины <?= $brand['title'] . ' ' . $pageInfo['title']; ?> с выездом мастера на дом или офис клиента"/></div>
        <?php if (!empty($pageInfo['description'])): ?>            
            <h2><?= 'Ремонт кофемашин ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h2>
            <?= str_replace('#brand_en#', $pageInfo['title'], $pageInfo['description']); ?>
        <?php endif; ?>
    </div>
</div>
<?= coffee_repair\widgets\forms\Discount::widget(); ?>
<?= coffee_repair\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => 1, 'view' => 'services']); ?>
<?= coffee_repair\widgets\lists\LastReviews::widget(); ?>
<?= coffee_repair\widgets\lists\Neispravnost::widget(['title' => 'Частые неисправности кофемашин', 'type' => 2, 'is_popular' => 1]); ?>
<?= coffee_repair\widgets\lists\PopularBrands::widget(); ?>