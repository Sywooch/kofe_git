<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="search-brends">
    <div class="left"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/search.svg" alt=""></div>
    <div class="right">
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
</div>
<?php foreach ($sortedBrands as $latter => $brands): ?>
    <div class="search-brends">
        <div class="left"><?= $latter; ?></div>
        <div class="right">
            <ul class="menu__list">
                <li class="menu__item"><a class="menu__link" href="#">Bork</a></li>
                <?php foreach ($brands as $brand): ?>
                    <?php
                    if ($siteConfig['mono'])
                        $brand['url'] = str_replace(\app\components\CController::$monoBrand['url'] . '/', Yii::$app->params['replace-url'], $brand['url']);
                    ?>
                    <li class="menu__item">
                        <a class="menu__link" href="/<?= $brand['url']; ?>"><?= app\components\CController::$category['id'] != 7 ? $brand2 . ' ' : ''; ?><?= str_replace('/', ' / ', $brand['title']); ?></a>                        
                    </li>
                <?php endforeach; ?>               
            </ul>
        </div>
    </div>
<?php endforeach; ?>
