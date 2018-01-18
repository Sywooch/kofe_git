<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<div class="container theme-showcase" role="main">
    <section class="breadcrumbs">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Ремонт кофемашин</a></li>
                <li>Контактная информация</li>
            </ol>
        </div>
        <div class="row">
            <h1> Контактная информация</h1>
        </div>
    </section>
    <section class="who who-contacts">
        <div class="row">
            <div class="col-sm-9 left-col">
                <h3>Телефон и почта</h3>
                <div class="row contacts-container">
                    <div class="col-lg-6 l">
                        <p>Единый справочный телефон</p>
                        <div class="phone one"> <a href="tel:+74951339049" class="phone-h">+7 (495) 133-90-49</a></div>
                        <a href="mailto:service@technobit24.ru"><span>service@technobit24.ru</span></a>
                    </div>
                    <div class="col-lg-6 r"> Сервисный центр &laquo;Технобыт&raquo;<br/> Работаем с 7:00 до 22:00, без выходных<br/> Наши специалисты выезжают на заказы по всей Москве и до 30 км от МКАД</div>
                </div>
                <div class="row alert"> <img src="../ui/img/icons/alert-sign.png" alt=""/> Заявки на ремонт принимаются каждый день, без выходных и праздников</div>
                <?= coffeHelp\widgets\forms\MainPageForm::widget(); ?> 
                <h3 class="title-mar" style="margin-top:40px;">Выезд мастера</h3>
                <p>Чтобы сэкономить свое время, вы можете вызвать мастера на дом. Это абсолютно бесплатная услуга. Наш мастер приедет к вам в течение 1 часа. Если ремонт невозможно осуществить на выезде, мы бесплатно доставим вашу технику в сервисный центр. Таким образом, вы получите:</p>
                <ul class="how_to_order_list">
                    <li>бесплатный выезд мастера;</li>
                    <li>бесплатную доставку в сервисный центр;</li>
                    <li>экономию времени и сил</li>
                </ul>
                <h3 class="title-mar">Центральный офис</h3>
                <p>Основной офис компании находится по адресу: ул. Народного Ополчения, 34, с.2, офис 105. Просим наших клиентов и партнеров заранее сообщать о визите по телефону.</p>
                <div id="map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A151d09ce446dcefca9122e9b82c2071710cff169157caa69dff14efea2cbcc03&amp;width=100%25&amp;height=460&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
            
                <?= coffeHelp\widgets\other\Advantage::widget(['view' => 'advantage3']); ?>
            
        </div>
    </section>
    <?= coffeHelp\widgets\other\Advantage::widget(['view' => 'advantage4']); ?>    
</div>
</div>
<div class="my-footer-block">
    <div class="container theme-showcase" role="main">    
        <hr class="big_line">
        <section class="order">
            <?= coffeHelp\widgets\forms\SidebarForm::widget(); ?>
        </section>
    </div>
</div>