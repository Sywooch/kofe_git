<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<div class="promo-block promo-block--about">
    <div class="container">
        <div class="row">
            <div class="promo promo--price">
                <div class="promo__logo col-lg-5 col-sm-7 col-xs-17">
                    <a href="/">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/logo--inner_6BXZU7h.png" alt="">
                    </a>
                    <div class="promo-logo__city">Москва</div>
                </div>
                <div class="promo__phone col-lg-offset-12 col-lg-7 col-sm-offset-1 col-sm-9 col-xs-20">
                    <div class="promo-phone__time">
                        <span>Без выходных</span> с 7:00 до 23:30
                    </div>
                    <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>" class="promo-phone__number promo-phone__number--blue">
                        <?= Yii::$app->session['region']['phone']; ?>
                    </a>
                </div>
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <div class="promo-service">
                    <div class="col-lg-14 col-sm-17">
                        <h1><?= !empty($model['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title']; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= kofefix\widgets\lists\Neispravnost::widget(); ?>
<?= kofefix\widgets\forms\Request2::widget(); ?>
<?= kofefix\widgets\lists\Services::widget(); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'order']); ?>