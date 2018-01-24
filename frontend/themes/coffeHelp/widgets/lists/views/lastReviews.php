<div class="reviews_sidebar">
    <h4>Отзывы</h4>
    <?php foreach ($rows as $row): ?>
        <div class="review_block">
            <div class="title"><b><?= $row['username']; ?></b></div>
            <div class="text"><?= $row['message']; ?></div>
        </div>
    <?php endforeach; ?>
    <a href="/reviews" class="btn">Еще</a>
</div>