<?php
$siteConfig = app\components\CController::getSiteConfig();
$brand = app\components\CController::$monoBrand;
?>
<section id="hlebniye-kroshki">
    <div class="container">
        <ul>
            <?php if ($siteConfig['mono']): ?>
                <li><a href="/">Ремонт кофемашин <?= $brand['title']; ?></a></li>
            <?php else: ?>
                <li><a href="/">Ремонт кофемашин</a></li>
            <?php endif; ?>
            <?php foreach ($data as $url => $title): ?>
                <?php
                if ($siteConfig['mono'])
                    $url = str_replace(\app\components\CController::$monoBrand['url'] . '/', Yii::$app->params['replace-url'], $url);
                ?>
                <?php if (end($data) == $title): ?>                
                    <li><?= $title; ?></li>
                <?php else: ?>
                    <?php if ('/' . $brand['url'] != $url): ?>
                        <li><a href="<?= $url; ?>"><?= $title; ?></a></li>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</section>