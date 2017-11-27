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

                        </ul>                        
                        <span class="breadcrumbs__current"><?= $pageInfo['title']; ?></span>
                    </nav>
                    <h1 class="office__title"><?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?></h1>
                    <article class="office__post">
                        <?= $seoText; ?>
                    </article>
                </div>
                <div class="office__request">
                    <div class="office__brands">
                        Стоимость ремонта <span><?= number_format($pageInfo['price'], 0, ' ', ' '); ?> р</span>
                    </div>
                    <?= kofe03\widgets\forms\MainPageForm::widget(); ?>
                </div>
            </div>
        </div>
    </section>
    <?= kofe03\widgets\other\Advantage::widget(); ?>
    <?= kofe03\widgets\lists\PopularServices::widget(); ?>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>