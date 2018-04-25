<div id="tab-tseni" class="prices tab_content">
    <div class="container">
        <?php
        $prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
        $siteConfig = app\components\CController::getSiteConfig();
        ?>
        <p class="gl-text"><?= !empty($title) ? $title : 'Варианты устранения неисправности, стоимость работ' ?></p>

        <table class="pricelist<?= !$is_popular && $type == 1 ? ' hide-rows' : ''; ?>">  
            <tbody>
                <?php $n=0; foreach ($rows as $key => $row): ?>
                    <?php
                    $n++;
                    if ($n == 3 || $n == 4) {
                        if($n == 4)
                            $n = 0;
                        $c = ' class="bg"';
                    } else {
                        $c = '';
                    }
                    ?>
                    <tr<?= $c; ?>>
                        <td class="name" style="width: 70%">
                            <?php if ($row['is_popular'] == 1): ?>
                                <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>"><?= $row['title']; ?></a>
                            <?php else: ?>
                                <?= $row['title']; ?>
                            <?php endif; ?>
                        </td>
                        <td class="price" style="width: 15%">от <?= number_format($row['price'], 0, ' ', ' '); ?> ₽</td>
                        <td style="width: 15%"><div class="button">Заказать</div></td>
                    </tr> 
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php if(!$is_popular && $type == 1): ?>
            <a class="button" href="/stoimost-remonta">Показать остальные услуги</a>
        <?php endif; ?>
    </div>
</div>
    <hr>