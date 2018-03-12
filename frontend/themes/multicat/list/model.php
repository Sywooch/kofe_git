<?php 
$breadcrumbs = [
    '/' . $brand['url'] => $brand['full_title'],
    $pageInfo['title'],
];
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $title;
$p = app\components\CController::$category;
$p['url'] = $pageInfo['url'];
?>
<?= multicat\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-5" style="background-image: url(/multicat/images/upload/banner.png);">
    <div class="container">
        <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт ' . \app\components\CController::$monoBrand['title'] . ' ' . $pageInfo['title']; ?></h1>
        <?= str_replace('#model_en#', \app\components\CController::$monoBrand['title'] . ' ' . $pageInfo['title'], $pageInfo['description']); ?>
        <a href="#" class="btn green open-popup colorbg colorbghover" data-tab="popup2" onclick="return false;">Записаться на ремонт</a>
        <div class="clear"></div>
    </div>
</section>
<?= multicat\widgets\sliders\Slider::widget(); ?>
<?= multicat\widgets\other\Advantage::widget(); ?>
<?= multicat\widgets\lists\AllPrices::widget(['parent' => $p]); ?>
<?= multicat\widgets\lists\OtherModels::widget(['parent' => $pageInfo['parent'], 'modelID' => $pageInfo['id']]); ?>
<?= multicat\widgets\lists\Neispravnost::widget(['category' => $p]); ?>
<section id="number-13">
    <div class="container">
        <?= multicat\widgets\lists\LastReviews::widget(); ?>
        <?= multicat\widgets\lists\LastNews::widget(); ?>
        <span class="clear"></span>
    </div>
</section>
<section id="number-15" class="active">
    <div class="container">
        <?= !empty($pageInfo['full_description']) ? $pageInfo['full_description'] : (!empty($seoText['text2']) ? $seoText['text2'] : '') ; ?>
    </div>
    <div class="bottom-btn">
        <span class="colortext colorborder">Развернуть описание</span>
    </div>
</section>
<section id="number-23">
    <a href="#" id="gotop" class="colorbg colorbghover"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</section>