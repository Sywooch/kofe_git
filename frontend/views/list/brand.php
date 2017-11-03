<?php
$assets = Yii::getAlias('@web');
$breadcrumbs = [
    app\components\CController::$category['full_title'] . ' ' . $pageInfo['title'],
];
$this->title = $title;
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="clear"></div>
<?= \app\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="banner">
    <div class="container">
        <div class="left-img">
            <?php if ($siteConfig['category_id'] == 4): ?>
                <img src="<?= $assets ?>/uploads/images/<?= $pageInfo['image']; ?>">
            <?php else: ?>
                <img src="<?= $assets ?>/uploads/images/<?= !empty($model['image']) ? $model['image'] : 'coffee_machine.png' ?>" alt="">
            <?php endif; ?>
        </div>
        <div class="right-text">
            <div class="inner-img brend-logo">
                <img src="<?= $assets ?>/uploads/images/<?= $pageInfo['image']; ?>" alt="">
            </div>
            <div class="h1">
                <h1><?= app\components\CController::$category['full_title']; ?> <?= $pageInfo['title']; ?> в <?= Yii::$app->session['region']['titleRod']; ?></h1>
            </div>            
            <?php if (!empty($pageInfo['description'])): ?>
                <?= $pageInfo['description']; ?>
            <?php else: ?>
                <p>  
                    Инженеры нашего сервис центра выполнят <?= mb_strtolower(app\components\CController::$category['rod_title'], 'utf-8'); ?> <?= $pageInfo['title']; ?> в короткие сроки, устранят неисправность любой сложности с гарантией. Вам достаточно оставить заявку через сайт.                    
                </p>
            <?php endif; ?>
            <div class="clear"></div>
            <?= \app\widgets\forms\CallBack::widget(); ?>            
        </div>
    </div>
    <div class="clear"></div>
</section>
<div class="clear"></div>
<?= \app\widgets\lists\Neispravnost::widget(); ?>
<?php if (app\components\CController::$category['id'] != 3 && app\components\CController::$category['id'] != 4) {
    echo \app\widgets\lists\Models::widget(['parent' => $pageInfo['id'], 'brand' => $pageInfo['title']]);
} ?>
<?= \app\widgets\lists\Price::widget(['urlPrefix' => $pageInfo['url'], 'brandPage' => true]); ?>
        <?php if (!empty($pageInfo['full_description'])): ?>
    <section id="text-block"> 
        <div class="container">
    <?= $pageInfo['full_description']; ?>
        </div>
        <span class="more"><div>Читать далее</div></span>
    </section>   
<?php endif; ?>
<?= \app\widgets\other\Advantage::widget(); ?>