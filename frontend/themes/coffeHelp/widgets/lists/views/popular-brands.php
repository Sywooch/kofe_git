<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="brend my container">
    <h3>Поддерживаем бренды</h3>
    <?php foreach ($rows as $key => $row): ?>
        <a href="/<?= $row['url']; ?>" class="brand-page-link"><img src="<?= $assets ?>/uploads/images/<?= $row['image']; ?>" alt="<?= $row['title']; ?>"/></a> 
    <?php endforeach; ?>
    <div class="clear"></div>
    <a href="/brands" class="more">Все бренды</a>
</section>