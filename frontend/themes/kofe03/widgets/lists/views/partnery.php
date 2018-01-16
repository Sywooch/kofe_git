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
                        <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/auchan.png">                          
                    </div>    
                    <?php if ($siteConfig['id'] != 52): ?>
                        <div class="swiper-slide brands__item">
                            <img class="brands__name brands__name_bosch" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/partners/bank_moskvi.png">  
                        </div>
                    <?php endif; ?>
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
            <div class="brands__next"></div>
            <div class="brands__prev"></div>
        </div>
        <div class="brands__pagination2"></div>
    </div>
</aside>