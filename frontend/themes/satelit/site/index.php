<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($page['meta_title']) ? $page['meta_title'] : app\components\CController::$category['full_title'] . ' ' . \app\components\CController::$monoBrand['title'] . ' в Москве срочно и по лучшим ценам!';
?>
<?= satelit\widgets\sliders\MainPageSlider::widget(); ?>
<div class="container">
    <?= satelit\widgets\other\Ht::widget(); ?>
    <?= satelit\widgets\lists\PopularServices::widget(); ?>
</div>
<?= satelit\widgets\lists\LastReviews::widget(); ?>
<div class="container">
    <section class="mainpage-text">
        <div class="content">
            <div class="content">
                <?= $page['full_description']; ?>
            </div>
        </div>
    </section>
    <?= satelit\widgets\other\Ht::widget(['view' => 'faq']); ?>
    <?= satelit\widgets\lists\Models::widget(['limit' => 12]); ?>
    <?= satelit\widgets\other\Ht::widget(['view' => 'partners']); ?>
</div>