<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="row sub-level">
    <div class="col-sm-4">
        <h3><i>Работаем</i> <span>оперативно</span></h3>
        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/who/clock_icon.png">
        <p> Принимаем заявку, проводим диагностику, предлагаем решения – за 1 час.</p>
    </div>
    <div class="col-sm-4">
        <h3><i>Предоставляем</i> <span>гарантию</span></h3>
        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/who/contract_icon.png">
        <p> Если возникает гарантийный случай — все бесплатно исправляем.</p>
    </div>
    <div class="col-sm-4">
        <h3><i>Цены не</i> <span>задираем</span></h3>
        <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/who/commerse_icon.png">
        <p> Качественный ремонт не всегда дорогой, и мы тому подтверждение.</p>
    </div>
</div>