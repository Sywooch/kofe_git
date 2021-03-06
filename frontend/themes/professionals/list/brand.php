<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
$breadcrumbs = [
    'Ремонт кофемашин ' . $pageInfo['title'],
];
?>
<header class="header header__brand">
    <?= professionals\widgets\menu\MainMenu::widget(); ?>
    <?= professionals\widgets\forms\MainPageForm::widget(['pageInfo' => (!empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Закажите ремонт кофемашины ' . $pageInfo['title'] . ' прямо сейчас'), 'page' => $pageInfo]); ?>
</header>
<section>
    <div class="container <?php if($pageInfo['title'] == 'Bosch'): ?>halil<?php endif; ?>">
        <div class="row">
            <div class="col-lg-24 col-md-24 col-sm-24">
                <?= professionals\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>                
            </div>
        </div>
        <div class="row">
            <div class="<?php if($pageInfo['title'] == 'Bosch'): ?>col-md-16 col-xs-24<?php else: ?>col-xs-24<?php endif; ?>">
                <div class="solution solution--closed">
                    <?= professionals\widgets\lists\PopularFaults::widget(['limit' => 100, 'title' => 'Неисправности которые мы устраняем:', 'is_popular' => true, 'type' => 2, 'view' => 'servicesTable', 'form' => false, 'b' => $pageInfo['title']]); ?>                    
                </div>
                <div class="solution solution--closed">
                    <?= professionals\widgets\lists\PopularFaults::widget(['limit' => 100, 'title' => 'Услуги которые мы предоставляем: ', 'is_popular' => true, 'type' => 1, 'view' => 'servicesTable', 'form' => false, 'b' => $pageInfo['title']]); ?>                    
                </div>
                <div class="solution solution--closed other-services">
                    <?= professionals\widgets\lists\PopularFaults::widget(['limit' => 100, 'title' => 'Прочие услуги предоставляемые СЦ:', 'is_popular' => false, 'type' => 1, 'view' => 'servicesTable', 'form' => false, 'b' => $pageInfo['title']]); ?>                    
                </div>                
            </div>
            <?php if($pageInfo['title'] == 'Bosch'): ?>
                <div class="col-md-8 col-xs-24">
                    <?= professionals\widgets\other\Advantage::widget(['view' => 'advantage1', 'b' => $pageInfo['title']]); ?>
                    <?= professionals\widgets\forms\Countdown::widget(); ?>
                    <?= professionals\widgets\lists\PopularFaults::widget(['limit' => 6, 'title' => 'Частые неисправности', 'is_popular' => true, 'type' => 2]); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>


<?php if($pageInfo['title'] == 'Bosch'): ?>
    <?= professionals\widgets\lists\PopularFaults::widget(['limit' => 5, 'title' => 'Услуги которые мы предоставляем: ', 'is_popular' => true, 'type' => 1, 'view' => 'popular-services', 'form' => false]); ?>
<?php endif; ?>

<?php if (!empty($pageInfo['full_description'])): ?>
    <section class="our-masters" style="padding-top: 0px;">
        <div class="container">        
            <div class="master-list">
                <div class="row">
                    <?= $pageInfo['full_description']; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?= professionals\widgets\lists\Models::widget(['parent' => $pageInfo['id'], 'brand' => $pageInfo]); ?>