<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $page['meta_title'];
?>
<main class="layout__content" role="main">
    <aside class="poster" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?php if ($siteConfig['id'] == 52): ?>j/<?php endif; ?>poster_1.jpg);">
        <div class="poster__inner">
            <?php if (!Yii::$app->params['devicedetect']['isMobile']): ?>
                <div class="poster__content">
                    <h1 class="poster__title" itemprop="name"><?= $page['meta_h1']; ?></h1>
                    <div class="clear"></div>
                    <div class="poster__text" itemprop="description">
                        <?= $page['description']; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?= kofe03\widgets\forms\MainPageForm::widget(['h1' => (Yii::$app->params['devicedetect']['isMobile'] ? $page['meta_h1'] : null)]); ?>
            <div class="clear"></div>
        </div>
    </aside>
    <?= kofe03\widgets\lists\TopServices::widget(); ?> 
    <?= kofe03\widgets\lists\PopularServices::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
    
    <div class="poster__inner">        
        <?= $page['full_description']; ?>
    </div>


    <?= kofe03\widgets\lists\LastReviews::widget(); ?>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\other\Subways::widget(); ?>
    <?= kofe03\widgets\lists\Parnery::widget(); ?>
</main>