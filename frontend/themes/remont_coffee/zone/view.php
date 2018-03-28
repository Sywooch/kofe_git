<?php
$assets = '/' . Yii::getAlias('@web');
$this->title = !empty($model['meta_title']) ? $model['meta_title'] : 'Сломалась кофемашина? Обращайтесь в Remont.Coffee - ' . $model['title'] . '!';
$siteConfig = app\components\CController::getSiteConfig();
$breadcrumbs = [
    $model['title'],
];
?>
<div class="bl-heading" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-heading.jpg);">
    <div class="container">
        <div class="heading">Авторизованный сервисный центр </div>
        <h1 class="heading-description"><?= !empty($model['meta_h1']) ? $model['meta_h1'] : 'Ремонт кофемашин рядом с метро ' . $model['title']; ?></h1>
    </div>
</div>


<div class="full-text">
    <div class="container">
        <?= $model['description']; ?>
    </div>
</div>

<?= remont_coffee\widgets\lists\Neispravnost::widget(['view' => 'neispravnostTable', 'type' => 1, 'title' => 'Услуги', 'is_popular' => true]); ?>