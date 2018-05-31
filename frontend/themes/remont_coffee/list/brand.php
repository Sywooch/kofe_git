<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
$breadcrumbs = [
    'Ремонт кофемашин ' . $pageInfo['title'],
];
?>
<?= remont_coffee\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    <div class="offer" style="background: url('<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-hero.jpg') 100% 100% no-repeat; background-size: cover;">
        <div class="container">
            <div class="for-lr">
                <div class="ofer-left">
                    <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
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

    <div class="full-text first-text">
        <div class="container width-img">
            <?php if (!empty($pageInfo['image'])): ?>
                <div class="img">
                    <img class="brand-images" src="/uploads/images/<?= $pageInfo['image']; ?>" />
                </div>
            <?php endif; ?>
            <?php if (!empty($pageInfo['description'])): ?>
                <div class="text">
                    <?= str_replace('#brand_en#', $pageInfo['title'], $pageInfo['description']); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?= remont_coffee\widgets\lists\BrandTabs::widget(['pageInfo' => $pageInfo]); ?>
