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
                    <p>г. Москва, ул. Барклая 8, ТЦ "Горбушка", этаж 1, пав. 104</p>
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
                        <p>При движении в область по Шмитовскому проезду, проезжаете Шелепихинский мост и сворачиваете на ул. Заречная. Через 200 метров, поворачиваете направо и прямо перед вам будет СЦ "iFixMe".</p>
                    </div>
                    <div class="peshkom info">
                        <span>Пешком</span>
                        <p>Первый вагон из центра, выходим на улицу и двигаемся по ул. Новозаводская до ул. Большая Филёвская (500 м.). Переходим через дорогу, по правую сторону будет ул. Заречная. Проходим по ней 200 метров, с правой стороны будет здание 1к2 и СЦ "iFixMe".</p>
                    </div>
                </div>
            </div>
<!--            <div class="right content-foto">
                <div class="adress">
                    <div class="titles">
                        Фото офиса
                    </div>
                    <div class="galaleriya">
                        <a rel="group" title="Lorem ipsum dolor sit amet" href="https://image.freepik.com/free-photo/web-design-concept-with-drawings_1134-77.jpg" class="img fancybox">
                            <img src="https://image.freepik.com/free-photo/web-design-concept-with-drawings_1134-77.jpg">
                        </a>
                        <a rel="group" title="Lorem ipsum dolor sit amet" href="http://www.searchermag.net/wp-content/uploads/2017/09/responsive-web-design.png" class="img fancybox">
                            <img src="http://www.searchermag.net/wp-content/uploads/2017/09/responsive-web-design.png">
                        </a>
                        <a rel="group" title="Lorem ipsum dolor sit amet" href="http://www.i4uinc.com/templates/i4uinc_20170909a/images/designer/791358511aab60a3bb722e21efbd9ea5_webdesigndpc866542291200x608.jpg" class="img fancybox">
                            <img src="http://www.i4uinc.com/templates/i4uinc_20170909a/images/designer/791358511aab60a3bb722e21efbd9ea5_webdesigndpc866542291200x608.jpg">
                        </a>
                        <a rel="group" title="Lorem ipsum dolor sit amet" href="https://image.freepik.com/free-photo/web-design-concept-with-drawings_1134-77.jpg" class="img fancybox">
                            <img src="https://image.freepik.com/free-photo/web-design-concept-with-drawings_1134-77.jpg">
                        </a>
                        <a rel="group" title="Lorem ipsum dolor sit amet" href="http://www.searchermag.net/wp-content/uploads/2017/09/responsive-web-design.png" class="img fancybox">
                            <img src="http://www.searchermag.net/wp-content/uploads/2017/09/responsive-web-design.png">
                        </a>
                        <a rel="group" title="Lorem ipsum dolor sit amet" href="http://www.i4uinc.com/templates/i4uinc_20170909a/images/designer/791358511aab60a3bb722e21efbd9ea5_webdesigndpc866542291200x608.jpg" class="img fancybox">
                            <img src="http://www.i4uinc.com/templates/i4uinc_20170909a/images/designer/791358511aab60a3bb722e21efbd9ea5_webdesigndpc866542291200x608.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="clear"></div>-->
        </div>
        <div class="bigmap">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A358a732ce1cfd772cada2862a2006f87e07a650943bfc4a6be752ce1ae0dbcff&amp;max-width=1920&amp;height=525&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>
    </div>
</section>
<section id="number-23">
    <a id="gotop" href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</section>