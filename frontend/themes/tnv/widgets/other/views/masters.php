<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="main-waist" data-flatr="promo-waist 2">
    <div class="main-waist--box">
        <div data-slider-step="225" class="wide-slider clearfix">
            <div class="wide-slider--desc mb133">
                <div class="wide-slider--desc-content">
                    <div class="lg-pr">
                        <h2 class="main-waist--title">Наши инженеры</h2>
                        <div class="main-waist--text">
                            <p>Инженеры сервисного центра, которые за 2017 год провели наибольший ремонт кофемашин. Каждый инженер имеет сертификат международного образца, который позволяет ремонтировать кофемашины всех брендов!</p>
                        </div>
                        <a href="#" onclick="return false;" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#online-zayavkamy">Онлайн заявка</a>
                    </div>
                </div>
            </div>
            <div class="wide-slider--content">
                <div class="wide-slider--control clearfix">
                    <div class="wide-slider--buttons float--right"><a href="#" data-toggle="left" class="wide-slider--button prev"><i class="icon-left"></i></a><a href="#" data-toggle="right" class="wide-slider--button next"><i class="icon-right"></i></a></div>
                </div>
                <div class="wide-slider--container">
                    <div class="wide-slider--scroller">
                        <div class="film-box">
                            <div class="film-box--img-cont"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/master/1.jpg" class="film-box--img" /></div>
                            <div class="film-box--desc">Зацепин Егор</div>
                        </div>
                        <div class="film-box">
                            <div class="film-box--img-cont"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/master/2.jpg" class="film-box--img" /></div>
                            <div class="film-box--desc">Черепанцев Владимир</div>
                        </div>
                        <div class="film-box">
                            <div class="film-box--img-cont"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/master/3.jpg" class="film-box--img" /></div>
                            <div class="film-box--desc">Якушин Марат</div>
                        </div>
                        <div class="film-box">
                            <div class="film-box--img-cont"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/master/4.jpg" class="film-box--img" /></div>
                            <div class="film-box--desc">Андреев Евгений</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>