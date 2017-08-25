<?php
$assets = Yii::getAlias('@web');

use yii\imagine\Image;

if (!empty($pageInfo['image'])) {
//    $imgorg = Yii::getAlias('@webroot/uploads/images/' . $pageInfo['image']);
//    $img = Yii::getAlias('@webroot/uploads/images/thumbs/' . $pageInfo['image']);    
//    Image::crop($imgorg, 390, 410, [10, 5])->save($img, ['quality' => 100]);
    $img = $pageInfo['image'];
} else {
    $img = 'coffee_machine.png';
}
$breadcrumbs = [
    '/' . $brand['url'] => 'Ремонт кофемашин ' . $brand['title'],
    $brand['title'] . ' ' . $pageInfo['title'],
];
$this->title = $title;
?>
<div class="clear"></div>
<?= \app\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="banner">
    <div class="container">
        <div class="left-img">
            <img src="<?= $assets ?>/uploads/images/<?= $img; ?>" alt="">
        </div>
        <div class="right-text">
            <div class="h1">
                <h1>
                    <?php if (!empty($pageInfo['meta_h1'])): ?>
                        <?= $pageInfo['meta_h1']; ?>
                    <?php else: ?>
                        Ремонт кофемашины  <?= $brand['title'] . ' ' . $pageInfo['title']; ?> в Москве
                    <?php endif; ?>
                </h1>
            </div>
            <div class="inner-img modelss">
                <img src="<?= $assets ?>/uploads/images/<?= $img; ?>" alt="">
            </div>
            <?php if (!empty($pageInfo['description'])): ?>
                <?= $pageInfo['description']; ?>
            <?php else: ?>
                <p>
                    Ремонт кофемашины <?= $brand['title'] . ' ' . $pageInfo['title']; ?> в короткие сроки. Устраняем неисправности любой сложности с гарантией качества комплектующих и выполненных работ.               
                </p>
            <?php endif; ?>
            <?= \app\widgets\forms\CallBack::widget(); ?>
        </div>
    </div>
    <div class="clear"></div>
</section>
<?= \app\widgets\lists\Neispravnost::widget(); ?>
<?= \app\widgets\lists\Price::widget(['urlPrefix' => $pageInfo['url']]); ?>
<?php if (!empty($pageInfo['full_description'])): ?>
    <div class="container">
        <?= $pageInfo['full_description']; ?>
    </div>
<?php endif; ?>
<?= \app\widgets\other\Advantage::widget(); ?>

<?= \app\widgets\lists\OtherModels::widget(['parent' => $pageInfo['parent'], 'modelId' => $pageInfo['id'], 'brand' => $brand]); ?>