<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
$breadcrumbs = [
    'Ремонт кофемашин ' . $pageInfo['title'],
];
?>
<div class="wrapper__header-block wrapper__header-block--brand">
    <div class="wrapper__header-block-pattern"></div>
    <div class="promo-block">
        <div class="container">
            <div class="row">
                <div class="promo promo--brand-page">
                    <div class="promo__logo col-lg-5 col-sm-7 col-xs-17">
                        <a href="/">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/logo_ayryjBM.png" alt="">
                        </a>
                        <div class="promo-logo__city">Москва</div>
                    </div>
                    <div class="promo__advantage col-lg-offset-4 col-lg-6 col-sm-7">
                        <div class="promo-advantage__description">
                            Cреднее время приезда
                            мастера на прошлой неделе
                        </div>
                        <div class="promo-advantage__time">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/clock_O4NQxwd.png" alt="">
                            <span class="advantage-time__minutes">
                                43 мин
                            </span>
                        </div>
                    </div>
                    <div class="promo__phone col-lg-offset-2 col-lg-7 col-sm-offset-1 col-sm-9 col-xs-20">
                        <div class="promo-phone__time">
                            <span>Без выходных</span> с 7:00 до 23:30
                        </div>
                        <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>" rel="nofollow" class="promo-phone__number">
                            <?= Yii::$app->session['region']['phone']; ?>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="promo-service">
                        <div class="breadcrumbs col-lg-24 col-sm-24">
                            <?= kofefix\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
                        </div>
                        <div class="promo-service__text">
                            <div class="promo-service__title col-lg-16 col-sm-16">
                                <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
                            </div>
                            <div class="clearfix"></div>
                            <div class="promo-service__description col-lg-6 col-sm-8 col-xs-24">
                                Ремонт у вас дома
                                в день обращения
                            </div>
                            <div class="promo-service__button col-lg-7 col-sm-8 col-xs-18">
                                <a href="../../zakaz/index.html" class="promo-button__text">
                                    Заказать ремонт
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand-advantages">
    <div class="container">
        <div class="row">
            <div class="brand-advantages__logo col-lg-6 col-sm-6">
                <img src="/uploads/images/<?= $pageInfo['image']; ?>" alt="">
            </div>
            <div class="brand-advantages__item col-lg-12 col-sm-12">
                <div class="brand-item__icon">
                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/check_small_s4kJA15.png" alt="">
                </div>
                <div class="brand-item__text">
                    <?php if (!empty($pageInfo['description'])): ?>            
                        <?= str_replace('#brand_en#', $pageInfo['title'], $pageInfo['description']); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="brand-advantages__item col-lg-9 col-sm-9">
            </div>
        </div>
    </div>
</div>
<?= kofefix\widgets\lists\MainServices::widget(['title' => 'Частые неисправности кофемашин марки ' . $pageInfo['title']]); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'pochinka']); ?>
<?= kofefix\widgets\forms\OrderMap::widget(); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'ekonom']); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'advantages-masters']); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'about-masters']); ?>
<?= kofefix\widgets\forms\Request::widget(); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'scheme']); ?>
<?= kofefix\widgets\forms\Request2::widget(); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'about-company']); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'faq-block']); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'order']); ?>