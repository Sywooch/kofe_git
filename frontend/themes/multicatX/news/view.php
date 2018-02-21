<?php
$breadcrumbs = [
    $model['title'],
];
$this->title = str_replace('#brand_en#', \app\components\CController::$monoBrand['title'], $model['meta_title']);
?>
<div class="clear"></div>
<div id="content" class="colorborder">
    <div class="inner_container">
        <?= multicatX\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    </div>    
    <div class="main_container grey_container">
        <div class="inner_container" style="overflow: hidden;">
            <div class="product-category-left-info">
                <h1 class="category_h1" style="text-align: left;"><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title'] ?></h1>
                <?= $model['description']; ?>
            </div>            
        </div>
    </div>
</div>
<?= multicatX\widgets\forms\FooterForm::widget(); ?>