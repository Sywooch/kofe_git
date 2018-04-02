<?php
$assets = '/' . Yii::getAlias('@web');
$this->title = !empty($model['meta_title']) ? $model['meta_title'] : 'Сломалась кофемашина? Обращайтесь в Remont.Coffee - ' . $model['title'] . '!';
$siteConfig = app\components\CController::getSiteConfig();
$breadcrumbs = [
    $model['title'],
];
?>
<div class="offer" style="background: url('<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-hero.jpg') 100% 100% no-repeat; background-size: cover;">
    <div class="container">
        <div class="for-lr">
            <div class="ofer-left">
                <h1><?= !empty($model['meta_h1']) ? $model['meta_h1'] : 'Ремонт кофемашин рядом с метро ' . $model['title']; ?></h1>
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

<div class="full-text">
    <div class="container">
        <?= $model['description']; ?>
    </div>
</div>

<?= remont_coffee\widgets\lists\Neispravnost::widget(['view' => 'neispravnostTable', 'type' => 1, 'title' => 'Услуги', 'is_popular' => true]); ?>