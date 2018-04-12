<noindex>
  <section class="reviews">
    <div class="reviews__inner">
        <p class="title_h2 ommabob__oshadee">Отзывы</p>
        <div class="reviews__carousel">
            <div class="swiper-container reviews__slider">
                <div class="swiper-wrapper reviews__list">
                    <?php foreach ($rows as $row): ?>
                        <article class="swiper-slide reviews__item">
                            <div class="reviews__box">
                                <span class="reviews__name title_h4"><?= $row['username']; ?></span>
                                <div class="reviews__rating reviews__rating_5"></div>
                                <?= $row['message']; ?>
                                <div class="reviews__more">
                                   <a rel="nofollow" class="reviews__full popup_js" data-popup="review_<?= $row['id']; ?>" href="#">Развернуть</a>
                                </div>
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
        <a rel="nofollow" class="reviews__all" href="/otzyvy">Все отзывы</a>
    </p>
    <?php foreach ($rows as $row): ?>
    <div class="popup popup_reviews popup_review_<?= $row['id']; ?>">
       <div class="popup__bg"></div>
       <div class="popup__main">
          <div class="popup__review">
             <div class="reviews">
                <div class="reviews__single reviews__single_zoon">
                   <div class="reviews__container">
                      <span class="reviews__name title_h4"><?= $row['username']; ?></span>
                      <div class="reviews__rating reviews__rating_5"></div>
                      <div class="reviews__text_popup">
                         <?= $row['message']; ?>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="popup__close"></div>
       </div>
    </div>
    <?php endforeach; ?>
</section>
</noindex>