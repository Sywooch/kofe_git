<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<div class="bl-heading" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-heading.jpg);">
    <div class="container">
        <div class="heading">Авторизованный сервисный центр </div>
        <h1 class="heading-description"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
    </div>
</div>
<?= remont_coffee\widgets\other\Advantage::widget(); ?>

<div class="main container">
    <div class="right">
        <?= remont_coffee\widgets\forms\SidebarForm::widget(); ?>
    </div>
    <div class="left">
        <div class="bl-text">            
            <div class="bl-text">
                <?php if (!empty($pageInfo['description'])): ?>
                    <?= $pageInfo['description']; ?>
                <?php else: ?>
                    <h2><?= 'Ремонт кофемашин ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h2>
                    <p>
                        Компания осуществляет ремонтные работы по кофемашинам <?= $brand['title'] . ' ' . $pageInfo['title']; ?> с гарантированным качеством и по доступной цене. В штате нашей компании работают профессиональные инженеры, которые с легкостью разберутся с имеющейся поломкой в оговоренное время. При ремонте мы придерживаемся европейских стандартов качества, так что после ремонта кофемашина прослужит Вам долгие годы. Фирменные запчасти и сервисная работа специалиста имеют гарантийный срок от нескольких месяцев до одного года. Позвоните нам узнайте все детали у консультант-менеджера нашей сервисной организации.
                    </p>
                <?php endif; ?>                
            </div>
            <?= remont_coffee\widgets\lists\Neispravnost::widget(['view' => 'neispravnostTable', 'is_popular' => false]); ?>
            <?= remont_coffee\widgets\lists\Neispravnost::widget(['view' => 'neispravnostTable', 'type' => 1, 'title' => 'Услуги', 'is_popular' => false]); ?>
        </div>
        <?= remont_coffee\widgets\lists\PopularModels::widget(); ?>
    </div>   
</div>