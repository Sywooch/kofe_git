<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<div class="wrapper__header-block wrapper__header-block--fault">
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
                    <div class="promo-service col-lg-offset-10">
                        <div class="breadcrumbs col-lg-24 col-sm-24">
                            <?= kofefix\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="promo-service__text">
                            <div class="promo-service__title promo-service__title--fault col-lg-20 col-sm-17">
                                <h1><?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?></h1>
                            </div>
                            <div class="clearfix"></div>
                            <div class="promo-service__button col-lg-12 col-sm-10 col-xs-18">
                                <a href="/" class="promo-button__text">
                                    Заказать ремонт
                                </a>
                            </div>
                            <div class="promo-service__price col-lg-6 col-sm-7 col-xs-18">
                                <span class="price-nowrap"><i>от</i> <span><?= round($pageInfo['title']); ?></span> <i class="fa fa-rub" aria-hidden="true"></i> </span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="promo-service__advantages col-lg-21 col-sm-21">
                                <div class="service__advantages__row">
                                    <div class="service__advantages__item">
                                        <div class="service__advantages__icon">
                                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/check_small_s4kJA15.png" alt="">
                                        </div>
                                        <div class="service__advantages__text">
                                            Затрачиваемое время: 40 минут
                                        </div>
                                    </div>
                                </div>
                                <div class="service__advantages__row">
                                    <div class="service__advantages__item">
                                        <div class="service__advantages__icon">
                                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/check_small_s4kJA15.png" alt="">
                                        </div>
                                        <div class="service__advantages__text">
                                            Гарантия на услуги: до 1 года
                                        </div>
                                    </div>
                                </div>
                                <div class="service__advantages__row">
                                    <div class="service__advantages__item">
                                        <div class="service__advantages__icon">
                                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/check_small_s4kJA15.png" alt="">
                                        </div>
                                        <div class="service__advantages__text">
                                            Высококлассные специалисты
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="service-price">
            <div class="service-price__list-block col-lg-9 col-sm-8">
                <div class="service-price__list">
                    <div class="service-price__title">
                        Возможные решения
                    </div>
                    <div class="faults-price__item">
                        <?= $pageInfo['text']; ?>
                    </div>
                </div>
            </div>
            <div class="service-price__image hidden-xs hidden-sm">
                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/coffeemachine-faults_LGr4zQH.png" alt="">
            </div>
            <div class="service-price__text col-lg-12 col-lg-offset-1 col-sm-10">
                <?php if (!empty($pageInfo['description'])): ?>
                    <?= str_replace(['#brand_en#', '#model_en#'], $page['title'], $pageInfo['description']); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<?= kofefix\widgets\forms\OrderMap::widget(); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'ekonom']); ?>
<?= kofefix\widgets\forms\Request2::widget(); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'scheme']); ?>
<?= kofefix\widgets\forms\Request::widget(); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'about-company']); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'faq-block']); ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'order']); ?>