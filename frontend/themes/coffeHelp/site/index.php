<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $page['meta_title'];
?>
<section class="offer">
    <div class="row">
        <div class="container">
            <div class="col-xs-4 coffeemashina">
                <!--<?php if ($siteConfig['id'] == 53): ?>
                    <img style="margin-top: 85px;" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/j/slider/1.png" alt="Оригинальные запчасти" width="560">
                <?php else: ?>
                    <img style="margin-top: 65px;" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/slider/slider1.jpg" alt="Оригинальные запчасти" width="820">
                <?php endif; ?>-->
                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>/images/kofemashina.png">
            </div>
            <div class="col-xs-5">
                <div class="carousel-caption">
                    <!--<h1><?= $page['meta_h1']; ?></h1>
                    <?= $page['description']; ?>-->
                    <h1>Ремонтируем кофмашины со сверхинтенсивностью</h1>
                    <p>Инновационное оборудование в сервисном центре, позволит ныйти проблему и устранить её максимально быстро.<br> Специалисты с сертификатами международного образца, проконсультируют вас по всем вопросам.</p>
                    <h3>Квждому 1000 клиенту дарим кофемашину в ПОДАРОК!</h3>
                </div>
            </div>
            <?= coffeHelp\widgets\forms\SidebarForm2::widget(['title' => 'Только до 17:00', 'desc' => 'При заказе любой услуги дадим скидку на 20%', 'times' => 'Осталось <b>25</b> минут']); ?>
        </div>
    </div>
</section>
<section class="who_main container">
    <?= coffeHelp\widgets\other\Advantage::widget(); ?>
    <?= coffeHelp\widgets\lists\TopServices::widget(); ?>    
</section>
<?= coffeHelp\widgets\lists\PopularBrands::widget(); ?>

<div class="my-footer-block">
    <div class="container theme-showcase" role="main">
        <hr class="big_line">
        <section class="about">
            <div class="row">
                <div class="row">
                    <div class="col-xs-12">
                        <?= $page['full_description']; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="order">
            <?= coffeHelp\widgets\forms\SidebarForm::widget(); ?>            
        </section>
    </div>
</div>
