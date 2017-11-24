<div class="bl-text">
    <div class="heading">
        <h2>Отзывы </h2>
    </div>
</div>
<div id="my-reviews" class="frame">
    <?php foreach ($rows as $row): ?>
        <div class="item">
            <p class="h3"><?= $row['username']; ?></p>
            <div class="n-rating-stars" data-bem="{}" data-rate="<?= $row['rating']; ?>">
                <i class="n-rating-stars__item"></i>
                <i class="n-rating-stars__item"></i>
                <i class="n-rating-stars__item"></i>
                <i class="n-rating-stars__item"></i>
                <i class="n-rating-stars__item"></i>
            </div>
            <?= $row['message']; ?>            
        </div>
    <?php endforeach; ?>
</div>
<div class="clear"></div>
<div class="button"><a href="/otzyvy">Все отзывы</a></div>