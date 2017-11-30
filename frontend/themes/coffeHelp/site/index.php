<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $page['meta_title'];
?>
<section class="slider">
    <div class="row">
        <div class="container">
            <div class="carousel-inner">
                <img style="margin-top: 65px;" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/slider/slider1.jpg" alt="Оригинальные запчасти" width="820">
                <div class="carousel-caption">
                    <h1><?= $page['meta_h1']; ?></h1>
                    <?= $page['description']; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="who_main container">
    <?= coffeHelp\widgets\other\Advantage::widget(); ?>
    <?= coffeHelp\widgets\lists\TopServices::widget(); ?>    
</section>
<?= coffeHelp\widgets\lists\PopularBrands::widget(); ?>

<div class="my-footer-block">
    <div class="container theme-showcase" role="main">
        <hr class="big_line">
        <section class="about">
            <div class="row">
                <div class="row">
                    <div class="col-xs-12">
                        <?= $page['full_description']; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="order">
            <?= coffeHelp\widgets\forms\SidebarForm::widget(); ?>            
        </section>
    </div>
</div>
