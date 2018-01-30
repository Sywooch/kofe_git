<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="row service3">
    <?php foreach ($services as $service): ?>
        <a class="col-sm-3 panel-body" style="background-image: url(<?= $assets . ($siteConfig['id'] == 53 ? 'coffeeSupport' : $siteConfig['theme']) . '/'; ?>images/services/<?= $service['image']; ?>);" href="/<?= $service['url']; ?>">
            <div class="bg_line">
                <p><?= $service['title']; ?></p>
            </div>
        </a>
    <?php endforeach; ?>
</div>