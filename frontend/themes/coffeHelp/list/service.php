<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;

use app\components\CController;
?>
<div class="inner-bg rasmga-ramka">  
    <div class="container theme-showcase" role="main">            
        <section class="promo<?= empty($pageInfo['image']) && empty($modelImage) ? ' full-text' : ''; ?>">
            <div class="row">
                <div class="col-xs-12">
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/">Ремонт кофемашин</a><meta itemprop="position" content="0" /></li>
                        <?php $a = 1; ?>
                        <?php foreach ($breadcrumbs as $url => $breadcrumb): ?>
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a itemscope itemtype="http://schema.org/Thing" itemprop="item" <?= $url === 0 ? '' : 'href="' . $url . '"'; ?>><?= str_replace('Ремонт кофемашин', '', $breadcrumb); ?></a>
                                <meta itemprop="position" content="<?= $a; ?>" />
                            </li>
                            <?php $a++; ?>
                        <?php endforeach; ?>                        
                    </ol>
                </div>

                <div class="col-xs-9 nopadding">
                    <?php if (!empty($pageInfo['image'])): ?>
                        <div class="col-xs-4 nopadding">
                            <?php if (!empty($pageInfo['image'])): ?>
                                <img id="big-header-image" src="<?= '/' . $assets . $siteConfig['theme'] . '/'; ?>images/services/<?= $pageInfo['image']; ?>" />
                            <?php elseif (!empty($modelImage)): ?>
                                <img id="big-header-image" src="<?= '/' . $assets . '/uploads/images/' . $modelImage; ?>" />
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <div class="col-xs-<?= empty($pageInfo['image']) ? '12' : '8'; ?> ">
                        <h1>
                            <?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?>
                        </h1>
                        <span class="section-promo-desc">
                            <?= str_replace(['#brand_en#', '#model_en#'], $page['title'], $seoText); ?>
                            <?php if (!empty($pageInfo['full_description']) && in_array($page['type'], ['brand', 'model'])): ?>
                                <?php if ($page['type'] == 'model') {
                                    $page = $b;
                                } ?>
                                <p class="text2">
                                <?= str_replace(['#brand_en#', '#brand_ru#', '#brand_url#'], [$page['title'], (isset(Yii::$app->params['brandRussianNames'][$page['title']]) ? Yii::$app->params['brandRussianNames'][$page['title']] : ''), '/' . $page['url']], $pageInfo['full_description']); ?>
                                </p>
<?php endif; ?>
                        </span>
                    </div>
                </div>
        <?= coffeHelp\widgets\forms\SidebarForm2::widget(); ?>
            </div>
        </section>
<?= coffeHelp\widgets\other\Advantage::widget(['view' => 'advantage2']); ?>                
<?= coffeHelp\widgets\other\Advantage::widget(['view' => 'advantage4']); ?>        
    </div>
</div>
<div class="my-footer-block">
    <div class="container theme-showcase" role="main">
        <hr class="big_line">

        <section class="order">
<?= coffeHelp\widgets\forms\SidebarForm::widget(); ?>
        </section>
    </div>
</div>
