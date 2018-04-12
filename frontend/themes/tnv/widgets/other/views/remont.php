<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div data-slider-step="392" class="wide-slider bg clearfix">
    <div class="wide-slider--desc mb133">
        <div class="wide-slider--desc-content">
            <div class="lg-pr">
                <h2 class="main-waist--title">Выполненный ремонт</h2>
                <div class="main-waist--text">
                    <p>Фотографии проведённого ремонта. Все комплектующие, необходимые для ремонта кофемашин являются оригинальными и проходят проверку перед установкой в кофемашину.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wide-slider--content">
        <div class="wide-slider--control clearfix">
            <h3 class="wide-slider--stitle float--left">Последние новости</h3>
            <div class="wide-slider--buttons float--right"><a href="#" data-toggle="left" class="wide-slider--button prev"><i class="icon-left"></i></a><a href="#" data-toggle="right" class="wide-slider--button next"><i class="icon-right"></i></a></div>
        </div>
        <div class="wide-slider--container">
            <div class="wide-slider--scroller">
                <div class="card inline alt-margins" data-flatr="news 1790">
                    <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/1.jpg" alt="" class="card--image-img" /></div>
                </div>
                <div class="card inline alt-margins" data-flatr="news 1790">
                    <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/2.jpg" alt="" class="card--image-img" /></div>
                </div>
                <div class="card inline alt-margins" data-flatr="news 1790">
                    <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/3.jpg" alt="" class="card--image-img" /></div>
                </div>
                <div class="card inline alt-margins" data-flatr="news 1790">
                    <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/4.jpg" alt="" class="card--image-img" /></div>
                </div>
                <div class="card inline alt-margins" data-flatr="news 1790">
                    <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/5.jpg" alt="" class="card--image-img" /></div>
                </div>
                <div class="card inline alt-margins" data-flatr="news 1790">
                    <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/6.jpg" alt="" class="card--image-img" /></div>
                </div>
                <div class="card inline alt-margins" data-flatr="news 1790">
                    <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/7.jpg" alt="" class="card--image-img" /></div>
                </div>
                <div class="card inline alt-margins" data-flatr="news 1790">
                    <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/8.jpg" alt="" class="card--image-img" /></div>
                </div>
                <div class="card inline alt-margins" data-flatr="news 1790">
                    <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/9.jpg" alt="" class="card--image-img" /></div>
                </div>
                <div class="card inline alt-margins" data-flatr="news 1790">
                    <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/10.jpg" alt="" class="card--image-img" /></div>
                </div>
            </div>
        </div>
    </div>
</div>