<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($page['meta_title']) ? $page['meta_title'] : \app\components\CController::$category['full_title'] . ' в ' . Yii::$app->session['region']['titleRod'];
?>
<div class="wrapper__header-block wrapper__header-block--height">
    <div class="promo-block">
        <div class="container">
            <div class="row">
                <div class="promo">
                    <div class="promo__logo col-lg-5 col-sm-7 col-xs-17">
                        <a href="/">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/logo_ayryjBM.png" alt="">
                        </a>
                        <div class="promo-logo__city">Москва</div>
                    </div>
                    <div class="promo__advantage col-lg-offset-4 col-lg-6 col-sm-7">
                        <div class="promo-advantage__description">
                            Приезажем на заказ за
                        </div>
                        <div class="promo-advantage__time">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/clock_O4NQxwd.png" alt="">
                            <span class="advantage-time__minutes">
                                47 мин
                            </span>
                        </div>
                    </div>
                    <div class="promo__phone col-lg-offset-2 col-lg-7 col-sm-offset-1 col-sm-9 col-xs-20">
                        <div class="promo-phone__time">
                            <span>Без выходных</span> с 7:00 до 21:30
                        </div>
                        <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>" rel="nofollow" class="promo-phone__number">
                            <?= Yii::$app->session['region']['phone']; ?>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div class="promo-image--wash col-lg-6 col-sm-6"></div>
                    <div class="promo__text col-lg-18 col-sm-18">
                        <h1><?= !empty($page['meta_h1']) ? $page['meta_h1'] : \app\components\CController::$category['full_title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
                        <div class="promo__form-block col-lg-23 col-sm-24">
                            <div class="promo-form">
                                <?= kofefix\widgets\forms\Main::widget(); ?>
                                <div class="promo-form__description">Перезвоним за 1 минуту</div>
                            </div>
                        </div>
                        <div class="promo-text__description col-lg-24 col-sm-24">
                            <?= $page['description']; ?>
                        </div>
                    </div>
                </div>
                <a href="#advantages" rel="nofollow" class="promo_scroll">
                    <span class="promo-scroll__icon">
                        <span></span>
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/mouse_EjUXoA6.png" alt="">
                    </span>
                    <span class="promo-scroll__description">
                        Схема работы
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
<?= kofefix\widgets\lists\MainServices::widget(['h3' => 'У нас работают только лучшие инженеры по кофемашинам']); ?>
<div class="brands">
    <div class="container">
        <div class="row">
            <div class="brands__header">
                <?= $page['full_description']; ?>
            </div>
            <?= kofefix\widgets\lists\PopularBrands::widget(); ?>
        </div>
    </div>
</div>
<?= kofefix\widgets\other\Ht::widget(); ?>
<?= kofefix\widgets\forms\OrderMap::widget(); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'guarantee']); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'advantages-masters']); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'about-masters']); ?>
<?= kofefix\widgets\forms\Request::widget(); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'scheme']); ?>
<?= kofefix\widgets\forms\Request2::widget(); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'about-company']); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'faq-block']); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'order']); ?>