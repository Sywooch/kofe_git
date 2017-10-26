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
                            <li<?= !Yii::$app->user->isGuest ? ' style="border: 1px solid #01375a;"' : '' ?> class="bold">
                                <a href="/<?= $brand['url']; ?>"><?= app\components\CController::$category['id'] != 7 ? $brand2 . ' ' : ''; ?><?= str_replace('/', ' / ', $brand['title']); ?></a>
                                <?php if (!Yii::$app->user->isGuest): ?>
                                    <?php
                                    $domain = $_SERVER['SERVER_NAME'];
                                    $yaId = explode(',', $brand['yandexId']);
                                    ?>
                                    <img style="width: 100px;" src="/uploads/images/<?= $brand['image']; ?>">
                                    <div class="edits">
                                        <a class="update-model" target="_blank" href="http://admin.<?= $domain; ?>/page/update/<?= $brand['id']; ?>"><img title="Редактировать" src="/images/edit.svg"/></a>
                                        <a class="delete-model" data-id="<?= $brand['id']; ?>" href="#"><img title="Удалить" src="/images/remove.svg"/></a>
                                        <a class="view-model" target="_blank" href="/<?= $brand['url']; ?>""><img title="Просмотр" src="/images/eyes.svg"/></a>
                                        <a class="yandex-model" target="_blank" href="https://market.yandex.ru/product/<?= $yaId[0]; ?>"><img title="Просмотр" src="/images/ya.svg"/></a>
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
