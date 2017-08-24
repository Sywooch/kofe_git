<?php
$assets = Yii::getAlias('@web');
?>
<section id="bran">
    <div class="container">
        <p class="title">
            <span>Поиск модели </span>
            <?=
            yii\jui\AutoComplete::widget([
                'name' => 'models',
                'clientOptions' => [
                    'source' => $searches,
                    'select' => new yii\web\JsExpression('function(event, ui){window.location.href = "/" + ui.item.url;return false;}'),
                ],
                'options' => ['placeholder' => 'Название модели',],
                    ]
            );
            ?>
        </p>
        <div class="brands in">
            <?php foreach ($sortedBrands as $latter => $brands): ?>
                <div class="row">
                    <div class="symbol"><?= $latter; ?></div>
                    <ul>
                        <?php foreach ($brands as $brand): ?>
                        <li class="bold"><a href="/<?= $brand['url']; ?>"><?= str_replace('/', ' / ', $brand['title']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>