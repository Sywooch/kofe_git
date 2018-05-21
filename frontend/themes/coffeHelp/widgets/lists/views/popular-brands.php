<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="brend my container">
    <div class="h3">Поддерживаем бренды</div>
    <?php foreach ($rows as $key => $row): ?>
        <img style="opacity: 0;position: absolute;z-index: -999999999;height: 100%;width: 100%;top: 0px;left: 0px;" src="<?= $assets ?>/uploads/images/<?= $row['image']; ?>" alt="">
        <a href="/<?= $row['url']; ?>" class="brand-page-link"><img src="<?= $assets ?>/uploads/images/<?= $row['image']; ?>" alt="<?= $row['title']; ?>"/></a> 
    <?php endforeach; ?>
    <div class="clear"></div>
    <a href="/brands" class="more">Все бренды</a>
</section>