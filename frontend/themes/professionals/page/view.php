<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($model['meta_title']) ? $model['meta_title'] : $model['title'];
?>
<header class="header header__about">
    <?= professionals\widgets\menu\MainMenu::widget(); ?>
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-11 col-sm-14">
                    <h1 class="title title__1 light"><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title']; ?></h1>
                </div>
                <div class="col-lg-12 col-md-11 col-sm-10 col-md-offset-2">
                    <div class="hero_why-we">
                        <?= $model['description']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="solutions">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <?= professionals\widgets\other\YouGet::widget(); ?>
            </div>
        </div>
    </div>
</section>
<?= professionals\widgets\other\Advantage::widget(['view' => 'advantage1']); ?>
<?= professionals\widgets\forms\Today::widget(); ?>
<?= professionals\widgets\other\Masters::widget(); ?>
<?= professionals\widgets\other\Advantage::widget(['view' => 'advantage1']); ?>
<?= professionals\widgets\lists\LastReviews::widget(); ?>