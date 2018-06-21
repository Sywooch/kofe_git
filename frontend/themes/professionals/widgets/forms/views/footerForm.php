
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
            'id' => 'footer-form',
            'options' => ['class' => 'form dark'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);
?>
<?=
$form->field($model, 'phone')->widget(MaskedInput::className(), [
    'name' => 'phone',
    'mask' => '+7 (999) 999-99-99',
    'options' => [
        'placeholder' => 'Введите телефон',
        'type' => 'tel',
        'size' => 40,
    ],
])->label('')
?>
<button type="submit">Перезвоните мне</button>
<?php ActiveForm::end() ?>
         