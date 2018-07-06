<?php
$assets = Yii::getAlias('@web');
?>
<div class="right">
    <div class="title">новости</div>
    <a class="btn green out-icon" href="/novosti">Все новости</a>
    <div class="clear"></div>
    <div class="inner">
        <?php foreach ($rows as $row): ?>
            <a href="/<?= $row['url']; ?>" class="item">
                <div class="img">
                    <?php
                    $w = 75;
                    $h = 75;
                    $path = Yii::getAlias('@frontend') . '/web/uploads/images/';
                    $file = $path . $row['image'];
                    if (!is_file($path . 'thumbs/' . $w . $h . $row['image']) && is_file($file)) {
                        $image = Yii::$app->image->load($file);
                        $image->resize($w, $h)->background('#fff', 100)->save($path . 'thumbs/' . $w . $h . $model['image'], 60);
                    }
                    ?>
                    <img src="<?= $assets ?>/uploads/images/thumbs/<?= $w . $h . $row['image']; ?>">
                </div>
                <div class="info">
                    <p><?= $row['title']; ?></p>
                </div>
                <span class="clear"></span>
            </a>
        <?php endforeach; ?>
    </div>
</div>