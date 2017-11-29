<?php
$assets = Yii::getAlias('@web');
?>
<div class="right">
    <div class="title">новости</div>
    <a class="btn green out-icon" href="/novosti">Все новости</a>
    <div class="clear"></div>
    <div class="inner">
        <?php foreach ($rows as $row): ?>
            <a href="/<?= $row['url']; ?>" class="item">
                <div class="img">
                    <img src="<?= $assets ?>/ifixme/uploads/images/<?= $row['image']; ?>">
                </div>
                <div class="info">
                    <p><?= $row['title']; ?></p>
                </div>
                <span class="clear"></span>
            </a>
        <?php endforeach; ?>
    </div>
</div>