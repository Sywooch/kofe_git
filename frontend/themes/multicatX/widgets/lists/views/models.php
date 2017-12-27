<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="inner_container category-list">
    <div id="content">
        <div class="search-model">
            <span class="colortext">Поиск моделей</span>
            <?=
            yii\jui\AutoComplete::widget([
                'name' => 'models',
                'clientOptions' => [
                    'source' => $searches,
                    'select' => new yii\web\JsExpression('function(event, ui){window.location.href = "/" + ui.item.url;return false;}'),
                ],
                'options' => ['placeholder' => 'Название модели', 'class' => 'form__input ui-autocomplete-input',],
                    ]
            );
            ?>
        </div>
        <div class="clear"></div>
        <?php foreach ($rows as $row): ?>
            <a href="/<?= $row['url']; ?>" class="colorborderhover colortexthover">
                <img src="/upolads/images/<?= $row['image']; ?>" alt="<?= $row['title']; ?>">
                <span class="colortext"><?= \app\components\CController::$monoBrand['title'] . ' ' . $row['title']; ?></span>
            </a>
        <?php endforeach; ?>
    </div>
</div>