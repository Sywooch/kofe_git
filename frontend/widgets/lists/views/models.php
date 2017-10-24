<?php
$assets = Yii::getAlias('@web');
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
                            <li class="bold">
                                <a href="/<?= $brand['url']; ?>"><?= str_replace('/', ' / ', $brand['title']); ?></a>
                                <?php if (!Yii::$app->user->isGuest): ?>
                                    <div id="edits">
                                        <a id="update-model" data-id="<?= $brand['id']; ?>" href="#"><img title="Редактировать" src="/images/edit.svg"/></a>
                                        <a id="delete-model" data-id="<?= $brand['id']; ?>" href="#"><img title="Удалить" src="/images/remove.svg"/></a>
                                        <a id="view-model" data-id="<?= $brand['id']; ?>" href="#"><img title="Просмотр" src="/images/eyes.svg"/></a>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
