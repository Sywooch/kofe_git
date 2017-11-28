<ul id="myBrend" class="menu__list">
    <?php foreach ($brands as $k => $brand): ?>
        <li class="menu__item"><a class="menu__link" href="/<?= $brand['url']; ?>"> <?= $brand['title']; ?></a></li>
        <?php endforeach; ?>
</ul>