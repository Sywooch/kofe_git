<?php
$breadcrumbs = [    
    $model['title'],
];
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($model['meta_title']) ? str_replace('#brand_en#', \app\components\CController::$monoBrand['title'], $model['meta_title']) : str_replace('#brand_en#', \app\components\CController::$monoBrand['title'], $model['title']);
?>
<div class="clear"></div>
<div id="content" class="colorborder">
    <div class="inner_container">
        <?= multicatX\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    </div>
    <div class="inner_container">
        <div id="content" class="my-text">
            <h1 class="colortext"><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title']; ?></h1>
            <div style="text-align: justify;"><?= str_replace('#domain#', '<a class="politica" href="' . Yii::$app->request->hostInfo . '">' . str_replace(['http://', '/'], '', Yii::$app->request->hostInfo) . '</a>', $model['description']); ?></div>
        </div>
    </div>
    <?= multicatX\widgets\other\HowWeWork::widget(); ?>
</div>
<?= multicatX\widgets\forms\FooterForm::widget(); ?>