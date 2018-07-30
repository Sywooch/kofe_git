<div class="wrapper__request">
    <div class="container">
        <div class="row">
            <div class="request">
                <div class="request__title col-lg-4 col-sm-4">
                    Заказать мастера для проведения ремонта
                </div>
                <div class="request__form col-lg-13 col-sm-13">
                    <?php

                    use yii\helpers\Html;
                    use yii\widgets\ActiveForm;
                    use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                                'id' => 'request-form',
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
                                    'maxlength' => 15,
                                    'type' => 'tel'
                                ],
                            ])->label('')
                            ?>
                        </li>
                    </ul>
                    <input type="submit" value="Перезвоните мне"/>
                    <?php ActiveForm::end() ?>
                </div>
                <div class="request__description col-lg-7 col-sm-7">
                    Мы перезвоним Вам в течении 2х минут и согласуем все условия.
                </div>
            </div>
        </div>
    </div>
</div>