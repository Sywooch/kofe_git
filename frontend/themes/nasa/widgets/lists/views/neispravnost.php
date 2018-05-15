<?php
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
$siteConfig = app\components\CController::getSiteConfig();
$c = count($rows);
?>
<div class="faults">
    <div class="container">
        <h3>Выберите неисправность</h3>
        <div class="faults__wrapper no-gutters row">
            <?php foreach ($rows as $key => $row): ?>
                <div class="<?= $key == 0 || ++$key == $c ? 'col-lg-6 col-md-12' : 'col-lg-3 col-md-6'; ?>">
                    <a class="faults__item<?= $key == 0 ? ' item-first' : ''; ?>" href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>">
                        <div class="faults__item-name"><?= $row['title']; ?></div>
                        <div class="faults__item-desc">
                            <?= $row['description']; ?>
                        </div>
                        <div class="faults__item-prices">
                            <div class="price">от <?= number_format($row['price'], 0, ' ', ' '); ?> р.</div>
                            <div class="old-price"></div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>