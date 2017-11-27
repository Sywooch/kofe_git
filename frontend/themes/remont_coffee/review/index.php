<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<div class="bl-heading" style="background-image: url(<?= $assets . $siteConfig['theme'] . '/'; ?>images/home-heading.jpg);">
    <div class="container">
        <div class="heading">Авторизованный сервисный центр </div>
        <h1 class="heading-description"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title']; ?></h1>
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