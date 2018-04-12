<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($model['meta_title']) ? $model['meta_title'] : $model['title'];
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
                <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__current"><span itemscope itemtype="http://schema.org/Thing" itemprop="item"><span itemprop="name"><?= $model['title']; ?></span></span> <meta itemprop="position" content="1" /></span>
            </nav>
        </div>
    </header>
    <div class="content">
        <div class="content__inner">
            <?= kofe03\widgets\menu\LeftMenu::widget(['curUrl' => $model['url']]); ?>
            <main class="content__main" role="main">
                <article class="post" style="width: 100%;">
                    <header class="post__header">
                        <h1><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title']; ?></h1>
                    </header>
                    <div class="post__content">
                        <?= $model['description']; ?>
                    </div>
                </article>
                
            </main>
        </div>
    </div>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>