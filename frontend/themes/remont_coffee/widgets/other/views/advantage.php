<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?><div class="container glavniy-osobinnisti">
    <div class="futures">
        <div class="col-xs-4 mobile"><a href="#">Оперативный ремонт<br /> кофемашин</a></div>
        <div class="col-xs-4 delivery"><a href="#">Бесплатная доставка в сервис и обратно</a></div>
        <div class="col-xs-4 parts"><a href="#">Собственный склад оригинальных запчастей</a></div>
    </div>
</div>
<div class="row" style="padding: 0; margin: 0; height: 6px; background: url('<?= $assets . $siteConfig['theme'] . '/'; ?>images/path-bg.jpg') top repeat-x; height: 6px; "></div>