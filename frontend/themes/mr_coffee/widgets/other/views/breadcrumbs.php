<?php
$siteConfig = app\components\CController::getSiteConfig();
$brand = app\components\CController::$monoBrand;
?>
<span itemscope itemtype="http://schema.org/BreadcrumbList">
    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemscope itemtype="http://schema.org/Thing" itemprop="item"  href="/" class="breadcrumbs__item" title="Главная">Ремонт кофемашин</a>
        <meta itemprop="position" content="0" />
    </span>
    <?php $a = 1; ?>
    <?php foreach ($data as $url => $title): ?>                
        <?php if (end($data) == $title): ?>                
            <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <span itemscope itemtype="http://schema.org/Thing" itemprop="item" class="breadcrumbs__item-current">
                    <span itemprop="name"><?= $title; ?></span>
                </span>            
                <meta itemprop="position" content="<?= $a; ?>" />
            </span>
        <?php else: ?>
            <?php if ('/' . $brand['url'] != $url): ?>
                <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemscope itemtype="http://schema.org/Thing" itemprop="item"  href="<?= $url; ?>" class="breadcrumbs__item"><?= str_replace('Ремонт кофемашин ', '', $title); ?></a>
                    <meta itemprop="position" content="<?= $a; ?>" />
                </span>                
                <?php $a++; ?>
            <?php endif; ?>
        <?php endif; ?>                
    <?php endforeach; ?>
</span>