<aside class="sidebar" role="complementary">
    <nav class="sidebar__nav" role="navigation">
        <ul class="sidebar__list">
            <?php foreach ($rows as $link => $row): ?>
                <li class="sidebar__item<?= $curUrl == $link ? ' active' : '' ?>" ><a class="sidebar__link" href="/<?= $link; ?>"><?= $row; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</aside>