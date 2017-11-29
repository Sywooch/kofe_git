<?php
$breadcrumbs = [
    $model['title'],
];
$this->title = $model['meta_title'];
?>
<?= ifixme\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-20">
    <div class="container">
        <h1><?= $model['meta_h1']; ?></h1>
        <div class="news-all">
            <?php foreach ($models as $model): ?>
                <a href="/<?= $model['url']; ?>" class="item">
                    <div class="img"><img src="https://cnet1.cbsistatic.com/img/m5LLFsvNhyq9dBZ7zMPOEriuI14=/fit-in/970x0/2017/10/31/e73ffb33-1690-4ebc-91d8-7317faf392b0/iphone-x-52.jpg" alt=""></div>
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
    <a id="gotop" href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</section>