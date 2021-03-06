<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<main class="Lay-cont" role="main">
    <aside class="poseter" style="background-image: url(/<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?= $siteConfig['id']; ?>/poster_1.jpg);">
        <div class="Poseter-in">
            <div class="Poseter-cont">
                <h1 class="Poseter-ilova" itemprop="name"><?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?></h1>
                <div class="clear"></div>
                <div class="tseni-na-uslugi">
                    Стоимость услуги: <span><?= $pageInfo['price'] > 0 ? ' от ' : ''; ?><?= number_format($pageInfo['price'], 0, ' ', ' '); ?> ₽</span>
                </div>
                <div class="Poseter-texete for_pc" itemprop="description">
                    <p>Почему выбирают нас?</p>

                    <ul>
                        <li>Диагностика - <span class="minus">1500р</span> 0р</li>
                        <li>Забор и доставка кофемашины - <span class="minus">1000р</span> 0р</li>
                        <li>На время ремонта предоставляем кофемашину - БЕСПЛАТНО!</li>
                        <li>Гарантия 24 месяца* (в зависимости от типа ремонта)</li>
                        <li>Срочный ремонт за 24 часа</li>
                    </ul>

                    <p>Удобное расположение сервисного центра и бесплатная парковка!</p>
                </div>
            </div>
            <?= kofe03\widgets\forms\MainPageForm::widget(); ?>
            <div class="clear"></div>
        </div>
    </aside>    
    <section class="office my-bg-logos<?= empty($page['title']) ? ' only' : '' ?>">
        <div class="bg-brend" style="<?php if (!empty($brandImage) && !empty($page['type']) && ($page['type'] == 'brand' or $page['type'] == 'model')): ?>background-image: url(<?= $assets . '/'; ?>uploads/images/<?= $brandImage; ?>); <?php endif; ?>"></div>
        <div class="office__inner">
            <article class="office__post">
                <div class="all-ds">
                    <nav itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs">
                        <ul class="breadcrumbs__list">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="/"><span itemprop="name">Ремонт кофемашин</span></a>
                                <meta itemprop="position" content="0" />
                            </li>
                            <?php $a = 1; ?>
                            <?php foreach ($breadcrumbs as $url => $breadcrumb): ?>
                                <?php if (end($breadcrumbs) == $breadcrumb): ?>
                                    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__current"><span itemscope itemtype="http://schema.org/Thing" itemprop="item"><span itemprop="name"><?= $breadcrumb; ?></span></span> <meta itemprop="position" content="<?= $a; ?>" /></span>
                                <?php else: ?>
                                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__item"><a itemscope itemtype="http://schema.org/Thing" itemprop="item" class="breadcrumbs__link" href="<?= $url; ?>"><span itemprop="name"><?= $breadcrumb; ?></span></a> <meta itemprop="position" content="<?= $a; ?>" /></li>
                                <?php endif; ?>
                                <?php $a++; ?> 
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                    <div class="con-infos">
                        <div class="left">
                            <?= str_replace(['#brand_en#', '#model_en#'], $page['title'], $seoText); ?>
                        </div>                 
                        <div class="right for_pc">
                            <?php if (!empty($brandImage) && !empty($page['type']) && $page['type'] == 'brand'): ?>
                                <img src="<?= $assets . '/'; ?>uploads/images/<?= $brandImage; ?>" />
                            <?php endif; ?>
                            <?php if (!empty($modelImage) && !empty($page['type']) && $page['type'] == 'model'): ?>
                                <img src="<?= $assets . '/'; ?>uploads/images/<?= $modelImage; ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <?= kofe03\widgets\lists\PopularServices::widget(); ?>
    <?= empty($page['title']) ? '' : kofe03\widgets\lists\OtherServices::widget(['id' => $pageInfo['id'], 'title' => $page['title']]); ?>
    <?= kofe03\widgets\other\Advantage::widget(); ?>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>