<?php
$this->title = $model['meta_title'];

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
            <?= $model['description']; ?>

        </div>
    </div>
    <div class="clear"></div>
    <span class="more"><div>Заказать ремонт</div></span>
</section>
<?= \app\widgets\other\Advantage::widget(); ?>
<section id="ask">
    <div class="container">
        <div>
            <h3>Закажите бесплатную консультацию.</h3>
            <p>Мы свяжемся с Вами в течение 5 минут.</p>
            <?= \app\widgets\forms\CallBack::widget(); ?>
        </div>
    </div>
</section>