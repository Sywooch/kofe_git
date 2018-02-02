<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="reviews">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <h2 class="title title__2">Отзывы клиентов</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-24">
                <div class="reviews-list" id="reviews-slider">
                    <?php foreach ($rows as $row): ?>
                        <div class="review">
                            <div class="review-wrap">
                                <div class="review_pic">
                                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>reviews/<?= $row['image']; ?>" alt="<?= $row['username']; ?>">
                                </div>
                                <div class="review_name"><?= $row['username']; ?></div>
                                <div class="review_claim">
                                    <?= $row['message']; ?>                                    
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>                    
                </div>
            </div>
        </div>
    </div>
</section>