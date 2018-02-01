<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<nav class="navbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-3 col-sm-4">
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
                        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/logo.png" alt="KofeProfi">
                    </a>
                </div>
            </div>
            <div class="col-lg-18 col-md-21 col-sm-20">
                <div class="collapse navbar-collapse" id="collapse-menu">
                    <div class="row">
                        <div class="col-md-15 col-sm-15">
                            <ul class="nav navbar-nav" style="margin-top:2.3rem">
                                <li><a href="/neispravnosti">Неисправности <span class="sr-only">(current)</span></a></li>
                                <li><a href="/uslugi">Услуги</a></li>
                                <li><a href="/brans">Бренды</a></li>
                                <li><a href="/contacts">Контакты</a></li>
                                <li><a href="/about">О нас</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-8 col-md-9 col-sm-11 hidden-xs">
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