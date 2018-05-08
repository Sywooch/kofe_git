<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<div class="offer" style="background: url('<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-hero.jpg') 100% 100% no-repeat; background-size: cover;">
    <div class="container">
        <div class="for-lr">
            <div class="ofer-left">
                <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title']; ?></h1>
                <br>
                <div class="ofer-button">
                    <p class="first-text">Закажите ремонт СЕЙЧАС и получите <br>в подарок пачку зернового кофе!</p>
                    <?= remont_coffee\widgets\forms\MainPageForm::widget(); ?>
                </div>
            </div>
            <div class="ofer-right">
                <p class="first-text"><span>Дадим скидку</span> <br>в размере <span>30%</span> Первым <span>30</span> клиентам в день</p>
                <p class="second-text">Осталось <br><span id="services-count">0</span> <br>заказов со <br>скидкой!</p>
            </div>
        </div>
        <?php if ($siteConfig['id'] == 53): ?>
            <img class="banner-images" src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/j/kofe.png">
        <?php endif; ?>
    </div>
</div>
<?= remont_coffee\widgets\other\Advantage::widget(); ?>

<div class="main container">
    <div class="right">
        <?= remont_coffee\widgets\forms\SidebarForm::widget(); ?>
    </div>
    <div class="left">
        <div class="bl-text">
            <div class="heading">
                <h2>Отзывы </h2>
            </div>
        </div>        
        <div id="my-reviews" class="frame">
            <?php foreach ($rows as $row): ?>
            <div class="item">
                <p class="h3"><?= $row['username']; ?></p>
                <div class="n-rating-stars" data-bem="{}" data-rate="<?= $row['rating']; ?>">
                    <i class="n-rating-stars__item"></i>
                    <i class="n-rating-stars__item"></i>
                    <i class="n-rating-stars__item"></i>
                    <i class="n-rating-stars__item"></i>
                    <i class="n-rating-stars__item"></i>
                </div>
                <?= $row['message']; ?>
            </div>
             <?php endforeach; ?>
        </div>
        
    </div>   
    <?=
        \yii\widgets\LinkPager::widget([
            'pagination' => $pagination,
        ]);
        ?>
</div>