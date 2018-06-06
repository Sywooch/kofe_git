<div class="modal-frame">
    <div class="modal">
        <div class="modal-inset">
            <div class="button close"><i class="glyphicon glyphicon-eye-close"></i></div>
            <div class="modal-body">
                <div class="title title__2">Хотите, мы вам перезвоним?</div>
                <p>Для вызова мастера или подробной консультации оставьте ваш номер телефона</p>
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
<div class="modal-overlay"></div>