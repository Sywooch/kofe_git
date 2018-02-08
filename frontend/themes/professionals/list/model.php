<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<header class="header header__brand">
    <?= professionals\widgets\menu\MainMenu::widget(); ?>
    <?= professionals\widgets\forms\MainPageForm::widget(['pageInfo' => (!empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']), 'page' => $pageInfo]); ?>
</header>
<section class="solutions solutions__services">
    <div class="container">        
        <div class="row">
            <div class="col-xs-24">
                <div class="solution solution--closed">
                    <?= professionals\widgets\lists\PopularFaults::widget(['limit' => 100, 'title' => 'Неисправности которые мы устраняем:', 'is_popular' => true, 'type' => 2, 'view' => 'servicesTable', 'form' => false]); ?>                    
                </div>
                <div class="solution solution--closed">
                    <?= professionals\widgets\lists\PopularFaults::widget(['limit' => 100, 'title' => 'Услуги которые мы предоставляем: ', 'is_popular' => true, 'type' => 1, 'view' => 'servicesTable', 'form' => false]); ?>                    
                </div>
                <div class="solution solution--closed other-services">
                    <?= professionals\widgets\lists\PopularFaults::widget(['limit' => 100, 'title' => 'Прочие услуги предоставляемые СЦ:', 'is_popular' => false, 'type' => 1, 'view' => 'servicesTable', 'form' => false]); ?>                    
                </div>                
            </div>
        </div>
    </div>
</section>
<?php if (!empty($pageInfo['full_description'])): ?>
    <section class="our-masters">
        <div class="container">        
            <div class="master-list">
                <div class="row">
                    <?= $pageInfo['full_description']; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>