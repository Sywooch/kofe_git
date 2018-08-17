<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 video-block">
                <div class="coffeemachine-video">
                    <iframe src="https://www.youtube.com/embed/KJODcf2SpcE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="video-after">
                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>/images/video/2.png" alt="">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-24 ">
                <div class="about-info">
                    <div class="col-lg-24 col-md-24 col-sm-12">
                        <div class="title title__2 dark">Срочная доставка в сервис</div>
                        <p class="about-info_txt">Курьер прибудет через 30 минут. Для безопасной транспортировки, перевозка техники осуществляется в специально оборудованном транспорте.</p>
                    </div>
                    <div class="col-lg-24 col-md-24 col-sm-12">
                        <div class="title title__2 dark">Выезд мастера на дом - от 30 минут</div>
                        <p class="about-info_txt">В случаях, где можно провести профилактику\обслуживание или починку кофемашины у Вас на дому или в офисе - мы отправим к Вам срочного мастера.</p>
                    </div>
                    <div class="col-lg-24 col-md-24 col-sm-12">
                        <div class="title title__2 dark">Надежный ремонт в сервисе</div>
                        <p class="about-info_txt">Наш сервис оснащен специальным оборудованием для выполнения качественного и быстрого ремонта.</p>
                    </div>
                    <div class="col-lg-24 col-md-24 col-sm-12">
                        <div class="title title__2 dark">Ремонт в короткие сроки</div>
                        <p class="about-info_txt">Уже через 1-2 дня курьерская служба выполнит обратную доставку, и Вы снова будете наслаждаться приятным вкусом кофе.</p>
                    </div>
                    <div class="col-lg-24 col-md-24 col-sm-12">
                        <a class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'telefonga_spb' : 'telefonga_msk' ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                        <p class="about-info_claim">Сделайте ваше утро снова бодрым!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>