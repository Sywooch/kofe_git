<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($page['meta_title']) ? $page['meta_title'] : \app\components\CController::$category['full_title'] . ' в ' . Yii::$app->session['region']['titleRod'];
?>
<div class="banner-remont-kofemashin js-modal-block">
    <div class="page-wrap">
        <div class="banner-remont-kofemashin-wrap">
            <h1 style="font: 50px/50px 'NeuronExtraBold';margin-bottom: 38px;"><?= !empty($page['meta_h1']) ? $page['meta_h1'] : \app\components\CController::$category['full_title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
            <ul>
                <li><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/icons/free-time.png" alt=""/>Выезжаем в течении 30 минут</li>
                <li><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/icons/guarantee.png" alt=""/>Гарантия до 1 года на все услуги</li>
                <li><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/icons/repair-in-home.png" alt=""/>Ремонт на дому и в офисе</li>
                <li><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/icons/free-visit-diagnostics.png" alt=""/>БЕСПЛАТНАЯ диагностика и доставка</li>
            </ul>
            <div class="form-new">
                <?= coffee_repair\widgets\forms\Main::widget(); ?>
            </div>
        </div>
    </div>
</div>
<?= coffee_repair\widgets\other\Ht::widget(); ?>
<div class="main-text">
    <div class="page-wrap">
        <?= $page['full_description']; ?>        
    </div>
</div>
<?= coffee_repair\widgets\lists\Neispravnost::widget(['title' => 'Частые неисправности кофемашин', 'type' => 2, 'is_popular' => 1]); ?>
<?= coffee_repair\widgets\lists\PopularBrands::widget(); ?>
<?= coffee_repair\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => 1, 'view' => 'services']); ?>
<?= coffee_repair\widgets\other\Ht::widget(['view' => 'steps']); ?>
<?= coffee_repair\widgets\forms\Order::widget(); ?>
<?= coffee_repair\widgets\lists\LastReviews::widget(); ?>