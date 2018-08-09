<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($page['meta_title']) ? $page['meta_title'] : \app\components\CController::$category['full_title'] . ' в ' . Yii::$app->session['region']['titleRod'];
?>
<main class="main shadow">
    <div class="row row-main banner">
        <div class="col-12 content">
            <div class="main-col content-slider content-slider_flex">
                <div class="features text-theme-snow">
                    <h1 class="features__title"><?= !empty($page['meta_h1']) ? $page['meta_h1'] : \app\components\CController::$category['full_title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
                    <div class="features__text"><?= $page['description']; ?></div>
                    <div class="row icons-banner">
                        <div class="col-l-12 col-5"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/car.svg" alt="">Бесплатная доставка кофемашины в пределах МКАД</div>
                        <div class="col-l-12 col-5"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/clock.svg" alt="">В среднем, кофемашина находится в СЦ не более 24 часов</div>
                        <div class="col-l-12 col-5"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/quote.svg" alt="">За 8 лет мы отремонтировали более 30 000 кофемашин</div>
                        <div class="col-l-12 col-5"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/calendar.svg" alt="">Выдаём официальную гарантию СЦ до 1 года</div>
                    </div>
                </div>
            </div>
            <?= mr_coffee\widgets\forms\Main::widget(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12 content">
            <div class="main-col">
                <?= mr_coffee\widgets\lists\PopularFaults::widget(); ?>
                <div class="wrapper-main">
                    <?= mr_coffee\widgets\other\Ht::widget(); ?>
                    <?= mr_coffee\widgets\other\Ht::widget(['view' => 'adv']); ?>
                    <?= mr_coffee\widgets\other\Ht::widget(['view' => 'order']); ?>
                    <?= mr_coffee\widgets\lists\LastReviews::widget(); ?>                    
                    <?= mr_coffee\widgets\lists\Map::widget(); ?>
                    <div class="hide-moretablet side-block--mobile side-block--small-tablet">
                        <?= mr_coffee\widgets\lists\PopularBrands::widget(); ?>
                    </div>
                </div>
            </div>
            <div class="side-col hide-for-tablet">
                <aside>
                    <?= mr_coffee\widgets\lists\PopularBrands::widget(); ?>
                    <?= mr_coffee\widgets\lists\LastNews::widget(); ?>
                    <section class="panel mb40">
                        <h4 class="panel__caption">Вопросы</h4>
                        <section class="article">
                            <div class="article__title text-theme-yellowgreen mt5">Виктор</div>
                            <p class="article__text">Здравствуйте!
                                выбираю морозильник 
                                из Атлант,Shivaki,Indesit,Gorenjie.
                                Что порекомендуете иcходя из Вашего опыта?
                            </p>
                        </section>
                        <section class="article hide-for-tablet">
                            <div class="article__title text-theme-yellowgreen mt5">Острянская Виктория Дмитриевна</div>
                            <p class="article__text">Возможна ли оплата работы мастера с банковской карты,или только наличные?</p>
                        </section>
                        <div class="panel__footer"><a class="button button--dark button--small" href="answer/index.html">Все вопросы</a></div>
                    </section>
                    <section class="panel mb40">
                        <h4 class="panel__caption">Полезные советы</h4>
                        <section class="article">
                            <p class="article__text">По уходу за кофемашиной. Специально для Вас от наших инженеров по ремонту кофемашин.</p>
                        </section>
                        <div class="panel__footer"><a class="button button--dark button--small" href="advices/index.html">Все советы</a></div>
                    </section>
                </aside>
            </div>
        </div>
    </div>
</main>