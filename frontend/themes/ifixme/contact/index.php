<?php 
$breadcrumbs = [    
    $pageInfo['title'],
];
$this->title = $pageInfo['meta_title'];
?>
<?= ifixme\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="number-18">
    <div class="item active" id="con-1">
        <div class="container">
            <div class="left">
                <h1>Контакты</h1>
                <div class="adress one">
                    <span>Адрес</span>
                    <p>г. Москва, Багратионовский пр-д, 70К20В</p>
                </div>
                <div class="tel">
                    <span>Телефон</span>
                    <a class="fix-tel" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                </div>
                <div class="email">
                    <span>Почта</span>
                    <a href="#">info@ifixme.ru</a>
                </div>
                <div class="adress">
                    <span>Режим работы</span>
                    <p>Ежедневно с 08:00 до 22:00</p>
                </div>
                <span class="open-adress" data-tab="info-adress">Как проехать? <i class="fa fa-angle-right" aria-hidden="true"></i></span>
                <!--<span class="open-foto" data-tab="galaleriya">Фотографии офиса <i class="fa fa-angle-right" aria-hidden="true"></i></span>-->
            </div>
            <div class="right content-adress">
                <div class="adress">
                    <div class="titles">
                        Как проехать?
                    </div>
                    <div class="mashina info">
                        <span>На  машине</span>
                        <p>При движении в область по Кутузовскому проспекту, съезжаем на улицу Барклая и едем приблизительно 1 км до ТЦ "Горбушка", следов поворачиваем на Багратионовский пр-д. Наш Сервис находится в здании 70К20В</p>
                    </div>
                    <div class="peshkom info">
                        <span>Пешком</span>
                        <p>Последний вагон из центра, выходим на улицу и двигаемся по ул. Барклая в сторону ТЦ "Горбушка". Не доходя БЗ "Рубин" поворачиваем налево и проходим 200м. Наш сервисный центр находится в здании 70К20В.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bigmap">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8937a2b71b799acf4e8b3ab763e000285abaf36901fab05e78a52c08fe18f261&amp;max-width=1920&amp;height=525&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>
    </div>
</section>
<section id="number-23">
    <a id="gotop" href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</section>