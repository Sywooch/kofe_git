<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

$config = backend\controllers\SiteController::getSiteConfig();

/* @var $this yii\web\View */
/* @var $model app\models\UniqueText */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unique-text-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?=
    $form->field($model, 'service_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(\app\models\Services::findAll(['category_id' => $config['category_id']]), 'id', 'title'),
        'language' => 'ru',
        'options' => ['placeholder' => '--'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    
    <?=
    $form->field($model, 'brand_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(\app\models\Pages::findAll(['type' => 'brand', 'category_id' => $config['category_id']]), 'id', 'title'),
        'language' => 'ru',
        'options' => ['placeholder' => '--'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?=
    $form->field($model, 'barnd_text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full',
        'clientOptions' => [
            'filebrowserUploadUrl' => '/site/url',
            'allowedContent' => true,
        ]
    ])
    ?>
    
    <?=
    $form->field($model, 'model_text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full',
        'clientOptions' => [
            'filebrowserUploadUrl' => '/site/url',
            'allowedContent' => true,
        ]
    ])
    ?>   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
