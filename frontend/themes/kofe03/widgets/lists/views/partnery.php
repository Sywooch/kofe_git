<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<aside class="brands">
    <div class="brands__inner">
        <h3 class="content__subtitle">Нашими услугами пользуются:</h3>
        <div class="brands__carousel partnyori-logo">
            <div class="swiper-container brands__slider2">
                <div class="swiper-wrapper brands__list">                    
                    <div class="swiper-slide brands__item">
                        <a class="brands__box" onclick="return false;" href="#">
                            <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/auchan.png">                                
                        </a>
                    </div>                    
                    <div class="swiper-slide brands__item">
                        <a class="brands__box" onclick="return false;" href="#">
                            <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/bank_moskvi.png">                                
                        </a>
                    </div>
                    <div class="swiper-slide brands__item">
                        <a class="brands__box" onclick="return false;" href="#">
                            <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/beeline.png">                                
                        </a>
                    </div>
                    <div class="swiper-slide brands__item">
                        <a class="brands__box" onclick="return false;" href="#">
                            <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/gazprom.png">                                
                        </a>
                    </div>
                    <div class="swiper-slide brands__item">
                        <a class="brands__box" onclick="return false;" href="#">
                            <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/kfc.png">                                
                        </a>
                    </div>
                    <div class="swiper-slide brands__item">
                        <a class="brands__box" onclick="return false;" href="#">
                            <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/lukoil.png">                                
                        </a>
                    </div>
                    <div class="swiper-slide brands__item">
                        <a class="brands__box" onclick="return false;" href="#">
                            <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/macdonalds.png">                                
                        </a>
                    </div>
                    <div class="swiper-slide brands__item">
                        <a class="brands__box" onclick="return false;" href="#">
                            <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/mega.png">                                
                        </a>
                    </div>
                    <div class="swiper-slide brands__item">
                        <a class="brands__box" onclick="return false;" href="#">
                            <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/megafon.png">                                
                        </a>
                    </div>
                    <div class="swiper-slide brands__item">
                        <a class="brands__box" onclick="return false;" href="#">
                            <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/mts.png">                                
                        </a>
                    </div>
                    <div class="swiper-slide brands__item">
                        <a class="brands__box" onclick="return false;" href="#">
                            <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/rjd.png">                                
                        </a>
                    </div>
                    <div class="swiper-slide brands__item">
                        <a class="brands__box" onclick="return false;" href="#">
                            <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/sberbank.png">                                
                        </a>
                    </div>
                    <div class="swiper-slide brands__item">
                        <a class="brands__box" onclick="return false;" href="#">
                            <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/tele2.png">                                
                        </a>
                    </div>
                    <div class="swiper-slide brands__item">
                        <a class="brands__box" onclick="return false;" href="#">
                            <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/vtb24.png">                                
                        </a>
                    </div>
                </div>
            </div>
            <div class="brands__next"></div>
            <div class="brands__prev"></div>
        </div>
        <div class="brands__pagination2"></div>
    </div>
</aside>