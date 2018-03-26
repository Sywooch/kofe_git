<ul class="Menyu-lst">
    <?php foreach ($services as $child): ?>
        <li class="Menyu-itm"><a class="Menyu-sslk" href="/<?= $child['url']; ?>"><?= $child['title']; ?></a></li>
    <?php endforeach; ?>
</ul>
