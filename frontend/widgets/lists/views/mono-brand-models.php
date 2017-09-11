<?php
$assets = Yii::getAlias('@web');
?>
<section id="bran">
    <div class="container">
        <p class="title"><span>Ремонтируем модели <?= \app\components\CController::$monoBrand['title']; ?>: </span></p>
        <div class="row">                    
            <?php foreach ($rows as $row): ?>
                <a class="models-gl" href="/<?= $row['url']; ?>">
                    <div class="img"><img src="/uploads/images/<?= $row['image']; ?>" title="<?= $row['title']; ?>"></div>
                    <span><?= str_replace('/', ' / ', $row['title']); ?></span>                                    
                </a>
            <?php endforeach; ?>
            <div class="clear"></div>
        </div>
        <span class="more"><a href="/models">Все модели</a></span>
    </div>
</section>