<?php
$siteConfig = app\components\CController::getSiteConfig();
$breadcrumbs = [
    ($siteConfig['mono'] ? 'Прайс-лист' : $pageInfo['title']),
];
$this->title = $pageInfo['meta_title'];
?>
<div class="clear"></div>
<?= \app\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="banner">
    <div class="container">
        <div class="full-text">
            <div class="h1">
                <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] ?></h1>
            </div>            
            <?= $pageInfo['description'] ?>
        </div>
    </div>
    <div class="clear"></div>
</section>
<?= \app\widgets\lists\Price::widget(); ?>
<?php if (!$siteConfig['mono']): ?>
    <section id="ask">
        <div class="container">
            <div>
                <h3>Закажите бесплатную консультацию.</h3>
                <p>Мы свяжемся с Вами в течение 5 минут.</p>
                <?= \app\widgets\forms\CallBack::widget(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>