<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
?>
<div class="top-servicess">
    <div class="container">
        <p class="gl-text"><?= $title; ?></p>
        <div class="list">
            <?php foreach ($rows as $service): ?>
                <a class="item" href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $service['url']; ?>">
                    <div class="image"><img src="/uploads/images/services/<?= $service['image']; ?>" alt=""></div>
                    <div class="text">
                        <div class="name"><?= $service['title']; ?></div>
                        <div class="description"><?= $service['description']; ?></div>
                    </div>
                    <div class="price">
                        <div class="value">от <?= number_format($service['price'], 0, ' ', ' '); ?>  ₽</div>
                        <div class="button">Заказать</div>
                    </div>
                </a>
            <?php endforeach; ?>
            <div class="clear"></div>
        </div>
        <a class="button" href="/stoimost-remonta">Все услуги и цены</a>
    </div>
</div>
<hr>