<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();

use app\components\CController;

if (!empty($pageInfo['image'])) {
    $img = $pageInfo['image'];
} else {
    $img = 'coffee_machine.png';
}
$breadcrumbs = [
    '/' . CController::$monoBrand['url'] => CController::$monoBrand['title'],
    CController::$monoBrand['title'] . ' ' . $pageInfo['title'],
];
$this->title = $title;
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="background--grey margin--bottom0 padding--top0">
    <div class="container">
        <section class="promo promo--collection">
            <div class="row">
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="promo-image">
                        <p><img alt="Ремонт <?= $brand['title'] . ' ' . $pageInfo['title']; ?>" src="<?= $assets ?>/uploads/images/<?= $img; ?>"></p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="promo-content">
                        <h1 class="promo-title">
                            <?php if (!empty($pageInfo['meta_h1'])): ?>
                                <?= $pageInfo['meta_h1']; ?>
                            <?php else: ?>
                                <?= app\components\CController::$category['rod_title']; ?>  <?= $brand['title'] . ' ' . $pageInfo['title']; ?> в <?= Yii::$app->session['region']['titleRod']; ?>
                            <?php endif; ?>
                        </h1>
                        <div class="promo-subtitle">
                            <?php if (!empty($pageInfo['description'])): ?>
                                <?= str_replace('#model_en#', $brand['title'] . ' ' . $pageInfo['title'], $pageInfo['description']); ?>
                            <?php else: ?>
                                <p>
                                    Команда инженеров сервисной мастерской ремонтируют кофемашины <?= $brand['title'] . ' ' . $pageInfo['title']; ?> любой сложности, начиная от чистки механизма и замены изношенных деталей, до восстановления материнской платы, пайки контактов и установления программного обеспечения. Заказав наши услуги, вы будете уверены, что ваша техника починена с соблюдением всех инструкций от производителя, а сроки не превысят ранее оговоренных рамок. Чтобы вы были на 100% уверенны, что тратиться на ремонт вам не придется долгое время, сервис берет на себя обязательства устранить появившиеся поломку бесплатно, в течении гарантийного срока. Мы подарим вторую жизнь вашему устройству.
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="promo-description">
                            <ul>
                                <li>закажите звонок</li>
                                <li>заберём бесплатно</li>
                                <li>починим за 24 часа*</li>
                                <li>дадим гарантию до 1 года</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p class="banner_annotation">* указано среднее время</p>
                        </div>
                        <button class="promo-button button button--red button--large js-popup-repair">Заказать ремонт</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <i class="background-pattern background-pattern--left js-background-pattern"></i>
    <i class="background-pattern background-pattern--right js-background-pattern"></i>
</div>
<div class="container">
    <?= satelit\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    <section class="default margin--bottom0">
        <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs">
                <?= satelit\widgets\lists\PopularServices::widget(['view' => 'popularServicesMenu', 'type' => 2, 't1' => 'Неисправность']); ?>
            </div>
            <div class='col-md-1 hidden-sm hidden-xs'></div>
            <div class="col-md-8 col-sm-12 col-xs-12">                
                <?= satelit\widgets\lists\PopularServices::widget(['view' => 'popularServicesTable', 'type' => 1, 't1' => 'Стоимость услуг', 't2' => 'Посмотреть цены на все услуги|Скрыть', 't3' => 'Посмотреть цены на все услуги', 'col' => false]); ?>
                <?php if (!empty($pageInfo['full_description'])): ?>
                    <section class="default margin--bottom60">
                        <div class="content">
                            <div class="content">
                                <?= $pageInfo['full_description']; ?>                               
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>
<div class="background--grey margin--bottom60">
    <div class="container">
        <section class="form-repair">
            <p class="section-title section-title--small">Закажите ремонт кофемашины <?= CController::$monoBrand['title'] . ' ' . $pageInfo['title']; ?></p>
            <?= satelit\widgets\forms\Form3::widget(); ?>
        </section>
    </div>
    <i class="background-pattern background-pattern--left js-background-pattern"></i>
    <i class="background-pattern background-pattern--right js-background-pattern"></i>
</div>
<div class="container"></div>
<div class="container">
    <?= satelit\widgets\other\Ht::widget(); ?>
</div>