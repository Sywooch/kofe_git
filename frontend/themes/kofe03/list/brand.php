    <?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<main class="layout__content" role="main">
    <aside class="poster" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?php if ($siteConfig['id'] == 52): ?>j/<?php endif; ?>poster_1.jpg);">
        <div class="poster__inner">
            <div class="poster__content">
                <div class="image for_mobi">
                    <?php if (!empty($pageInfo['image'])): ?>
                        <img src="<?= $assets . '/'; ?>uploads/images/<?= $pageInfo['image']; ?>" />
                    <?php endif; ?>
                </div>
                <h1 class="poster__title" itemprop="name"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $pageInfo['title']; ?></h1><span class="dop-span-h1"><?=' в ' . Yii::$app->session['region']['titleRod']?></span>
                <div class="clear"></div>
                <div class="poster__text for_pc" itemprop="description">
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
                    <nav class="breadcrumbs">
                        <ul class="breadcrumbs__list">
                            <li class="breadcrumbs__item"><a class="breadcrumbs__link" itemprop="url" rel="Главная" href="/"><span itemprop="title">Главная</span></a></li>                            
                        </ul>
                        <span class="breadcrumbs__current">Ремонт кофемашин <?= $pageInfo['title']; ?></span>
                    </nav>
                    <div class="con-infos">
                        <div class="left">
                            <?php if (!empty($pageInfo['description'])): ?>
                                <?= $pageInfo['description']; ?>
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
            <h2 style="margin:20px 0 0 0;">Ремонтируем модели <?= $pageInfo['title']; ?></h2>
            <?= kofe03\widgets\lists\Models::widget(['parent' => $pageInfo['id'], 'brand' => $pageInfo]); ?>
        </div>
    </section>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>