<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $pageInfo['meta_title'];
?>
<div class="bg brendlarim">
    <div class="container theme-showcase" role="main">        
        <section class="promo widthsto">
            <div class="row">
                <div class="col-md-9">
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/"><span itemprop="name">Ремонт кофемашин</span></a><meta itemprop="position" content="0" /></li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemscope="" itemtype="http://schema.org/Thing" itemprop="item"><span itemprop="name">Бренды</span></span> <meta itemprop="position" content="1" /></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <h1><?= $pageInfo['meta_h1']; ?></h1>
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
                    <div class="row">
                        <div class="col-sm-12 left-col w">
                            <section class="brend">
                                <h3>Все бренды :</h3>
                                <?=
                                yii\jui\AutoComplete::widget([
                                    'name' => 'models',
                                    'clientOptions' => [
                                        'source' => $searches,
                                        'select' => new yii\web\JsExpression('function(event, ui){window.location.href = "/" + ui.item.url;return false;}'),
                                    ],
                                    'options' => ['placeholder' => 'Поиск бренда', 'class' => 'my-input'],
                                        ]
                                );
                                $path = Yii::getAlias('@frontend') . '/web/uploads/images/';
                                ?>
                                <?php foreach ($sortedBrands as $latter => $brands): ?>
                                    <div class="search-brends">
                                        <div class="left"><?= $latter; ?></div>
                                        <div class="right">
                                            <ul class="menu__list">
                                                <?php foreach ($brands as $brand): ?>
                                                    <?php
                                                    if ($siteConfig['mono'])
                                                        $brand['url'] = str_replace(\app\components\CController::$monoBrand['url'] . '/', Yii::$app->params['replace-url'], $brand['url']);
                                                    ?>
                                                    <li class="menu__item">
                                                        <a class="menu__link" href="/<?= $brand['url']; ?>">
                                                            <?php if (!is_file($path . $brand['image'])): ?>
                                                                <?= $brand['title']; ?>
                                                            <?php else: ?>
                                                                <img src="/uploads/images/<?= $brand['image']; ?>"/>
                                                            <?php endif; ?>
                                                        </a>                        
                                                    </li>
                                                <?php endforeach; ?>               
                                            </ul>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <p class="moar-brands">и других производителей.</p>
                            </section>
                            <?= $pageInfo['full_description']; ?>                            
                        </div>
                    </div>
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
                <?= $pageInfo['full_description']; ?>
            </div>
        </section>
        <section class="order">
            <?= coffeHelp\widgets\forms\SidebarForm::widget(); ?>
        </section>
    </div>
</div>
