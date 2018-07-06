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
                                    <?php
                                    $w = 160;
                                    $h = 160;
                                    $path = Yii::getAlias('@frontend') . '/web/ifixme/uploads/images/';
                                    $file = $path . $model['image'];
                                    if (!is_file($path . 'thumbs/' . $w . $h . $model['image']) && is_file($file)) {
                                        $image = Yii::$app->image->load($file);
                                        $image->resize($w, $h)->background('#fff', 100)->save($path . 'thumbs/' . $w . $h . $model['image'], 60);
                                    }
                                    ?>
                                    <li><a href="/<?= $model['url']; ?>"><img src="/ifixme/uploads/images/thumbs/<?= $w . $h . $model['image']; ?>"><?= $model['title']; ?></a></li>
                                <?php endforeach; ?>
                            </div>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>