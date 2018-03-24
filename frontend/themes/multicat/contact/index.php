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
                    <p>г. Москва, ул. Барклая, 8. ТЦ "Горбушка", этаж 2, павильон 217. м. Багратионовская, Парк Победы, Фили.</p>
                </div>
                <div class="tel">
                    <span>Телефон</span>
                    <a class="<?= \app\components\CController::$monoBrand['url']; ?>phone_s" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
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
            </div>
            <div class="right content-adress">
                <div class="adress">
                    <div class="titles">
                        Как проехать?
                    </div>
                    <div class="mashina info">
                        <span>На  машине</span>
                        <p>При движении в область по Шмитовскому проезду, проезжаете Шелепихинский мост и сворачиваете на ул. Заречная. Через 200 метров, поворачиваете направо и прямо перед вам будет СЦ "iFixMe".</p>
                    </div>
                    <div class="peshkom info">
                        <span>Пешком</span>
                        <p>Первый вагон из центра, выходим на улицу и двигаемся по ул. Новозаводская до ул. Большая Филёвская (500 м.). Переходим через дорогу, по правую сторону будет ул. Заречная. Проходим по ней 200 метров, с правой стороны будет здание 1к2 и СЦ "iFixMe".</p>
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