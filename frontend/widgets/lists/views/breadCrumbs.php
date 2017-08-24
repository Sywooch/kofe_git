<nav class="bread-crumbs">
    <ul>
        <li>    
            <a href="/">
                <i class="fa fa-home"></i>
            </a>
            <i class="glyphicon glyphicon-arrow-right"></i>
        </li>
        <?php foreach ($breadCrumbs as $key => $breadCrumb): ?>
            <?php if ($key + 1 == $count): ?>
                <li class="active"><?= strip_tags($breadCrumb['title']); ?></li>                
            <?php else: ?>
                <li>
                    <a href="/<?= $breadCrumb['url']; ?>"><?= strip_tags($breadCrumb['title']); ?></a>
                    <i class="glyphicon glyphicon-arrow-right"></i>
                </li>                
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</nav>