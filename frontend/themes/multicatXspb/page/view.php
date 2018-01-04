<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($model['meta_title']) ? $model['meta_title'] : $model['title'];
?>
<div class="clear"></div>
<div id="content" class="colorborder">
    <div class="inner_container">
        <div class="breadcrumb">
            <a href="/">Главная</a>
            <a href="#"><?= $model['title']; ?></a>
        </div>
    </div>
    <div class="inner_container">
        <div id="content" class="my-text">
            <h1 class="colortext"><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title']; ?></h1>
            <?= $model['description']; ?>
        </div>
    </div>
    <?= multicatXspb\widgets\other\HowWeWork::widget(); ?>
</div>
<?= multicatXspb\widgets\forms\FooterForm::widget(); ?>