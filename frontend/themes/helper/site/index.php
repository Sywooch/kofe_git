<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($page['meta_title']) ? $page['meta_title'] : app\components\CController::$category['full_title'] . ' ' . \app\components\CController::$monoBrand['title'] . ' в Москве срочно и по лучшим ценам!';
?>
<?= helper\widgets\sliders\MainPageSlider::widget(['pageInfo' => $page]); ?>
<div class="container">
    <?= helper\widgets\other\Ht::widget(); ?>
    <?= helper\widgets\lists\PopularServices::widget(); ?>
</div>
<?= helper\widgets\lists\LastReviews::widget(); ?>
<div class="container">
    <section class="mainpage-text">
        <div class="content">
            <div class="content">
                <?= $page['full_description']; ?>
            </div>
        </div>
    </section>
    <?= helper\widgets\other\Ht::widget(['view' => 'faq']); ?>
    <?= helper\widgets\lists\Models::widget(['limit' => 12]); ?>
    <?= helper\widgets\other\Ht::widget(['view' => 'partners']); ?>
</div>