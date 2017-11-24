<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="bl-services">
    <div class="bl-text">
        <div class="heading">
            <h2>Типовые неисправности </h2>
        </div>
    </div>
    <div class="list">
        <ul class="link-list">
            <?php foreach ($services as $service): ?>
                <li class="link-list__item">
                    <div class="image"><img src="/uploads/images/services/<?= $service['image']; ?>" alt=""></div>
                    <div class="text">
                        <div class="name"><a href="/<?= $service['url']; ?>"><b><?= $service['title']; ?></b></a></div>
                        <div class="description hidden-sm hidden-xs"><?= $service['description']; ?></div>
                    </div>
                    <div class="price">
                        <div class="value"><span class="nowrap"><?= number_format($service['price'], 0, ' ', ' '); ?></span></div>
                        <div class="notice"></div>
                        <div class="button">
                            <a href="/<?= $service['url']; ?>">Заказать</a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<div class="button"><a href="/stoimost-remonta">Все услуги и цены</a></div>