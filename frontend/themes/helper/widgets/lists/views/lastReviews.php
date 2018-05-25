<?php 
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="background--grey margin--bottom60">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6 col-xs-12">
                <section class="reviews">
                    <p class="section-title">Отзывы</p>
                    <div id="slider-reviews" class="owl-carousel owl-theme">
                        <?php foreach ($rows as $row): ?>
                            <div class="reviews-item">
                                <div class="reviews-item--shade">
                                    <div class="reviews-item--title">
                                        <img src="/<?= $siteConfig['theme']; ?>/images/icons/user-empty.png" alt="Валентин" class="reviews-item--image" width="55" height="55">
                                        <span class="reviews-item--author"><?= $row['username']; ?></span>                                        
                                    </div>
                                    <div class="reviews-item--content">
                                        <p><span><?= $row['message']; ?></span></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <p class="reviews-item--all"><a href="/reviews">Все отзывы</a></p>
                </section>
            </div>
            <div class="col-md-5 col-sm-6 col-xs-12">
                <?= helper\widgets\forms\Form2::widget(); ?>
            </div>
        </div>
    </div>
    <i class="background-pattern background-pattern--left background-center background-center--left js-background-pattern"></i>
    <i class="background-pattern background-pattern--right background-center background-center--right js-background-pattern"></i>
</div>