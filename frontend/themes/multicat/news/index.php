<?php
$breadcrumbs = [
    $model['title'],
];
$this->title = $model['meta_title'];
$assets = Yii::getAlias('@web');
?>
<?= multicat\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-20">
    <div class="container">
        <h1><?= $model['meta_h1']; ?></h1>
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
</section>
<section id="number-23">
    <a id="gotop" class="colorbg colorbghover" href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</section>