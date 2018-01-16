<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<noindex>
    <aside class="complain">
        <div class="complain__inner">
            <div class="complain__box">
                <h3 class="complain__title">Обратная<span class="br"></span> связь</h3>
                <p class="complain__text">Если поломка произошла внезапно и вносит проблемы в Ваш быт, мы можем устранить её в кратчайшие сроки. Наш курьер заберёт неисправную кофемашину с любого района <?= str_replace([' и область', 'Санкт-Петербург'], ['', 'Санкт-Петербурга'], Yii::$app->session['region']['title']); ?> и максимально быстро доставит её в СЦ для ремонта.</p>
                <div class="complain__actions">
                    <a class="button button_warning js-popup" data-popup="request" href="#">
                        <img class="button__ico" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/ico_bellfa5f.svg" alt="">
                        <span class="button__label">Вызвать курьера</span>
                    </a>
                </div>
            </div>
        </div>
    </aside>
</noindex>