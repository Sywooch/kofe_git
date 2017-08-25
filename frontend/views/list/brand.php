<?php
$assets = Yii::getAlias('@web');
$breadcrumbs = [
    'Ремонт кофемашин ' . $pageInfo['title'],
];
$this->title = $title;
?>
<div class="clear"></div>
<?= \app\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="banner">
    <div class="container">
        <div class="left-img">
            <img src="<?= $assets ?>/uploads/images/<?= !empty($model['image']) ? $model['image'] : 'coffee_machine.png' ?>" alt="">
        </div>
        <div class="right-text">
            <div class="inner-img brend-logo">
                <img src="<?= $assets ?>/uploads/images/<?= $pageInfo['image']; ?>" alt="">
            </div>
            <div class="h1">
                <h1>Ремонт кофемашин <?= $pageInfo['title']; ?> в Москве</h1>
            </div>            
            <?php if (!empty($pageInfo['description'])): ?>
                <?= $pageInfo['description']; ?>
            <?php else: ?>
                <p>  
                    Инжинеры нашего сервис центра выполнят ремонт кофемашины <?= $pageInfo['title']; ?> в короткие сроки, устранят неисправность любой сложности с гарантией. Вам достаточно оставить заявку через сайт.                    
                </p>
            <?php endif; ?>
            <div class="clear"></div>
            <?= \app\widgets\forms\CallBack::widget(); ?>            
        </div>
    </div>
    <div class="clear"></div>
</section>
<div class="clear"></div>
<?= \app\widgets\lists\Models::widget(['parent' => $pageInfo['id'], 'brand' => $pageInfo['title']]); ?>
<?= \app\widgets\lists\Neispravnost::widget(); ?>
<?= \app\widgets\lists\Price::widget(['urlPrefix' => $pageInfo['url']]); ?>
<?php if (!empty($pageInfo['full_description'])): ?>
    <section id="text-block"> 
        <div class="container">
            <?= $pageInfo['full_description']; ?>
        </div>
    </section>   
<?php endif; ?>
<?= \app\widgets\other\Advantage::widget(); ?>