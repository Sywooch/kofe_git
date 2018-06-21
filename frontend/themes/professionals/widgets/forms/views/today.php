<section class="<?= $sectionClass; ?>">
    <div class="container">
        <div class="you-get">
        <ul>
            <li><span>Бесплатный выезд курьера в течение 60 минут</span></li>
            <li><span>Фирменные запчасти</span></li>
            <li><span>Гарантия 2 года</span></li>
        </ul>
    </div>
        <div class="row">
            <div class="col-xs-24">
                <div class="form form__inline form-block__repair form-block__light">
                    <p>Закажите ремонт кофемашины прямо сейчас</p>
                    <?php

                    use yii\helpers\Html;
                    use yii\widgets\ActiveForm;
                    use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                                'id' => 'today2-form',
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
                                    'placeholder' => 'Введите телефон',
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
                        персональных данных в соответствии с <a href="/conf-inform">условиями</a>.
                    </p>
                    <?php ActiveForm::end() ?>
                </div>
            </div>
        </div>
    </div>
    
</section>