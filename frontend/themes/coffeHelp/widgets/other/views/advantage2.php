<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="section_form_order_n">
    <div class="form-order">
        <div class="form-order-item">
            <p class="form-order-item-title p">Самый мобильный сервис</p>
            <p class="form-order-item-desc">Мы делаем все для удобства наших клиентов: вы получаете исправную технику быстро и не выходя из дома.</p>
        </div>
        <div class="form-order-item"> <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/icons/wrench.png"/></div>
        <div class="form-order-item"> <span class="form-order-item-title s">Ремонт на дому и в сервисном центре</span></div>
        <div class="form-order-item">
            <div class="delimiter"></div>
        </div>
        <div class="form-order-item"> <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/icons/gears.png"/></div>
        <div class="form-order-item"> <span class="form-order-item-title s">Детали для ремонта мастер привезет с собой</span></div>
    </div>
</section>