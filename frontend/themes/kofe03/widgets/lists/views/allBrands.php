<ul id="myBrend" class="Menyu-lst">
    <?php foreach ($brands as $k => $brand): ?>
        <li class="menu__item<?= $brand['sort'] <= 20 ? ' populars' : ''; ?>"><a class="Menyu-sslk" href="/<?= $brand['url']; ?>"> <?= $brand['title']; ?></a></li>
        <?php endforeach; ?>
</ul>