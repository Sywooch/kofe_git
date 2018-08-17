<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section>
    <h3 class="mt0 mb0">Модели <?= $brand; ?></h3>
    <div class="districts__section">
        <?php foreach ($sortedBrands as $latter => $models): ?>
            <div class="districts__section__item">
                <span class="districts-list__caps"><?= $latter; ?></span>
                <ul class="districts-list">
                    <?php foreach ($models as $model): ?>
                        <li class="districts-list__item"><a class="link districts-list__link" href="/<?= $model['url']; ?>"><?= $model['title']; ?></a></li>
                        <?php endforeach; ?> 
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</section>