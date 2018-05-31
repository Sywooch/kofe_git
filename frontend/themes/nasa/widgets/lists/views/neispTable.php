<?php
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
$siteConfig = app\components\CController::getSiteConfig();
$c = count($rows);
?>
<div class="faults">
    <div class="container">
        <div class="h3">Выберите неисправность</div>
        <table class="content__pricelist table table-hover">
            <tbody>
                <?php foreach ($rows as $key => $row): ?>
                    <tr>
                        <td class="content__pricelist-name">                            
                            <span class="text-dark"><?= $row['title']; ?></span>                           
                        </td>
                        <td class="content__pricelist-value text-nowrap"><?= round($row['price']); ?> р.</td>
                        <td><a class="btn btn-sm btn-success" data-target="#modalOrder" data-toggle="modal" href="#">Заказать</a> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>