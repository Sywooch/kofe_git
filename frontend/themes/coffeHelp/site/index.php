<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $page['meta_title'];
?>
<section class="offer">
    <div class="row">
        <div class="container">
            <div class="col-xs-9 coffeemashina">
                <h1><?= $page['meta_h1']; ?></h1>
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
