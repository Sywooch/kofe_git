<section class="promo">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-9 col-sm-11">
                <h2 class="title title__2">Успейте <br>заказать ремонт <br>кофемашины</h2>
                <p class="promo_gift">и получить термокружку <br>"Alpenkok" в подарок!</p>
            </div>
            <div class="col-lg-9 col-lg-offset-7 col-md-11 col-md-offset-4 col-sm-13">
                <div class="countdown-title">До конца акции осталось:</div>
                <div class="countdown" id="countdown"></div>
                <div class="form form__inline">
                    <?php

                    use yii\helpers\Html;
                    use yii\widgets\ActiveForm;
                    use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                                'id' => 'countdown-form',
                                'options' => ['class' => 'request-form'],
                                'enableClientValidation' => true,
                                'fieldConfig' => [
                                    'template' => '{input}',
                                ],
                    ]);
                    ?>
                    <ul>
                        <li>
                            <label for="id_phone">Телефон</label>
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