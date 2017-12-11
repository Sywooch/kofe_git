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
<div class="main container">
    <div class="right">
        <?= remont_coffee\widgets\forms\SidebarForm::widget(); ?>
    </div>
    <div class="left">
        <div class="bl-text seoshnikka">
            <div class="heading">
                <span><?= $pageInfo['title']; ?></span>
            </div>
            <?php if (!empty($pageInfo['description'])): ?>
                <div<?= !empty($pageInfo['image']) ? ' class="textss"' : '' ?>>
                    <?= $pageInfo['description']; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($pageInfo['image'])): ?>
                <div class="hero">
                    <img src="/uploads/images/services/<?= $pageInfo['image']; ?>" alt="" title="">
                </div>
            <?php endif; ?>
            <div class="clear"></div>
            <?= remont_coffee\widgets\lists\ServiceChildren::widget(['parent' => $pageInfo['id']]); ?>
            <div class="clear"></div>
            <?= remont_coffee\widgets\lists\RandomServices::widget(); ?>
        </div>
        <?= remont_coffee\widgets\lists\TopServices::widget(); ?>
    </div>   
</div>