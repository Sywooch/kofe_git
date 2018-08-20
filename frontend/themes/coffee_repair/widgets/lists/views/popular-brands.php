<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="box-links-img-full-strings">
    <div class="page-wrap">
        <h2>Обслуживаем все популярные бренды кофемашин</h2>
        <ul>
            <?php foreach ($rows as $key => $row): ?>
                <li>
                    <a href="/<?= $row['url']; ?>" title="Ремонт кофемашин <?= $row['title']; ?>">
                        <img src="<?= $assets ?>/uploads/images/<?= $row['image']; ?>" alt="Ремонт кофемашин <?= $row['title']; ?>"/>
                        <b><?= $row['title']; ?></b>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>