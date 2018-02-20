<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<header class="header header__brand">
    <?= professionals\widgets\menu\MainMenu::widget(); ?>
    <?= professionals\widgets\forms\MainPageForm::widget(['pageInfo' => (!empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : app\components\CController::$category['full_title'] . ' ' . $pageInfo['title']), 'page' => $pageInfo]); ?>
</header>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-24 col-md-24 col-sm-24">
                <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="dilshod-css">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/">Ремонт кофемашин</a>
                        <meta itemprop="position" content="0" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><?= $pageInfo['title']; ?> <meta itemprop="position" content="1" /></li>
                </ul>
            </div>
        </div>
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