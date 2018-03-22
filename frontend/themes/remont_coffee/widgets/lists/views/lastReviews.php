
<div class="reviews-new black-bg">
    <div class="container">
        <p class="gl-text">Мнение наших <span>клиентов</span></p>
        <div class="owl-carousel coment-c owl-theme">
            <?php foreach ($rows as $row): ?>
                <div class="item">
                    <p class="text"><?= $row['message']; ?></p>

                    <div class="n-rating-stars" data-bem="{}" data-rate="<?= $row['rating']; ?>">
                        <i class="n-rating-stars__item"></i>
                        <i class="n-rating-stars__item"></i>
                        <i class="n-rating-stars__item"></i>
                        <i class="n-rating-stars__item"></i>
                        <i class="n-rating-stars__item"></i>
                    </div>

                    <p class="name"><?= $row['username']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--
<div class="button"><a href="/otzyvy">Все отзывы</a></div>
-->