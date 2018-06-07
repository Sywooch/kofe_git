<?php
$this->title = $model['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
$breadcrumbs = [
    $model['title'],
];
?>
<?= ofitsial\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<div class="content-product">
    <div class="container">
        <div class="row">
            <div class="col-md-3 leftside_container">
                <?= ofitsial\widgets\other\Ht::widget(['view' => 'left-adv']); ?>
                <p class="gl">Заказать звонок</p>
                <?= ofitsial\widgets\forms\Left::widget(); ?>
            </div>
            <div class="col-md-9 rightside_container">
                <div class="contenttext">
                    <h1 class="inner_h1"><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title'] ?></h1>
                    <div class="commercpage_text">
                        <?= str_replace('#domain#', '<a class="politica" href="' . Yii::$app->request->hostInfo . '">' . str_replace(['http://', '/'], '', Yii::$app->request->hostInfo) . '</a>', $model['description']); ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= ofitsial\widgets\other\Ht::widget(['view' => 'form-adv']); ?>
<?= ofitsial\widgets\other\Ht::widget(['view' => 'map']); ?>
<?= ofitsial\widgets\lists\LastReviews::widget(); ?>
<i class="ancorn fa fa-angle-double-up"></i>