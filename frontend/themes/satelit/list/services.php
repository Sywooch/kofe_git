<?php
$siteConfig = app\components\CController::getSiteConfig();
$breadcrumbs = [
    ($siteConfig['mono'] ? 'Прайс-лист' : $pageInfo['title']),
];
$this->title = $pageInfo['meta_title'];
?>
<div class="container">
    <?= satelit\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
</div>
<div class="background--grey margin--bottom60">
    <div class="container">
        <h1 class="title-services-table"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] ?></h1>
        <?= $pageInfo['description'] ?>
        <div class="row">
            <?= satelit\widgets\lists\PopularServices::widget(['view' => 'popularServicesTable', 'type' => 1, 't1' => 'Стоимость услуг', 't2' => 'Посмотреть все|Скрыть', 't3' => 'Посмотреть все']); ?>
            <?= satelit\widgets\lists\PopularServices::widget(['view' => 'popularServicesTable', 'type' => 2, 't1' => 'Неисправности', 't2' => 'Посмотреть все|Скрыть', 't3' => 'Посмотреть все']); ?>
        </div>
    </div>
    <i class="background-pattern background-pattern--left js-background-pattern"></i>
    <i class="background-pattern background-pattern--right js-background-pattern"></i>
</div>
<div class="container">
    <?= satelit\widgets\other\Ht::widget(); ?>
</div>
<?= satelit\widgets\other\Ht::widget(['view' => 'callBack']); ?>