<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $page['meta_title'];
?>
<section class="offer">
    <div class="row">
        <div class="container">
            <div class="col-xs-9 coffeemashina">
                <h1 class="gl-text-after"><?= $page['meta_h1']; ?></h1>
                <p class="text">
                    Инновационное оборудование в сервисном центре, позволит найти проблему и устранить её максимально быстро.<br>
                    Специалисты с сертификатами международного образца, проконсультируют вас по всем вопросам.
                </p>
                <div id=containersss>
                  Каждому 
                  <div id=flip>
                    <div><div>20 клиенту - Сервисное обслуживание</div></div>
                    <div><div>10 клиенту - Пачку зернового кофе  </div></div>
                     <div><div>1000 клиенту - Новая кофемашина</div></div>
                  </div>
                  <b>В ПОДАРОК! 🎁</b>
                </div>
            </div>
            <?php 
            $r = (60 - date('i'));
            if ($r == 0) {
                $r = 1;
            }
            ?>
            <?= coffeHelp\widgets\forms\SidebarForm2::widget(['title' => 'Только до ' . date('H', strtotime('+1 hour')) . ':00', 'desc' => 'При заказе любой услуги дадим скидку на 20%', 'times' => 'Осталось <b>' . $r . '</b> минут']); ?>
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
