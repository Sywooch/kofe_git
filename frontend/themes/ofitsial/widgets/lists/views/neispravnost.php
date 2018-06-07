<?php
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
$siteConfig = app\components\CController::getSiteConfig();
$c = count($rows);
?>
<div class="pricesmain">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="pm_heding linecenter">Что с вашей кофемашиной?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel pmowl-carousel">
                    <?php foreach ($rows as $key => $row): ?>
                        <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>">
                            <div class="img">
                                <img alt="" src="/<?= $siteConfig['theme']; ?>/img/services/<?= $row['image']; ?>.png" class="img-responsive">
                            </div>
                            <span><?= $row['title']; ?></span>
                        </a>                    
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>