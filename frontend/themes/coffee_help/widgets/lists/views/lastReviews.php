<section class="reviews">
    <div class="reviews__inner">
        <h2 class="content__title">Отзывы</h2>
        <div class="reviews__carousel">
            <div class="swiper-container reviews__slider">
                <div class="swiper-wrapper reviews__list">
                    <?php foreach ($rows as $row): ?>
                        <article class="swiper-slide reviews__item">
                            <div class="reviews__box">
                                <h4 class="reviews__name"><?= $row['username']; ?></h4>
                                <time class="reviews__time"><?= date('d.m.Y', strtotime($row['username'])); ?></time>
                                <div class="reviews__rating reviews__rating_5"></div>
                                <p class="reviews__text"><?= $row['message']; ?></p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="reviews__next"></div>
            <div class="reviews__prev"></div>
        </div>
    </div>
    <p class="reviews__actions">
        <a class="reviews__all" href="/otzyvy">Все отзывы</a>
    </p>
</section>