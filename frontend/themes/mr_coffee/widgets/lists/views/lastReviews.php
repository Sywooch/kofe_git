<section class="section-margin articles">
    <h3 class="articles__title">Отзывы</h3>
    <div class="article-list">
        <?php foreach ($rows as $row): ?>
            <div class="article-list__item">
                <header>
                    <time class="datetime"><?= date('d.m.Y', strtotime($row['date'])); ?></time>
                    <h5 class="mb0 mt0 text-theme-yellowgreen"><?= $row['username']; ?></h5>
                </header>
                <p class="article-list__item-text"><?= $row['message']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <a class="button button--dark button--small" href="response/index.html">Все отзывы</a>
</section>