<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<noindex>
    <aside class="comp">
        <div class="Comp-in">
            <div class="Comp-box">
                <h3 class="Comp-title">Обратная<span class="br"></span> связь</h3>
                <p class="Comp-txt">Если поломка произошла внезапно и вносит проблемы в Ваш быт, мы можем устранить её в кратчайшие сроки. Наш курьер заберёт неисправную кофемашину с любого района <?= str_replace([' и область', 'Санкт-Петербург'], ['', 'Санкт-Петербурга'], Yii::$app->session['region']['title']); ?> и максимально быстро доставит её в СЦ для ремонта.</p>
                <div class="Comp-harakat">
                    <a class="m_btn btn_war popup_js" data-popup="request" href="#">
                        <img class="b_icon" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/ico_bellfa5f.svg" alt="">
                        <span class="btn_lbl">Вызвать курьера</span>
                    </a>
                </div>
            </div>
        </div>
    </aside>
</noindex>