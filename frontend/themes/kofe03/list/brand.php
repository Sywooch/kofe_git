<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<main class="layout__content" role="main">
    <section class="office">
        <div class="office__inner">
            <div class="my-tseni">
                <div class="office__container">
                    <nav class="breadcrumbs">
                        <ul class="breadcrumbs__list">
                            <li class="breadcrumbs__item"><a class="breadcrumbs__link" itemprop="url" rel="Главная" href="/"><span itemprop="title">Главная</span></a></li>                            
                        </ul>
                        <span class="breadcrumbs__current">Ремонт кофемашин <?= $pageInfo['title']; ?></span>
                    </nav>
                    <h1 class="office__title"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
                    <article class="office__post">
                        <?php if (!empty($pageInfo['description'])): ?>
                            <?= $pageInfo['description']; ?>
                        <?php elseif ($siteConfig['id'] == 52): ?>
                            <p>Наша компания предоставляет полный комплекс ремонтных и профилактических услуг, а также дипломированного инженера по ремонту кофемашин <?= $pageInfo['title']; ?> с богатым практическим опытом. Инженеры фирмы восстанавливают вышедшие из строя кофемашины на любом этапе поломки, проводят диагностическое обследование и профилактические работы. В руках наших специалистов Ваша кофемашина получит достойное сервисное облуживание по выгодной цене и в кратчайшие сроки. Связаться с нами можно по контактному номеру или через виртуальную заявку, с прейскурантом можно ознакомиться на сайте.</p>
                        <?php else: ?>                
                            <p>  
                                Сервисный центр по ремонту кофемашин <?= $pageInfo['title']; ?> выполняет ремонтное и профилактическое обслуживание по демократичной стоимости и кратчайшим срокам. Наша компания обеспечивает клиентов сервисными услугами по стандартам мирового качества, так что Вы можете быть спокойны за свой аппарат. Мы держим в запасе детали, закупаемые у надежных поставщиков, с которыми работаем с момента основания фирмы. В центре действует отдел курьеров, которые занимаются перевозкой кофемашины по согласованности с клиентом. Контактные номера размещены на сайте – там же имеется форма для обратного звонка и заявки на курьера.                    
                            </p>
                        <?php endif; ?>
                    </article>
                </div>
                <div class="office__request">
                    <?php if (!empty($pageInfo['image'])): ?>
                        <div class="office__brands">
                            <span class="office__brand"></span>
                            <img src="<?= $assets . '/'; ?>uploads/images/<?= $pageInfo['image']; ?>" />
                        </div>
                    <?php endif; ?>
                    <?= kofe03\widgets\forms\MainPageForm::widget(); ?>
                </div>
            </div>
        </div>
    </section>
    <?= kofe03\widgets\other\Advantage::widget(); ?>
    <?= kofe03\widgets\lists\Neispravnost::widget(['type' => 2, 'is_popular' => true, 'title' => 'Цены по неиправностям']); ?>
    <?= kofe03\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => true, 'title' => 'Цены по услугам']); ?>
    <?= kofe03\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => false, 'title' => 'Цены по прочим услугам']); ?>
    <section class="office-content">
        <div class="office__inner">
            <h2 style="margin:20px 0 0 0;">Модели <?= $pageInfo['title']; ?></h2>
            <?= kofe03\widgets\lists\Models::widget(['parent' => $pageInfo['id'], 'brand' => $pageInfo]); ?>
        </div>
    </section>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>