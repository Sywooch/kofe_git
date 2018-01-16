<?php $prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : ''; ?>
<aside>
    <div class="brands__carousel services-slider">
        <div class="swiper-container services__slider">
            <div class="swiper-wrapper services__list">
                <?php foreach ($services as $service): ?>
                    <div class="swiper-slide">
                        <a class="popular__box" href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $service['url']; ?>">
                            <div class="popular__cover" style="background-image: url(/kofe03/images/services/<?= $service['image']; ?>);"></div>
                            <div class="popular__text">
                                <p class="popular__name"><?= $service['title']; ?></p>
                                <?= $service['description']; ?>
                                <p class="popular__price">от <?= number_format($service['price'], 0, ' ', ' '); ?> р.</p>
                            </div>
                        </a>                   
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="services-slider_next"></div>
        <div class="services-slider_prev"></div>
    </div>
</aside>