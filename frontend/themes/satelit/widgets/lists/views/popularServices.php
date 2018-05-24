<?php $prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : ''; ?>
<section class="services">
    <p class="section-title">Популярные неисправности кофемашин:</p>
    <div class="row">
        <?php foreach ($rows as $row): ?>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="services-item">
                    <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>" class="services-item--thumb" style="background-image: url(/uploads/images/services/<?= $row['image']; ?>);"></a>
                    <p class="services-item--title"><a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>"><?= $row['title']; ?></a></p>
                    <p class="services-item--price">от <span><?= round($row['price']); ?>&nbsp;руб</span></p>
                    <a href="#" class="button button--yellow">Вызвать мастера</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>