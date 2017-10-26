<?php
$this->title = $model['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
$breadcrumbs = [
    $model['title'],
];
?>
<div class="clear"></div>
<?= \app\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="banner">
    <div class="container">
        <div class="full-text">
            <div class="h1">
                <h1><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title'] ?></h1>
            </div>
            <?= str_replace('#domain#', '<a class="politica" href="' . Yii::$app->request->hostInfo . '">' . str_replace(['http://', '/'], '', Yii::$app->request->hostInfo) . '</a>', $model['description']); ?>

        </div>
    </div>
    <div class="clear"></div>
    <span class="more"><div>Заказать ремонт</div></span>
</section>
<?= \app\widgets\other\Advantage::widget(); ?>
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