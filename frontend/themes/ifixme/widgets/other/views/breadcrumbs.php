<section id="number-3">
    <div class="container">
        <ul itemscope itemtype="http://schema.org/BreadcrumbList">    
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemscope itemtype="http://schema.org/Thing" itemprop="item"  href="/">Главная <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                <meta itemprop="position" content="0" />
            </li>
            <?php $a = 1; ?>
            <?php foreach ($data as $url => $title): ?>               
                <?php if (end($data) == $title): ?>                
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <?= $title; ?>
                        <meta itemprop="position" content="<?= $a; ?>" />
                    </li>
                <?php else: ?>                    
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a itemscope itemtype="http://schema.org/Thing" itemprop="item"  href="<?= $url; ?>"><?= $title; ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <meta itemprop="position" content="<?= $a; ?>" />
                    </li>
                    <?php $a++; ?>                    
                <?php endif; ?>                
            <?php endforeach; ?>
        </ul>
        <div class="clear"></div>
    </div>
</section>