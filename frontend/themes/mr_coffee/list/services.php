<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
$breadcrumbs = [
    $pageInfo['title'],
];
?>
<main class="main shadow">
    <div class="row">
        <div class="col-12 content">
            <div class="main-col">
                <div class="breadcrumbs">
                    <?= mr_coffee\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
                </div>
                <h1 class="mt10 mb10"><?= !empty($model['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title']; ?></h1>
                <div class="row works">
                    <div class="col-12">
                        <section class="section make-order">
                            <div class="row">
                                <div class="col-12">
                                    <div class="view-more">
                                        <div class="view-more__content view-more__content--make-order">
                                            <?= $pageInfo['description']; ?>
                                        </div>
                                        <a class="view-more__link" href="#">Открыть еще</a>
                                    </div>
                                    <a class="button button--send js-popup" href="#" data-container="#popup" data-content="../../include/popup9c81.html?ref=www.mr-master.ru%2Fservice%2Fremont-stiralnih-mashin%2F">Заказать ремонт</a>
                                </div>
                            </div>
                        </section>
                        <div class="hide-moretablet side-block--mobile side-block--small-tablet mb35"></div>
                        <?= mr_coffee\widgets\lists\Neispravnost::widget(['is_popular' => true, 'type' => 2]); ?>
                        <?= mr_coffee\widgets\lists\Neispravnost::widget(['is_popular' => true, 'type' => 1]); ?>
                        <?= mr_coffee\widgets\lists\Neispravnost::widget(['is_popular' => false, 'type' => 1]); ?>
                        <?= mr_coffee\widgets\other\Ht::widget(['view' => 'adv']); ?>
                        <?= mr_coffee\widgets\other\Ht::widget(['view' => 'order']); ?>
                        <?= mr_coffee\widgets\lists\LastReviews::widget(); ?>                    
                        <?= mr_coffee\widgets\lists\Map::widget(); ?>                        
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