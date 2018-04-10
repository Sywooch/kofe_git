<?php 
use \app\components\CController;
$this->title = $title;
$breadcrumbs = [    
    'Ремонт ' . mb_strtolower($page['full_title'], 'utf8') . ' ' . CController::$monoBrand['title'],
];
?>
<div class="clear"></div>
<div id="content" class="colorborder">
    <div class="inner_container">
        <?= multicatX\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
    </div>
    <div class="inner_container">
        <div id="content" class="my-text">
            <h1 class="colortext"><?= !empty($page['meta_h1']) ? $page['meta_h1'] : 'Ремонт ' . mb_strtolower($page['full_title'], 'utf8') . ' ' . CController::$monoBrand['title']; ?></h1>
            <?= str_replace('#brand_en#', CController::$monoBrand['title'], $page['description']); ?>
        </div>
    </div>
    <?= CController::$category['id'] ==  7 ? multicatX\widgets\lists\Models::widget(['models' => $models]) : ''; ?>
    <?= multicatX\widgets\lists\Services::widget(['title' => 'Цены по услугам:', 'category_id' => CController::$category['id'], 'type' => 1, 'is_popular' => true, 'urlPrefix' => Yii::$app->request->pathInfo . '/']); ?>
    <?= multicatX\widgets\lists\Services::widget(['title' => (CController::$category['id'] == 7 ? 'Цены по прочим услугам:' : 'Цены по услугам:'), 'category_id' => CController::$category['id'], 'type' => 1, 'is_popular' => false]); ?>
    <?= multicatX\widgets\lists\Services::widget(['title' => 'Цены по неисправностям:', 'category_id' => CController::$category['id'], 'type' => 2, 'is_popular' => CController::$category['id'] == 7 ? true : false, 'urlPrefix' => Yii::$app->request->pathInfo . '/']); ?>
    <div class="inner_container">
        <div id="content" class="my-text">            
            <?= str_replace('#brand_en#', CController::$monoBrand['title'], $page['full_description']); ?>
        </div>
    </div>
    <?= CController::$category['id'] !=  7 ? multicatX\widgets\lists\Models::widget(['models' => $models, 'view' => 'models2', 'h2' => (!empty($page['meta_h1']) ? $page['meta_h1'] : $page['title']) . ' которые мы чиним:']) : ''; ?>
    <?= multicatX\widgets\other\HowWeWork::widget(); ?>
</div>
<?= multicatX\widgets\forms\FooterForm::widget(); ?>