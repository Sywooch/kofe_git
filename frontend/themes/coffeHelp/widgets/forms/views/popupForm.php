<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
            'id' => 'popup-new-form2',
            //'options' => ['class' => 'form form_request callback'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);
?>
<div class="h3">Хотите, мы вам перезвоним?</div>
<p>Для вызова мастера или подробной консультации оставьте ваш номер телефона</p>
<div class="row"> 
    <?=
    $form->field($model, 'phone')->widget(MaskedInput::className(), [
        'name' => 'phone',
        'mask' => '+7 (999) 999-99-99',
        'options' => [
            'placeholder' => '+7 (___) ___-__-__',
            'type' => 'tel',
            'size' => 40,
            'class' => 'form-control',
        ],
    ])->label('')
    ?>
    <?= Html::submitButton('Вызвать мастера', ['class' => 'btn btn-default', 'type' => 'submit']) ?>
</div>
<div class="info-text">Свяжемся за 2 минуты</div>
<?php ActiveForm::end() ?>