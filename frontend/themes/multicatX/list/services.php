<?php 
$this->title = $pageInfo['meta_title'];
$breadcrumbs = [
    $pageInfo['title'],
];
?>

<?= multicatX\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>

<div class="main_container grey_container">

    <?php foreach (app\components\CController::$menu as $key => $category): ?>


    <div id="rumiservice7" class="inner_container">
       <div class="rumiservice7_topper">
          <h1 class="rumiservice7_header"><?= $pageInfo['meta_h1']; ?></h1>
          <div class="rumiservice7_buttons">
             <div class="rumiservice7_button colortexthover rumiservice7_button_active" button_id="0">Услуги <?= str_replace('Ремонт ', '', $category['title']); ?></div>
          </div>
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
                <div class="rumiservice7_table_tr">
                   <div class="rumiservice_column_1">
                      <a class="colortexthover" href="/remont-kofemashin/dekaltsinatsiya">Декальцинация</a>
                   </div>
                   <div class="rumiservice_column_2">от 750 р.</div>
                   <div class="rumiservice_column_3">от 2 часов</div>
                   <div class="rumiservice_column_4"><span class="has_problem mini-form"><span class="colortexthover">Заказать</span></span></div>
                </div>

                <?php foreach ($services as $service): ?>
                    <div class="rumiservice7_table_tr">
                       <div class="rumiservice_column_1">
                        <?php if ($service['is_popular'] == 1 && 2 == 1): ?>
                          <a class="colortexthover" href="/remont-kofemashin/dekaltsinatsiya">Декальцинация</a>

                          <?php else: ?>
                              <?= $service['title']; ?>
                        <?php endif; ?>
                       </div>
                       <div class="rumiservice_column_2"><?= number_format((!empty($service['model_price']) ? $service['model_price'] : $service['price']), 0, ' ', ' '); ?> р.</div>
                       <div class="rumiservice_column_3">от 2 часов</div>
                       <div class="rumiservice_column_4"><span class="has_problem mini-form"><span class="colortexthover">Заказать</span></span></div>
                    </div>
                <?php endforeach; ?>
             </div>
          </div>
       </div>
    </div>
    <?php endforeach; ?>

</div>