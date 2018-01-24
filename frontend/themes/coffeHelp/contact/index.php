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
                <div class="row contacts-container">
                    <div class="col-lg-6 l">
                        <p>Единый справочный телефон</p>
                        <div class="phone one"> <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= strip_tags(Yii::$app->session['region']['phone']); ?></a></div>                       
                    </div>
                    <div class="col-lg-6 r"><?= $pageInfo['description']; ?></div>
                </div>
                <div class="row alert"> <img src="../ui/img/icons/alert-sign.png" alt=""/> Заявки на ремонт принимаются каждый день, без выходных и праздников</div>
                <?= coffeHelp\widgets\forms\MainPageForm::widget(); ?> 
                <?= $pageInfo['full_description']; ?>
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