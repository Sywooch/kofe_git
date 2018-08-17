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
                    <span class="breadcrumbs__item-current">Замена микровыключателей</span>
                </div>
                <h1 class="mt10 mb10"><?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?></h1>
                <div class="row works">
                    <div class="col-12">
                        <section class="section-margin">
                            <div class="image-and-discount">
                                <div class="carwashes-image" style="background-image: url(/<?= $siteConfig['theme']; ?>/img/<?= $pageInfo['image']; ?>.jpg);"></div>
                                <div class="discount-info">
                                    <div class="discount-info__text-and-btn">
                                        <div class="discount-info__text text-bold">Скидка при оформлении онлайн-заявки</div>
                                        <a class="button js-popup" href="#" data-container="#popup" data-content="">Оформить заявку</a>
                                    </div>
                                    <div class="discount-value text-theme-blood">15%</div>
                                </div>
                            </div>
                            <div class="view-more">
                                <div class="view-more__content view-more__content--addition-company">
                                    <?= str_replace(['#brand_en#', '#model_en#'], $page['title'], $seoText); ?>
                                </div>
                                <a class="view-more__link" href="#">Открыть еще</a>
                            </div>
                        </section>
                        <?= mr_coffee\widgets\other\Ht::widget(['view' => 'adv']); ?>
                        <?= mr_coffee\widgets\other\Ht::widget(['view' => 'order']); ?>
                        <?= mr_coffee\widgets\lists\LastReviews::widget(); ?>                    
                        <?= mr_coffee\widgets\lists\Map::widget(); ?>
                        <section class="section-margin">
                            <h3>Ремонт стиральных машин на дому</h3>
                            <div class="view-more">
                                <div class="view-more__content view-more__content--addition-company">
                                    <?= $pageInfo['text']; ?>
                                </div>
                                <a class="view-more__link" href="#">Открыть еще</a>
                            </div>
                        </section>
                        <div class="hide-moretablet side-block--mobile side-block--small-tablet">
                        </div>
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