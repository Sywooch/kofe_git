<section id="hlebniye-kroshki">
    <div class="container">
        <ul>
            <li><a href="/">Ремонт кофемашин</a></li>
            <?php foreach ($data as $url => $title): ?>
                <?php if (end($data) == $title): ?>                
                    <li><?= $title; ?></li>
                <?php else: ?>
                    <li><a href="<?= $url; ?>"><?= $title; ?></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</section>