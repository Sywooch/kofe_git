<div class="main_container">
    <div id="rumiservice7" class="inner_container">
        <div class="rumiservice7_topper">
            <div class="rumiservice7_header">Популярные услуги:</div>
            <div class="rumiservice7_buttons">
                <?php foreach ($categories as $key => $category): ?>
                    <div class="rumiservice7_button colortexthover<?= $key == 0 ? ' rumiservice7_button_active' : ''; ?>" button_id="<?= $key; ?>"><?= $category['title']; ?></div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="rumiservice7_blocks_container">
            <?php foreach ($categories as $key => $category): ?>
                <?php $services = \frontend\models\Pages::getCategoryPopularServices($category['id']); ?>
                <div class="rumiservice7_blocks rumiservice7_block<?= $key; ?>" style="display: <?= $key == 0 ? ' block' : 'none'; ?>;">
                    <div class="rumiservice7_table_header">
                        <div class="rumiservice_column_1">Наименование позиции</div>
                        <div class="rumiservice_column_2">Стоимость *</div>
                        <div class="rumiservice_column_3">Время</div>
                        <div class="rumiservice_column_4"></div>
                    </div>
                    <div class="rumiservice7_table_content">
                        <?php foreach ($services as $key => $service): ?>
                            <?php if ($key > 4): ?><div class="rumiservice7_table_tr_container"><?php endif; ?>
                                <div class="rumiservice7_table_tr<?= $key % 2 ? ' rumiservice7_table_tr_odd' : ''; ?>">
                                    <div class="rumiservice_column_1">
                                        <?php if ($service['is_popular'] == 1): ?>
                                            <a class="colortexthover" href="/<?= $urlPrefix . '/' . $service['url']; ?>"><?= $service['title']; ?></a>
                                        <?php else: ?>
                                            <?= $service['title']; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="rumiservice_column_2"><?= $service['price']; ?></div>
                                    <div class="rumiservice_column_3">от 1,5 час.</div>
                                    <div class="rumiservice_column_4"><span class="has_problem mini-form"><span class="colortexthover">Решить проблему</span></span></div>
                                </div>
                                <?php if ($key > 4): ?></div><?php endif; ?>
                        <?php endforeach; ?>
                        <?php if (count($services) > 5): ?>
                            <div class="rumiservice7_show_all colorbg"><span>Показать все</span></div>
                        <?php endif; ?>
                    </div>
                </div>           
            <?php endforeach; ?>
        </div>
    </div>
</div>