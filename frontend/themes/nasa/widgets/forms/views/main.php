<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
            'id' => 'main-form',
            'options' => ['class' => 'form-order'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);
?>
<div class=row>
    <div class="col-lg-6 col-md-9 col-xl-6">
        <div class=form-group>
            <?=
            $form->field($model, 'phone')->widget(MaskedInput::className(), [
                'name' => 'phone',
                'mask' => '+7 (999) 999-99-99',
                'options' => [
                    'placeholder' => 'Номер телефона *',
                    'class' => 'form-control', 'type' => 'tel'
                ],
            ])->label('')
            ?>
        </div>
    </div>
    <div class="col-lg-6 col-md-9 col-xl-6">
        <?= Html::submitButton('Заказать со скидкой', ['class' => 'btn btn-block btn-dark', 'type' => 'submit']) ?>
    </div>
</div>
<?php ActiveForm::end() ?> 