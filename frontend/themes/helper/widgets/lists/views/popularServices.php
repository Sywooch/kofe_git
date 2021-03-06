<?php 
$siteConfig = app\components\CController::getSiteConfig();
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
?>
<section class="services">
    <p class="section-title">Популярные неисправности кофемашин:</p>
    <div class="row">
        <?php foreach ($rows as $row): ?>
        <?php 
        $url = '#';
        if($_GET['data']['type'] != 'model')
            $url = '/' . (!empty($prefUrl) ? $prefUrl . '/' : '') . $row['url'];
        ?>
            <div class="col-md-3-20 col-sm-3-20 col-xs-6">
                <div class="services-item">
                    <a href="<?= $url; ?>" class="services-item--thumb" style="background-image: url(/<?= $siteConfig['theme']; ?>/images/services/<?= $row['image']; ?>.png);"></a>
                    <p class="services-item--title"><a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>"><?= $row['title']; ?></a></p>
                    <p class="services-item--price">от <span><?= round($row['price']); ?>&nbsp;руб</span></p>
                    <span class="button button--yellow popup">Вызвать мастера</span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>