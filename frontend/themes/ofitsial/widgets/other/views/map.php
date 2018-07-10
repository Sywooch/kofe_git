<div class="adrespremap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="/contacts" class="linecenter apm_heading">АДРЕС СЕРВИСНОГО ЦЕНТРА</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 p-all-reset col-md-offset-2">
                <p class="apm_description">
                    Наш сервисный центр готов забрать кофемашину из любой точки города <?= Yii::$app->session['region']['id'] == 1 ? 'Москвы' : 'Санкт-Петербурга'; ?>. Доставка предоставляется бесплатно!<br>
                    <br> <b>Телефон: 
                        <a class="offm" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a></b> <br> 
                    <b>Адрес: <?= Yii::$app->session['region']['id'] == 1 ? 'г. Москва, м. Электрозаводская, Барабанный переулок, 4с4' : 'г. Санкт-Петербург, м. Чкаловская, Большая Разночинная ул., 14'; ?></b>
                </p>
            </div>
        </div>
    </div>
    <?= Yii::$app->session['region']['id'] == 1 ? '<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af82e904a1d7cece089836159bd0367107204f10c2708d43357687362abb6be6c&amp;source=constructor" width="100%" height="350" frameborder="0" scrolling="no"></iframe>' : '<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A28ca3e6951700e044cf928b1be3fe34d76c8aedc86b843d9295a460b7e3d3a17&amp;source=constructor" width="100%" height="350" frameborder="0" scrolling="no"></iframe>'; ?>
    
</div>