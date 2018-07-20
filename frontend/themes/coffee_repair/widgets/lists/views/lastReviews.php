<?php 
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="reviews" id="reviews">
    <div class="page-wrap">
        <h2 class="align-left">Отзывы о ремонте</h2>
        <div class="reviews-slider">
            <ul class="lightSlider lsGrab lSSlide owl-carousel">
                <?php foreach ($rows as $row): ?>
                    <li class="lslide">
                        <span class="clients-order">Номер заказа: <?= $row['email']; ?></span>
                        <span class="client-name"><?= $row['username']; ?></span>
                        <?= $row['message']; ?>
                        <img src="/<?= $siteConfig['theme'] . '/'; ?>img/rating/<?= $row['rating']; ?>.png" alt="рейтинг <?= $row['rating']; ?>">
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>