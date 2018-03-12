<section id="number-8">
    <div class="container">
        <div class="title" style="float: none;">Ремонтируем следуюшие модели:</div>

        <div class="owl-carousel owl-theme">
            <?php foreach ($rows as $row): ?>
                <a class="item colorborder" href="/<?= $row['url']; ?>">
                    <div class="img"><img src="/uploads/images/<?= $row['image']; ?>"></div>
                    <div class="text"><span>Ремонт</span><?= $row['title']; ?></div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>