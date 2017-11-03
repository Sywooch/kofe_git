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
            <?= $model['description']; ?>
            <ul class="">
                <?php foreach ($childs as $child): ?>
                    <li>
                        <a href="/<?= $child['url']; ?>"><?php 
                        $t = explode(' - ', $child['title']);
                        echo $t[0];
                        ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="clear"></div>    
</section>
<?= \app\widgets\lists\Price::widget(['half' => true]); ?>
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