<div style="display: none">
    <div id="zvonok">
        <h3>Оставьте заявку <span>Мы перезвоним Вам в ближайшее время</span></h3>
        <?php

        use yii\helpers\Html;
        use yii\widgets\ActiveForm;
        use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                    'id' => 'footer-form',
                    'options' => ['class' => 'zayavka ajax_form'],
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
                'placeholder' => 'Введите номер',
                'class' => 'phone js-validate-phone', 'type' => 'tel'
            ],
        ])->label('')
        ?>
        <button type="submit">Вызвать мастера на дом</button>
        <?php ActiveForm::end() ?>
    </div>
    <a href="#thanks" class="thanks inline"></a>
    <div id="thanks">
        <h3>Спасибо за заявку <span>Мы перезвоним Вам в ближайшее время</span></h3>
    </div>
</div>