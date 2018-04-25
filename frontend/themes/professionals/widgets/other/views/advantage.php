<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 hidden-sm">
                <div class="coffeemachine-pic">
                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/coffeemachine_DL97icb.png" alt="Кофемашина">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-24 ">
                <div class="about-info">
                    <div class="col-lg-24 col-md-24 col-sm-12">
                        <h2 class="title title__2 dark">Срочная доставка в сервис</h2>
                        <p class="about-info_txt">Курьер прибудет через 30 минут и оставит договор (акт приема-передачи техники). Для безопасной транспортировки, перевозка техники осуществляется в специально оборудованном транспорте.</p>
                    </div>
                    <div class="col-lg-24 col-md-24 col-sm-12">
                        <h2 class="title title__2 dark">Надежный ремонт в сервисе</h2>
                        <p class="about-info_txt">Наш сервис оснащен специальным оборудованием для выполнения качественного ремонта. Вам не придется ждать поступления нужной запчасти, так как у нас на складе имеются все наименования запчастей для обеспечения ремонта любой сложности.</p>
                    </div>
                    <div class="col-lg-24 col-md-24 col-sm-12">
                        <h2 class="title title__2 dark">Ремонт в короткие сроки</h2>
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