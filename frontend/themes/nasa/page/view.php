<?php
$this->title = $model['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
$breadcrumbs = [
    $model['title'],
];
?>
<div class="content">
    <div class="container">
        <h1><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title'] ?></h1>
        <div class="row">
            <div class="col-md-12">
                <?= str_replace('#domain#', '<a class="politica" href="' . Yii::$app->request->hostInfo . '">' . str_replace(['http://', '/'], '', Yii::$app->request->hostInfo) . '</a>', $model['description']); ?>                
            </div>
        </div><br>        
    </div>
</div>
<?= nasa\widgets\other\Advantage::widget(); ?>
<?= nasa\widgets\other\Advantage::widget(['view' => 'warranty']); ?>
<?= nasa\widgets\other\Advantage::widget(['view' => 'timer']); ?>