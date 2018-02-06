<section class="<?= $sectionClass; ?>">
    <div class="container">
        <div class="row">
            <div class="col-xs-24">
                <div class="form form__inline form-block__repair form-block__light">
                    <p>Давайте отремонтируем вашу кофемашину уже сегодня</p>
                    <?php

                    use yii\helpers\Html;
                    use yii\widgets\ActiveForm;
                    use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                                'id' => 'today-form',
                                'options' => ['class' => 'request-form'],
                                'enableClientValidation' => true,
                                'fieldConfig' => [
                                    'template' => '{input}',
                                ],
                    ]);
                    ?>
                    <ul>
                        <li>
                            <label>Телефон</label>
                            <?=
                            $form->field($model, 'phone')->widget(MaskedInput::className(), [
                                'name' => 'phone',
                                'mask' => '+7 (999) 999-99-99',
                                'options' => [
                                    'placeholder' => 'Телефон',
                                    //'class' => 'form__input form__input_phone-mask',
                                    'type' => 'tel',
                                    'size' => 40,
                                ],
                            ])->label('')
                            ?>
                        </li>
                    </ul>
                    <button type="submit">Перезвоните мне</button>
                    <p class="response-message"></p>
                    <p class="form-policy">
                        Нажимая на кнопку «Перезвоните мне», вы подтверждаете своё совершеннолетие и соглашаетесь на обработку
                        персональных данных в соответствии с <a href="#">условиями</a>.
                    </p>
                    <?php ActiveForm::end() ?>
                </div>
            </div>
        </div>
    </div>
</section>