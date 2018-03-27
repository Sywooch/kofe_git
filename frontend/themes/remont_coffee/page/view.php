<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($model['meta_title']) ? $model['meta_title'] : $model['title'];
?>
<div class="bl-heading" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-heading.jpg);">
    <div class="container">
        <div class="heading">Авторизованный сервисный центр </div>
        <h1 class="heading-description"><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title']; ?></h1>
    </div>
</div>



<div class="full-text">
    <div class="container">
        <?= $model['description']; ?>
    </div>
</div>
<br>
<br>
<?= remont_coffee\widgets\lists\AllBrands::widget(); ?>