<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
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
    '/' . $brand['url'] => app\components\CController::$category['full_title'] . ' ' . $brand['title'],
    in_array($siteConfig['category_id'], [1]) ? 'Ремонт ' . $brand['title'] . ' ' . $pageInfo['title'] : $pageInfo['title'],
];
$this->title = $title;
$siteConfig = app\components\CController::getSiteConfig();
?>
<img  style="opacity: 0;position: absolute;z-index: -999999999;width: 100%;height: 100%;left: 0px;top: 0px;" src="<?= $assets ?>/uploads/images/<?= $img; ?>" alt="">
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
                        <?= app\components\CController::$category['rod_title']; ?>  <?= $brand['title'] . ' ' . $pageInfo['title']; ?> в <?= Yii::$app->session['region']['titleRod']; ?>
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
                    <?= app\components\CController::$category['rod_title']; ?> <?= $brand['title'] . ' ' . $pageInfo['title']; ?> в короткие сроки. Устраняем неисправности любой сложности с гарантией качества комплектующих и выполненных работ.               
                </p>
            <?php endif; ?>
            <?= \app\widgets\forms\CallBack::widget(); ?>
        </div>
    </div>
    <div class="clear"></div>
</section>
<?= \app\widgets\lists\Neispravnost::widget(); ?>
<?= \app\widgets\lists\Price::widget(['urlPrefix' => $pageInfo['url'], 'brandPage' => true, 'prefix' => ' ' . $brand['title'] . ' ' . $pageInfo['title']]); ?>
<?= $siteConfig['mono'] ? \app\widgets\lists\ModelSpecs::widget(['modelId' => $pageInfo['id']]) : ''; ?>
<?php if (!empty($pageInfo['full_description'])): ?>
    <section id="text-block">    
        <div class="container">
            <?= $pageInfo['full_description']; ?>
        </div>
    </section>
<?php endif; ?>
<?= \app\widgets\other\Advantage::widget(); ?>
<?= !$siteConfig['mono'] ? \app\widgets\lists\ModelSpecs::widget(['modelId' => $pageInfo['id']]) : ''; ?>
<?= \app\widgets\lists\OtherModels::widget(['parent' => $pageInfo['parent'], 'modelId' => $pageInfo['id'], 'brand' => $brand]); ?>