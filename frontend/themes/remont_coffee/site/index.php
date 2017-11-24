<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $page['meta_title'];
?>
<div class="container-fluid hidden-xs hidden-sm">
    <div class="row hero" style="background: url('<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-hero.jpg') 100% 100% no-repeat; background-size: cover;">
        <div class="container">
            <div class="hero-text" style="padding-left: 0;">
                <div class="heading">Авторизованный сервисный центр</div>
                <div class="heading">
                    <h1><?= $page['meta_h1']; ?></h1>
                </div>
                <div class="description"><?= $page['description']; ?></div>
                <?= remont_coffee\widgets\forms\MainPageForm::widget(); ?>
            </div>
        </div>
        <?= remont_coffee\widgets\other\Advantage::widget(); ?>
    </div>
</div>

<div class="main container">
    <div class="right">
        <?= remont_coffee\widgets\forms\SidebarForm::widget(); ?>
    </div>
    <div class="left">
        <?= remont_coffee\widgets\lists\TopServices::widget(); ?>        
        <?= remont_coffee\widgets\lists\AllBrands::widget(); ?>
        <div class="bl-text">
            <?= $page['full_description']; ?>
            <?= remont_coffee\widgets\lists\Services::widget(); ?>
        </div>
        <?= remont_coffee\widgets\other\Contacts::widget(); ?>
        <?= remont_coffee\widgets\other\Subways::widget(); ?>
        <?= remont_coffee\widgets\lists\PopularModels::widget(); ?>
        <?= remont_coffee\widgets\lists\LastReviews::widget(); ?>
    </div>
</div>