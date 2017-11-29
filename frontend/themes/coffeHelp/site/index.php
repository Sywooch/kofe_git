<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $page['meta_title'];
?>
<section class="slider">
    <div class="row">
        <div class="container">
            <div class="carousel-inner">
                <img style="margin-top: 65px;" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/slider/slider1.jpg" alt="Оригинальные запчасти" width="820">
                <div class="carousel-caption">
                    <h1><?= $page['meta_h1']; ?></h1>
                    <?= $page['description']; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="who_main">
    <?= coffeHelp\widgets\other\Advantage::widget(); ?>
    <?= coffeHelp\widgets\lists\TopServices::widget(); ?>    
</section>
<?= coffeHelp\widgets\lists\PopularBrands::widget(); ?>

<div class="container theme-showcase" role="main">
    <hr class="big_line">
    <section class="about">
        <div class="row">
            <div class="row">
                <div class="col-xs-12">
                    <?= $page['full_description']; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="order">
        <div class="row">
            <div class="col-xs-5 form_order_bg">
                <?= coffeHelp\widgets\forms\SidebarForm::widget(); ?>
            </div>
            <div class="col-xs-7 goroda">
                <h3>Обслуживаемые города МО</h3>
                <div class="row">
                    <a href="#">Балашиха</a>
                    <a href="#">Химки</a>
                    <a href="#">Подольск</a>
                    <a href="#">Королёв</a>
                    <a href="#">Люберцы</a>
                    <a href="#">Мытищи</a>
                    <a href="#">Электросталь</a>
                    <a href="#">Железнодорожный</a>
                    <a href="#">Коломна</a>
                    <a href="#">Одинцово</a>
                    <a href="#">Красногорск</a>
                    <a href="#">Серпухов</a>
                    <a href="#">Орехово-Зуево   </a>
                    <a href="#">Щёлково</a>
                    <a href="#">Домодедово</a>
                    <a href="#">Жуковский</a>
                    <a href="#">Сергиев Посад</a>
                    <a href="#">Пушкино</a>
                    <a href="#">Раменское</a>
                    <a href="#">Ногинск</a>
                </div>
                <div class="map">
                    <iframe src="https://api-maps.yandex.ru/frame/v1/-/CZd6mYiq" width="100%" height="282" frameborder="0"></iframe>
                </div>
            </div> 
        </div>
    </section>
</div>