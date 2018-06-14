<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
            'id' => 'main2-form',
            'options' => ['class' => 'ctapfform'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);
?>
<p>Хотите получить скидку?</p>
<?=

$form->field($model, 'phone')->widget(MaskedInput::className(), [
    'name' => 'phone',
    'mask' => '+7 (999) 999-99-99',
    'options' => [
        'placeholder' => 'Укажите ваш номер телефона',
    //'class' => 'input--block', 'type' => 'tel'
    ],
])->label('')
?>
<?= Html::submitButton('Получит скидку', ['class' => 'hero-form__btn', 'type' => 'submit']) ?>
<?php ActiveForm::end() ?> 