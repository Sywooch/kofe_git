<?php
$breadcrumbs = [
    $pageInfo['title'],
];
$lastId = 0;
$this->title = str_replace('#brand_en#', \app\components\CController::$monoBrand['title'], $pageInfo['meta_title']);
?>
<div class="container">
    <?= satelit\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    <section class="page page-reviews">
        <h1 class="section-title"><?= $pageInfo['meta_h1'] ?></h1>
        <div class="row">            
            <?php foreach ($rows as $row): ?>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="review-item" data-review>
                        <div class="review-item--title">
                            <img src="https://assets3.insales.ru/assets/1/643/942723/1522290975/user-empty.png" alt="Валентин" class="review-item--image review-item--image-empty" width="60" height="60">
                            <span class="review-item--author"><?= $row['username']; ?></span>                            
                        </div>
                        <div class="review-item--overflow">
                            <div class="review-item--content">
                                <p><span><?= $row['message']; ?></span></p>
                            </div>
                        </div>                        
                    </div>
                </div>
            <?php endforeach; ?>   
        </div>
    </section>    
    <?= satelit\widgets\other\Ht::widget(); ?>
</div>