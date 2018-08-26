<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
$breadcrumbs = [
    $pageInfo['title'],
];
?>
<main class="main shadow">
    <div class="row">
        <div class="col-12 content">
            <div class="main-col">
                <div class="breadcrumbs">
                    <?= mr_coffee\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
                </div>
                <h1 class="mt10 mb10"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] ?></h1>
                <?= $pageInfo['description']; ?>
            </div>
            <div class="side-col hide-for-tablet">
                <aside>
                    <?= mr_coffee\widgets\forms\Side1::widget(); ?>
                    <?= mr_coffee\widgets\forms\Side2::widget(); ?>
                    <?= mr_coffee\widgets\lists\PopularBrands::widget(); ?>
                    <a href="/faq" class="panel-top panel link--reset mb40">
                        <h4 class="panel__caption">Задайте вопрос специалисту</h4>
                        <div class="panel-top__advice">Или найдите свой ответ в разделе FAQ</div>
                    </a>
                    <?= mr_coffee\widgets\lists\LastNews::widget(); ?>
                    <?= mr_coffee\widgets\other\Ht::widget(['view' => 'faq']); ?>                    
                    <?= mr_coffee\widgets\other\Ht::widget(['view' => 'advice']); ?>
                </aside>
            </div>
        </div>
    </div>
</main>