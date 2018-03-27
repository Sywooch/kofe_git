<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<?php if ($siteConfig['id'] == 50): ?><noindex><?php endif; ?>
    <section class="popular">
        <div class="ommabob__ichki">
            <h2 class="ommabob__oshadee">Реанимируем, если <?= app\components\CController::$category['2_title']; ?>:</h2>
            <ul class="ommabob__royhat">
                <?php foreach ($services as $service): ?>
                    <?php
                    $fileId = Yii::getAlias('@frontend') . '/web/' . $siteConfig['theme'] . '/images/services/' . $siteConfig['id'] . '/' . $service['image'];
                    if (is_file($fileId)) {
                        $src = $assets . $siteConfig['theme'] . '/images/services/' . $siteConfig['id'] . '/' . $service['image'];
                    } else
                        $src = $assets . $siteConfig['theme'] . '/images/services/' . $service['image'];
                    ?>
                    <li class="ommabob__jisim">
                        <a class="ommabob__tortburchagi" href="/<?= $service['url']; ?>">
                            <div class="ommabob__himoyalash" style="background-image: url(<?= $src; ?>);"></div>
                            <div class="ommabob__matinlari">
                                <p class="ommabob__nomlari"><?= $service['title']; ?></p>
                                <?= $service['description']; ?>
                                <p class="ommabob__narxlari">от <?= number_format($service['price'], 0, ' ', ' '); ?> р.</p>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="ommabob__harakati">
                <a class="reviews__all" href="/uslugi-i-ceny">Все услуги и цены</a>
            </div>
        </div>
    </section>
    <?php if ($siteConfig['id'] == 50): ?></noindex><?php endif; ?>