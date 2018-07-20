<?php
$prefUrl = isset($_GET['data']['type']) && in_array($_GET['data']['type'], ['brand', 'model']) ? $_GET['data']['url'] : '';
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="price-list" id="price-list">
    <div class="page-wrap">
        <h2>Расценки на ремонт кофемашин</h2>
        <span class="price-list-span-under-title">Лояльные цены для всех физических и юридических лиц</span>
        <div class="price-list__prices">
            <ul class="js-list">
                <?php foreach ($rows as $key => $row): ?>
                    <li>
                        <div>
                            <a href="/<?= !empty($prefUrl) ? $prefUrl . '/' : ''; ?><?= $row['url']; ?>">
                                <p class="price-list__service"><span><?= $row['title']; ?></span></p>
                            </a>
                            <span class="price-list__price"><?= $row['price']; ?> руб.</span> 
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
            <p style="font-size:12px;text-align:right;margin: 15px 0;">*Окончательная стоимость работ по результатам диагностики</p>
            <a href="#" class="btn_mob price-list__button">Смотреть все цены</a>
        </div>
        <div class="price-list__info">
            <img src="/<?= $siteConfig['theme'] . '/'; ?>images/icons/warehouse-materials.png" alt="Свой склад пополняемых расходных материалов" />
            <p>Свой склад расходных материалов и запчастей!</p>
        </div>
    </div>
</div>