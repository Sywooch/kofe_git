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
                        <div class="popular__box">
                            <div class="popular__cover" style="background-image: url(/kofe03/images/services/<?= $service['image']; ?>);"></div>
                            <div class="popular__text">
                                <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $service['url']; ?>" class="popular__name"><?= $service['title']; ?></a>
                                <?= $service['description']; ?>
                                <p class="popular__price">от <?= number_format($service['price'], 0, ' ', ' '); ?> р.</p>
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