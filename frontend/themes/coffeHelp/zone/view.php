<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($model['meta_title']) ? $model['meta_title'] : $model['title'];
?>
<div class="inner-bg page-list">
    <div class="container theme-showcase" role="main">        
        <section class="promo widthsto">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="/">Ремонт кофемашин</a></li>
                        <li><?= $model['title']; ?></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <h1><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title']; ?></h1>       
                    <?= $model['description']; ?>
                </div>
                <?= coffeHelp\widgets\forms\SidebarForm2::widget(); ?>
            </div>
        </section>
        <?= coffeHelp\widgets\other\Advantage::widget(['view' => 'advantage2']); ?>
        
        <section class="who equipment">
            <div class="row">
                <div class="col-sm-9 left-col">
                    <?= coffeHelp\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => true, 'title' => 'Цены по услугам']); ?>
                    <div class="row">
                        <div class="col-sm-12 left-col w">                            
                            <?= $model['full_description']; ?>                            
                        </div>
                    </div>
                    <br>
                    <section class="sidebar">
                        <div class="tb_sidebar_cont">
                            <span class="tb_sidebar_title">Нас выбирают, потому что:</span>
                            <div class="tb_sidebar_item">
                                <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">Бесплатная диагностика</span> <span class="tb_sidebar_extra_text">Проведём диагностику устройства.</span></div>
                                <img class="tb_sidebar_item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/washer.png">
                            </div>
                            <div class="tb_sidebar_item">
                                <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">Фирменные запчасти</span> <span class="tb_sidebar_extra_text">Имеем в наличии основные запчасти для кофемашин.</span></div>
                                

                                <img class="tb_sidebar_item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/shield.png">
                            </div>
                            <div class="tb_sidebar_item">
                                <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">Форма оплаты</span> <span class="tb_sidebar_extra_text">Принимаем не только наличные, но и безнал и карты.</span></div>
                                

                                <img class="tb_sidebar_item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/coins.png">
                            </div>
                            <div class="tb_sidebar_item">
                                <div class="tb_sidebar_item__desc"> <span class="tb_sidebar_item__desc_main">Работаем ежедневно</span> <span class="tb_sidebar_extra_text">Работаем и в праздники и в выходные.</span></div>
                                <img class="tb_sidebar_item__img" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/calendar.png">
                            </div>
                            <div class="clear"></div>
                        </div>
                    </section>
                    <div class="clear"></div>
                    <?= coffeHelp\widgets\forms\MainPageForm::widget(); ?>
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
