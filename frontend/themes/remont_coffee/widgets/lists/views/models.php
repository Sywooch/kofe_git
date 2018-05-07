<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="model-brand">
    <div class="container">
        <p class="gl-text">Профессиональный ремонт  <span>моделей</span> <?= $brand2; ?></p>
        <div class="search-bm">
            <span>Поиск модели </span>
            <?=
            yii\jui\AutoComplete::widget([
                'name' => 'models',
                'clientOptions' => [
                    'source' => $searches,
                    'select' => new yii\web\JsExpression('function(event, ui){window.location.href = "/" + ui.item.url;return false;}'),
                ],
                'options' => ['placeholder' => 'Название модели', 'class' => 'ui-autocomplete-input',],
                    ]
            );
            ?>
        </div>
        <div class="content-bm">
            <?php foreach ($sortedBrands as $latter => $brands): ?>
                <div class="symbol"><?= $latter; ?></div>
                    <div class="all-bm">
                        <?php foreach ($brands as $brand): ?>
                            <?php if ($siteConfig['mono']) $brand['url'] = str_replace(\app\components\CController::$monoBrand['url'] . '/', Yii::$app->params['replace-url'], $brand['url']); ?>
                            <div class="item">
                                <?= app\components\CController::$category['id'] != 7 ? $brand2 . ' ' : ''; ?>
                                <div class="img">
                                    <?php if (!empty($brand['image'])): ?>
                                        <img src="/uploads/images/<?= $brand['image'] ?>" alt="<?= $brand['title']; ?>" title="<?= $brand['title']; ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="name"><?= $brand2 . ' ' . str_replace('/', ' / ', $brand['title']); ?></div>                
                            </div>
                        <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
