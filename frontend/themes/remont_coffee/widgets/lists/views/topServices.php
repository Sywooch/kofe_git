<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="top-servicess">
    <div class="kantener">
        <p class="G-tekst">Типовые  <span>неисправности</span></p>
        <div class="spisok">
            <?php foreach ($services as $service): ?>
                <div class="jisim">
                    <a href="/<?= $service['url']; ?>">
                        <div class="rasim"><img src="/uploads/images/services/<?= $service['image']; ?>" alt=""></div>
                    </a>
                    <a href="/<?= $service['url']; ?>">
                        <div class="tekst">
                            <div class="imya"><?= $service['title']; ?></div>
                            <div class="desc"><?= $service['description']; ?></div>
                        </div>
                    </a>
                    <div class="narx">
                        <div class="Val-m"><?= number_format($service['price'], 0, ' ', ' '); ?>  ₽</div>
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