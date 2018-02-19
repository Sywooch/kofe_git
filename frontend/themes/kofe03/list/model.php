<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = $title;
?>
<main class="layout__content" role="main">
    <aside class="poster" style="background-image: url(/<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?= $siteConfig['id']; ?>/poster_1.jpg);">
        <div class="poster__inner">
            <div class="poster__content">
                <h1 class="poster__title gorad-text" itemprop="name"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : app\components\CController::$category['full_title'] . ' ' . $brand['title'] . ' ' . $pageInfo['title']; ?></h1>
                <div class="clear"></div>
                <div class="image model_img for_mobi">
                    <?php if (!empty($pageInfo['image'])): ?>
                        <?php
                        $path = Yii::getAlias('@frontend') . '/web/uploads/images/';
                        $file = $path . $pageInfo['image'];
                        $w = 174;
                        $h = 230;
                        if (!is_file($path . 'thumbs/' . $w . 'x' . $h . $pageInfo['image'])) {
                            $image = Yii::$app->image->load($file);
                            $image->resize($w, $h)->background('#fff', 100)->save($path . 'thumbs/' . $w . 'x' . $h . $pageInfo['image'], 60);
                        }
                        ?>
                        <img src="<?= $assets . '/'; ?>uploads/images/thumbs/<?= $w . 'x' . $h . $pageInfo['image']; ?>" />
                    <?php endif; ?>
                </div>
                <div class="tseni-na-uslugi">
                    Стоимость услуги: <span>от 578 ₽</span>
                </div>
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
        <div class="bg-brend" style="<?php if (!empty($brand['image'])): ?>background-image: url(<?= $assets . '/'; ?>uploads/images/<?= $brand['image']; ?>); <?php endif; ?>"></div>
        <div class="office__inner">
            <article class="office__post">
                <div class="all-ds">
                    <nav itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs">
                        <ul class="breadcrumbs__list">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__item">
                                <a class="breadcrumbs__link" itemprop="url" href="/"><span>Ремонт кофемашин</span></a>
                                <meta itemprop="position" content="0" />
                            </li>         
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="/<?= $brand['url']; ?>">Ремонт кофемашин <?= $brand['title']; ?></a>
                                <meta itemprop="position" content="1" />
                            </li>
                        </ul>                        
                        <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs__current">Ремонт кофемашин <?= $brand['title'] . ' ' . $pageInfo['title']; ?> <meta itemprop="position" content="2" /></span>
                    </nav>
                    <div class="con-infos">
                        <div class="left">
                            <?php if (!empty($pageInfo['description'])): ?>
                                <?= str_replace('#model_en#', $brand['title'] . ' ' . $pageInfo['title'], $pageInfo['description']); ?>
                            <?php elseif ($siteConfig['id'] == 52): ?>
                                <p>Сервисное предприятие по ремонту кофемашин <?= $brand['title'] . ' ' . $pageInfo['title']; ?> предлагает Вам комплекс сервисных услуг по низкой стоимости и с гарантированным качеством. Наши мастерские оборудованы по последнему слову техники, поэтому диагностика будет проведена максимально эффективно, а восстановительные работы пройдут за кратчайшие сроки. Компания имеет собственный склад с комплектующими, которые поставляют проверенные годами дилеры. На запчасти и работу специалиста дается гарантийный документ, действительный от нескольких месяцев до одного года. Мы отремонтируем Вашу кофемашину на выгодных для Вас условиях!</p>
                            <?php else: ?>                
                                <p>  
                                    Компания реализует ремонт <?= app\components\CController::$category['3_title']; ?> <?= $brand['title'] . ' ' . $pageInfo['title']; ?> на протяжении длительного периода, поэтому может восстановить даже тот аппарат, от которого отказались другие мастера. Мы используем качественные комплектующие, которые нам поставляют авторизованные компании-дилеры. Богатый опыт работы в тандеме с современным оборудованием мастерских позволяет проводить все работы наиболее эффективно. Высокая скорость работы объясняется тем, что у нас в запасе есть все необходимые детали кофемашины для замены неисправных компонентов. Просто позвоните нам, и мы с удовольствием Вам поможем!
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="right for_pc">
                            <?php if (!empty($pageInfo['image'])): ?>
                                <img src="<?= $assets . '/'; ?>uploads/images/thumbs/<?= $w . 'x' . $h . $pageInfo['image']; ?>" />
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
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\OtherModels::widget(['model' => $pageInfo]); ?>
</main>