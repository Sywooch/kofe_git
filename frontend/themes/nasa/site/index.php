<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($page['meta_title']) ? $page['meta_title'] :  app\components\CController::$category['full_title'] . ' ' . \app\components\CController::$monoBrand['title'] . ' в Москве срочно и по лучшим ценам!';
?>
<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1 text-md-center">
                <div class="intro__preview"></div>
            </div>
            <div class="col-md-6 order-1 order-md-2 text-center text-md-left">
                <h1 class="intro__heading"><?= app\components\CController::$category['full_title']; ?><?= ' ' . \app\components\CController::$monoBrand['title']; ?> в <?= Yii::$app->session['region']['titleRod']; ?> с гарантией до 1 года!</h1>
                <div class="d-lg-block d-none intro__description">
                    <p><?= $page['description']; ?></p>
                </div>
                <div class="intro__promo">
                    <div class="h5 intro__promo-heading">Акция дня! 25% скидка на услуги сегодня</div>
                    <?= nasa\widgets\forms\Main::widget(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= nasa\widgets\lists\Neispravnost::widget(); ?>
<?= nasa\widgets\lists\PopularModels::widget(['parent' => app\components\CController::$monoBrand['id']]); ?>
<?= nasa\widgets\other\Advantage::widget(); ?>
<?= nasa\widgets\other\Advantage::widget(['view' => 'warranty']); ?>
<?= nasa\widgets\other\Advantage::widget(['view' => 'timer']); ?>