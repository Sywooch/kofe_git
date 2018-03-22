<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $page['meta_title'];
?>
<div class="container-fluid hidden-xs hidden-sm">
    <div class="row hero" style="background: url('<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-hero.jpg') 100% 100% no-repeat; background-size: cover;">
        <div class="container banner">
            <div class="hero-text">
                <div class="heading">Авторизованный сервисный центр</div>
                <div class="heading">
                    <h1><?= $page['meta_h1']; ?></h1>
                </div>
                <div class="description"><?= $page['description']; ?></div>
                <?= remont_coffee\widgets\forms\MainPageForm::widget(); ?>
            </div>
            <?php if ($siteConfig['id'] == 53): ?>
                <img class="banner-images" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/j/kofe.png">
            <?php endif; ?>
        </div>
        <?= remont_coffee\widgets\other\Advantage::widget(); ?>
    </div>
</div>

<!--<?= remont_coffee\widgets\forms\SidebarForm::widget(); ?>-->

<?= remont_coffee\widgets\lists\TopServices::widget(); ?>     

<div class="full-text">
    <div class="container">
        <?= $page['full_description']; ?>
        <hr>
    </div>
</div>

<?= remont_coffee\widgets\lists\PopularModels::widget(); ?>

<?= remont_coffee\widgets\lists\LastReviews::widget(); ?>

<?= remont_coffee\widgets\other\Subways::widget(); ?>
   
<?= remont_coffee\widgets\lists\AllBrands::widget(); ?>