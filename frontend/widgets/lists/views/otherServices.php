<h2 class="title">Дополнительные услуги</h2>
<div class="links__list three-col">
    <ul>
        <?php foreach ($rows as $row): ?>
            <li>
                <a href="/<?= $row['url']; ?>"><?= $row['title']; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>