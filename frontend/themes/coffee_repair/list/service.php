<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<div class="service-information js-modal-block">
    <?= coffee_repair\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    <div class="page-wrap">
        <?= coffee_repair\widgets\forms\Aside::widget(); ?>
        <div class="left-block left-block__sticky">
            <div class="service-infoblock clearfix">
                <h1><?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?></h1>
                <img src="/<?= $siteConfig['theme'] . '/'; ?>images/uslugi/op-professionalnye-kofemashiny.jpg" />
                <div class="service-infoblock__right">
                    <?php if (!empty($pageInfo['description'])): ?>
                        <?= str_replace(['#brand_en#', '#model_en#'], $page['title'], $pageInfo['description']); ?>
                    <?php endif; ?>
                    <button class="js-modal btn-transparent" data-anchor="js-discount-order">Хочу скидку</button>
                </div>
            </div>
            <span class="span-title-pered-spiskom">Ремонт в сервисном центре "CoffeeRepair"</span>
            <?php if (!empty($pageInfo['full_description'])): ?>
                <?= $pageInfo['full_description']; ?>
            <?php endif; ?>
        </div>
    </div>    
    <?= coffee_repair\widgets\forms\ModalDiscount::widget(); ?>
</div>
<?= coffee_repair\widgets\forms\FeedBack::widget(); ?>
<?= coffee_repair\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => 1, 'view' => 'services']); ?>
<?= coffee_repair\widgets\lists\LastReviews::widget(); ?>
<?= coffee_repair\widgets\forms\Order::widget(); ?>
<?= coffee_repair\widgets\other\Ht::widget(['view' => 'steps']); ?>