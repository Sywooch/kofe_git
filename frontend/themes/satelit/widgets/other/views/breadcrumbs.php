<?php
$siteConfig = app\components\CController::getSiteConfig();
$brand = app\components\CController::$monoBrand;
?>
<div class="breadcrumbs">
    <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs-list">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs-item">
            <a itemscope itemtype="http://schema.org/Thing" itemprop="item" class="breadcrumbs-link" href="/"><span itemprop="name">Ремонт <?= app\components\CController::$monoBrand['title']; ?></span></a>
            <meta itemprop="position" content="0" />
        </li>
        <?php $a = 1; ?>
        <?php foreach ($data as $url => $title): ?>                
            <?php if (end($data) == $title): ?>                
                <li class="breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <span class="breadcrumbs-link breadcrumbs-link--current" itemscope itemtype="http://schema.org/Thing" itemprop="item"><span itemprop="name"><?= $title; ?></span></span>
                    <meta itemprop="position" content="<?= $a; ?>" />
                </li>
            <?php else: ?>
                <?php if ('/' . $brand['url'] != $url): ?>
                    <li class="breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a class="breadcrumbs-link" itemscope itemtype="http://schema.org/Thing" itemprop="item"  href="<?= $url; ?>"><span itemprop="name"><?= $title; ?></span></a>
                        <meta itemprop="position" content="<?= $a; ?>" />
                    </li>
                    <?php $a++; ?>
                <?php endif; ?>
            <?php endif; ?>                
        <?php endforeach; ?>
    </ul>
</div>