<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
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
                'options' => ['placeholder' => 'Название модели', 'class' => 'ui-autocomplete-input',],
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
                            <?php
                            if ($siteConfig['mono'])
                                $brand['url'] = str_replace(\app\components\CController::$monoBrand['url'] . '/', Yii::$app->params['replace-url'], $brand['url']);
                            ?>
                            <li<?= !Yii::$app->user->isGuest ? ' style="border: 1px solid #01375a;"' : '' ?> class="bold">
                                <a href="/<?= $brand['url']; ?>"><?= app\components\CController::$category['id'] != 7 ? $brand2 . ' ' : ''; ?><?= str_replace('/', ' / ', $brand['title']); ?></a>                                
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
