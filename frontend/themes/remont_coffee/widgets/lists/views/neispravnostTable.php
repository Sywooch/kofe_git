<div class="prices">
    <?php
    $prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
    $siteConfig = app\components\CController::getSiteConfig();
    ?>
    <div class="subheading"><?= !empty($title) ? $title : 'Варианты устранения неисправности, стоимость работ' ?></div>
    <table class="pricelist<?= !$is_popular && $type == 1 ? ' hide-rows' : ''; ?>">  
        <tbody>
            <?php foreach ($rows as $key => $row): ?>
                <tr>
                    <td class="name" style="width: 70%">
                        <?php if ($row['is_popular'] == 1): ?>
                            <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>"><?= $row['title']; ?></a>
                        <?php else: ?>
                            <?= $row['title']; ?>
                        <?php endif; ?>
                    </td>
                    <td class="name" style="width: 10%"></td>
                    <td class="price" style="width: 20%"><?= number_format($row['price'], 0, ' ', ' '); ?></td>
                </tr> 
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php if(!$is_popular && $type == 1): ?>
        <div class="button"><a href="#">Показать остальные услуги</a></div>
    <?php endif; ?>
    <div class="clear"></div>
</div>