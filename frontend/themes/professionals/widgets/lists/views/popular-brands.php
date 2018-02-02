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
            <div class="col-lg-12 col-md-10 hidden-sm hidden-xs">
                <div class="coffeemachine-brand">
                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>media/coffeemachine-2_DKcAIK9.png" alt="">
                </div>
            </div>
            <div class="col-lg-12 col-md-14 col-sm-24 clearfix">
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
                    <a href="/brands">
                        <div class="brand-list_item">
                            <div class="border-coner left"></div>
                            <span>Полный<br>список</span>
                            <div class="border-coner right"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>