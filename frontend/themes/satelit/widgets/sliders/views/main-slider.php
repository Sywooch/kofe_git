<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="slider">
    <div class="container slider-container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="slider-item">
                    <div class="text">
                        sad
                    </div>
                    <img src="<?= $assets . $siteConfig['theme']; ?>/css/brends/<?= $siteConfig['sitePrefix']; ?>/kofemashina.png" alt="Ремонт кофемашин <?= $siteConfig['sitePrefix']; ?>">
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