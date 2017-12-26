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
                            <div class="rumiservice7_table_tr rumiservice7_table_tr_odd">
                                <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/zamena-modulya-displeya.html">Замена модуля дисплея планшетов Xiaomi</a></div>
                                <div class="rumiservice_column_2">по согласованию</div>
                                <div class="rumiservice_column_3">от 1,5 час.</div>
                                <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('87');"><span class="colortexthover">Решить проблему</span></span></div>
                            </div>
                        <?php endforeach; ?>
                        
                        <div class="rumiservice7_table_tr_container">
                            <div class="rumiservice7_table_tr ">
                                <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/zamena-razyema-naushnikov-dlya-planshetov-xiaomi.html">Замена разъема наушников для планшетов Xiaomi</a></div>
                                <div class="rumiservice_column_2">по согласованию</div>
                                <div class="rumiservice_column_3">от 1,5 час.</div>
                                <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('417');"><span class="colortexthover">Решить проблему</span></span></div>
                            </div>
                            <div class="rumiservice7_table_tr rumiservice7_table_tr_odd">
                                <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/slojnyiy-programmnyiy-remont-dlya-planshetov-xiaomi.html">Сложный программный ремонт для планшетов Xiaomi</a></div>
                                <div class="rumiservice_column_2">от 2 000 руб.</div>
                                <div class="rumiservice_column_3">от 2 час.</div>
                                <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('463');"><span class="colortexthover">Решить проблему</span></span></div>
                            </div>
                            <div class="rumiservice7_table_tr ">
                                <div class="rumiservice_column_1"><a class="colortexthover" href="planshetyi/zamena-razyema-zaryadki-dlya-plansheta-xiaomi.html">Замена разъема зарядки</a></div>
                                <div class="rumiservice_column_2">по согласованию</div>
                                <div class="rumiservice_column_3"></div>
                                <div class="rumiservice_column_4"><span class="has_problem" onclick="addToCart('418');"><span class="colortexthover">Решить проблему</span></span></div>
                            </div>
                        </div>
                        <div class="rumiservice7_show_all colorbg"><span>Показать все</span></div>
                    </div>
                </div>           
            <?php endforeach; ?>
        </div>
    </div>
</div>