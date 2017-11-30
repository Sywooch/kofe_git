<?php
$assets = '/' . Yii::getAlias('@web');
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
$siteConfig = app\components\CController::getSiteConfig();
?>
<h3><?= !empty($title) ? $title : 'Цены по услугам' ?></h3>
<section class="price_table">
    <div class="break_price">
        <?php foreach ($rows as $key => $row): ?>
            <div class="row">
                <div class="col-xs-9 name_price"> 
                    <?php if ($row['is_popular'] == 1): ?>
                        <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>"><?= $row['title']; ?></a>
                    <?php else: ?>
                        <?= $row['title']; ?>
                    <?php endif; ?>                    
                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/right-arrow-table.png"/>
                </div>
                <div class="col-xs-3 col_price"> <span><?= number_format($row['price'], 0, ' ', ' '); ?> руб.</span><a href="#call-modal-form">Заказать</a></div>
            </div>
        <?php endforeach; ?>
    </div>
</section>