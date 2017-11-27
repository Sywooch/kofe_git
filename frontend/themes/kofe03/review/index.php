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
                            <time class="reviews__time"><?= date('d.m.Y', strtotime($row['date'])); ?><</time>
                            <div class="reviews__rating reviews__rating_<?= $row['rating']; ?>"></div>
                            <p class="reviews__text"><?= $row['message']; ?></p>
                            <div class="reviews__more">
                                <a class="reviews__full js-popup" data-popup="review_1" href="#">Еще</a>
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
        </div>
    </section>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>