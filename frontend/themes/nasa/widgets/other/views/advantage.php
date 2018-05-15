<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class=advantages>
    <div class=container>
        <h3>Наши преимущества</h3> <br>
        <div class="advantages__wrapper row">
            <div class="col-lg-4 col-md-6">
                <div class=advantages__item>
                    <div class=advantages__item-icon><img alt="Срочный экспресс ремонт" src="<?= $assets . $siteConfig['theme']; ?>/img/advantages/express.png"> </div>
                    <div class=advantages__item-heading>Срочный экспресс ремонт</div>
                    <div class=advantages__item-text>Выполняем ремонт качественно и в короткие сроки.</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class=advantages__item>
                    <div class=advantages__item-icon><img alt="Бесплатная диагностика" src="<?= $assets . $siteConfig['theme']; ?>/img/advantages/free.png"> </div>
                    <div class=advantages__item-heading>Бесплатная диагностика</div>
                    <div class=advantages__item-text>Выявляет неисправную деталь и изношенные элементы.</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class=advantages__item>
                    <div class=advantages__item-icon><img alt="Любая форма оплаты" src="<?= $assets . $siteConfig['theme']; ?>/img/advantages/payment.png"> </div>
                    <div class=advantages__item-heading>Любая форма оплаты</div>
                    <div class=advantages__item-text>К оплате принимается наличный и безналичный расчет.</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class=advantages__item>
                    <div class=advantages__item-icon><img alt="Оперативный выезд мастера" src="<?= $assets . $siteConfig['theme']; ?>/img/advantages/fast.png"> </div>
                    <div class=advantages__item-heading>Оперативный выезд мастера</div>
                    <div class=advantages__item-text>Выезд мастера на дом или в офис в удобное для клиента время.</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class=advantages__item>
                    <div class=advantages__item-icon><img alt="Фирменные комплектующие" src="<?= $assets . $siteConfig['theme']; ?>/img/advantages/parts.png"> </div>
                    <div class=advantages__item-heading>Фирменные комплектующие</div>
                    <div class=advantages__item-text>Собственный склад качественных запчастей по низким ценам.</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class=advantages__item>
                    <div class=advantages__item-icon><img alt="Самая низкая стоимость" src="<?= $assets . $siteConfig['theme']; ?>/img/advantages/low-cost.png"> </div>
                    <div class=advantages__item-heading>Самая низкая стоимость</div>
                    <div class=advantages__item-text>Никаких переплат и скрытых платежей. Всё чисто и прозрачно.</div>
                </div>
            </div>
        </div>
    </div>
</div>