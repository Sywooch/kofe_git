<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="cost">
    <div class="cost__inner">
        <h2 class="cost__title">Шаги вашего ремонта</h2>
        <ul class="cost__list">
            <li class="cost__item">
                <div class="cost__number">1</div>
                <div class="cost__view">
                    <img class="cost__ico" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/step_3.png" alt="">
                </div>
                <h3 class="cost__label">Заявка</h3>
                <p class="cost__text">Оставляете заявку у нас на сайте или посредством телефонного звонка</p>
            </li>
            <li class="cost__item">
                <div class="cost__number">2</div>
                <div class="cost__view">
                    <img class="cost__ico" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/step_2.png" alt="">
                </div>
                <h3 class="cost__label">Доставка</h3>
                <p class="cost__text">Осуществляем забор курьером или доставляете кофемашину к нам в СЦ </p>
            </li>
            <li class="cost__item">
                <div class="cost__number">3</div>
                <div class="cost__view">
                    <img class="cost__ico" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/step_4.png" alt="">
                </div>
                <h3 class="cost__label">Диагностика</h3>
                <p class="cost__text">Инженер проводит полную диганостику кофейной машины</p>
            </li>
            <li class="cost__item">
                <div class="cost__number">4</div>
                <div class="cost__view">
                    <img class="cost__ico" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/step_5.png" alt="">
                </div>
                <h3 class="cost__label">Ремонт</h3>
                <p class="cost__text">После согласования, производим ремонт кофемашины</p>
            </li>
            <li class="cost__item">
                <div class="cost__number">5</div>
                <div class="cost__view">
                    <img class="cost__ico" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/step_1.png" alt="">
                </div>
                <h3 class="cost__label">Сообщение</h3>
                <p class="cost__text">Сообщаем о готовности ремонта и выдаём гарантию до 1 года</p>
            </li>
        </ul>
    </div>
</section>