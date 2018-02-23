<div itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
    <a itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" href="/"><span itemscope="" itemtype="http://schema.org/Thing" itemprop="item"><span itemprop="name">Сервисный центр <?= \app\components\CController::$monoBrand['title']; ?></span></span> <meta itemprop="position" content="0" /></a>
    <?php $a = 1; ?>
    <?php foreach ($data as $url => $title): ?>               
        <?php if (end($data) == $title): ?>
            <a itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemscope="" itemtype="http://schema.org/Thing" itemprop="item"><span itemprop="name"><?= $title; ?></span></span><meta itemprop="position" content="<?= $a; ?>" /></a>
        <?php else: ?>
            <a itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" href="<?= $url; ?>"><span itemscope="" itemtype="http://schema.org/Thing" itemprop="item"><span itemprop="name"><?= $title; ?></span></span><meta itemprop="position" content="<?= $a; ?>" /></a>      
            <?php $a++; ?>                    
        <?php endif; ?>                
    <?php endforeach; ?>
</div>