<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<header class="header header__about">
    <?= professionals\widgets\menu\MainMenu::widget(); ?>
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-24 col-md-24 col-sm-24">
                    <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="dilshod-css">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/">Ремонт кофемашин</a><meta itemprop="position" content="0" /></li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">Контактная информация <meta itemprop="position" content="1" /></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-24">
                    <h1 class="title title__1 light"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title']; ?></h1>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-24 col-md-offset-2">
                    <div class="hero_why-we">
                        <?= $pageInfo['description']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= professionals\widgets\forms\Today::widget(); ?>
</header>
<?= professionals\widgets\other\Advantage::widget(['view' => 'advantage1']); ?>
<?= professionals\widgets\lists\LastReviews::widget(); ?>