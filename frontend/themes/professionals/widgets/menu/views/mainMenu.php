<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<nav class="navbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-menu" aria-expanded>
                        <span class="sr-only">Navigation</span>
                        <span class="icon-bar move move-down"></span>
                        <span class="icon-bar rotate"></span>
                        <span class="icon-bar rotate rotate-reverse"></span>
                        <span class="icon-bar move move-up"></span>
                    </button>
                    <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>" class="navbar-phone visible-xs">
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/icon-phone-2.png" alt="">
                    </a>
                    <a class="navbar-brand" href="/">
                        <div class="logo"><b>K<span>o</span>femashin<br>Rem<span>o</span>nt</b></div>
                    </a>
                </div>
            </div>
            <div class="col-lg-20 col-md-19 col-sm-18">
                <div class="collapse navbar-collapse" id="collapse-menu">
                    <div class="row">
                        <div class="col-lg-16 col-md-24 col-sm-24">
                            <nav class="cl-effect-14">
                               <a href="/neispravnosti">Неисправности</a>
                               <a href="/uslugi">Услуги</a>
                               <a href="/brands">Бренды</a>
                               <a href="/contacts">Контакты</a>
                               <a href="/about">О нас</a>
                            </nav>
                        </div>
                        <div class="col-lg-8 col-md-24 col-sm-24 hidden-xs">
                            <p class="navbar-text navbar-right header-phone">
                                <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- nav -->
        </div>
    </div>
</nav>