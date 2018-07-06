<?php
$assets = Yii::getAlias('@web');
?>
<section id="number-8">
    <div class="container">
        <?php foreach ($rows as $row): ?>
            <div class="item">
                <div class="left">
                    <div><a href="/<?= $row['url']; ?>"><?= $row['full_title']; ?></a></div>
                    <?= $row['description']; ?>
                </div>
                <?php if (isset($row['children']) && !empty($row['children'])): ?>
                    <div class="right">
                        <div class="frame" id="<?= $row['icon']; ?>">
                            <div class="clearfix">
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
                                    <a href="/<?= $model['url']; ?>"><img src="/ifixme/uploads/images/thumbs/<?= $w . $h . $model['image']; ?>"><?= $model['title']; ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="scrollbar">
                            <div class="handle">
                                <div class="mousearea"></div>
                            </div>
                        </div>
                        <div class="controls center">
                            <button class="prevPage"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                            <button class="nextPage"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="clear"></div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>