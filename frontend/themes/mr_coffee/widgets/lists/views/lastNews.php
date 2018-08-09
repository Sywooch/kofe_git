<section class="panel mb40">
    <h4 class="panel__caption mb5">Новости</h4>
    <?php foreach ($rows as $row): ?>
        <article class="article">
            <time class="datetime"><?= date('d.m.Y', strtotime($row['date'])); ?></time>
            <div class="article__text article__text--news">
                <div class="article__text-link"><a href="/<?= $row['url']; ?>"><?= $row['title']; ?></a></div>
                <div class="article__text-preview"><?= $row['description']; ?></div>
            </div>
        </article>
    <?php endforeach; ?>
    <div class="panel__footer mt30"><a class="button button--dark button--small" href="/novosti">Все новости</a></div>
</section>