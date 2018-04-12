<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<main class="Lay-cont" role="main">
    <header class="layout__head">
        <div class="layout__inner">
            <nav itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__item">
                        <a class="breadcrumbs__link" itemscope itemtype="http://schema.org/Thing" itemprop="item" rel="Ремонт кофемашин" href="//kofe03.ru">
                            <span itemprop="name">Ремонт кофемашин</span>
                        </a>
                        <meta itemprop="position" content="0" />
                    </li>
                </ul>
                <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__current"><span itemscope itemtype="http://schema.org/Thing" itemprop="item"><span itemprop="name"><?= $pageInfo['title']; ?></span></span> <meta itemprop="position" content="1" /></span>
            </nav>
        </div>
    </header>
    <div class="content">
        <div class="content__inner">
            <?= kofe03\widgets\menu\LeftMenu::widget(['curUrl' => $pageInfo['url']]); ?>
            <main class="content__main" role="main">
                <article class="post" style="width: 100%;">
                    <header class="post__header">
                        <h1><?= !empty($model['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title']; ?></h1>
                    </header>
                    <div class="post__content">
                        <?= $pageInfo['description']; ?>
                    </div>                    
                    <?= kofe03\widgets\lists\Neispravnost::widget(['type' => 2, 'is_popular' => true, 'title' => 'Цены по неисправностям']); ?>   
                    <?php //kofe03\widgets\lists\Neispravnost::widget(['type' => 2, 'is_popular' => false, 'title' => 'Цены по прочим неисправностям']); ?>   
                    <?= kofe03\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => true, 'title' => 'Цены по услугам']); ?>
                    <?= kofe03\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => false, 'title' => 'Цены по прочим услугам', 'dopClass' => 'other-table']); ?>
                </article>
            </main>
        </div>
    </div>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>