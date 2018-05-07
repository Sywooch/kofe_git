<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $pageInfo['meta_title'];
?>
<div class="offer" style="background: url('<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-hero.jpg') 100% 100% no-repeat; background-size: cover;">
    <div class="container">
        <div class="for-lr">
            <div class="ofer-left">
                <h1><?= $pageInfo['meta_h1']; ?></h1>
                <br>
                <div class="ofer-button">
                    <p class="first-text">Закажите ремонт СЕЙЧАС и получите <br>в подарок пачку зернового кофе!</p>
                    <?= remont_coffee\widgets\forms\MainPageForm::widget(); ?>
                </div>
            </div>
            <div class="ofer-right">
                <p class="first-text"><span>Дадим скидку</span> <br>в размере <span>30%</span> Первым <span>30</span> клиентам в день</p>
                <p class="second-text">Осталось <br><span id="services-count">0</span> <br>заказов со <br>скидкой!</p>
            </div>
        </div>
        <?php if ($siteConfig['id'] == 53): ?>
            <img class="banner-images" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/j/kofe.png">
        <?php endif; ?>
    </div>
</div>



<?= remont_coffee\widgets\other\Advantage::widget(); ?>

<div class="model-brand active">
    <div class="container">
        <h3></h3>
        <p class="gl-text">Все <span>бренды</span>:</p>
        <div class="search-bm">
            <span>Поиск модели </span>
        <?=
        yii\jui\AutoComplete::widget([
            'name' => 'models',
            'clientOptions' => [
                'source' => $searches,
                'select' => new yii\web\JsExpression('function(event, ui){window.location.href = "/" + ui.item.url;return false;}'),
            ],
            'options' => ['placeholder' => 'Поиск бренда', 'class' => 'my-input'],
                ]
        );

        $path = Yii::getAlias('@frontend') . '/web/uploads/images/';
        ?>

        </div>
        <?php foreach ($sortedBrands as $latter => $brands): ?>
            <div class="search-brends">
                <div class="symbol"><?= $latter; ?></div>
                <div class="right">
                    <?php foreach ($brands as $brand): ?>
                        <?php
                        if ($siteConfig['mono'])
                            $brand['url'] = str_replace(\app\components\CController::$monoBrand['url'] . '/', Yii::$app->params['replace-url'], $brand['url']);
                        ?>
                            <a class="menu__link" href="/<?= $brand['url']; ?>">
                                <?php if (!is_file($path . $brand['image'])): ?>
                                    <?= $brand['title']; ?>
                                <?php else: ?>
                                    <img src="/uploads/images/<?= $brand['image']; ?>"/>
                                <?php endif; ?>
                            </a>       
                    <?php endforeach; ?>       
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= remont_coffee\widgets\lists\TopServices::widget(); ?>


<?= remont_coffee\widgets\lists\AllBrands::widget(['h' => false]); ?>