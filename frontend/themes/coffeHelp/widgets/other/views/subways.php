<aside class="city">
    <div class="city__inner">
        <div class="h3 content__subtitle">Обслуживаемые города <b>МО</b></div>
        <div class="citys">
            <ul>
                <?php foreach ($rows as $row): ?>
                    <li><a href="/<?= $row['url']; ?>"><?= str_replace(['Ремонт кофемашин в городе ', '!'], '', $row['title']); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</aside>