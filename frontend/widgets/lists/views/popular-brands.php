<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section id="brands">
    <div class="container">
        <p class="title"><span>Поддерживаем  </span> бренды</p>
        <div class="owl-carousel logos owl-theme">
            <?php foreach ($rows as $key => $row): ?>            
                <?php if (isset($siteConfig['1-line']) && $siteConfig['1-line'] === true): ?>
                    <div class="item brand">                    
                        <a href="/<?= $row['url']; ?>">
                            <img  style="opacity: 0;position: absolute;z-index: -999999999;height: 100%;width: 100%;top: 0px;left: 0px;" src="/uploads/images/<?= $row['image']; ?>" alt="">
                            <img src="<?= $assets ?>/uploads/images/<?= $row['image']; ?>" alt="<?= $row['title']; ?>">
                        </a>
                    </div>
                <?php else: ?>
                    <?php if ($key == 0 || ($key % 2) == 0): ?>
                        <div class="item brand">
                        <?php endif; ?>
                        <a href="/<?= $row['url']; ?>">
                            <img  style="opacity: 0;position: absolute;z-index: -999999999;height: 100%;width: 100%;top: 0px;left: 0px;" src="/uploads/images/<?= $row['image']; ?>" alt="">
                            <img src="<?= $assets ?>/uploads/images/<?= $row['image']; ?>" alt="<?= $row['title']; ?>">
                        </a>                
                        <?php if (($key % 2) == 1): ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>            
            <?php endforeach; ?>
        </div>
        <?php if ($cnt == 18): ?>
            <span class="more">
                <a href="/brendy">и еще 250 + брендов</a>
            </span>
        <?php endif; ?>
    </div>
</section>