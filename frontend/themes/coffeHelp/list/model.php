<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<div class="inner-bg">     
    <div class="container theme-showcase" role="main">            
        <section class="promo">
            <div class="row">
                <div class="col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="/">Главная</a></li>
                        <li><a href="/<?= $brand['url']; ?>">Ремонт кофемашин <?= $brand['title']; ?></a></li>
                        <li>Ремонт кофемашин <?= $brand['title'] . ' ' . $pageInfo['title']; ?></li>
                    </ol>
                </div>
                <div class="col-xs-4">
                    <div class="images">
                        <?php if (!empty($pageInfo['image'])): ?>
                        <img id="big-header-image" src="<?= $assets . '/'; ?>uploads/images/<?= $pageInfo['image']; ?>" />            
                        <?php else: ?>
                            <img id="big-header-image" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/%21mini_page/fridge_header.png">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xs-5">
                    <h1>
                        <?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?>
                    </h1>
                    <span class="section-promo-desc">
                        <?php if (!empty($pageInfo['description'])): ?>
                            <?= str_replace('#model_en#', $brand['title'] . ' ' . $pageInfo['title'], $pageInfo['description']); ?>
                        <?php else: ?>                
                            <p>  
                                <?= app\components\CController::$category['rod_title']; ?> <?= $brand['title'] . ' ' . $pageInfo['title']; ?> в короткие сроки. Устраняем неисправности любой сложности с гарантией качества комплектующих и выполненных работ.               
                            </p>
                        <?php endif; ?>
                    </span>
                </div>
                <?= coffeHelp\widgets\forms\SidebarForm2::widget(); ?>
            </div>
        </section>
        <?= coffeHelp\widgets\other\Advantage::widget(['view' => 'advantage2']); ?>
        <section class="who equipment">
            <div class="row">
                <div class="col-sm-9 left-col">
                    <?= coffeHelp\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => true, 'title' => 'Цены по услугам']); ?>
                    <?= coffeHelp\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => false, 'title' => 'Цены по прочим услугам']); ?>
                    <?= coffeHelp\widgets\lists\Neispravnost::widget(['type' => 2, 'is_popular' => true, 'title' => 'Цены по неиправностям']); ?>
                    <br>                    
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
        <section class="about">
            <div class="row">
                <?php if (!empty($pageInfo['full_description'])): ?>
                    <?= $pageInfo['full_description']; ?>
                <?php else: ?>                
                    <h3>Поддерживаем качество сервиса на уровне мировых стандартов</h3>
                    <div class="row">
                        <div class="col-xs-12">
                            <p> СЦ &laquo;Технобыт&raquo; работает круглосуточно, 7 дней в неделю и отдыхает только 1 января.<br> Ответим каждому, приедем быстро, осмотрим тщательно, починим качественно.<br> Всегда бесплатно: консультации по эксплуатации, гарантия на работы и детали.<br></p>
                            <p> Компания СЦ &laquo;Технобыт&raquo; предоставляет полный спектр услуг по ремонту бытовой техники практически всех марок и моделей как отечественного, так и импортного производства.</p>
                            <p> Многолетний опыт работы и высокий профессионализм наших инженеров позволяет точно на месте определить характер неисправности и устранить поломку в максимально короткий срок.</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <section class="order">
            <?= coffeHelp\widgets\forms\SidebarForm::widget(); ?>
        </section>
    </div>
</div>
