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
                <article class="post">
                    <header class="post__header">
                        <h1>Контакты</h1>
                    </header>
                    <div class="post__content">
                        <p>Сервисный центр "Kofe03.ru"</p>
                        <p>Телефон:&nbsp;<a href='tel:+74951350003'>8 (495) 135-00-03</a></p>
                        <ul>
                            <li>г. Москва, пл. Победы, д. 1А </li>
                        </ul>
                        <p>Время работы: 08:00 &ndash; 22:00</p>
                        <div class="post__maps">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A30af65369578d250a40a2d07c009ccc057a8edb2b2fd99fe638d341eca27f3cd&amp;width=662&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                    </div>
                </article>
            </main>
        </div>
    </div>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>