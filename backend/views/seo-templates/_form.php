<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use \yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\SeoTemplates */
/* @var $form yii\widgets\ActiveForm */
$select2Options = [
    'data' => ['' => 'Выберите модель', 'Все модели'],
    'language' => 'ru',
    'options' => ['placeholder' => '--'],
    'pluginOptions' => [
        'allowClear' => true,
    ],
];
$brands = ArrayHelper::map(\Yii::$app->db->createCommand('select id, title from {{%categories}}')->queryAll(), 'id', 'title');
$serices = ArrayHelper::map(\Yii::$app->db->createCommand('select id, title from {{%services}} where is_popular = 1')->queryAll(), 'id', 'title');
$domain = str_replace('admin.', '', $_SERVER['SERVER_NAME']);

$sites = [];
foreach (Yii::$app->params['siteConfigs'] as $title => $config) {
    $sites[$config['id']] = $title . '.ru';
}
?>

<div class="seo-templates-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=
    $form->field($model, 'site_id')->widget(Select2::classname(), [
        'data' => $sites,
        'language' => 'ru',
        'options' => ['placeholder' => 'Сайт'],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]);
    ?>

    <?=
    $form->field($model, 'category_id')->widget(Select2::classname(), [
        'data' => $brands,
        'language' => 'ru',
        'options' => ['placeholder' => '--'],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]);
    ?>

    <?= $form->field($model, 'template')->textarea(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'brand_id')->widget(Select2::classname(), [
        'data' => ['Все бренды'],
        'language' => 'ru',
        'options' => ['placeholder' => '--'],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]);
    ?>

    <?=
    $form->field($model, 'model_id')->widget(Select2::classname(), [
        'data' => ['Все модели'],
        'language' => 'ru',
        'options' => ['placeholder' => '--'],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]);
    ?>

    <?=
    $form->field($model, 'serice_id')->widget(Select2::classname(), [
        'data' => $serices,
        'language' => 'ru',
        'options' => ['placeholder' => '--'],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$script = 'function getModels(brandID) {
            $.post("/seo-templates/get-models", {
                brandID: brandID
            }, function(e) {
                if (e)
                    $("#seotemplates-model_id").html(e).select2(' . json_encode($select2Options) . ');
            })}';
$this->registerJs($script, yii\web\View::POS_HEAD);
?>