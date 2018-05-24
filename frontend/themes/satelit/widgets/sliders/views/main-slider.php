<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="slider">
    <div class="container slider-container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div id="slider-main" class="owl-carousel owl-theme">
                    <div class="slider-item"><img src="<?= $assets . $siteConfig['theme']; ?>/images/slide2.png" width="760" height="490" alt="Любая работа за 990"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">                
                <?= satelit\widgets\forms\Main::widget(); ?>
            </div>
        </div>
        <div class="owl-dots slider-dots"></div>
    </div>
    <i class="slider-background slider-background--left js-background-pattern"></i>
    <i class="slider-background slider-background--right js-background-pattern"></i>
</section>