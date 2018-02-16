<?php
$breadcrumbs = [
    $model['title'],
];
$this->title = $model['meta_title'];
$assets = Yii::getAlias('@web');
?>
<div class="clear"></div>
<div id="content" class="colorborder">
    <div class="inner_container">
        <?= multicatX\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    </div>    
    <div class=" grey_container">
        <div class="inner_container" style="overflow: hidden;">
            <h1 class="category_h1" style="text-align: left;"><?= $model['meta_h1']; ?></h1>
            <div class="news-all">
                <?php foreach ($models as $model): ?>
                    <a href="/<?= $model['url']; ?>">
                        <div class="img"><!--<img src="<?= $assets ?>/uploads/images/<?= $model['image']; ?>" alt="">--><img src="<?= $assets ?>/multicatX/uploads/images/1.jpg" alt=""></div>
                        <p><?= $model['title']; ?></p>
                    </a>
                <?php endforeach; ?>
                <div class="clear"></div>
            </div>
            <?=
            \yii\widgets\LinkPager::widget([
                'pagination' => $pagination,
            ]);
            ?>          
        </div>
    </div>
</div>
<?= multicatX\widgets\forms\FooterForm::widget(); ?>