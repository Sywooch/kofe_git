<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div data-ride="slick" class="feature-slider">
    <div class="slide feature-slider--item" data-role="slide" style="background-image:url( '<?= $assets . $siteConfig['theme'] . '/'; ?>images/bvj.png')" data-flatr="feature-promo 2">
        <div class="container feature-slider--container">
            <div class="row feature-slider--flex">
                <div class="feature-slider--text-part col-sm-6 col-xs-12">
                    <div class="tag green feature-slider--tag">НАШИ ПРЕИМУЩЕСТВА</div>
                    <h2 class="feature-slider--title">Новые и фирменные запасные части</h2>
                    <div class="feature-slider--text">В ремонте применяются только качественные комплектующие от известных производителей кофеварочного оборудования!</div>
                    <div class="feature-slider--slides">
                        <div class="feature-slider--slide"></div>
                    </div>
                </div>
                <div class="feature-slider--image-part col-sm-6 hidden-xs">
                    <div class="feature-slider--image" style="background-image:url( '<?= $assets . $siteConfig['theme'] . '/'; ?>images/bvj.png')"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide feature-slider--item" data-role="slide" style="background-image:url( '<?= $assets . $siteConfig['theme'] . '/'; ?>images/atl.png')" data-flatr="feature-promo 3">
        <div class="container feature-slider--container">
            <div class="row feature-slider--flex">
                <div class="feature-slider--text-part col-sm-6 col-xs-12">
                    <div class="tag green feature-slider--tag">НАШИ ПРЕИМУЩЕСТВА</div>
                    <h2 class="feature-slider--title">Удобная система оплаты</h2>
                    <div class="feature-slider--text">Оплата за услуги сервисного центра осуществляется любым удобным для Вас способом. </div>
                    <div class="feature-slider--slides">
                        <div class="feature-slider--slide"></div>
                    </div>
                </div>
                <div class="feature-slider--image-part col-sm-6 hidden-xs">
                    <div class="feature-slider--image" style="background-image:url( '<?= $assets . $siteConfig['theme'] . '/'; ?>images/atl.png')"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide feature-slider--item" data-role="slide" style="background-image:url( '<?= $assets . $siteConfig['theme'] . '/'; ?>images/ll9.png')" data-flatr="feature-promo 4">
        <div class="container feature-slider--container">
            <div class="row feature-slider--flex">
                <div class="feature-slider--text-part col-sm-6 col-xs-12">
                    <div class="tag green feature-slider--tag">НАШИ ПРЕИМУЩЕСТВА</div>
                    <h2 class="feature-slider--title">Максимальный комфорт и удобство</h2>
                    <div class="feature-slider--text">Сервисный центр успешно проводит забор неисправного устройства в мастеркую, а так-же, по готовности ремонта - выполняет бесплатную доставку кофемашины по указанному адресу</div>
                    <div class="feature-slider--slides">
                        <div class="feature-slider--slide"></div>
                    </div>
                </div>
                <div class="feature-slider--image-part col-sm-6 hidden-xs">
                    <div class="feature-slider--image" style="background-image:url( '<?= $assets . $siteConfig['theme'] . '/'; ?>images/ll9.png')"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container feature-slider--dots" data-role="slider-dots"></div>
</div>