<?php
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
$siteConfig = app\components\CController::getSiteConfig();
$c = count($rows);
?>
<div>
    <table>
        <thead>
            <tr>
                <td>
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    <p>Наименование работ</p>
                </td>
                <td>
                    <i class="fa fa-tags" aria-hidden="true"></i>
                    <p>Цена/Руб</p>
                </td>
                <td>
                    <i class="fa fa-hourglass-start" aria-hidden="true"></i>
                    <p>Сроки</p>
                </td>
                <td>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <p>Гарантия</p>
                </td>
                <td>
                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    <p>Оформить заявку</p>
                </td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $key => $row): ?>
                <tr class="t-row">
                    <td>
                        <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>" class="t-cell col01" title="<?= $row['title']; ?>"><?= $row['title']; ?></a>
                    </td>
                    <td><?= round($row['price']); ?></td>
                    <td> <?= $row['time']; ?></td>
                    <td>1 года</td>
                    <td><span class="orderprice">Заказать</span></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>