<?php
$this->title = $pageInfo['meta_title'];
$breadcrumbs = [
    $pageInfo['title'],
];
?>
<div class="main_container grey_container">
    <div class="inner_container">
        <?= multicatX\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
        <h1><?= $pageInfo['meta_h1']; ?></h1>
    </div>
    <?php foreach (app\components\CController::$menu as $key => $category): ?>
        <div id="rumiservice7" class="inner_container">
            <div class="rumiservice7_topper">
                <div class="rumiservice7_header">Услуги <?= mb_strtolower(str_replace('Ремонт ', '', $category['full_title']), 'utf8'); ?></div>
            </div>

            <?php $services = frontend\models\Pages::getCategoryServices($category['category_id']); ?>
            <div class="rumiservice7_blocks_container">
                <div class="rumiservice7_blocks rumiservice7_block0" style="display:  block;">
                    <div class="rumiservice7_table_header">
                        <div class="rumiservice_column_1">Наименование позиции</div>
                        <div class="rumiservice_column_2">Стоимость</div>
                        <div class="rumiservice_column_3">Время</div>
                        <div class="rumiservice_column_4"></div>
                    </div>
                    <div class="rumiservice7_table_content">                        
                        <?php foreach ($services as $service): ?>
                            <div class="rumiservice7_table_tr">
                                <div class="rumiservice_column_1">
                                    <?php if ($service['is_popular'] == 1): ?>
                                        <a class="colortexthover" href="/<?= $category['url'] . '-' . $service['url']; ?>"><?= $service['title']; ?></a>
                                    <?php else: ?>
                                        <?= $service['title']; ?>
                                    <?php endif; ?>
                                </div>
                                <div class="rumiservice_column_2"><?= number_format((!empty($service['model_price']) ? $service['model_price'] : $service['price']), 0, ' ', ' '); ?> р.</div>
                                <div class="rumiservice_column_3"><?= $service['time']; ?></div>
                                <div class="rumiservice_column_4"><span class="has_problem mini-form"><span class="colortexthover">Заказать</span></span></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>