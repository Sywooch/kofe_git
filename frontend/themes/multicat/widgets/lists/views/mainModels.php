<?php
$assets = Yii::getAlias('@web');
?>
<section id="number-8">
    <div class="container">
        <?php foreach ($rows as $row): ?>
            <div class="item">
                <div class="left">
                    <div><?= $row['full_title']; ?></div>
                    <?= $row['description']; ?>
                </div>
                <?php if (isset($row['children']) && !empty($row['children'])): ?>
                    <div class="right">
                        <div class="frame" id="<?= $row['icon']; ?>">
                            <div class="clearfix">
                                <?php foreach ($row['children'] as $model): ?>
                                    <a href="/<?= $model['url']; ?>"><img src="<?= $assets ?>/multicat/uploads/images/<?= $model['image']; ?>"><span>Ремонт</span><?= $model['title']; ?></a>
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