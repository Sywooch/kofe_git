<?php
$this->title = $model['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
$breadcrumbs = [
    $model['title'],
];
?>
<?= $model['description']; ?>
<?= kofefix\widgets\other\Ht::widget(['view' => 'order']); ?>