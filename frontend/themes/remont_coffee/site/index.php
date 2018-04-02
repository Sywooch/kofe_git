<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($page['meta_title']) ? $page['meta_title'] : 'Ремонт кофемашин в Москве и области ✔️';
?>
<div class="offer" style="background: url('<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-hero.jpg') 100% 100% no-repeat; background-size: cover;">
    <div class="container">
        <div class="for-lr">
            <div class="ofer-left">
                <h1>Качественный ремонт кофемашин в Москве и Московской области</h1>
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

<!--<?= remont_coffee\widgets\forms\SidebarForm::widget(); ?>-->

<?= remont_coffee\widgets\lists\TopServices::widget(); ?>     

<div class="full-text">
    <div class="container">
        <?= $page['full_description']; ?>
        <hr>
    </div>
</div>


<?= remont_coffee\widgets\lists\LastReviews::widget(); ?>

<?= remont_coffee\widgets\other\Subways::widget(); ?>
   
<?= remont_coffee\widgets\lists\AllBrands::widget(); ?>