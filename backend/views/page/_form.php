<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\file\FileInput;
use kartik\select2\Select2;
use dosamigos\datetimepicker\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$elements = \Yii::$app->db->createCommand('select id,parent, title from {{%pages}} where type != \'model\'')->queryAll();
$tree = $model->build_tree($elements);
unset($elements);
$data = [
    'actions' => 'Акция',
    'news' => 'Новость',
    'articles' => 'Статья',
    'vacancies' => 'Вакансии',
    'info' => 'Информационная страница',
    'service' => 'Услуги',
    'contact' => 'Контакт',
    'category' => 'Категория',
    'page' => 'Страница',
    'brand' => 'Бренд',
    'model' => 'Модель',
    'zone' => 'Зона обслуживания главная',
    'zone2' => 'Зона обслуживания вн.',
];
$sites = [0 => 'Нет'];
foreach (Yii::$app->params['siteConfigs'] as $title => $config) {
    $sites[$config['id']] = $title . '.ru';
}
if ($model->isNewRecord)
    $model->site_id = 0;
?>
<div class="pages-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?=
    $form->field($model, 'site_id')->widget(Select2::classname(), [
        'data' => $sites,
        'language' => 'ru',
        'options' => ['placeholder' => '--'],
        'pluginOptions' => [
            'allowClear' => false
        ],
    ]);
    ?>
    <?=
    $form->field($model, 'type')->widget(Select2::classname(), [
        'data' => $data,
        'language' => 'ru',
        'options' => ['placeholder' => '--'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    <?=
    $form->field($model, 'parent')->widget(Select2::classname(), [
        'data' => $tree,
        'language' => 'ru',
        'options' => ['placeholder' => '--'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'full_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full',
        'clientOptions' => [
            'filebrowserUploadUrl' => '/site/url',
            'allowedContent' => true,
        ]
    ])
    ?>

    <?=
    $form->field($model, 'full_description')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full',
        'clientOptions' => [
            'filebrowserUploadUrl' => '/site/url',
            'allowedContent' => true,
        ]
    ])
    ?>

    <?= $form->field($model, 'active')->checkbox() ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'meta_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_desc')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_h1')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'image')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'language' => 'ru',
//        'pluginOptions' => [
//            'allowedFileExtensions' => ['jpg', 'gif', 'png'],
//            'previewFileType' => 'image',
//            'uploadUrl' => Url::to(['/uploads/ckeditor']),
//        ]
    ]);
    ?>
    <?= $form->field($model, 'action')->textInput(['maxlength' => true]) ?>
    <?=
    $form->field($model, 'date')->widget(DateTimePicker::className(), [
        'language' => 'ru',
        'size' => 'ms',
        'template' => '{input}',
        //'pickButtonIcon' => 'glyphicon glyphicon-time',
        //'inline' => true,
        'clientOptions' => [
            'startView' => 1,
            //'autoclose' => true,
            'format' => 'yyyy-mm-dd hh:ii:ss',
            'todayBtn' => true
        ]
    ]);
    ?>
    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
