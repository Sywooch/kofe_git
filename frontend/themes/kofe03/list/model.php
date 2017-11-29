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
                            <li class="breadcrumbs__item"><a class="breadcrumbs__link" itemprop="url" rel="Ремонт кофемашин <?= $brand['title']; ?>" href="/<?= $brand['url']; ?>">Ремонт кофемашин <?= $brand['title']; ?></a></li>
                        </ul>                        
                        <span class="breadcrumbs__current">Ремонт кофемашин <?= $brand['title'] . ' ' . $pageInfo['title']; ?></span>
                    </nav>
                    <h1 class="office__title"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : 'Ремонт кофемашин ' . $brand['title'] . ' ' . $pageInfo['title'] . ' в ' . Yii::$app->session['region']['titleRod']; ?></h1>
                    <article class="office__post">
                        <?php if (!empty($pageInfo['description'])): ?>
                            <?= $pageInfo['description']; ?>
                        <?php else: ?>                
                            <p>  
                                Компания реализует ремонт кофемашин <?= $brand['title'] . ' ' . $pageInfo['title']; ?> на протяжении длительного периода, поэтому может восстановить даже тот аппарат, от которого отказались другие мастера. Мы используем качественные комплектующие, которые нам поставляют авторизованные компании-дилеры. Богатый опыт работы в тандеме с современным оборудованием мастерских позволяет проводить все работы наиболее эффективно. Высокая скорость работы объясняется тем, что у нас в запасе есть все необходимые детали кофемашины для замены неисправных компонентов. Просто позвоните нам, и мы с удовольствием Вам поможем!
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
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>