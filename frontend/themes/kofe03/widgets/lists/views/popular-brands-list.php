<div class="search-brends">
    <div class="right">
        <ul class="menu__list">
            <?php foreach ($rows as $key => $row): ?>
            <li class="menu__item"><a class="menu__link" href="/<?= $row['url']; ?>"><?= $row['title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>