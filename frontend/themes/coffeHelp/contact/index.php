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
                        <p>Компания &laquo;Вежливый сервис 5+&raquo;</p>
                        <p>Телефон:&nbsp;<a href='tel:+74952284282'>8(495)228-42-82</a></p>
                        <ul>
                            <li>г. Москва, ул. Садовая-Черногрязская, д. 8 м. Красные ворота</li>
                            <li>г. Санкт-Петербург, ул. Салова 36б</li>
                        </ul>
                        <p>Email: <a class="post__email" href="../cdn-cgi/l/email-protection.html#51383f373e1123343c2324227f2324" target="_blank" rel="noopener noreferrer"><span class="__cf_email__" data-cfemail="7b12151d143b091e16090e0855090e">[email&#160;protected]</span></a></p>
                        <p>Время работы: 7:00 &ndash; 23:00</p>
                        <div class="post__maps">
                            <iframe src="https://api-maps.yandex.ru/frame/v1/-/CZd6mYiq" width="100%" height="400" frameborder="0"></iframe>
                        </div>
                    </div>
                </article>
            </main>
        </div>
    </div>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>