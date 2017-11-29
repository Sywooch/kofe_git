<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<noindex>
    <div class="hidden-xs hidden-sm" style="width: 100%; height: 350px; position: relative;">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=6plQNknR2aah8dUh14bAKjBf-QuO78LD&amp;width=100%25&amp;height=370&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
    </div>
</noindex>
<div class="container">
    <div class="bl-contact">
        <div class="heading" style="margin-top: 45px;">Авторизованный сервисный центр в Москве</div>
        <div class="list">
            <ul>
                <li class="phone">
                    <div class="name">+7 (495) 649-61-92</div>
                    <div class="description"><a href="#">Оформить обратный звонок</a></div>
                </li>
                <li class="address">
                    <div class="name">ул. Народного Ополчения, 34/3</div>
                    <div class="description"><a href="#">Оформить выезд или доставку</a></div>
                </li>
                <li class="schedule">
                    <div class="name">Круглосуточно</div>
                    <div class="description"><a href="#">Определение неисправности</a></div>
                </li>
            </ul>
        </div>
        <style type="text/css"></style>
        <div class="list places" style="border-top: none">
            <ul>
                <li class="contact-mini-text" style="width:100%">
                    <div class="name">
                        <span>Нет времени посетить наш офис? Бесплатная доставка в сервис и обратно, а так же диагностика 0 руб.!</span>
                        <hr>
                        <div><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/arrow.png" /> В отличие от других сервисных ценров, у нас нет скрытых позиций в прайс-листе, все работы обсуждаются исключительно заранее и индивидуально, в &nbsp;&nbsp;&nbsp;зависимости от модели кофесашины ! И мы никогда не берем деньги за диагностику и доставку! </div>
                        <div><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/arrow.png" /> Предварительная экспресс-диагностика у нас составляет 30 мин.</div>
                        <div><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/arrow.png" /> На наших территориях есть бесплатные гостевые парковки, а так же платные городские.</div>
                    </div>
                </li>
            </ul>
        </div>
        <?= remont_coffee\widgets\other\Subways::widget(); ?>
    </div>
</div>