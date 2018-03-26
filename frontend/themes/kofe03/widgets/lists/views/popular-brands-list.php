<div class="search-brends">
    <div class="right">
        <ul class="Menyu-lst">
            <?php foreach ($rows as $key => $row): ?>
            <li class="Menyu-itm"><a class="Menyu-sslk" href="/<?= $row['url']; ?>"><?= $row['title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>