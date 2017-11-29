<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="row service3">
    <?php foreach ($services as $service): ?>
        <a class="col-sm-4 panel-body" style="background: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/services/<?= $service['image']; ?>) no-repeat;" href="/<?= $service['url']; ?>">
            <div class="bg_line">
                <p><?= $service['title']; ?></p>
            </div>
        </a>
    <?php endforeach; ?>
    </div>