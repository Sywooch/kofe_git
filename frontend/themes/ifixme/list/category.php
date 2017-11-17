<?php 
$assets = Yii::getAlias('@web');
$breadcrumbs = [
    $page['full_title'],
];
?>
<?= ifixme\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-5" style="background-image: url(<?= $assets ?>/ifixme/images/upload/banner.png)">
    <div class="container">        
        <h1><?= !empty($page['meta_h1']) ? $page['meta_h1'] : $page['title']; ?></h1>
        <?= $page['description']; ?>
        <div class="clear"></div>
    </div>
</section>
<?= ifixme\widgets\sliders\Slider::widget(); ?>
<?= ifixme\widgets\other\Advantage::widget(); ?>
<?= ifixme\widgets\lists\Models::widget(['models' => $models]); ?>
<?= ifixme\widgets\lists\AllPrices::widget(['models' => $models, 'parent' => $page]); ?>
<?= ifixme\widgets\lists\Neispravnost::widget(['category' => $page]); ?>
<section id="number-13">
    <div class="container">
        <?= ifixme\widgets\lists\LastReviews::widget(); ?>
        <?= ifixme\widgets\lists\LastNews::widget(); ?>
        <span class="clear"></span>
    </div>
</section>
<section id="number-15" class="active">
    <div class="container">
        <?= $page['full_description']; ?>
    </div>
    <div class="bottom-btn">
        <span>Развернуть описание</span>
    </div>
</section>
<section id="number-23">
    <a href="#" id="gotop"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <p>Вернуться <br>наверх</p>
</section>