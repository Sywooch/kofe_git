<?php
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<main class="main shadow">
    <div class="row">
        <div class="col-12 content">
            <div class="main-col">
                <div class="breadcrumbs"><a href="/" class="breadcrumbs__item" title="Главная">Главная</a><span span="" class="breadcrumbs__item-current">Отзывы</span></div>
                <h1 class="mt10 mb10"><?= $pageInfo['meta_h1']; ?></h1>
                <div class="row">
                    <div class="col-12">
                        <?= $pageInfo['description']; ?>
                        <div class="mt10">
                            <a href="#scrlto" class="button left">Оставить отзыв</a>
                        </div>
                    </div>
                </div>
                <p class="mt10 text-bold text-theme-black">На сайте всего <?= count($rows); ?> отзывов наших постоянных клиентов</p>
                <div class="bordered-top">
                    <?php foreach ($rows as $row): ?>
                        <div class="bordered-bottom">                            
                            <div class="text-bold mb5 text-theme-yellowgreen"><?= $row['username']; ?></div>
                            <p class="mt0"><?= $row['message']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="pagination mt25">
                    <?=
                    \yii\widgets\LinkPager::widget([
                        'pagination' => $pagination,
                    ]);
                    ?>
                </div>
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