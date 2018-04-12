<aside class="brands">
    <div class="brands__inner">
        <p class="content__subtitle title_h3">Мы осуществляем ремонт кофемашин <b>следующих моделей</b></p>
        <div class="brands__carousel models-logo">
            <div class="swiper-container models__slider">
                <div class="swiper-wrapper brands__list">
                    <?php foreach ($rows as $row): ?>
                        <div class="swiper-slide models__item">
                            <a href="/<?= $row['url']; ?>" title="<?= $row['title']; ?>">
                                <img class="brands__name" src="/uploads/images/<?= $row['image']; ?>">
                                <p><?= $row['title']; ?></p>
                            </a>                       
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="models__next"></div>
            <div class="models__prev"></div>
        </div>
    </div>
</aside>