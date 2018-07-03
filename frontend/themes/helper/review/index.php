<?php
$siteConfig = app\components\CController::getSiteConfig();
$breadcrumbs = [
    $pageInfo['title'],
];
$lastId = 0;
$this->title = str_replace('#brand_en#', \app\components\CController::$monoBrand['title'], $pageInfo['meta_title']);
?>
<div class="container">
    <?= helper\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    <section class="page page-reviews">
        <h1 class="section-title"><?= $pageInfo['meta_h1'] ?></h1>
        <div class="row">            
            <?php foreach ($rows as $row): ?>
                <?php if ($row['email'] != $siteConfig['sitePrefix']) continue; ?>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="review-item" data-review>
                        <div class="review-item--title">
                            <img src="/<?= $siteConfig['theme']; ?>/images/user-empty.png" alt="Валентин" class="review-item--image review-item--image-empty" width="60" height="60">
                            <span class="review-item--author"><?= $row['username']; ?></span>                            
                        </div>
                        <div class="review-item--overflow">
                            <div class="review-item--content">
                                <p><span><?= $row['message']; ?></span></p>
                            </div>
                        </div>   
                        <span class="review-item--toggle hidden" data-titles="Показать полностью,Скрыть отзыв">Показать полностью</span>
                    </div>
                </div>
            <?php endforeach; ?>   
        </div>
    </section>    
    <?= helper\widgets\other\Ht::widget(); ?>
</div>