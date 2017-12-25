<section id="number-11">
    <div class="container">
        <div class="title">Частые неисправности</div>
        <?php foreach ($rows as $group => $neisps): ?>
            <div class="item">
                <span><?= $group; ?></span>
                <?php foreach ($neisps as $neisp): ?>
                    <a href="/<?= $category['url'] . '-' . $neisp['url']; ?>"><?= $neisp['title']; ?></a>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
        <div class="clear"></div>
    </div>
</section>