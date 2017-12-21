<?php
$assets = Yii::getAlias('@web');
?>
<section id="number-8">
    <div class="container">
        <?php foreach ($rows as $row): ?>
            <div class="item">
                <div class="left">
                    <div class="colorborder"><?= $row['full_title']; ?></div>
                    <?= $row['description']; ?>
                </div>
                <?php if (isset($row['children']) && !empty($row['children'])): ?>
                    <div class="right">
                        <div class="frame">
                            <div class="clearfix">
                                <?php foreach ($row['children'] as $model): ?>
                                    <a class="colorborder" href="/<?= $model['url']; ?>"><img src="<?= $assets ?>/multicat/uploads/images/<?= $model['image']; ?>"><span>Ремонт</span><?= $model['title']; ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="scrollbar">
                            <div class="handle colorbg colorbghover">
                                <div class="mousearea"></div>
                            </div>
                        </div>
                        <div class="controls center">
                            <button class="prevPage"><i class="fa fa-angle-left colorbg colorbghover" aria-hidden="true"></i></button>
                            <button class="nextPage"><i class="fa fa-angle-right colorbg colorbghover" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="clear"></div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>