<?php 
$siteConfig = app\components\CController::getSiteConfig();
?>
<section id="inner-modeli">
    <div class="container">
        <p class="title">Похожие модели</p>
        <ul>
            <?php foreach ($rows as $row): ?>
            <?php
                if ($siteConfig['mono'])
                    $row['url'] = str_replace(\app\components\CController::$monoBrand['url'] . '/', Yii::$app->params['replace-url'], $row['url']);
                ?>
                <li>
                    <a href="/<?= $row['url']; ?>">
                        <?= $brand['title']; ?> <?= $row['title']; ?>
                    </a>
                </li>
                
                
                
            <?php endforeach; ?>
                <div class="clear"></div>
        </ul>
    </div>
</section>