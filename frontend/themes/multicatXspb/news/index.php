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
        <?= multicatXspb\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    </div>    
    <div class="main_container grey_container">
        <div class="inner_container" style="overflow: hidden;">
            <div class="product-category-left-info">
                <h1 class="category_h1" style="text-align: left;"><?= $model['meta_h1']; ?></h1>
                <div class="news-all">
                    <?php foreach ($models as $model): ?>
                        <a href="/<?= $model['url']; ?>" class="item">
                            <div class="img"><img src="<?= $assets ?>/uploads/images/<?= $model['image']; ?>" alt=""></div>
                            <p><?= $model['title']; ?></p>
                            <span>Подробнее</span>
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
</div>
<?= multicatXspb\widgets\forms\FooterForm::widget(); ?>