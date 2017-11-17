<div class="left">
    <div class="title">Отзывы</div>
    <a class="btn green out-icon" href="/otzyvy">Все отзывы</a>
    <div class="clear"></div>
    <div class="inner">
        <?php foreach ($rows as $row): ?>
            <div class="item">
                <div class="stars">
                    <span><?= $row['rating']; ?></span>
                    <div class="n-rating-stars" data-bem="{}" data-rate="<?= $row['rating']; ?>">
                        <i class="n-rating-stars__item"></i>
                        <i class="n-rating-stars__item"></i>
                        <i class="n-rating-stars__item"></i>
                        <i class="n-rating-stars__item"></i>
                        <i class="n-rating-stars__item"></i>
                    </div>
                </div>
                <div class="info">
                    <div class="name"><?= $row['username']; ?></div>
                    <span><?= date('d.m.Y', strtotime($row['date'])); ?></span>
                    <p><?= $row['message']; ?></p>
                </div>
                <div class="clear"></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>