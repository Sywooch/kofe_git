<div class="modal-frame open-formss">
    <div class="modal">
        <div class="modal-inset">
            <div class="button close"><i class="glyphicon glyphicon-eye-close"></i></div>
            <div class="modal-body">
                <div class="title title__2">Оставьте заявку на ремонт в день обращения</div>
                
                <?php

                use yii\helpers\Html;
                use yii\widgets\ActiveForm;
                use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                            'id' => 'popup-form',
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
                <p class="ps">Нажимая на кнопку «Перезвоните мне», вы подтверждаете своё совершеннолетие и соглашаетесь на обработку персональных данных в соответствии с <a href="/conf-inform">условиями</a>.</p>
            </div>
        </div>
    </div>
</div>

<div class="modal-frame thenks">
    <div class="modal">
        <div class="modal-inset">
            <div class="button close"><i class="glyphicon glyphicon-eye-close"></i></div>
            <div class="modal-body">
                <div class="title title__2">Уважаемый клиент, благодарим за обращение.</div>
                <p>Ваша заявка отправлена, наш менеджер свяжется с вами в течении 5 минут</p>
            </div>
        </div>
    </div>
</div>
<div class="modal-overlay"></div>