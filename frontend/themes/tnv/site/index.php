<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($page['meta_title']) ? $page['meta_title'] : 'Ремонт кофемашин в ' . Yii::$app->session['region']['titleRod'] . ' ☕️ Низкие цены ✔️ Официальная гарантия 📃';
?>
<div class='parent'>
    <div class='slider'>
        <div id="slide1" class="slide1">
            <h1><?= !empty($page['meta_h1']) ? $page['meta_h1'] : \app\components\CController::$category['full_title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
            <?= $page['description']; ?>
        </div>
    </div>
</div>
<?= tnv\widgets\forms\MainPageForm::widget(); ?>
<?= tnv\widgets\lists\TopServices::widget(); ?>
<?= tnv\widgets\other\Advantage::widget(); ?>
<?= tnv\widgets\lists\PopularServices::widget(); ?>
<div class="aside-layout container mb166">
    <div class="row sticky-parent">        
        <div class="page col-xs-12 col-md-12">
            <div data-flatr="webpage 46">                
                <div class="richtext ">
                    <?= $page['full_description']; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= tnv\widgets\lists\PopularBrands::widget(); ?>
<?= tnv\widgets\other\Masters::widget(); ?>
<?= tnv\widgets\lists\PopularModels::widget(); ?>
<?= tnv\widgets\other\Remont::widget(); ?>
<?= tnv\widgets\lists\LastReviews::widget(); ?>
<?= tnv\widgets\lists\LastNews::widget(); ?>
