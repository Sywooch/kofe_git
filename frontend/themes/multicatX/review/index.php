<?php
$breadcrumbs = [
    $pageInfo['title'],
];
$lastId = 0;
$this->title = str_replace('#brand_en#', \app\components\CController::$monoBrand['title'], $pageInfo['meta_title']);
?>
<div class="clear"></div>
<div id="content" class="colorborder">
    <div class="inner_container">
        <?= multicatX\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    </div>    
    <div class="main_container grey_container">
        <div class="inner_container" style="overflow: hidden;">
            <h1 class="category_h1" style="text-align: left;">Отзывы</h1>
            <div class="reviews">
                <?php foreach ($rows as $row): ?>
                    <div class="item">
                        <div class="info">
                            <div class="name"><?= $row['username']; ?></div>
                            <div class="clear"></div>
                            <div class="n-rating-stars" data-bem="{}" data-rate="<?= $row['rating']; ?>">
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                            </div>
                            <p><?= $row['message']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>   
            </div>
        </div>
    </div>
</div>
<?= multicatX\widgets\forms\FooterForm::widget(); ?>