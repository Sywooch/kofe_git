<?php
$assets = '/' . Yii::getAlias('@web');
$this->title = !empty($model['meta_title']) ? $model['meta_title'] : 'Ремонт кофемашин - ' . $model['title'] . ' ⚒ Авторизованный сервисный центр, низкие цены!';
$siteConfig = app\components\CController::getSiteConfig();
$breadcrumbs = [
    $model['title'],
];
?>
<div class="oldq" style="background: url('<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-hero.jpg') 100% 100% no-repeat; background-size: cover;">
    <div class="kantener">
        <div class="fori">
            <div class="Old-ch">
                <h1><?= !empty($model['meta_h1']) ? $model['meta_h1'] : 'Ремонт кофемашин рядом с метро ' . $model['title']; ?></h1>
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

<div class="Toliq-tekst">
    <div class="kantener">
        <?= $model['description']; ?>
    </div>
</div>

<?= remont_coffee\widgets\lists\Neispravnost::widget(['view' => 'neispravnostTable', 'type' => 1, 'title' => 'Услуги', 'is_popular' => true]); ?>