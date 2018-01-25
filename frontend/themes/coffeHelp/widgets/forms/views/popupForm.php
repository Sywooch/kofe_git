<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
            'id' => 'popup-new-form',
            //'options' => ['class' => 'form form_request callback'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);
?>
<h3>Хотите, мы вам перезвоним?</h3>
<p>Для вызова мастера или подробной консультации оставьте ваш номер телефона</p>
<div class="row"> 
    <?=
    $form->field($model, 'phone')->widget(MaskedInput::className(), [
        'name' => 'phone',
        'mask' => '+7 (999) 999-99-99',
        'options' => [
            'placeholder' => 'Номер телефона',
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