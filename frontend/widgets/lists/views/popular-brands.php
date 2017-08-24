<?php
$assets = Yii::getAlias('@web');
?>
<section id="brands">
    <div class="container">
        <p class="title"><span>Поддерживаем  </span> бренды</p>
        <div class="owl-carousel logos owl-theme">
            <?php foreach ($rows as $key => $row): ?>
                <?php if ($key == 0 || ($key % 2) == 0): ?>
                    <div class="item brand">
                    <?php endif; ?>
                    <a href="/<?= $row['url']; ?>"><img src="<?= $assets ?>/uploads/images/<?= $row['image']; ?>" alt=""></a>                
                    <?php if (($key % 2) == 1): ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <span class="more"><a href="/brendy">и еще 250 + брендов</a></span>
    </div>
</section>