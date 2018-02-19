<?php
$this->title = $model['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
$breadcrumbs = [
    $model['title'],
];
?>
<div class="clear"></div>
<?= \app\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<section id="banner">
    <div class="container">
        <div class="full-text">
            <div class="h1">
                <h1><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title'] ?></h1>
            </div>
            <?= str_replace('#domain#', '<a class="politica" href="' . Yii::$app->request->hostInfo . '">' . str_replace(['http://', '/'], '', Yii::$app->request->hostInfo) . '</a>', $model['description']); ?>

        </div>
    </div>
    <div class="clear"></div>
    <span class="more"><div>Заказать ремонт</div></span>
</section>
<?= \app\widgets\other\Advantage::widget(); ?>


<noindex>
    <section class="promo-video">
        <div class="container">
            <div class="left">
                <iframe  src="https://www.youtube.com/embed/M3ebpSpcsro?rel=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                <!--<div id="promo-video"></div>-->
            </div>
            <div class="right">
                <div class="title">Здравствуйте</div>
                <p>Сервисный центр по ремонту кофемашин Spb-Remont-Kofe реализует ремонт кофемашин с 2010 года. За это время мы скоординировали работу инженеров таким образом, что все ремонтные услуги выполняются в течении 24 часов с момента Вашего обращения. Все сотрудники предприятия имеют колосcальный опыт в ремонте кофемашин. Сервисный центр работает как с частными так и с юридическими лицами и государственными учреждениями. На все работы, как и на заменённые комплектующие Вам будет предоставлена гарантия сроком до 1 года. Выбирайте профессионалов, сделаем ремонт качественно и ответим за качество нашей работы!</p>
            </div>
        </div>
    </section>
<noindex>
<?php if (!$siteConfig['mono']): ?>
<section id="ask">
    <div class="container">
        <div>
            <h3>Закажите бесплатную консультацию.</h3>
            <p>Мы свяжемся с Вами в течение 5 минут.</p>
            <?= \app\widgets\forms\CallBack::widget(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
