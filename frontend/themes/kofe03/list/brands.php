<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $pageInfo['meta_title'];
?>
<main class="layout__content" role="main">
    <header class="layout__head">
        <div class="layout__inner">
            <nav class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" itemprop="url" rel="Главная" href="#"><span itemprop="title">Главная</span></a></li>
                </ul>
                <span class="breadcrumbs__current">Бренды</span>
            </nav>
        </div>
    </header>
    <div class="content">
        <div class="content__inner">
            <?= kofe03\widgets\menu\LeftMenu::widget(['curUrl' => $pageInfo['url']]); ?>
            <main class="content__main office-content" role="main">
                <article class="post width100">
                    <header class="post__header">
                        <h1>Бренды</h1>
                    </header>
                    <div class="post__content">
                        <div class="search-brends">
                            <div class="left"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/search.svg" alt=""></div>
                            <div class="right">
                                <?=
                                yii\jui\AutoComplete::widget([
                                    'name' => 'models',
                                    'clientOptions' => [
                                        'source' => $searches,
                                        'select' => new yii\web\JsExpression('function(event, ui){window.location.href = "/" + ui.item.url;return false;}'),
                                    ],
                                    'options' => ['placeholder' => 'Поиск брендов..', 'class' => 'form__input'],
                                        ]
                                );
                                ?>
                            </div>
                        </div>
                        <?= kofe03\widgets\lists\PopularBrands::widget(['view' => 'popular-brands-list']); ?>
                        <?= kofe03\widgets\lists\PopularBrands::widget(['view' => 'popular-brands-list', 'sort' => 'other']); ?>
                    </div>
                </article>
            </main>
        </div>
    </div>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>