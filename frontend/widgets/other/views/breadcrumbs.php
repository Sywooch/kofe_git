<?php
$siteConfig = app\components\CController::getSiteConfig();
$brand = app\components\CController::$monoBrand;
?>
<section id="hlebniye-kroshki">
    <div class="container">
        <ul itemscope itemtype="http://schema.org/BreadcrumbList">
            <?php if ($siteConfig['mono']): ?>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemscope itemtype="http://schema.org/Thing" itemprop="item"  href="/"><span itemprop="name"><?= app\components\CController::$category['full_title']; ?> <?= $brand['title']; ?></span></a>
                    <meta itemprop="position" content="0" />
                </li>
            <?php else: ?>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemscope itemtype="http://schema.org/Thing" itemprop="item"  href="/"><span itemprop="name"><?= app\components\CController::$category['full_title']; ?></span></a>
                    <meta itemprop="position" content="0" />
                </li>
            <?php endif; ?>
            <?php $a = 1; ?>
            <?php foreach ($data as $url => $title): ?>
                <?php
                if ($siteConfig['mono'])
                    $url = str_replace(\app\components\CController::$monoBrand['url'] . '/', Yii::$app->params['replace-url'], $url);
                ?>
                <?php if (end($data) == $title): ?>                
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <span itemscope itemtype="http://schema.org/Thing" itemprop="item"><span itemprop="name"><?= $title; ?></span></span>
                        <meta itemprop="position" content="<?= $a; ?>" />
                    </li>
                <?php else: ?>
                    <?php if ('/' . $brand['url'] != $url): ?>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemscope itemtype="http://schema.org/Thing" itemprop="item"  href="<?= $url; ?>"><span itemprop="name"><?= $title; ?></span></a>
                            <meta itemprop="position" content="<?= $a; ?>" />
                        </li>
                        <?php $a++; ?>
                    <?php endif; ?>
                <?php endif; ?>                
            <?php endforeach; ?>
        </ul>
    </div>
</section>