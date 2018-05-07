<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
?>
<div id="tab-neispravnost" class="top-servicess tab_content">
    <div class="kantener">
        <p class="G-tekst"><?= $title; ?></p>
        <div class="spisok">
            <?php foreach ($rows as $service): ?>
                <div class="jisim" >
                    <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $service['url']; ?>">
                        <div class="rasim"><img src="/uploads/images/services/<?= $service['image']; ?>" alt=""></div>
                    </a>
                    <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $service['url']; ?>">
                        <div class="tekst">
                            <div class="imya"><?= $service['title']; ?></div>
                            <div class="desc"><?= $service['description']; ?></div>
                        </div>
                    </a>
                    <div class="narx">
                        <div class="Val-m">от <?= number_format($service['price'], 0, ' ', ' '); ?>  ₽</div>
                        <div class="knopkacha">Заказать</div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="ochir"></div>
        </div>
        <a class="knopkacha" href="/stoimost-remonta">Все услуги и цены</a>
    </div>
</div>
<hr>