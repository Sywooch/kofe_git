<?php foreach ($pages as $key => $page): ?>
    <?php if (($key % 15) === 0): ?><div class="review"><?php endif; ?>
        <a href="/<?= $page['url']; ?>"> <?= $page['title']; ?></a>
        <?php if (($key % 15) === 14 || ($key + 1) == count($pages)): ?></div><?php endif; ?>
<?php endforeach; ?>