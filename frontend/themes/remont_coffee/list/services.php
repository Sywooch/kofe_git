<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<div class="bl-heading" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-heading.jpg);">
    <div class="container">
        <div class="heading">Авторизованный сервисный центр </div>
        <h1 class="heading-description"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title']; ?></h1>
    </div>
</div>
<?= remont_coffee\widgets\other\Advantage::widget(); ?>

<div class="main container">
    <div class="right">
        <?= remont_coffee\widgets\forms\SidebarForm::widget(); ?>
    </div>
    <div class="left">
        <div class="bl-text">
            <?= remont_coffee\widgets\lists\Neispravnost::widget(['view' => 'neispravnostTable', 'is_popular' => false]); ?>
            <?= remont_coffee\widgets\lists\Neispravnost::widget(['view' => 'neispravnostTable', 'type' => 1, 'title' => 'Услуги', 'is_popular' => true]); ?>
			<?= remont_coffee\widgets\lists\Neispravnost::widget(['view' => 'neispravnostTable', 'type' => 1, 'title' => 'Прочие услуги', 'is_popular' => false]); ?>
        </div>
        <?= remont_coffee\widgets\lists\PopularModels::widget(); ?>
    </div>   
</div>