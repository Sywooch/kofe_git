<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();

use yii\imagine\Image;

if (!empty($pageInfo['image'])) {
    $img = $pageInfo['image'];
} else {
    $img = 'coffee_machine.png';
}
$breadcrumbs = [
    '/' . $brand['url'] => app\components\CController::$category['full_title'] . ' ' . $brand['title'],
    in_array($siteConfig['category_id'], [1, 2, 3, 4, 5]) ? 'Ремонт ' . $brand['title'] . ' ' . $pageInfo['title'] : $pageInfo['title'],
];
$this->title = $title;
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-2 order-md-1 text-md-center">
                <div class="intro__model">
                    <div class="intro__model-wrapper">
                        <img alt="Ремонт <?= $brand['title'] . ' ' . $pageInfo['title']; ?>" src="<?= $assets ?>/uploads/images/<?= $img; ?>"> 
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 text-center text-md-left">
                <h1 class="intro__heading">
                    <?php if (!empty($pageInfo['meta_h1'])): ?>
                        <?= $pageInfo['meta_h1']; ?>
                    <?php else: ?>
                        <?= app\components\CController::$category['rod_title']; ?>  <?= $brand['title'] . ' ' . $pageInfo['title']; ?> в <?= Yii::$app->session['region']['titleRod']; ?>
                    <?php endif; ?>
                </h1>
                <div class="d-lg-block intro__description">                    
                    <?php if (!empty($pageInfo['description'])): ?>
                        <?= str_replace('#model_en#', $brand['title'] . ' ' . $pageInfo['title'], $pageInfo['description']); ?>
                    <?php else: ?>
                        <p>
                            <?= app\components\CController::$category['rod_title']; ?> <?= $brand['title'] . ' ' . $pageInfo['title']; ?> в короткие сроки. Устраняем неисправности любой сложности с гарантией качества комплектующих и выполненных работ.               
                        </p>
                    <?php endif; ?>
                </div>
                <div class="intro__promo">
                    <div class="h5 intro__promo-heading">Акция дня! 25% скидка на услуги сегодня</div>
                    <?= nasa\widgets\forms\Main::widget(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="model-neispravnost">
    <?= nasa\widgets\lists\Neispravnost::widget(['view' => 'neispTable']); ?>
</div>
<?= nasa\widgets\other\Advantage::widget(['view' => 'timer']); ?>