<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<main class="main shadow">
    <div class="row">
        <div class="col-12 content">
            <div class="main-col">
                <div class="breadcrumbs">
                    <a href="#" class="breadcrumbs__item" title="Главная">Ремонт кофемашин</a>
                    <span class="breadcrumbs__item-current">FRANKE</span>
                </div>
                <h1 class="mt10 mb10"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : app\components\CController::$category['full_title'] . ' ' . $brand['title'] . ' ' . $pageInfo['title']; ?></h1>
                <div class="row works">
                    <div class="col-12">
                        <div class="banner banner--small" style="background-image: url('/<?= $siteConfig['theme']; ?>/images/remont-i-servis-kofemashin-kopiya.jpg');">
                            <div class="banner--small__content">
                                <h3 class="banner__title">Гарантия на все виды работ <br>до 1 года</h3>
                                <a class="button button--send js-popup" href="#" data-container="#popup">ЗАКАЗАТЬ РЕМОНТ</a>
                            </div>
                            <div class="mode-photo">
                                <img src="<?= $assets . '/'; ?>uploads/images/<?= $pageInfo['image']; ?>">
                            </div>
                        </div>
                        <?= mr_coffee\widgets\other\Ht::widget(); ?>                        
                        <section class="section make-order">
                            <div class="row">
                                <div class="col-12">                                   
                                    <div class="view-more">
                                        <div class="view-more__content view-more__content--make-order">
                                            <?= $pageInfo['description']; ?>
                                        </div>
                                        <a class="view-more__link" href="#">Открыть еще</a>
                                    </div>
                                    <a class="button button--send js-popup" href="#" data-container="#popup">Заказать ремонт</a>
                                </div>
                            </div>
                        </section>
                        <div class="hide-moretablet side-block--mobile side-block--small-tablet mb35">
                        </div>
                        <?= mr_coffee\widgets\lists\Neispravnost::widget(['is_popular' => true, 'type' => 1]); ?>                        
                        <?= mr_coffee\widgets\other\Ht::widget(['view' => 'adv']); ?>
                        <div class="hide-moretablet side-block--mobile mb0 mt25"></div>
                        <?= mr_coffee\widgets\other\Ht::widget(['view' => 'order']); ?>
                        <div class="hide-moretablet side-block--mobile mt30"></div>
                        <?= mr_coffee\widgets\lists\LastReviews::widget(); ?>                    
                        <?= mr_coffee\widgets\lists\Map::widget(); ?>
                        <section class="section-margin">                            
                            <div class="view-more">
                                <div class="view-more__content view-more__content--addition-company">
                                    <?= $pageInfo['full_description']; ?>
                                </div>
                                <a class="view-more__link" href="#">Открыть еще</a>
                            </div>
                        </section>
                        <div class="hide-moretablet side-block--mobile side-block--small-tablet"></div>
                    </div>
                </div>
            </div>
            <div class="side-col hide-for-tablet">
                <aside>
                    <?= mr_coffee\widgets\forms\Side1::widget(); ?>
                    <?= mr_coffee\widgets\forms\Side2::widget(); ?>
                    <?= mr_coffee\widgets\lists\PopularBrands::widget(); ?>
                    <a href="/faq" class="panel-top panel link--reset mb40">
                        <h4 class="panel__caption">Задайте вопрос специалисту</h4>
                        <div class="panel-top__advice">Или найдите свой ответ в разделе FAQ</div>
                    </a>
                    <?= mr_coffee\widgets\lists\LastNews::widget(); ?>
                    <?= mr_coffee\widgets\other\Ht::widget(['view' => 'faq']); ?>                    
                    <?= mr_coffee\widgets\other\Ht::widget(['view' => 'advice']); ?>
                </aside>
            </div>
        </div>
    </div>
</main>