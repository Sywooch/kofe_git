<div class="seo-link link-toggle">
    <h2 class="seo-link__title">Ремонт кофемашин  в Москве, рядом с метро</h2>
    <hr>
    <ul class="seo-link__lists">
        <?php foreach ($pages as $key => $page): ?>
        <li class="seo-link__list"<?= $key >= 44 ? ' style="display: none;"' : ''; ?>><a href="/<?= $page['url']; ?>"> <?= $page['title']; ?></a></li>
        <?php endforeach; ?>
    </ul>
    <a style="cursor: pointer" class="seo-link__btn">посмотреть все</a>
</div>