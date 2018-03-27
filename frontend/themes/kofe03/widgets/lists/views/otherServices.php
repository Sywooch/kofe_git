<?php
$prefUrl = '';
$url = Yii::$app->request->pathInfo;
$url = explode('/', $url);
array_pop($url);
if (!empty($url))
    $prefUrl = implode('/', $url);
?>
<aside>
    <div class="brands__carousel services-slider">
        <div class="swiper-container services__slider">
            <div class="swiper-wrapper services__list">
                <?php foreach ($services as $service): ?>
                    <div class="swiper-slide">
                        <div class="ommabob__tortburchagi">
                            <div class="ommabob__himoyalash" style="background-image: url(/kofe03/images/services/<?= $service['image']; ?>);"></div>
                            <div class="ommabob__matinlari">
                                <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $service['url']; ?>" class="ommabob__nomlari"><?= $service['title'] . ' ' . $title; ?></a>
                                <?= $service['description']; ?>
                                <p class="ommabob__narxlari">от <?= number_format($service['price'], 0, ' ', ' '); ?> р.</p>
                            </div>
                        </div>                   
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="services-slider_next"></div>
        <div class="services-slider_prev"></div>
    </div>
</aside>