<?php 
$breadcrumbs = [
    '/' . $brand['url'] => $brand['full_title'],
    $pageInfo['title'],
];
?>
<?= ifixme\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-5" style="background-image: url(/ifixme/images/upload/banner.png);">
    <div class="container">
        <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title']; ?></h1>
        <?= $pageInfo['description']; ?>        
        <a href="#" class="btn green open-popup" data-tab="popup2" onclick="return false;">Записаться на ремонт</a>
        <div class="clear"></div>
    </div>
</section>
<?= ifixme\widgets\sliders\Slider::widget(); ?>
<?= ifixme\widgets\other\Advantage::widget(); ?>
<?= ifixme\widgets\lists\Price::widget(['model' => $pageInfo]); ?>
<section id="number-13">
    <div class="container">
        <?= ifixme\widgets\lists\LastReviews::widget(); ?>
        <?= ifixme\widgets\lists\LastNews::widget(); ?>
        <span class="clear"></span>
    </div>
</section>
<section id="number-15" class="active">
    <div class="container">
        <?= $pageInfo['full_description']; ?>
    </div>
    <div class="bottom-btn">
        <span>Развернуть описание</span>
    </div>
</section>
<section id="number-23">
    <a href="#" id="gotop"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <p>Вернуться <br>наверх</p>
</section>