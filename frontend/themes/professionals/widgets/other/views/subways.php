<?php
$siteConfig = \app\components\CController::getSiteConfig();
$r1 = 15;
if ($siteConfig['id'] == 125)
    $r1 = 10;
?>
<?php foreach ($pages as $key => $page): ?>
    <?php if (($key % $r1) === 0): ?><div class="review"><?php endif; ?>
        <a href="/<?= $page['url']; ?>"> <?= $page['title']; ?></a>
        <?php if (($key % $r1) === $r1 - 1 || ($key + 1) == count($pages)): ?></div><?php endif; ?>
<?php endforeach; ?>