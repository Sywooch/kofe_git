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
                    <p>Фотографии кофемашин ДО и ПОСЛЕ проведённого ремонта. Все комплектующие, необходимые для ремонта кофемашин являются оригинальтными и проходят проверку перед установкой в кофемашину.</p>
                </div>
                <div class="main-waist--btns"><a href="#" class="btn btn-primary btn-lg">Онлайн заявка</a></div>
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
                    <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/IMG_9823.jpg" alt="" class="card--image-img" /></div>
                    <div class="tag green">BORK C500</div>
                </div>
                <div class="card inline alt-margins" data-flatr="news 1790">
                    <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/IMG_9844.jpg" alt="" class="card--image-img" /></div>
                    <div class="tag green">BORK C500</div>
                </div>
                <div class="card inline alt-margins" data-flatr="news 1790">
                    <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/IMG_9846.jpg" alt="" class="card--image-img" /></div>
                    <div class="tag green">BORK C500</div>
                </div>
                <div class="card inline alt-margins" data-flatr="news 1790">
                    <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/IMG_9823.jpg" alt="" class="card--image-img" /></div>
                    <div class="tag green">BORK C500</div>
                </div>
                <div class="card inline alt-margins" data-flatr="news 1790">
                    <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/IMG_9844.jpg" alt="" class="card--image-img" /></div>
                    <div class="tag green">BORK C500</div>
                </div>
                <div class="card inline alt-margins" data-flatr="news 1790">
                    <div class="img"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/raboti/IMG_9846.jpg" alt="" class="card--image-img" /></div>
                    <div class="tag green">BORK C500</div>
                </div>
            </div>
        </div>
    </div>
</div>