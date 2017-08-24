<?php
$breadcrumbs = [
    $pageInfo['title'],
];
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
<section id="ask">
    <div class="container">
        <div>
            <h3>Не нашли нечего подходящего?</h3>
            <p>Закажите бесплатную консультацию.</p>
            <?= \app\widgets\forms\CallBack::widget(); ?>
        </div>
    </div>
</section>