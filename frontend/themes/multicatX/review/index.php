<?php
$breadcrumbs = [
    $pageInfo['title'],
];
$lastId = 0;
$this->title = $pageInfo['meta_title'];
?>
<div class="clear"></div>
<div id="content" class="colorborder">
    <div class="inner_container">
        <?= multicatX\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    </div>    
    <div class="main_container grey_container">
        <div class="inner_container" style="overflow: hidden;">
            <div class="product-category-left-info">
                <h1 class="category_h1" style="text-align: left;">Отзывы</h1>
                <?php foreach ($rows as $row): ?>
                    <div class="item">
                        <div class="stars">
                            <span><?= $row['rating']; ?></span>
                            <div class="n-rating-stars" data-bem="{}" data-rate="<?= $row['rating']; ?>">
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                                <i class="n-rating-stars__item"></i>
                            </div>
                        </div>
                        <div class="info">
                            <div class="name"><?= $row['username']; ?></div>
                            <p><?= $row['message']; ?></p>
                        </div>
                        <div class="clear"></div>
                    </div>
                <?php endforeach; ?>       
            </div>            
        </div>
    </div>
</div>
<?= multicatX\widgets\forms\FooterForm::widget(); ?>