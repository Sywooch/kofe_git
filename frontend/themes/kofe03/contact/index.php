<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<main class="layout__content" role="main">
    <header class="layout__head">
        <div class="layout__inner">
            <nav class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" itemprop="url" rel="Главная" href="/"><span itemprop="title">Главная</span></a></li>
                </ul>
                <span class="breadcrumbs__current">Контакты</span>
            </nav>
        </div>
    </header>
    <div class="content">
        <div class="content__inner">
            <?= kofe03\widgets\menu\LeftMenu::widget(['curUrl' => $pageInfo['url']]); ?>
            <main class="content__main" role="main">
                <article class="post" style="width: 100%;">
                    <header class="post__header">
                        <h1>Контакты</h1>
                    </header>
                    <div class="post__content">
                        <p>Сервисный центр "Kofe03.ru"</p>
                        <p>Телефон:&nbsp;<a href='tel:+74951350003'>8 (495) 135-00-03</a></p>
                        <ul>
                            <li>г. Москва, Большой Кисловский пер., 5 - 7С2</li>
                        </ul>
                        <p>Время работы: 09:00 &ndash; 20:00</p>
                        <div class="post__maps">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A82f1d81ac409732fa4a65cee20c92773a717ed2644039a9e4b2c1918268e4e73&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                        <?= $pageInfo['description']; ?>
                    </div>
                </article>
            </main>
        </div>
    </div>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>