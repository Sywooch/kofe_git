<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<div class="ontact-top-text">
    <div class="container">
        <p class="gl-text">Авторизованный сервисный центр в  <span>Москве</span></p>
    </div>
</div>
<?= remont_coffee\widgets\other\Subways::widget(); ?>
<div class="full-text">
    <div class="container">
        <ul>
            <li>Доезжаете до ст. метро Кутузовская (первый вагон в центр), выходите и переходите по подземному переходу на ул. Киевская. Далее проходите вправо по ул. Киевская 200 метров, поворачиваете налево на ул. Студенческая. Проходите 150 метров и по правую сторону от Вас будет здание №35, где и находится сервисный центр Kofe03 (вход со двора).</li>
        </ul>
    </div>
</div>

<div class="ontact-top-text" style="padding-top: 0px;">
    <div class="container">
        <div class="bl-contact">
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
        </div>
        <hr>
    </div>
</div>

<div class="full-text">
    <div class="container">
        <p>Нет времени посетить наш офис? Бесплатная доставка в сервис и обратно, а так же диагностика 0 руб.!</p>
        <ul>
            <li>В отличие от других сервисных ценров, у нас нет скрытых позиций в прайс-листе, все работы обсуждаются исключительно заранее и индивидуально, в    зависимости от модели кофесашины ! И мы никогда не берем деньги за диагностику и доставку!</li>
            <li>Предварительная экспресс-диагностика у нас составляет 30 мин.</li>
            <li>На наших территориях есть бесплатные гостевые парковки, а так же платные городские.</li>
        </ul>
        <br>
        <br>
    </div>
</div>
