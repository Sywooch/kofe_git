<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<div class="oldq" style="background: url('<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-hero.jpg') 100% 100% no-repeat; background-size: cover;">
    <div class="kantener">
        <div class="fori">
            <div class="Old-ch">
                <h1><?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?></h1>
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


<div class="service-new">
    <div class="kantener">
        <p class="G-tekst">
            <?= $pageInfo['title']; ?>
        </p>
        <div class="ser-disc">
            <?php if (!empty($pageInfo['description'])): ?>
                <div<?= !empty($pageInfo['image']) ? ' class="tekst"' : '' ?>>
                    <?= str_replace(['#brand_en#', '#model_en#'], $page['title'], $pageInfo['description']); ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($pageInfo['image'])): ?>
                <div class="img">
                    <img style="width: 100%;" src="/uploads/images/services/<?= $pageInfo['image']; ?>" alt="" title="">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>



<?php //remont_coffee\widgets\lists\ServiceChildren::widget(['parent' => $pageInfo['id']]); ?>

<?= remont_coffee\widgets\lists\RandomServices::widget(); ?>

<?= remont_coffee\widgets\lists\TopServices::widget(); ?>
