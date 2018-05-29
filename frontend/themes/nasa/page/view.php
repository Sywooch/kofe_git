<?php
$this->title = $model['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
$breadcrumbs = [
    $model['title'],
];
?>
<div class="container">
    <div class="container">
        <?= helper\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    </div>
    <section class="page page-contacts">
        <h1 class="section-title"><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title'] ?></h1>
        <?= str_replace('#domain#', '<a class="politica" href="' . Yii::$app->request->hostInfo . '">' . str_replace(['http://', '/'], '', Yii::$app->request->hostInfo) . '</a>', $model['description']); ?>        
    </section>
</div>