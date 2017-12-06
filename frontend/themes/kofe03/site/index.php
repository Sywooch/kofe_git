<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $page['meta_title'];
?>
<main class="layout__content" role="main">
    <aside class="poster" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?php if ($siteConfig['id'] == 52): ?>j/<?php endif; ?>poster_1.jpg);">
        <div class="poster__inner">
            <div class="poster__content">
                <h1 class="poster__title" itemprop="name">Гарантированный ремонт кофемашин в специализированном сервисном центре<!--<?= $page['meta_h1']; ?>--></h1>
                <div class="poster__text" itemprop="description">
                    <p>Почему выбирают нас?</p>

<ul>
    <li>Диагностика - <span class="minus">1500р</span> 0р</li>
    <li>Забор и доставка кофемашины - <span class="minus">1000р</span> 0р</li>
    <li>На время ремонта предоставляем кофемашину - БЕСПЛАТНО!</li>
    <li>Гарантия 24 месяца* (в зависимости от типа ремонта)</li>
    <li>Срочный ремонт за 24 часа</li>
</ul>

<p>Удобное расположение сервисного центра и бесплатная парковка!</p>
                    <!--<?= $page['description']; ?>-->
                </div>
            </div>

            <?= kofe03\widgets\forms\MainPageForm::widget(); ?>
            <div class="clear"></div>
        </div>
    </aside>
    <?= kofe03\widgets\lists\TopServices::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
    <?= kofe03\widgets\lists\PopularServices::widget(); ?>
    <?= kofe03\widgets\lists\LastReviews::widget(); ?>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\other\Subways::widget(); ?>
</main>