<?php
$breadcrumbs = [
    $pageInfo['title'],
];
$this->title = $pageInfo['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="content">
    <div class="container">
        <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] ?></h1>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <?= !empty($pageInfo['description']) ? $pageInfo['description'] : '<p>Мы, сервисный центр по ремонту кофемашин &laquo;РемонтКофе&raquo; - команда профессионалов, которые знают все о кофемашинах от А до Я. Наши мастера работают как на выезде, так и в сервисном центре, осуществляя ремонт кофемашин любой сложности.</p>' ?>
                <hr class="my-lg-4">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="mb-3">Наш телефон:</h5>
                        <p><a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a></p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="mb-3">График работы: </h5>
                        <p>Ежедневно с 07:00 до 24:00</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xl-5 offset-xl-1"><img alt="" class="d-lg-block d-none img-fluid rounded" src="/<?=$siteConfig['theme']; ?>/img/contacts__image.jpg"> </div>
        </div><br>
        <h3>Наши мастера работают по всему городу</h3>
        <iframe class="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae0e0243c875a25bd7b744995853bc4d0a730b4c8a717f73b2bfa08c858cdb637&amp;source=constructor" frameborder="0"></iframe>
        <div class="callback">
            <div class="align-items-center row">
                <div class="col-lg-6 col-md-8 col-xl-5 offset-lg-5 offset-md-3 offset-xl-6">
                    <div class="callback__heading h3"> Остались вопросы? </div>
                    <div class="callback__text"> Свяжитесь с нами по телефону <a class="text-nowrap" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a> или закажите бесплатную консультацию. </div>
                    <div class="callback__form text-center">
                        <?= nasa\widgets\forms\Main::widget(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= nasa\widgets\other\Advantage::widget(); ?>
<?= nasa\widgets\other\Advantage::widget(['view' => 'warranty']); ?>
<?= nasa\widgets\other\Advantage::widget(['view' => 'timer']); ?>