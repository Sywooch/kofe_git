<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($page['meta_title']) ? $page['meta_title'] :  app\components\CController::$category['full_title'] . ' ' . \app\components\CController::$monoBrand['title'] . ' в Москве срочно и по лучшим ценам!';
?>
<div class=intro>
    <div class=container>
        <div class=row>
            <div class="col-md-6 order-2 order-md-1 text-md-center">
                <div class=intro__preview></div>
            </div>
            <div class="col-md-6 order-1 order-md-2 text-center text-md-left">
                <h1 class=intro__heading><?= app\components\CController::$category['full_title']; ?><?= ' ' . \app\components\CController::$monoBrand['title']; ?> в <?= Yii::$app->session['region']['titleRod']; ?> с гарантией до 1 года!</h1>
                <div class="d-lg-block d-none intro__description">
                    <p><?= $page['description']; ?></p>
                </div>
                <div class="intro__promo">
                    <div class="h5 intro__promo-heading">Акция дня! 25% скидка на услуги сегодня</div>
                    <?= nasa\widgets\forms\Main::widget(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= nasa\widgets\lists\Neispravnost::widget(); ?>
<div class=models>
    <div class=container>
        <h3>Ремонтируем модели DeLonghi:</h3>
        <div class="models__wrapper no-gutters row">
            <div class=col-md-3>
                <a class=models__item href=http://delonghi.kofemashini.com/model-nespresso-latissima-touch>
                    <img alt="Nespresso Latissima Touch" class=models__item-img src="<?= $assets . $siteConfig['theme']; ?>/img/models/delonghi/3.jpg"> 
                    <div class=models__item-name>Nespresso Latissima Touch</div>
                </a> 
            </div>
            <div class=col-md-3>
                <a class=models__item href=http://delonghi.kofemashini.com/model-esam-3000-b>
                    <img alt="ESAM 3000 B" class=models__item-img src="<?= $assets . $siteConfig['theme']; ?>/img/models/delonghi/4.jpg"> 
                    <div class=models__item-name>ESAM 3000 B</div>
                </a> 
            </div>
            <div class=col-md-3>
                <a class=models__item href=http://delonghi.kofemashini.com/model-ecam-22110>
                    <img alt="ECAM 22.110" class=models__item-img src="<?= $assets . $siteConfig['theme']; ?>/img/models/delonghi/5.jpg"> 
                    <div class=models__item-name>ECAM 22.110</div>
                </a> 
            </div>                    
        </div>
        <div class="models__more text-center">
            <a class="btn btn-outline-primary" href=http://delonghi.kofemashini.com/models/> Показать все <span class="d-md-inline d-none">ремонтируемые</span> модели</a>
        </div>
    </div>
</div>
<div class=advantages>
    <div class=container>
        <h3>Наши преимущества</h3> <br>
        <div class="advantages__wrapper row">
            <div class="col-lg-4 col-md-6">
                <div class=advantages__item>
                    <div class=advantages__item-icon><img alt="Срочный экспресс ремонт" src="<?= $assets . $siteConfig['theme']; ?>/img/advantages/express.png"> </div>
                    <div class=advantages__item-heading>Срочный экспресс ремонт</div>
                    <div class=advantages__item-text>Выполняем ремонт качественно и в короткие сроки.</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class=advantages__item>
                    <div class=advantages__item-icon><img alt="Бесплатная диагностика" src="<?= $assets . $siteConfig['theme']; ?>/img/advantages/free.png"> </div>
                    <div class=advantages__item-heading>Бесплатная диагностика</div>
                    <div class=advantages__item-text>Выявляет неисправную деталь и изношенные элементы.</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class=advantages__item>
                    <div class=advantages__item-icon><img alt="Любая форма оплаты" src="<?= $assets . $siteConfig['theme']; ?>/img/advantages/payment.png"> </div>
                    <div class=advantages__item-heading>Любая форма оплаты</div>
                    <div class=advantages__item-text>К оплате принимается наличный и безналичный расчет.</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class=advantages__item>
                    <div class=advantages__item-icon><img alt="Оперативный выезд мастера" src="<?= $assets . $siteConfig['theme']; ?>/img/advantages/fast.png"> </div>
                    <div class=advantages__item-heading>Оперативный выезд мастера</div>
                    <div class=advantages__item-text>Выезд мастера на дом или в офис в удобное для клиента время.</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class=advantages__item>
                    <div class=advantages__item-icon><img alt="Фирменные комплектующие" src="<?= $assets . $siteConfig['theme']; ?>/img/advantages/parts.png"> </div>
                    <div class=advantages__item-heading>Фирменные комплектующие</div>
                    <div class=advantages__item-text>Собственный склад качественных запчастей по низким ценам.</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class=advantages__item>
                    <div class=advantages__item-icon><img alt="Самая низкая стоимость" src="<?= $assets . $siteConfig['theme']; ?>/img/advantages/low-cost.png"> </div>
                    <div class=advantages__item-heading>Самая низкая стоимость</div>
                    <div class=advantages__item-text>Никаких переплат и скрытых платежей. Всё чисто и прозрачно.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=warranty>
    <div class=container>
        <div class="align-items-center row">
            <div class="col-lg-6 col-md-6 col-xl-5 order-2 order-md-1">
                <div class=warranty__image></div>
            </div>
            <div class="col-lg-5 col-md-6 col-xl-6 offset-lg-1 order-1 order-md-2 text-center text-md-left">
                <div class="h3 warranty__heading">Гарантия до 365 дней на&nbsp;ремонт&nbsp;и&nbsp;запчасти</div>
                <div class=warranty__description> Мы предоставляем полную гарантию на<br class="d-lg-inline d-none"> произведенный ремонт и замененные комплектующие.<br class="d-lg-inline d-none"> Работаем на свою репутацию и на ваши рекомендации! </div>
            </div>
        </div>
    </div>
</div>
<div class=promo>
    <div class=container>
        <div class="align-items-center promo__wrapper row">
            <div class="col-md-5 text-center text-md-right">
                <div class="h3 promo__heading">Бодрый понедельник</div>
                <div class=promo__description> Сегодня весь день мы дарим 25% скидку на<br class="d-lg-inline d-none"> все услуги по ремонту кофемашин DeLonghi </div><a class="btn btn-primary" data-target=#modalPromo data-toggle=modal href=#>Получить 25% скидку</a></div>
            <div class="col-md-4 text-center">
                <div class=promo__countdown>
                    <div class=promo__countdown-circle>
                        <svg xmlns=http://www.w3.org/2000/svg height=220px viewbox="0 0 220 220" width=220px>
                        <g transform=translate(110,110)>
                        <circle class=e-c-base r=100></circle> 
                        <g transform=rotate(-90)>
                        <circle class=e-c-progress r=100></circle> 
                        <g id=e-pointer>
                        <circle class=e-c-pointer cx=100 cy=0 r=8></circle>
                        </g>
                        </g>
                        </g>
                        </svg>
                    </div>
                    <div class=promo__countdown-time>
                        <div class=text>До конца акции осталось:</div>
                        <div class=value>00:00:00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>