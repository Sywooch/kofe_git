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
                    <div class="brands__carousel partnyori-logo">
                        <div class="swiper-container garantya__slider">
                            <div class="swiper-wrapper brands__list">                    
                                <div class="swiper-slide brands__item">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/auchan.png">                          
                                </div>                    
                                <div class="swiper-slide brands__item">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/bank_moskvi.png">  
                                </div>
                                <div class="swiper-slide brands__item">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/beeline.png">      
                                </div>
                                <div class="swiper-slide brands__item">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/gazprom.png">             
                                </div>
                                <div class="swiper-slide brands__item">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/kfc.png">    
                                </div>
                                <div class="swiper-slide brands__item">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/lukoil.png">  
                                </div>
                                <div class="swiper-slide brands__item">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/macdonalds.png">               
                                </div>
                                <div class="swiper-slide brands__item">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/mega.png">                
                                </div>
                                <div class="swiper-slide brands__item">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/megafon.png">              
                                </div>
                                <div class="swiper-slide brands__item">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/mts.png">  
                                </div>
                                <div class="swiper-slide brands__item">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/rjd.png">          
                                </div>
                                <div class="swiper-slide brands__item">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/sberbank.png">        
                                </div>
                                <div class="swiper-slide brands__item">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/tele2.png">
                                </div>
                                <div class="swiper-slide brands__item">
                                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/vtb24.png">      
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