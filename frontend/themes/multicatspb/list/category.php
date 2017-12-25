<?php 
$assets = Yii::getAlias('@web');
$breadcrumbs = [
    $page['full_title'],
];
$this->title = $page['meta_title'];
?>
<?= multicatspb\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-5" style="background-image: url(<?= $assets ?>/multicatspb/images/upload/banner.png)">
    <div class="container">        
        <h1><?= !empty($page['meta_h1']) ? $page['meta_h1'] : $page['title']; ?></h1>
        <?= $page['description']; ?>
        <div class="clear"></div>
    </div>
</section>
<?= multicatspb\widgets\sliders\Slider::widget(); ?>
<?= multicatspb\widgets\other\Advantage::widget(); ?>
<?= multicatspb\widgets\lists\Models::widget(['models' => $models]); ?>
<?= multicatspb\widgets\lists\AllPrices::widget(['models' => $models, 'parent' => $page]); ?>
<?= multicatspb\widgets\lists\Neispravnost::widget(['category' => $page]); ?>
<section id="number-13">
    <div class="container">
        <?= multicatspb\widgets\lists\LastReviews::widget(); ?>
        <?= multicatspb\widgets\lists\LastNews::widget(); ?>
        <span class="clear"></span>
    </div>
</section>
<section id="number-15" class="active">
    <div class="container">
        <?= $page['full_description']; ?>
    </div>
    <div class="bottom-btn">
        <span class="colortext colorborder">Развернуть описание</span>
    </div>
</section>
<section id="number-23">
    <a href="#" id="gotop" class="colorbg colorbghover"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</section>