<div class="modals">
    <div class="overlay"></div>
    <div class="modal order-form js-discount-order">
        <?php

        use yii\helpers\Html;
        use yii\widgets\ActiveForm;
        use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                    'id' => 'modal-discount-form',
                    'options' => ['class' => 'ajax_form'],
                    'enableClientValidation' => true,
                    'fieldConfig' => [
                        'template' => '{input}',
                    ],
        ]);
        ?>
        <p>Скидка <span class="first-discount">3%</span> на услугу при первичном обращении.</p>
        <p>Постоянная скидка <span class="regular-discount">5%</span> на плановую чистку и промывку механизмов подачи кофе</p>
        <hr/>
        <p>Скидка закрепляется за номером телефона клиента</p>
        <?=
        $form->field($model, 'phone')->widget(MaskedInput::className(), [
            'name' => 'phone',
            'mask' => '+7 (999) 999-99-99',
            'options' => [
                'placeholder' => 'Номер телефона',
                'class' => ' ', 'type' => 'tel'
            ],
        ])->label('')
        ?>
        <button class="btn" type="submit">Получить скидку</button>
        <?php ActiveForm::end() ?>
    </div>
</div>