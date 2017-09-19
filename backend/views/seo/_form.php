<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor

/* @var $this yii\web\View */
/* @var $model app\models\Seo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seo-form">

    <?php $form = ActiveForm::begin(); ?>   

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?><span id="cnt-title" style="float: right;margin-top: -41px;margin-right: -16px;">0</span>

    <?= $form->field($model, 'meta_keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_description')->textarea(['maxlength' => true]) ?><span id="cnt-desc" style="float: right;margin-top: -41px;margin-right: -16px;">0</span>

    <?= $form->field($model, 'meta_h1')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'meta_text1')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full',
        'clientOptions' => [
            'filebrowserUploadUrl' => '/site/url',
            'allowedContent' => true,
        ]
    ])
    ?>
    <?=
    $form->field($model, 'meta_text2')->widget(CKEditor::className(), [
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
