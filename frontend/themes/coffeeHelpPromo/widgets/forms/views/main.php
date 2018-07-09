<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
            'id' => 'main-form',
            //'options' => ['class' => 'slider-form js-feedback-form'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);
?>
<div class="input-number">
    <?=
    $form->field($model, 'phone')->widget(MaskedInput::className(), [
        'name' => 'phone',
        'mask' => '+7 (999) 999-99-99',
        'options' => [
            'placeholder' => 'Ваш телефон',
            'class' => 'input is-large', 'type' => 'tel'
        ],
    ])->label('')
    ?>
    <span class="icon"><i class="mdi mdi-phone"></i></span>
</div>
<div class="button-number">
    <button type="submit"><i class="mdi mdi-checkbox-marked-circle-outline mdi-24px"></i><span>Узнать стоимость и закрепить скидку</span></button>
</div>
<?php ActiveForm::end() ?> 