<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
$breadcrumbs = [
    $pageInfo['title'],
];
?>
<header class="header header__about">
    <?= professionals\widgets\menu\MainMenu::widget(); ?>
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-16 col-md-12 col-sm-24">
                    <?= professionals\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>                
                </div>                
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-24">
                    <h1 class="title title__1 light"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title']; ?></h1>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-24 col-md-offset-2">
                    <div class="hero_why-we">
                        <?= $pageInfo['description']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= professionals\widgets\forms\Today::widget(); ?>
</header>
<?= professionals\widgets\other\Advantage::widget(['view' => 'advantage1']); ?>
<?= professionals\widgets\lists\LastReviews::widget(); ?>