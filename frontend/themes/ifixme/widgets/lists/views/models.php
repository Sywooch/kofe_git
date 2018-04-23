<?php
$assets = Yii::getAlias('@web');
?>
<section id="number-9">
    <div class="container">
        <div class="title">Выберите модель <?= $parent['title']; ?></div>
        <div class="content">
            <?php foreach ($rows as $row): ?>
                <a href="/<?= $row['url']; ?>"><img src="<?= $assets ?>/ifixme/uploads/images/<?= $row['image']; ?>"><?= $row['title']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</section>