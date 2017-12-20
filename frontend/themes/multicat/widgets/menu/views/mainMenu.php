<?php
$assets = Yii::getAlias('@web');
?>
<nav>
    <div class="container">
        <ul>
            <?php foreach ($rows as $row): ?>
                <li>
                    <a href="/<?= $row['url']; ?>" class="<?= $row['icon']; ?>"><?= str_replace('Ремонт ', 'Ремонт<br /> ', $row['full_title']); ?> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <?php if (isset($row['children']) && !empty($row['children'])): ?>
                        <ul>
                            <div class="container">
                                <?php foreach ($row['children'] as $model): ?>
                                    <li><a href="/<?= $model['url']; ?>"><img src="<?= $assets ?>/multicat/uploads/images/<?= $model['image']; ?>"><span>Ремонт</span><?= $model['title']; ?></a></li>
                                <?php endforeach; ?>
                            </div>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>