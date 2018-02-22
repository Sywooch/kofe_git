<div id="rumiservice7" class="inner_container">
    <div class="rumiservice7_topper">
        <div class="rumiservice7_header"><?= $title; ?></div>                  
    </div>
    <div class="rumiservice7_blocks_container">
        <div class="rumiservice7_blocks rumiservice7_block1" style="display: block;">
            <div class="rumiservice7_table_header">
                <div class="rumiservice_column_1">Наименование позиции</div>
                <div class="rumiservice_column_2">Стоимость</div>
                <div class="rumiservice_column_3">Время</div>
                <div class="rumiservice_column_4"></div>
            </div>
            <div class="rumiservice7_table_content">
                <?php foreach ($services as $key => $service): ?>
                    <?php if ($key > 4): ?><div class="rumiservice7_table_tr_container"><?php endif; ?>
                        <div class="rumiservice7_table_tr<?= $key % 2 ? ' rumiservice7_table_tr_odd' : ''; ?>">
                            <div class="rumiservice_column_1">
                                <?php if ($service['is_popular'] == 1): ?>
                                    <a class="colortexthover" href="/<?= $urlPrefix . $service['url']; ?>"><?= $service['title']; ?></a>
                                <?php else: ?>
                                    <?= $service['title']; ?>
                                <?php endif; ?>
                            </div>
                            <div class="rumiservice_column_2">от <?= number_format($service['price'], 0, ' ', ' '); ?></div>
                            <div class="rumiservice_column_3"><?= $service['time']; ?></div>
                            <div class="rumiservice_column_4"><span class="has_problem mini-form"><span class="colortexthover">Заказать</span></span></div>
                        </div>
                        <?php if ($key > 4): ?></div><?php endif; ?>
                <?php endforeach; ?>
                <?php if (count($services) > 5): ?>
                    <div class="rumiservice7_show_all colorbg"><span>Показать все</span></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>