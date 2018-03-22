<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="top-servicess">
    <div class="container">
        <p class="gl-text">Типовые  <span>неисправности</span></p>
        <div class="list">
            <?php foreach ($services as $service): ?>
                <a class="item" href="/<?= $service['url']; ?>">
                    <div class="image"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>/images/images/protekaet.jpg" alt=""></div>
                    <div class="text">
                        <div class="name"><?= $service['title']; ?></div>
                        <div class="description hidden-sm hidden-xs"><?= $service['description']; ?></div>
                    </div>
                    <div class="price">
                        <div class="value"><?= number_format($service['price'], 0, ' ', ' '); ?>  ₽</div>
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