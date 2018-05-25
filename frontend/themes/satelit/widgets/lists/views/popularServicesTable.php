<?php $prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : ''; ?>
<section class="content-hidden-2<?= $col ? ' col-md-6 col-xs-12' : ''; ?> services">
    <p class="title-services-table"><?= $t1; ?></p>
    <div class="row ">
        <div class='services-table-header col-xs-11'>
            <div class="services-table-title col-md-9 col-xs-8">Услуга</div>
            <div class="services-table-price col-md-3 col-xs-3">Стоимость</div>
        </div>
        <?php foreach ($rows as $row): ?>
            <?php
            $url = '';
            if ($_GET['data']['type'] != 'model')
                $url = '/' . (!empty($prefUrl) ? $prefUrl . '/' : '') . $row['url'];
            ?>
            <div class='col-xs-11 services-table-line  '>
                <<?= empty($url) ? 'span' : 'a href="' . $url . '"'; ?> style="width:100%;">
                    <p class="services-item--title col-md-9 col-xs-9"><?= $row['title']; ?>
                        <br>
                        <span>Время выполнения: <?= $row['time']; ?></span> 
                    </p>
                    <p class="services-item--price col-md-3 col-xs-3"><span>от <?= round($row['price']); ?>&nbsp;руб</span></p>
                </<?= empty($url) ? 'span' : 'a'; ?>>
            </div>  
        <?php endforeach; ?>
    </div>
    <span class="content-toggle js-content-toggle" data-text="<?= $t2; ?>"><?= $t3; ?></span>
</section>