<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="brands">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <h2 class="title title__2">Бренды которые мы чиним</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-10 hidden-sm hidden-xs">
                <div class="coffeemachine-brand">
                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/coffeemachine-2_DKcAIK9.png" alt="">
                </div>
            </div>
            <div class="col-lg-15 col-md-14 col-sm-24 clearfix" style="text-align: center;">
                <div class="brand-list">
                    <?php foreach ($rows as $row): ?>
                        <a href="/<?= $row['url']; ?>">
                            <div class="brand-list_item">
                                <div class="border-coner left"></div>
                                <img style="    width: 100px;" src="/uploads/images/<?= $row['image']; ?>" alt="">
                                <div class="border-coner right"></div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                    <a href="/brands">Полный<br>список</a>
                </div>
                <a class="mybtn" href="/brands">Все бренды</a>
            </div>
        </div>
    </div>
</section>