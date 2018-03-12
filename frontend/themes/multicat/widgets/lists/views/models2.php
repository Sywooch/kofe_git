<section id="number-8">
    <div class="container">
        <div class="title" style="float: none;">Ремонтируем следуюшие модели:</div>

        <div class="owl-carousel owl-theme">
            <?php foreach ($rows as $row): ?>
                <a class="item colorborder">
                    <div class="img"><img src="/uploads/images/<?= $row['image']; ?>"></div>
                    <div class="text"><span>Ремонт</span><?= \app\components\CController::$monoBrand['title'] . ' ' . $row['title']; ?></div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>