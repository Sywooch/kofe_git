<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="top-servicess">
    <div class="container">
        <p class="gl-text">Типовые  <span>неисправности</span></p>
        <div class="list">
            <?php foreach ($services as $service): ?>
                <div class="item">
                    <a href="/<?= $service['url']; ?>">
                        <div class="image"><img src="/uploads/images/services/<?= $service['image']; ?>" alt=""></div>
                    </a>
                    <a href="/<?= $service['url']; ?>">
                        <div class="text">
                            <div class="name"><?= $service['title']; ?></div>
                            <div class="description"><?= $service['description']; ?></div>
                        </div>
                    </a>
                    <div class="price">
                        <div class="value"><?= number_format($service['price'], 0, ' ', ' '); ?>  ₽</div>
                        <div class="button">Заказать</div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="clear"></div>
        </div>
        <a class="button" href="/stoimost-remonta">Все услуги и цены</a>
    </div>
</div>
<hr>