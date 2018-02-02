<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="why-we">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <h2 class="title title__2 light">Почему именно мы?</h2>
            </div>
        </div>
        <div class="advantages">
            <div class="row">
                <div class="col-sm-12">
                    <div class="advantage">
                        <div class="advantage_pic">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/item-1.png" alt="">
                        </div>
                        <div class="advantage_txt">
                            Наш курьер приедет в любое удобное для Вас время.<br/><span class="frontlight-brown">Выезд 0 рублей</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="advantage">
                        <div class="advantage_pic">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/item-2.png" alt="">
                        </div>
                        <div class="advantage_txt">
                            Максимально точно определим причину неисправности.<br/><span class="frontlight-brown">Диагностика 0 рублей</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="advantage">
                        <div class="advantage_pic">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/item-3.png" alt="">
                        </div>
                        <div class="advantage_txt">
                            Все запчасти для качественного ремонта есть в наличии.<br/><span class="frontlight-brown">На складе 1200 видов запчастей</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="advantage">
                        <div class="advantage_pic">
                            <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/item-4.png" alt="">
                        </div>
                        <div class="advantage_txt">
                            Мы несем ответственность за качество наших услуг и даем гарантию.<br/><span class="frontlight-brown">Гарантия 2 года</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>