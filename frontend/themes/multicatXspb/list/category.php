<div class="clear"></div>
<div id="content" class="colorborder">
    <div class="inner_container">
        <div class="breadcrumb">
            <a href="/">Главная</a>
            <a href="#">Ремонт <?= mb_strtolower($page['full_title'], 'utf8'); ?></a>
        </div>
    </div>
    <div class="inner_container">
        <div id="content" class="my-text">
            <h1 class="colortext"><?= !empty($page['meta_h1']) ? $page['meta_h1'] : $page['title']; ?></h1>
            <?= $page['description']; ?>
        </div>
    </div>
    <?= multicatXspb\widgets\lists\Models::widget(['models' => $models]); ?>
    <?= multicatXspb\widgets\lists\Services::widget(['title' => 'Цены по услугам:', 'category_id' => \app\components\CController::$category['id'], 'type' => 1, 'is_popular' => true, 'urlPrefix' => Yii::$app->request->pathInfo . '/']); ?>
    <?= multicatXspb\widgets\lists\Services::widget(['title' => 'Цены по прочим услугам:', 'category_id' => \app\components\CController::$category['id'], 'type' => 1, 'is_popular' => false]); ?>
    <?= multicatXspb\widgets\lists\Services::widget(['title' => 'Цены по неиправностям:', 'category_id' => \app\components\CController::$category['id'], 'type' => 2, 'is_popular' => true, 'urlPrefix' => Yii::$app->request->pathInfo . '/']); ?>
    <?= multicatXspb\widgets\other\HowWeWork::widget(); ?>
</div>
<?= multicatXspb\widgets\forms\FooterForm::widget(); ?>