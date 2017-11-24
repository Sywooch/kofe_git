<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<div class="bl-heading" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-heading.jpg);">
    <div class="container">
        <div class="heading">Авторизованный сервисный центр </div>
        <h1 class="heading-description"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
    </div>
</div>
<?= remont_coffee\widgets\other\Advantage::widget(); ?>
<div class="main container">
    <div class="right">
        <?= remont_coffee\widgets\forms\SidebarForm::widget(); ?>
    </div>
    <div class="left">
        <div class="bl-text">
            <div class="heading">
                <span>Типовые неисправности <?= $pageInfo['title']; ?></span>
            </div>
        </div>
        <?= remont_coffee\widgets\lists\Neispravnost::widget(); ?>
        <div class="bl-text">
            <?php if (!empty($pageInfo['description'])): ?>
                <?= $pageInfo['description']; ?>
            <?php else: ?>
                <h2>Ремонт кофемашин <?= $pageInfo['title']; ?> / в <?= Yii::$app->session['region']['titleRod'] ?></h2>
                <p>  
                    Инженеры нашего сервис центра выполнят <?= mb_strtolower(app\components\CController::$category['rod_title'], 'utf-8'); ?> <?= $pageInfo['title']; ?> в короткие сроки, устранят неисправность любой сложности с гарантией. Вам достаточно оставить заявку через сайт.                    
                </p>
            <?php endif; ?>
            <?= remont_coffee\widgets\lists\Services::widget(['prefix' => $pageInfo['title']]); ?>           
            <?= remont_coffee\widgets\lists\Models::widget(['parent' => $pageInfo['id'], 'brand' => $pageInfo['title']]); ?>
        </div>
        <?= remont_coffee\widgets\lists\TopServices::widget(); ?>
    </div>   
</div>