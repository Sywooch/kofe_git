<?php
$assets = Yii::getAlias('@web');
?>
<section id="number-9">
    <div class="container">
        <div class="title">Выберите модель:</div>
        <div class="content">
            <?php foreach ($rows as $row): ?>
            <a class="colorborder" href="/<?= $row['url'] . (!empty($urlPrefix) ? '/' . $urlPrefix : ''); ?>"><div class="img"><img src="/uploads/images/<?= $row['image']; ?>"></div><div class="span">Ремонт <?= \app\components\CController::$monoBrand['title'] . ' ' . $row['title']; ?></div></a>
            <?php endforeach; ?>
            <div class="clear"></div>
        </div>
        <div class="big-btn">
            <span class="colorbg">Показать все</span>
        </div>
    </div>
</section>