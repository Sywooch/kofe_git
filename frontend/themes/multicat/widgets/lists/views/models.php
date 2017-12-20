<?php
$assets = Yii::getAlias('@web');
?>
<section id="number-9">
    <div class="container">
        <div class="title">Выберите модель iPhone</div>
        <div class="content">
            <?php foreach ($rows as $row): ?>
                <a href="/<?= $row['url']; ?>"><img src="<?= $assets ?>/multicat/uploads/images/<?= $row['image']; ?>"><span>Ремонт</span><?= $row['title']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</section>