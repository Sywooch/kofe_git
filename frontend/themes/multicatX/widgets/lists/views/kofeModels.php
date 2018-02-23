<div class="inner_container" style="padding-top: 20px;">
    <a href="/remont-kofemashin" class="for-h2"><div class="h2">Ремонт кофемашин  <?= \app\components\CController::$monoBrand['title']?>:</div></a>
    <div class="owl-carousel33 owl-theme">
        <?php foreach ($rows as $row): ?>
            <div class="item">
                <a href="/<?= $row['url']; ?>" class="colorborderhover colortexthover">
                    <div>
                        <div class="img">
                            <img src="/uploads/images/<?= $row['image']; ?>" alt="<?= $row['title']; ?>">
                        </div>
                        <span class="colortext">Ремонт <?= ' кофемашин ' . \app\components\CController::$monoBrand['title'] . ' ' . $row['title']; ?></span>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="/remont-kofemashin" class="my-botton colorbg">Показать все</a>
</div>