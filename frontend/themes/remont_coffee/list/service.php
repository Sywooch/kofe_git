<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<div class="bl-heading" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-heading.jpg);">
    <div class="container">
        <div class="heading">Авторизованный сервисный центр </div>
        <h1 class="heading-description"><?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?></h1>
    </div>
</div>
<?= remont_coffee\widgets\other\Advantage::widget(); ?>


<div class="service-new">
    <div class="container">
        <p class="gl-text">
            <?= $pageInfo['title']; ?>
        </p>
        <div class="ser-disc">
            <?php if (!empty($pageInfo['description'])): ?>
                <div<?= !empty($pageInfo['image']) ? ' class="text"' : '' ?>>
                    <?= str_replace(['#brand_en#', '#model_en#'], $page['title'], $pageInfo['description']); ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($pageInfo['image'])): ?>
                <div class="img">
                    <img src="/uploads/images/services/<?= $pageInfo['image']; ?>" alt="" title="">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>



<?= remont_coffee\widgets\lists\ServiceChildren::widget(['parent' => $pageInfo['id']]); ?>

<?= remont_coffee\widgets\lists\RandomServices::widget(); ?>

<?= remont_coffee\widgets\lists\TopServices::widget(); ?>