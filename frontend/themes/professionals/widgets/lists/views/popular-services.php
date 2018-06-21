<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$prefUrl = '';
$url = Yii::$app->request->pathInfo;
$url = explode('/', $url);
array_pop($url);
if (!empty($url))
    $prefUrl = implode('/', $url);
?>
<?php if($b == 'Bosch'): ?>sdfsdf<?php endif; ?>
<section class="popular-services hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <div class="title title__2 light"><?= $title; ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-24">
                <div class="services" id="services-slider">
                    <?php foreach ($rows as $row): ?>
                        <?php
                        $fileId = Yii::getAlias('@frontend') . '/web/' . $siteConfig['theme'] . '/images/services/' . $siteConfig['id'] . '/' . $row['image'];
                        if (is_file($fileId)) {
                            $src = $assets . $siteConfig['theme'] . '/images/services/' . $siteConfig['id'] . '/' . $row['image'];
                        } else
                            $src = $assets . $siteConfig['theme'] . '/images/services/' . $row['image'];
                        ?>
                        <div class="services_item">
                            <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>">
                                <div class="services_pic">
                                    <img src="<?= $src; ?>" alt="<?= $row['title']; ?>">
                                </div>
                                <p class="services_title">
                                    <?= $row['title']; ?>
                                </p>
                                <div class="services_price"><span class="price-nowrap"><span><?= number_format($row['price'], 0, ' ', ' '); ?></span>&nbsp;руб.</span></div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="row visible-xs visible-sm">
            <div class="col-xs-24 text-center">
                <a href="/uslugi" class="all-services">Все услуги</a>
            </div>
        </div>
    </div>
</section>