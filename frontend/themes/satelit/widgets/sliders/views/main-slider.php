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
                        <h1><?= $page['meta_h1']; ?></h1>
                        <p><?= $page['description']; ?></p>
                    </div>
                    <img src="<?= $assets . $siteConfig['theme']; ?>/css/brends/<?= $siteConfig['sitePrefix']; ?>/kofemashina.png" alt="Ремонт кофемашин <?= $siteConfig['sitePrefix']; ?>">
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">                
                <?= satelit\widgets\forms\Main::widget(); ?>
            </div>
        </div>
    </div>
</section>