<?php 
$assets = Yii::getAlias('@web');
$breadcrumbs = [
    $page['full_title'],
];
$this->title = $page['meta_title'];
?>
<?= multicat\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-5" style="background-image: url(<?= $assets ?>/multicat/images/upload/banner.png)">
    <div class="container">        
        <h1><?= !empty($page['meta_h1']) ? $page['meta_h1'] : $page['title']; ?></h1>
        <?= $page['description']; ?>
        <div class="clear"></div>
    </div>
</section>
<?= multicat\widgets\sliders\Slider::widget(); ?>
<?= multicat\widgets\other\Advantage::widget(); ?>
<?= multicat\widgets\lists\Models::widget(['models' => $models]); ?>
<?= multicat\widgets\lists\AllPrices::widget(['models' => $models, 'parent' => app\components\CController::$category]); ?>
<?= multicat\widgets\lists\Neispravnost::widget(['category' => app\components\CController::$category]); ?>
<section id="number-13">
    <div class="container">
        <?= multicat\widgets\lists\LastReviews::widget(); ?>
        <?= multicat\widgets\lists\LastNews::widget(); ?>
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