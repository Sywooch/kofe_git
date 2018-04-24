<?php 
$breadcrumbs = [
    '/' . \app\components\CController::$category['url'] => \app\components\CController::$category['full_title'],
    !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] . ' ' . \app\components\CController::$category['title'],
];
$this->title = isset($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $title;
?>
<?= ifixme\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-5" style="background-image: url(/ifixme/images/upload/<?= strtolower(str_replace('Ремонт ', '', \app\components\CController::$category['title'])); ?>.png);">
    <div class="container">
        <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $h1; ?></h1>
        <?= $pageInfo['description']; ?>
        <a href="#" class="btn green open-popup" data-tab="popup2" onclick="return false;">Записаться на ремонт</a>
        <div class="clear"></div>
    </div>
</section>
<?= ifixme\widgets\sliders\Slider::widget(); ?>
<?= ifixme\widgets\other\Advantage::widget(); ?>
<section id="number-15">
    <div class="container">
        <?= !empty($pageInfo['full_description']) ? $pageInfo['full_description'] : ''; ?>
    </div>
    <div class="bottom-btn">
        <span>Развернуть описание</span>
    </div>
</section>
<section id="number-23">
    
</section>