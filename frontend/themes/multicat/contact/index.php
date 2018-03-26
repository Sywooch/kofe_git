<?php 
$breadcrumbs = [    
    $pageInfo['title'],
];
$this->title = str_replace('#brand_en#', \app\components\CController::$monoBrand['title'], $pageInfo['meta_title']);
?>
<?= multicat\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-18">
    <div class="item active" id="con-1">
        <div class="container">
            <div class="left">
                <h1>Контакты</h1>
                <div class="adress one">
                    <span>Адрес</span>
                    <p>г. Москва, ул. Барклая, 8. ТЦ "Горбушка", этаж 2, павильон 217.</p>
                </div>
                <div class="tel">
                    <span>Телефон</span>
                    <a class="<?= \app\components\CController::$monoBrand['url']; ?>phone_s" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                </div>
                <div class="adress">
                    <span>Режим работы</span>
                    <p>Ежедневно с 08:00 до 22:00</p>
                </div>
                <span class="open-adress" data-tab="info-adress">Как проехать? <i class="fa fa-angle-right" aria-hidden="true"></i></span>
            </div>
            <div class="right content-adress">
                <div class="adress">
                    <div class="titles">
                        Как проехать?
                    </div>
                    <div class="peshkom info">
                        <span>Пешком\На Автомобиле:</span>
                        <p>Выходите со станции Багратионовская и направляетесь по улице Барклая в сторону Горбушки. Пройдя бизнец центр "Рубин", по левую сторону будет вход в ТЦ Горбушка. Поднимаетесь на 2 этаж. Наш сервисный центр расположен в 217 павилионе.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bigmap">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa2edf6943824b06741f664c9b7e6d0e8c2b2bfb596dd1eadab5b85b8cbafc188&amp;width=100%25&amp;height=525&amp;lang=ru_RU&amp;scroll=true"></script></script>
        </div>
    </div>
</section>
<section id="number-23">
    <a id="gotop" class="colorbg colorbghover" href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</section>