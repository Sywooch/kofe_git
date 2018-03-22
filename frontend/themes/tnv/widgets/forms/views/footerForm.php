<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
            'id' => 'footer-form',
            //'options' => ['class' => 'form form_request callback'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);
?>
<label style="width: 100%">
    <div class="form-group field-orderform2-phone required">
        <?=
        $form->field($model, 'phone')->widget(MaskedInput::className(), [
            'name' => 'phone',
            'mask' => '+7 (999) 999-99-99',
            'options' => [
                'placeholder' => '+7 (___) ___-__-__',
                'type' => 'tel',
                'size' => 40,
                'class' => 'form-control form-control',
            ],
        ])->label('')
        ?>
    </div>
</label>
<div class="form__row form__row_submit">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary btn-lg btn-block', 'type' => 'submit']) ?>
</div>
<?php ActiveForm::end() ?>