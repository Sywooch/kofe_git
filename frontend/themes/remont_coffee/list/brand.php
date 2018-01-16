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
                <?= str_replace('#brand_en#', $pageInfo['title'], $pageInfo['description']); ?>
            <?php else: ?>
                <h2>Ремонт кофемашин <?= $pageInfo['title']; ?> / в <?= Yii::$app->session['region']['titleRod'] ?></h2>
                <p>  
                    Сервисная компания по ремонту кофемашин <?= $pageInfo['title']; ?> предлагает Вам услуги дипломированного инженера с большим практическим опытом. Предприятие осуществляет комплексное обслуживание кофейных аппаратов по минимальной цене и кратчайшим срокам. Мастерские фирмы оборудованы современной техникой, которая позволяет провести диагностическое обследование максимально эффективно. Все запчасти заранее закупаются у надежных поставщиков, на них дается хороший гарантийный срок до одного года. Вы можете оформить заявку на курьера через специальную онлайн-форму, которая расположена на сайте.
                    
                </p>
            <?php endif; ?>
            <?= remont_coffee\widgets\lists\Services::widget(['prefix' => $pageInfo['title']]); ?>           
            <?= remont_coffee\widgets\lists\Models::widget(['parent' => $pageInfo['id'], 'brand' => $pageInfo['title']]); ?>
        </div>
        <?= remont_coffee\widgets\lists\TopServices::widget(); ?>
    </div>   
</div>