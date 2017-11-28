<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $pageInfo['meta_title'];
?>
<div class="bl-heading" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-heading.jpg);">
    <div class="container">
        <div class="heading">Авторизованный сервисный центр </div>
        <h1 class="heading-description"><?= $pageInfo['meta_h1']; ?></h1>
    </div>
</div>
<?= remont_coffee\widgets\other\Advantage::widget(); ?>
<div class="main container">
    <div class="right">
        <?= remont_coffee\widgets\forms\SidebarForm::widget(); ?>
    </div>
    <div class="left">
        <div class="bl-text">
            <div class="heading">
                <span><?= $pageInfo['title']; ?></span>
            </div>
            <?= remont_coffee\widgets\lists\AllBrands::widget(['h' => false]); ?>
        </div>
        <?= remont_coffee\widgets\lists\PopularModels::widget(); ?>
        <?= remont_coffee\widgets\lists\TopServices::widget(); ?>
    </div>   
</div>