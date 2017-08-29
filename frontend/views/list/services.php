<?php
$breadcrumbs = [
    $pageInfo['title'],
];
$this->pageTitle = $pageInfo['meta_title'];
?>
<div class="clear"></div>
<?= \app\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="banner">
    <div class="container">
        <div class="full-text">
            <div class="h1">
                <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] ?></h1>
            </div>
            <p>
                <?= $pageInfo['description'] ?>
            </p>
        </div>
    </div>
    <div class="clear"></div>
</section>
<?= \app\widgets\lists\Price::widget(); ?>
<section id="ask">
    <div class="container">
        <div>
            <h3>Не нашли ничего подходящего?</h3>
            <p>Закажите бесплатную консультацию.</p>
            <?= \app\widgets\forms\CallBack::widget(); ?>
        </div>
    </div>
</section>