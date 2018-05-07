
<div class="reviews-new Qora-bg">
    <div class="kantener">
        <p class="G-tekst">Мнение наших <span>клиентов</span></p>
        <div class="Owl-carousel Kamentariy-c owl-theme">
            <?php foreach ($rows as $row): ?>
                <div class="jisim">
                    <p class="tekst"><?= $row['message']; ?></p>

                    <div class="n-rating-stars" data-bem="{}" data-rate="<?= $row['rating']; ?>">
                        <i class="n-rating-stars__item"></i>
                        <i class="n-rating-stars__item"></i>
                        <i class="n-rating-stars__item"></i>
                        <i class="n-rating-stars__item"></i>
                        <i class="n-rating-stars__item"></i>
                    </div>

                    <p class="imya"><?= $row['username']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--
<div class="knopkacha"><a href="/otzyvy">Все отзывы</a></div>
-->