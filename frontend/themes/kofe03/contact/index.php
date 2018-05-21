<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<main class="Lay-cont" role="main">
    <header class="layout__head">
        <div class="layout__inner">
            <nav itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__item">
                        <a class="breadcrumbs__link" itemscope itemtype="http://schema.org/Thing" itemprop="item" rel="Ремонт кофемашин" href="//kofe03.ru">
                            <span itemprop="name">Ремонт кофемашин</span>
                        </a>
                        <meta itemprop="position" content="0" />
                    </li>
                </ul>
                <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__current"><span itemscope itemtype="http://schema.org/Thing" itemprop="item"><span itemprop="name">Контакты</span></span> <meta itemprop="position" content="1" /></span>
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
                        <p>Сервисный центр "<?= ucfirst($_SERVER['HTTP_HOST']) ?>"</p>
                        <p>Телефон:&nbsp;&nbsp;<span class="cnct_ph cnct_ph-a"><a class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'telfix' : 'tel03' ?>" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a></span></p>
                        <p>Email: <a href="mailto:<?= $siteConfig['id'] == 52 ? 'info@fixkofe.ru' : 'info@kofe03.ru'; ?>"><?= $siteConfig['id'] == 52 ? ' info@fixkofe.ru' : 'info@kofe03.ru'; ?></a></p>
                        <ul>
                            <li><?= $siteConfig['id'] == 52 ? 'г. Санкт-Петербург, ул. Набережная канала Грибоедова, д.59' : 'г. Москва, ул. Студенческая, д. 35'; ?></li>
                        </ul>
						<?php if ($siteConfig['id'] != 52): ?>
							<p><b>Сервисный центр Kofe03 работает в каждом округе Москвы:</b></p>
							<p>г. Москва, улица Покрышкина, 7</p>
							<p>г. Москва, улица Орджоникидзе, 11</p>
							<p>г. Москва, Автомобильный проезд 1</p>
							<p>г. Москва, Ясный проезд, 26к4</p>
							<p>г. Москва, Графский переулок, 12</p>
							<p>г. Москва, Ленинградское шоссе, 58с7</p>
							<p>г. Москва, улица Демьяна Бедного, 15к1</p>
							<p>г. Москва, улица Генерала Дорохова, 6</p>
							<p>г. Москва, микрорайон Северное Чертаново, 1А</p>
							<p>г. Москва, улица Казакова, 3</p>
						<?php endif; ?>
                        <p>Время работы: 09:00 &ndash; 20:00</p>
                        <div class="post__maps">
                            <?php if ($siteConfig['id'] == 52): ?>
                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8bc8dddb5cd960ef78d0265dc216cc11458dce981fd0009d2212ac2608f36d78&amp;width=100%&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                            <?php else: ?>
                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1235f9cc948e1bbd3c78fd71cbbded35473c971940ef8fc0f68bf09ac79b4269&amp;width=100%&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                            <?php endif; ?>
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