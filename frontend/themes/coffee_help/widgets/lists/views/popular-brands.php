<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<aside class="brands">
    <div class="brands__inner">
        <h3 class="content__subtitle">Мы осуществляем ремонт кофемашин <b>следующих брендов</b></h3>
        <div class="brands__carousel">
            <div class="swiper-container brands__slider">
                <div class="swiper-wrapper brands__list">
                    <?php foreach ($rows as $key => $row): ?>
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
    </div>
</aside>