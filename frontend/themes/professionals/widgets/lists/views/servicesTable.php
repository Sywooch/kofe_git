<?php
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="row">
    <div class="col-xs-24">
        <h2 class="title title__2 light"><?= !empty($title) ? $title : 'Цены по услугам' ?></h2>
    </div>
</div>
<table class="table table__solution">
    <tbody>
        <?php $n = 0; ?>
        <?php foreach ($rows as $key => $row): ?>
            <?php
            $n++;
            if ($n == 3 || $n == 4) {
                if($n == 4)
                    $n = 0;
                $c = ' class="ikkitasi"';
            } else {
                $c = '';
            }
            ?>
            <tr<?= $c; ?>>
                <td>
                    <?php if ($row['is_popular'] == 1 && $url): ?>
                        <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>"><?= $row['title'] . ' ' . $b; ?></a>
                    <?php else: ?>
                        <?= $row['title'] . ' ' . $b; ?>
                    <?php endif; ?>
                </td>
                <td><span class="price-nowrap"><span><?= number_format($row['price'], 0, ' ', ' '); ?></span>&nbsp;руб.</span></td>
                <td><a class="open" href="#">Заказать</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>