<?php
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="content_type_polomka">
    <div class="page-wrap">
        <h2><?= $title; ?></h2>
        <ul class="items">
            <?php foreach ($rows as $key => $row): ?>
                <li class="item">
                    <div class="icon"><img src="/<?= $siteConfig['theme'] . '/'; ?>images/icons/<?= $row['image']; ?>" alt="<?= $row['title']; ?>"></div>
                    <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>">
                        <p><span><?= $row['title']; ?></span></p>
                    </a>
                    <p><?= $row['price']; ?> <span>руб.</span></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>