<div class="inner_container">
    <div class="h2"><?= !empty($h2) ? $h2 : ''; ?></div>
    <div class="owl-carousel33 owl-theme">
        <?php foreach ($rows as $row): ?>
            <div class="item">
                <div>
                    <div class="img">
                        <img src="/uploads/images/<?= $row['image']; ?>" alt="<?= $row['title']; ?>">
                    </div>
                    <span class="colortext">Ремонт <?= mb_strtolower(\app\components\CController::$category['rod_title'], 'utf8') . ' ' . \app\components\CController::$monoBrand['title'] . ' ' . $row['title']; ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>