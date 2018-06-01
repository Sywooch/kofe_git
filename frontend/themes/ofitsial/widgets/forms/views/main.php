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
<div class="row">
    <div class="col-lg-5 col-lg-offset-3">
        <?=
        $form->field($model, 'phone')->widget(MaskedInput::className(), [
            'name' => 'phone',
            'mask' => '+7 (999) 999-99-99',
            'options' => [
                'placeholder' => 'Телефон',
            //'class' => 'input--block', 'type' => 'tel'
            ],
        ])->label('')
        ?>
    </div>
    <div class="col-lg-4">
        <?= Html::submitButton('Заказать', ['class' => 'hero-form__btn', 'type' => 'submit']) ?>
    </div>
</div>
<?php ActiveForm::end() ?> 