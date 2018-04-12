<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<aside class="brands">
    <div class="brands__inner">
        <p class="content__subtitle title_h3">Мы осуществляем ремонт кофемашин <b>следующих брендов</b></p>
        <div class="brands__carousel">
            <div class="swiper-container brands__slider">
                <div class="swiper-wrapper brands__list">
                    <?php foreach ($rows as $key => $row): ?>
                        <img style="opacity: 0;position: absolute;z-index: -999999999;height: 100%;width: 100%;top: 0px;left: 0px;" src="<?= $assets ?>/uploads/images/<?= $row['image']; ?>" alt="">
                        <div class="swiper-slide brands__item">
                            <a class="brands__box" href="/<?= $row['url']; ?>">
                                <img class="brands__name brands__name_bosch" src="<?= $assets ?>/uploads/images/<?= $row['image']; ?>" alt="<?= $row['title']; ?>">                                
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="brands__next"></div>
            <div class="brands__prev"></div>
        </div>
        <div class="brands__pagination"></div>
        <div class="ommabob__harakati">
                <a class="reviews__all" href="/brendy">Все бренды</a>
            </div>
    </div>
</aside>