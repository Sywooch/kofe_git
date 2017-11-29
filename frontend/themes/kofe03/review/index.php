<main class="layout__content" role="main">
    <header class="layout__head">
        <div class="layout__inner">
            <nav class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" itemprop="url" rel="Главная" href="/"><span itemprop="title">Главная</span></a></li>
                </ul>
                <span class="breadcrumbs__current">Отзывы</span>
            </nav>
            <h1 class="layout__title">Отзывы</h1>
        </div>
    </header>
    <section class="reviews reviews_context">
        <div class="reviews__inner">
            <div class="reviews__list">
                <?php foreach ($rows as $row): ?>
                    <article class="reviews__item">
                        <div class="reviews__box">
                            <h4 class="reviews__name"><?= $row['username']; ?></h4>
                            <div class="reviews__rating reviews__rating_<?= $row['rating']; ?>"></div>
                            <?= $row['message']; ?>
                            <div class="reviews__more">
                                <a class="reviews__full js-popup" data-popup="review_<?= $row['id']; ?>" href="#">Еще</a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
                <?=
                \yii\widgets\LinkPager::widget([
                    'pagination' => $pagination,
                ]);
                ?>
            </div>
            <?php foreach ($rows as $row): ?>
            <div class="popup popup_reviews popup_review_<?= $row['id']; ?>">
               <div class="popup__bg"></div>
               <div class="popup__main">
                  <div class="popup__review">
                     <div class="reviews">
                        <div class="reviews__single reviews__single_zoon">
                           <div class="reviews__container">
                              <h4 class="reviews__name"><?= $row['username']; ?></h4>
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
        </div>
    </section>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>