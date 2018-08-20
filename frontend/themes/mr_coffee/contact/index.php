<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<main class="main shadow">
    <div class="row">
        <div class="col-12 content">
            <div class="main-col">
                <div class="breadcrumbs"><a href="/" class="breadcrumbs__item" title="Главная">Главная</a><span class="breadcrumbs__item-current">Контакты</span></div>
                <h1 class="mt10 mb10">Контакты</h1>
                <div class="row">
                    <div class="col-12">
                        <div class="curved-lines-container clearfix">
                            <div class="f16">
                                Наш график работы:<br />
                                Выезд мастеров: <span class="text-blue">Понедельник - Воскресенье 8:00 - 23:00. </span><br />
                                <span class="text-blue">Звонки принимаются с 8:00 до 24:00 </span>по тел. 8 (499) 408-60-59, 8 (909) 151-19-22 без выходных<br/>
                                Офис: <span class="text-blue">Понедельник - Пятница 9:00 - 18:00. </span> Суббота и
                                воскресенье выходной<br />
                            </div>
                        </div>
                        <div class="map-container">
                            <div class="sub-caption">
                                Наш сервисный центр располагается по адресу 115193, Россия, город Москва, 7 Кожуховская, д. 18
                            </div>
                            <div id="map" class="map-yandex"></div>
                        </div>
                    </div>
                </div>
                <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
                <script type="text/javascript">
                    ymaps.ready(init);
                    var myMap;

                    function init() {
                        myMap = new ymaps.Map("map", {
                            center: [55.709753, 37.677259],
                            zoom: 15
                        });
                        var myPlacemark = new ymaps.Placemark([55.70985, 37.677259], {content: 'Mr-Master!', balloonContent: '115193, Россия, город Москва, 7 Кожуховская, д. 18'});
                        /*var myPlacemark = new ymaps.GeoObject({
                         geometry: {
                         type: "Point",
                         coordinates: [55.709753, 37.677259]
                         }});*/
                        myMap.geoObjects.add(myPlacemark);
                    }
                </script>
            </div>
            <div class="side-col hide-for-tablet">
                <aside>
                    <?= mr_coffee\widgets\forms\Side1::widget(); ?>
                    <?= mr_coffee\widgets\forms\Side2::widget(); ?>
                    <?= mr_coffee\widgets\lists\PopularBrands::widget(); ?>
                    <a href="/faq" class="panel-top panel link--reset mb40">
                        <h4 class="panel__caption">Задайте вопрос специалисту</h4>
                        <div class="panel-top__advice">Или найдите свой ответ в разделе FAQ</div>
                    </a>
                    <?= mr_coffee\widgets\lists\LastNews::widget(); ?>
                    <?= mr_coffee\widgets\other\Ht::widget(['view' => 'faq']); ?>                    
                    <?= mr_coffee\widgets\other\Ht::widget(['view' => 'advice']); ?>
                </aside>
            </div>
        </div>
    </div>
</main>