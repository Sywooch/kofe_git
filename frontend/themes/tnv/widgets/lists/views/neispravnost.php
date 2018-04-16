<?php
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
?>
<div class="my-price">
    <div class="row">
        <div class="col-xs-8 col-lg-9">
            <div class="main-calc--stitle"><?= !empty($title) ? $title : 'Цены по услугам' ?></div>
        </div>
    </div>
    <div class="row">
        <?php foreach ($rows as $key => $row): ?>
            <div class="col-xs-12 col-lg-6">
                <div class="package-item mini">
                    <div class="package-item--head clearfix">
                        <div class="package-item--info float--left">
                            <div class="package-item--title">
                                <?php if ($row['is_popular'] == 1 && $url): ?>
                                    <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>"><?= $row['title']; ?></a>
                                <?php else: ?>
                                    <?= $row['title']; ?>
                                <?php endif; ?> 
                            </div>
                        </div>
                        <div class="package-item--counter counter float--right mini">
                            <div class="counter--digits">
                                <span>от <?= number_format($row['price'], 0, ' ', ' '); ?></span>
                                <div class="counter--label">руб</div>
                            </div>
                            <div class="btnmy" data-toggle="modal" data-target="#online-zayavkamy">Заказать</div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>