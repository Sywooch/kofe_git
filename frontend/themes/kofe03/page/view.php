<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($model['meta_title']) ? $model['meta_title'] : $model['title'];
?>
<main class="layout__content" role="main">
    <header class="layout__head">
        <div class="layout__inner">
            <nav class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" itemprop="url" rel="Главная" href="/"><span itemprop="title">Главная</span></a></li>
                </ul>
                <span class="breadcrumbs__current"><?= $model['title']; ?></span>
            </nav>
        </div>
    </header>
    <div class="content">
        <div class="content__inner">
            <?= kofe03\widgets\menu\LeftMenu::widget(['curUrl' => $model['url']]); ?>
            <main class="content__main" role="main">
                <article class="post" style="width: 100%;">
                    <header class="post__header">
                        <h1><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title']; ?></h1>
                    </header>
                    <div class="post__content">
                        <?= $model['description']; ?>
                    </div>
                    <div class="brands__carousel garantya-logo">
                        <div class="swiper-container garantya__slider">
                            <div class="swiper-wrapper brands__list">
                                <div class="swiper-slide brands__item">
                                    <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/sertifikat/1.png" title="">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/sertifikat/1.png">
                                    </a>                       
                                </div>
                                <div class="swiper-slide brands__item">
                                    <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/sertifikat/2.png" title="">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/sertifikat/2.png">
                                    </a>                       
                                </div>
                                <div class="swiper-slide brands__item">
                                    <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/sertifikat/3.png" title="">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/sertifikat/3.png">
                                    </a>                       
                                </div>
                                <div class="swiper-slide brands__item">
                                    <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/sertifikat/4.png" title="">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/sertifikat/4.png">
                                    </a>                       
                                </div>
                                <div class="swiper-slide brands__item">
                                    <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/sertifikat/5.png" title="">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/sertifikat/5.png">
                                    </a>                       
                                </div>
                                <div class="swiper-slide brands__item">
                                    <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/sertifikat/6.png" title="">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/sertifikat/6.png">
                                    </a>                       
                                </div>
                                <div class="swiper-slide brands__item">
                                    <a class="fancybox-button" rel="fancybox-button" href="<?= $assets . $siteConfig['theme'] . '/'; ?>images/sertifikat/7.png" title="">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/sertifikat/7.png">
                                    </a>                       
                                </div>
                            </div>
                        </div>
                        <div class="garantya__next"></div>
                        <div class="garantya__prev"></div>
                    </div>
                </article>
                
            </main>
        </div>
    </div>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>