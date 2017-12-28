<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<?php if ($siteConfig['id'] == 50): ?><noindex><?php endif; ?>
    <section class="popular">
        <div class="popular__inner">
            <h2 class="content__title">Реанимируем, если <?= app\components\CController::$category['2_title']; ?>:</h2>
            <ul class="popular__list">
                <?php foreach ($services as $service): ?>
                    <li class="popular__item">
                        <a class="popular__box" href="/<?= $service['url']; ?>">
                            <div class="popular__cover" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/services/<?= $service['image']; ?>);"></div>
                            <div class="popular__text">
                                <p class="popular__name"><?= $service['title']; ?></p>
                                <?= $service['description']; ?>
                                <p class="popular__price">от <?= number_format($service['price'], 0, ' ', ' '); ?> р.</p>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="popular__actions">
                <a class="reviews__all" href="/uslugi-i-ceny">Все услуги и цены</a>
            </div>
        </div>
    </section>
    <?php if ($siteConfig['id'] == 50): ?></noindex><?php endif; ?>