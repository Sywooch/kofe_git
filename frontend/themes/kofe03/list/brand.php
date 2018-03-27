<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<main class="Lay-cont" role="main">
    <aside class="poseter" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?= $siteConfig['id']; ?>/poster_1.jpg);">
        <div class="Poseter-in">
            <div class="Poseter-cont">
                <div class="image f_mob">
                    <?php if (!empty($pageInfo['image'])): ?>
                        <img src="<?= $assets . '/'; ?>uploads/images/<?= $pageInfo['image']; ?>" />
                    <?php endif; ?>
                </div>
                <h1 class="Poseter-ilova gorad-text" itemprop="name"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : app\components\CController::$category['full_title'] . ' ' . $pageInfo['title']; ?></h1>
                <div class="clear"></div>
                <div class="tseni-na-uslugi">
                    Стоимость услуги: <span>от 595 ₽</span>
                </div>
                <div class="Poseter-texete for_pc" itemprop="description">
                    <p>Почему выбирают нас?</p>

                    <ul>
                        <li>Диагностика - <span class="minus">1500р</span> 0р</li>
                        <li>Забор и доставка кофемашины - <span class="minus">1000р</span> 0р</li>
                        <li>На время ремонта предоставляем кофемашину - БЕСПЛАТНО!</li>
                        <li>Гарантия 24 месяца* (в зависимости от типа ремонта)</li>
                        <li>Срочный ремонт за 24 часа</li>
                    </ul>

                    <p>Удобное расположение сервисного центра и бесплатная парковка!</p>
                </div>
            </div>
            <?= kofe03\widgets\forms\MainPageForm::widget(); ?>
            <div class="clear"></div>
        </div>
    </aside>
    <section class="office my-bg-logos">
        <div class="bg-brend" style="<?php if (!empty($pageInfo['image'])): ?>background-image: url(<?= $assets . '/'; ?>uploads/images/<?= $pageInfo['image']; ?>); <?php endif; ?>"></div>
        <div class="office__inner">
            <article class="office__post">
                <div class="all-ds">
                    <nav itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs">
                        <ul class="breadcrumbs__list">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__item">
                                <a class="breadcrumbs__link" itemscope itemtype="http://schema.org/Thing" itemprop="item" href="/">
                                    <span itemprop="name">Ремонт кофемашин</span>
                                </a>
                                <meta itemprop="position" content="0" />
                            </li>                            
                        </ul>
                        <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__current"><span itemscope itemtype="http://schema.org/Thing" itemprop="item"><span itemprop="name">Ремонт кофемашин <?= $pageInfo['title']; ?></span></span> <meta itemprop="position" content="1" /></span>
                    </nav>
                    <div class="con-infos">
                        <div class="left">
                            <?php if (!empty($pageInfo['description'])): ?>
                                <?= str_replace('#brand_en#', $pageInfo['title'], $pageInfo['description']); ?>
                            <?php elseif ($siteConfig['id'] == 52): ?>
                                <p>Наша компания предоставляет полный комплекс ремонтных и профилактических услуг, а также дипломированного инженера по ремонту кофемашин <?= $pageInfo['title']; ?> с богатым практическим опытом. Инженеры фирмы восстанавливают вышедшие из строя кофемашины на любом этапе поломки, проводят диагностическое обследование и профилактические работы. В руках наших специалистов Ваша кофемашина получит достойное сервисное облуживание по выгодной цене и в кратчайшие сроки. Связаться с нами можно по контактному номеру или через виртуальную заявку, с прейскурантом можно ознакомиться на сайте.</p>
                            <?php else: ?>                
                                <p>Сервисный центр по ремонту кофемашин 
                                    <?= $pageInfo['title']; ?> 
                                    выполняет ремонтное и профилактическое обслуживание по 
                                    демократичной стоимости и кратчайшим срокам. Наша компания 
                                    обеспечивает клиентов сервисными услугами по стандартам 
                                    мирового качества, так что Вы можете быть спокойны за свой 
                                    аппарат. Мы держим в запасе детали, закупаемые у надежных 
                                    поставщиков, с которыми работаем с момента основания фирмы. 
                                    В центре действует отдел курьеров, которые занимаются перевозкой
                                    кофемашины по согласованности с клиентом. Контактные номера 
                                    размещены на сайте – там же имеется форма для обратного звонка и заявки на курьера.                    
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="right for_pc">
                            <?php if (!empty($pageInfo['image'])): ?>
                                <img src="<?= $assets . '/'; ?>uploads/images/<?= $pageInfo['image']; ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>


    <?= kofe03\widgets\other\Advantage::widget(); ?>
    <?= kofe03\widgets\lists\Neispravnost::widget(['type' => 2, 'is_popular' => true, 'title' => 'Цены по неисправностям']); ?>
    <?= kofe03\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => true, 'title' => 'Цены по услугам']); ?>
    <?= kofe03\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => false, 'title' => 'Цены по прочим услугам', 'dopClass' => 'other-table']); ?>
    <section class="office-content">
        <div class="office__inner">
            <h2 style="margin:20px 0 0 0;">Профессиональный ремонт моделей <?= $pageInfo['title']; ?></h2>
            <?= kofe03\widgets\lists\Models::widget(['parent' => $pageInfo['id'], 'brand' => $pageInfo]); ?>

            <div class="ommabob__harakati">
                <a class="reviews__all show-model" href="#">Показать остальные модели</a>
            </div>
        </div>
    </section>
    <section class="office-content">
        <div class="office__inner">
            <div class="clear"></div>
            <?= $pageInfo['full_description']; ?>
        </div>
    </section>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>