<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<div class="inner-bg">     
    <div class="container theme-showcase" role="main">            
        <section class="promo widthsto">            
            <div class="row">
                <div class="col-md-9">
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/">Ремонт кофемашин</a><meta itemprop="position" content="0" /></li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemscope="" itemtype="http://schema.org/Thing" itemprop="item"><?= $pageInfo['title']; ?></span> <meta itemprop="position" content="1" /></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <h1>
                        <?= !empty($model['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title']; ?>
                    </h1>
                    <span class="section-promo-desc">
                        <?= $pageInfo['description']; ?>
                    </span>
                </div>
                <?= coffeHelp\widgets\forms\SidebarForm2::widget(); ?>
            </div>
        </section>
        <?= coffeHelp\widgets\other\Advantage::widget(['view' => 'advantage2']); ?>
        <section class="who equipment">
            <div class="row">
                <div class="col-sm-9 left-col">
                    <?= coffeHelp\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => true, 'title' => 'Цены по услугам']); ?>
                    <?= coffeHelp\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => false, 'title' => 'Цены по прочим услугам']); ?>
                    <?= coffeHelp\widgets\lists\Neispravnost::widget(['type' => 2, 'is_popular' => true, 'title' => 'Цены по неиcправностям']); ?>
                    <br>
                    <?= coffeHelp\widgets\forms\MainPageForm::widget(); ?>                    
                </div>
                <?= coffeHelp\widgets\other\Advantage::widget(['view' => 'advantage3']); ?>
            </div>
        </section>        
        <?= coffeHelp\widgets\other\Advantage::widget(['view' => 'advantage4']); ?>        
    </div>
</div>
<div class="my-footer-block">
    <div class="container theme-showcase" role="main">
        <hr class="big_line">
        <section class="about">
            <div class="row">
                <?php if (!empty($pageInfo['full_description'])): ?>
                    <?= $pageInfo['full_description']; ?>            
                <?php endif; ?>
            </div>
        </section>
        <section class="order">
            <?= coffeHelp\widgets\forms\SidebarForm::widget(); ?>
        </section>
    </div>
</div>
