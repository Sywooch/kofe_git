<?php
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="office-content <?= !empty($class) ? ' ' . $class : ''; ?>">
    <div class="office__inner">
        <h2 style="margin:20px 0 20px 0;"><?= !empty($title) ? $title : 'Цены по услугам' ?></h2>
        <table align="center" class="my ">
            <tbody>
                <?php foreach ($rows as $key => $row): ?>
                    <tr valign="TOP">
                        <td>
                            <?php if ($row['is_popular'] == 1): ?>
                                <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>"><?= $row['title']; ?></a>
                            <?php else: ?>
                                <?= $row['title']; ?>
                            <?php endif; ?>
                        </td>
                        <td><span>от <?= number_format($row['price'], 0, ' ', ' '); ?> р</span> <a class="m_btn btn_war popup_js" href="#" data-popup="request">Заказать</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>