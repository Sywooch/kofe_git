<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $pageInfo['meta_title'];
?>
<div class="oldq" style="background: url('<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-hero.jpg') 100% 100% no-repeat; background-size: cover;">
    <div class="kantener">
        <div class="fori">
            <div class="Old-ch">
                <h1><?= $pageInfo['meta_h1']; ?></h1>
                <br>
                <div class="Old-kn">
                    <p class="Umumiy-forma">Закажите ремонт СЕЙЧАС и получите <br>в подарок пачку зернового кофе!</p>
                    <?= remont_coffee\widgets\forms\MainPageForm::widget(); ?>
                </div>
            </div>
            <div class="Oldi-ong">
                <p class="Umumiy-forma"><span>Дадим скидку</span> <br>в размере <span>30%</span> Первым <span>30</span> клиентам в день</p>
                <p class="Ikkinchi-tekst">Осталось <br><span id="services-count">0</span> <br>заказов со <br>скидкой!</p>
            </div>
        </div>
        <?php if ($siteConfig['id'] == 53): ?>
            <img class="banner-images" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/j/kofe.png">
        <?php endif; ?>
    </div>
</div>



<?= remont_coffee\widgets\other\Advantage::widget(); ?>

<div class="model-brand active">
    <div class="kantener">
        <h3></h3>
        <p class="G-tekst">Все <span>бренды</span>:</p>
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