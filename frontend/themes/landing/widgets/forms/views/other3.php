<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
            'id' => 'other4-form',
            'options' => ['class' => 'form default'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);
        $validatejs = "$('#other4-form').on('afterValidateAttribute', function(event, attribute, messages) {if(messages.length == 0){yaCounter49912222.reachGoal(\"KakRabotaem_CallMaster\");}});";
        $this->registerJs($validatejs, \yii\web\View::POS_END);
?>
<div class="form__field">
    <div class="form-group field-askform2-phone required has-error">
        <?=
        $form->field($model, 'phone')->widget(MaskedInput::className(), [
            'name' => 'phone',
            'mask' => '+7 (999) 999-99-99',
            'options' => [
                'placeholder' => 'Введите телефон:',
                'class' => 'form__input form__input--fw', 'type' => 'tel'
            ],
        ])->label('')
        ?>
    </div>
</div>
<div class="form__field form__field--btn">
    <?= Html::submitButton('Вызвать мастера', ['class' => 'btn btn--fw', 'type' => 'submit']) ?>
</div>
<div class="policy"><input class="policy__input" type="checkbox" name="policy" id="policy-free" checked="checked">
    <label class="policy__label" for="policy-free">
        <span class="box"></span>
        <span class="text">Я согласен с условиями  <a href="/">политики конфиденциальности </a></span>
    </label>
</div>
<?php ActiveForm::end() ?> 