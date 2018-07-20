<?php
$siteConfig = app\components\CController::getSiteConfig();
$brand = app\components\CController::$monoBrand;
?>
<div class="breadcrumbs">
    <div class="page-wrap">
        <ul itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/"><span itemprop="name">Ремонт кофемашин</span></a>
                <meta itemprop="position" content="0" />
            </li>
            →
            <?php $a = 1; ?>
            <?php foreach ($data as $url => $title): ?>                
                <?php if (end($data) == $title): ?>                
                    <li style="color:#09ca3f;font-weight:600;" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <span itemscope itemtype="http://schema.org/Thing" itemprop="item"><span itemprop="name"><?= $title; ?></span></span>
                        <meta itemprop="position" content="<?= $a; ?>" />
                    </li>
                <?php else: ?>
                    <?php if ('/' . $brand['url'] != $url): ?>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemscope itemtype="http://schema.org/Thing" itemprop="item"  href="<?= $url; ?>"><span itemprop="name"><?= str_replace('Ремонт кофемашин ', '', $title); ?></span></a>
                            <meta itemprop="position" content="<?= $a; ?>" />
                        </li>
                        →
                        <?php $a++; ?>
                    <?php endif; ?>
                <?php endif; ?>                
            <?php endforeach; ?>
        </ul>
    </div>
</div>