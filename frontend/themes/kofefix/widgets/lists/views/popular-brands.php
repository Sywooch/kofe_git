<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="brands__content">
    <div class="brands-content__title col-lg-24 col-sm-24">
        Самые популярные бренды кофемашин, которые мы ремонтируем
    </div>
    <ul class="brands-content__list col-lg-24 col-sm-24">
        <?php foreach ($rows as $key => $row): ?>
            <li class="brands-list__item col-lg-6 col-sm-6 col-xs-12">
                <a href="/<?= $row['url']; ?>" class="brands-list__link">
                    <img src="<?= $assets ?>/uploads/images/<?= $row['image']; ?>" alt="<?= $row['title']; ?>">
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>