<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
$breadcrumbs = [
    '/' . $brand['url'] => 'Ремонт кофемашин ' . $brand['title'],
    'Ремонт ' . $brand['title'] . ' ' . $pageInfo['title'],
];
?>
<div class=" service-wrapper">
    <header class="header header__service model-new">
        <?= professionals\widgets\menu\MainMenu::widget(); ?>
        <div class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-24 col-md-24 col-sm-24">
                        <?= professionals\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
                    </div>
                    <div class="col-lg-15 col-md-11 col-sm-14">
                        <div class="hero_order">
                            <h1 class="title title__1"><?php echo (!empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']); ?></h1>
                            <div class="hero_info">
                                <p></p>
                                <?= str_replace(['#brand_en#', '#model_en#'], $brand['title'] . ' ' . $pageInfo['title'], $pageInfo['description']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-11 col-md-offset-2 col-sm-10 text-right hidden-xs">
                        <div class="hero_brand model-img">
                            <?php if (!empty($pageInfo['image'])): ?>
                                <img class="brend-img" src="/uploads/images/<?= $pageInfo['image']; ?>" alt="<?= $pageInfo['title']; ?>"/>
                            <?php endif; ?>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="solutions solutions__service">
        <?= professionals\widgets\forms\Today::widget(['sectionClass' => 'you-get__dark']); ?>
    </section>
</div>
<section>
    <div class="container">        
        <div class="row">
            <div class="col-xs-24">
                <div class="solution solution--closed">
                    <?= professionals\widgets\lists\PopularFaults::widget(['limit' => 100, 'title' => 'Неисправности которые мы устраняем:', 'is_popular' => true, 'type' => 2, 'view' => 'servicesTable', 'form' => false, 'url' => false]); ?>                    
                </div>
                <div class="solution solution--closed">
                    <?= professionals\widgets\lists\PopularFaults::widget(['limit' => 100, 'title' => 'Услуги которые мы предоставляем: ', 'is_popular' => true, 'type' => 1, 'view' => 'servicesTable', 'form' => false, 'url' => false]); ?>                    
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