<?php
$breadcrumbs = [
    $pageInfo['title'],
];
$this->title = $pageInfo['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="clear"></div>
<?= \app\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="banner">
    <div class="container">
        <div class="full-text">
            <div class="h1">
                <h1>Поддерживаем <?= $cnt; ?> брендов </h1>
            </div>            
            <?= $pageInfo['description']; ?>            
        </div>
    </div>
    <div class="clear"></div>
    <span class="more"><div>Заказать ремонт</div></span>
</section>
<section id="bran">
    <div class="container">
        <p class="title">
            <span>Поиск бренда </span>
            <?=
            yii\jui\AutoComplete::widget([
                'name' => 'models',
                'clientOptions' => [
                    'source' => $searches,
                    'select' => new yii\web\JsExpression('function(event, ui){window.location.href = "/" + ui.item.url;return false;}'),
                ],
                'options' => ['placeholder' => 'Название бренда',],
                    ]
            );
            ?>
        </p>
        <div class="brands">
            <?php foreach ($sortedBrands as $latter => $brands): ?>
                <div class="row">
                    <div class="symbol"><?= $latter; ?></div>
                    <ul>
                        <?php foreach ($brands as $brand): ?>
                            <li class="bold"><a href="/<?= $brand['url']; ?>"><?= $brand['title']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section id="vse-brendi">
    <div class="container">

    </div>
</section>
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