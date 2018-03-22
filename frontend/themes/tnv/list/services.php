<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
$breadcrumbs = [
    $pageInfo['title'],
];
?>
<?= tnv\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<div class="aside-layout container mb166">
    <div class="row sticky-parent">
        <div class="page col-xs-12 col-md-12">
            <div class="hidden-xs hidden-sm mb">
                <h1 class="program--title"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : app\components\CController::$category['full_title'] . ' ' . $pageInfo['title']; ?></h1>
            </div>
            <?= $pageInfo['description']; ?>            
            <?= tnv\widgets\lists\Neispravnost::widget(['type' => 2, 'title' => 'Цены по неисправностям', 'is_popular' => true]); ?>
            <?= tnv\widgets\lists\Neispravnost::widget(['type' => 1, 'title' => 'Цены по услугам', 'is_popular' => true]); ?>
            <?= tnv\widgets\lists\Neispravnost::widget(['type' => 1, 'title' => 'Цены по прочим услугам', 'is_popular' => false]); ?>
        </div>
    </div>
</div>