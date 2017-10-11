<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section id="bran">
    <div class="container">
        <p class="title"><span>Ремонтируем модели <?= \app\components\CController::$monoBrand['title']; ?>: </span></p>
        <div class="row">                    
            <?php foreach ($rows as $row): ?>
            <img  style="opacity: 0;position: absolute;z-index: -999999999;height: 100%;width: 100%;top: 0px;left: 0px;" src="/uploads/images/<?= $row['image']; ?>" alt="">
                <?php
                if ($siteConfig['mono'])
                    $row['url'] = str_replace(\app\components\CController::$monoBrand['url'] . '/', Yii::$app->params['replace-url'], $row['url']);
                ?>
                <a class="models-gl" href="/<?= $row['url']; ?>">
                    <div class="img"><img src="/uploads/images/<?= $row['image']; ?>" title="<?= $row['title']; ?>"></div>
                    <span><?= str_replace('/', ' / ', $row['title']); ?></span>                                    
                </a>
            <?php endforeach; ?>
            <div class="clear"></div>
        </div>
        <span class="more"><a href="/models">Показать все обслуживаемые модели</a></span>
    </div>
</section>