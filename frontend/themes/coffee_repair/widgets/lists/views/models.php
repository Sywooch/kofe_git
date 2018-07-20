<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="content8" data-parent="696">
    <div class="page-wrap">
        <h2>Какую модель <?= $brand2; ?> отремонтировать?</h2>
        <div class="search">
            <div class="head_search">
                <?=
                yii\jui\AutoComplete::widget([
                    'name' => 'models',
                    'clientOptions' => [
                        'source' => $searches,
                        'select' => new yii\web\JsExpression('function(event, ui){window.location.href = "/" + ui.item.url;return false;}'),
                    ],
                    'options' => ['placeholder' => 'Введите название кофемашины ' . $brand2, 'class' => 'ui-autocomplete-input',],
                        ]
                );
                ?>
                <a href="#"><span>Все модели <?= $brand2; ?></span></a>
            </div>
        </div>
        <div class="result">
            <div class="items models" style="overflow: hidden;">
                <?php foreach ($sortedBrands as $latter => $brands): ?>
                    <?php foreach ($brands as $brand): ?>
                        <a href="/<?= $brand['url'] ?>" class="item hd hit" title="<?= $brand2 . ' ' . str_replace('/', ' / ', $brand['title']); ?>">
                            <img src="/uploads/images/<?= $brand['image'] ?>" alt="<?= $brand2 . ' ' . str_replace('/', ' / ', $brand['title']); ?>">
                            <span><?= $brand2 . ' ' . str_replace('/', ' / ', $brand['title']); ?></span>
                        </a>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>