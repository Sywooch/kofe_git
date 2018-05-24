<?php
$breadcrumbs = [
    $pageInfo['title'],
];
$this->title = $pageInfo['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="container">
    <div class="container">
        <?= satelit\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    </div>
    <section class="page page-contacts">
        <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] ?></h1>
        <?= !empty($pageInfo['description']) ? $pageInfo['description'] : '<p>Мы, сервисный центр по ремонту кофемашин &laquo;РемонтКофе&raquo; - команда профессионалов, которые знают все о кофемашинах от А до Я. Наши мастера работают как на выезде, так и в сервисном центре, осуществляя ремонт кофемашин любой сложности.</p>' ?>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="page-contacts--map">
                    <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJZ4WqZtk1tUYRfWa3gApRZBc&amp;key=AIzaSyCDBnmPNiqBDBkAPfcJt1BWoJbprq2DPMI" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p class="page-contacts--address" style="margin:0;">Наши номера</p>
                <p class="page-contacts--phone"><span>8 929 502 62 32<br>8 916 060 93 35</span> — для звонков<br><span>8 (915) 498 28 15</span> — для сообщений</p>
                <p class="page-contacts--im">Так же можно связаться с помощью Viber, Whatsapp и Telegram</p>
                <p class="page-contacts--address">Режим работы<br><span>c 10 до 22</span></p>
                <p class="page-contacts--address">Адрес в Москве:<br><span>Москва, ул. Ярославская дом 8, корпус 5, офис 105</span><br><a href="mailto:remont@spravnik.ru">remont@spravnik.ru</a></p>
                <p class="page-contacts--requisites">
                    <span>ИП СВЕРЧКОВ МАКСИМ НИКОЛАЕВИЧ</span><br>
                    ИНН: 519001369929<br>
                    Расчетный счет: 40802810602760001477<br>
                    Название Банка: АО «АЛЬФА-БАНК»<br>
                    Кор.счет: 30101810200000000593<br>
                    БИК банка: 044525593
                </p>
            </div>
        </div>
    </section>
</div>