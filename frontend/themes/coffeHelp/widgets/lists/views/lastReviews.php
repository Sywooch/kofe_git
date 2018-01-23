<div class="reviews_sidebar">
    <h4>Отзывы</h4>
    <?php foreach ($rows as $row): ?>
        <div class="review_block">
            <div class="title"><?= $row['username']; ?></div>
            <div class="text"><?= $row['message']; ?></div>
            <div class="name"><?= date('d.m.Y', strtotime($row['username'])); ?></div>
        </div>
    <?php endforeach; ?>
    <a href="/reviews" class="btn">Еще</a>
</div>