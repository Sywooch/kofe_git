<section id="inner-modeli">
    <div class="container">
        <ul>
            <?php foreach ($rows as $row): ?>
                <li>
                    <a href="/<?= $row['url']; ?>">
                        <?= $brand['title']; ?> <?= $row['title']; ?>
                    </a>
                </li>
                
                
                
            <?php endforeach; ?>
                <div class="clear"></div>
        </ul>
    </div>
</section>