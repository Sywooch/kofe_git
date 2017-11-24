<div class="seo-link link-toggle">
    <?php if ($h): ?>
        <h2 class="seo-link__title">Выберите производителя вашей кофемашины</h2>
        <hr>
    <?php endif; ?>
    <ul class="seo-link__lists">
        <?php foreach ($brands as $k => $brand): ?>
            <li<?= $k >= 19 ? ' style="display: none"' : ''; ?> class="seo-link__list"><a href="/<?= $brand['url']; ?>"> <?= $brand['title']; ?></a></li>
        <?php endforeach; ?>
    </ul>
    <a style="cursor: pointer" class="seo-link__btn">посмотреть все</a>
</div>