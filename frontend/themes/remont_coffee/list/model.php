<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<div class="bl-heading" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-heading.jpg);">
    <div class="container">
        <div class="heading">Авторизованный сервисный центр </div>
        <h1 class="heading-description"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
    </div>
</div>
<?= remont_coffee\widgets\other\Advantage::widget(); ?>

<div class="full-text first-text">
    <div class="container width-img">
        <?php if (!empty($pageInfo['image'])): ?>
            <div class="img">
                <img class="brand-images" src="/uploads/images/<?= $pageInfo['image']; ?>" />
            </div>
        <?php endif; ?>

        <?php if (!empty($pageInfo['description'])): ?>
            <div class="text">
                <h2><?= 'Ремонт кофемашин ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h2>
                <?= str_replace('#brand_en#', $pageInfo['title'], $pageInfo['description']); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?= remont_coffee\widgets\lists\Neispravnost::widget(['title' => 'Типовые  <span>неисправности</span> ' . $pageInfo['title']]); ?>

<?= remont_coffee\widgets\lists\Neispravnost::widget(['view' => 'neispravnostTable', 'type' => 1, 'title' => 'Услуги', 'is_popular' => false]); ?>

<?= remont_coffee\widgets\lists\PopularModels::widget(); ?>