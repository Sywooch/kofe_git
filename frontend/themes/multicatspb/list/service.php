<?php 
$breadcrumbs = [
    '/' . \app\components\CController::$category['url'] => \app\components\CController::$category['full_title'],
    !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] . ' ' . \app\components\CController::$category['title'],
];
$this->title = isset($pageInfo['meta_title']) ? $pageInfo['meta_title'] : '';
?>
<?= multicatspb\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-5" style="background-image: url(/multicatspb/images/upload/banner2.png);">
    <div class="container">
        <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] . ' ' . \app\components\CController::$category['title']; ?></h1>
        <?= $pageInfo['description']; ?>
        <a href="#" class="btn green open-popup colorbg colorbghover" data-tab="popup2" onclick="return false;">Записаться на ремонт</a>
        <div class="clear"></div>
    </div>
</section>
<?= multicatspb\widgets\sliders\Slider::widget(); ?>
<?= multicatspb\widgets\other\Advantage::widget(); ?>
<section id="number-13">
    <div class="container">
        <?= multicatspb\widgets\lists\LastReviews::widget(); ?>
        <?= multicatspb\widgets\lists\LastNews::widget(); ?>
        <span class="clear"></span>
    </div>
</section>
<section id="number-15" class="active">
    <div class="container">
        <?= !empty($pageInfo['full_description']) ? $pageInfo['full_description'] : ''; ?>
    </div>
    <div class="bottom-btn">
        <span class="colortext colorborder">Развернуть описание</span>
    </div>
</section>
<section id="number-23">
    <a href="#" id="gotop" class="colorbg colorbghover"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</section>