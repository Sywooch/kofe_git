<ul class="menu__list">
    <?php foreach ($services as $child): ?>
        <li class="menu__item"><a class="menu__link" href="/<?= $child['url']; ?>"><?= $child['title']; ?></a></li>
    <?php endforeach; ?>
</ul>
