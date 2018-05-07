<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
    <div class="oldq" style="background: url('<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-hero.jpg') 100% 100% no-repeat; background-size: cover;">
        <div class="kantener">
            <div class="fori">
                <div class="Old-ch">
                    <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
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

    <div class="Toliq-tekst Umumiy-forma">
        <div class="kantener width-img">
            <?php if (!empty($pageInfo['image'])): ?>
                <div class="img">
                    <img class="brand-images" src="/uploads/images/<?= $pageInfo['image']; ?>" />
                </div>
            <?php endif; ?>
            <?php if (!empty($pageInfo['description'])): ?>
                <div class="tekst">
                    <?= str_replace('#brand_en#', $pageInfo['title'], $pageInfo['description']); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?= remont_coffee\widgets\lists\BrandTabs::widget(['pageInfo' => $pageInfo]); ?>
