<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
use \app\components\CController;
$this->title = !empty($page['meta_title']) ? $page['meta_title'] : CController::$category['full_title'] . ' ' . CController::$monoBrand['title'] . ' в Москве срочно и по лучшим ценам!';
?>
<a href="#"></a>
<!-- header -->
<div class="afterheader">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-6 col-md-9 col-ms-offset-3 col-sm-12">
                <h1 class="ah_text">
                    <?= !empty($page['meta_h1']) ? str_replace('#brand_en#', CController::$monoBrand['title'], $page['meta_h1'])  : CController::$category['full_title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?>
                </h1>
                <div class="ah_triggers">
                    <?= $page['description']; ?>
                </div>
                <?= ofitsial\widgets\forms\Main::widget(); ?>
                <div class="mini-text">
                    <p>Перезвоним Вам за 2 минуты!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= ofitsial\widgets\other\Ht::widget(); ?>
<?= ofitsial\widgets\lists\Neispravnost::widget(); ?>
<?php if (!empty($page['full_description'])): ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 rightside_container">                
                <div class="commercpage_text">
                    <?= $page['full_description']; ?>
                </div>                
            </div>
        </div>
    </div>
<?php endif; ?>
<?= ofitsial\widgets\other\Ht::widget(['view' => 'form-adv']); ?>
<?= ofitsial\widgets\other\Ht::widget(['view' => 'map']); ?>
<?= ofitsial\widgets\lists\LastReviews::widget(); ?>