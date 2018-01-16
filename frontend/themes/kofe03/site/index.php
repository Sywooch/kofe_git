<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($page['meta_title']) ? $page['meta_title'] : \app\components\CController::$category['full_title'] . ' в ' . Yii::$app->session['region']['titleRod'];
?>
<main class="layout__content" role="main">
    <aside class="poster" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?= $siteConfig['id']; ?>/poster_1.jpg?v2);">
        <div class="poster__inner">
            <?php if (!Yii::$app->params['devicedetect']['isMobile']): ?>
                <div class="poster__content">
                    <h1 class="poster__title" itemprop="name"><?= !empty($page['meta_h1']) ? $page['meta_h1'] : \app\components\CController::$category['full_title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
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