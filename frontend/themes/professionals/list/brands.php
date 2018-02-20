<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $pageInfo['meta_title'];
?>
<header class="header header__brand">
    <?= professionals\widgets\menu\MainMenu::widget(); ?>
    <?= professionals\widgets\forms\MainPageForm::widget(['pageInfo' => $pageInfo['meta_h1'], 'page' => $pageInfo]); ?>
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
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">Бренды <meta itemprop="position" content="1" /></li>
                </ul>
            </div>
        </div>
</section>
<?= professionals\widgets\lists\AllBrands::widget(); ?>
<?= professionals\widgets\forms\Today::widget(); ?>
<?= professionals\widgets\other\Advantage::widget(); ?>
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 6, 'title' => 'Частые неисправности', 'is_popular' => true, 'type' => 2]); ?>
<?= professionals\widgets\lists\PopularBrands::widget(); ?>
<?= professionals\widgets\lists\PopularFaults::widget(['limit' => 5, 'title' => 'Услуги которые мы предоставляем: ', 'is_popular' => true, 'type' => 1, 'view' => 'popular-services', 'form' => false]); ?>
<?= professionals\widgets\forms\Countdown::widget(); ?>
<?= professionals\widgets\other\Masters::widget(); ?>
<?= professionals\widgets\other\Advantage::widget(['view' => 'advantage1']); ?>
<?= professionals\widgets\lists\LastReviews::widget(); ?>