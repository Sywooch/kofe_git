<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="brend my container">
    <h3>Поддерживаем бренды</h3>
    <?php foreach ($rows as $key => $row): ?>
        <a href="/<?= $row['url']; ?>" class="brand-page-link"><img src="<?= $assets ?>/uploads/images/<?= $row['image']; ?>" alt="<?= $row['title']; ?>"/></a> 
    <?php endforeach; ?>
    <a href="/brendy" class="all-brands-show">Все бренды <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/expand-arrow.png"/></a>
</section>