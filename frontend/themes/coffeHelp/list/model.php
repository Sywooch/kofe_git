<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<div class="inner-bg">     
    <div class="container theme-showcase" role="main">            
        <section class="promo">
            <div class="row">
                <div class="col-xs-12">
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/">Ремонт кофемашин</a><meta itemprop="position" content="0" /></li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/<?= $brand['url']; ?>"><?= $brand['title']; ?></a><meta itemprop="position" content="1" /></li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><?= $pageInfo['title']; ?> <meta itemprop="position" content="2" /></li>
                    </ol>
                </div>
                <div class="col-xs-9">
                    <div class="row">
                        <?php if (!Yii::$app->params['devicedetect']['isMobile']): ?>
                            <div class="col-xs-4 nopadding">
                                <div class="images">
                                    <?php if (!empty($pageInfo['image'])): ?>
                                    <img id="big-header-image" src="<?= $assets . '/'; ?>uploads/images/<?= $pageInfo['image']; ?>" />            
                                    <?php else: ?>
                                        <img id="big-header-image" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/fridge_header.png">
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col-xs-8">
                            <h1 class="v-region">
                                <?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт ' . $brand['title'] . ' ' . $pageInfo['title']; ?>
                            </h1>
                            <?php if (Yii::$app->params['devicedetect']['isMobile']): ?>
                                <div class="col-xs-4 nopadding">
                                    <div class="images">
                                        <?php if (!empty($pageInfo['image'])): ?>
                                        <img id="big-header-image" src="<?= $assets . '/'; ?>uploads/images/<?= $pageInfo['image']; ?>" />            
                                        <?php else: ?>
                                            <img id="big-header-image" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/fridge_header.png">
                                        <?php endif; ?>
                                    </div>
                                </div>
                    <?= coffeHelp\widgets\forms\SidebarForm2::widget(); ?>
                            <?php endif; ?>

                            <span class="section-promo-desc">
                                <?php if (!empty($pageInfo['description'])): ?>
                                    <?= str_replace('#model_en#', $brand['title'] . ' ' . $pageInfo['title'], $pageInfo['description']); ?>
                                <?php else: ?>                
                                    <p>  
                                        <?= app\components\CController::$category['rod_title']; ?> <?= $brand['title'] . ' ' . $pageInfo['title']; ?> в короткие сроки. Устраняем неисправности любой сложности с гарантией качества комплектующих и выполненных работ.               
                                    </p>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                </div>
                <?php if (!Yii::$app->params['devicedetect']['isMobile']): ?>
                    <?= coffeHelp\widgets\forms\SidebarForm2::widget(); ?>
                <?php endif; ?>
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
        
        <section class="order">
            <?= coffeHelp\widgets\forms\SidebarForm::widget(); ?>
        </section>
    </div>
</div>
