<section>
    <div class="container">        
        <div class="row">
            <div class="col-xs-24">
                <div class="form form__inline form-block__repair form-block__light">
                    <p>Срочный ремонт кофемашины в день обращения</p>
                    <?php

                    use yii\helpers\Html;
                    use yii\widgets\ActiveForm;
                    use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                                'id' => 'adv-form',
                                'options' => ['class' => 'request-form'],
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
                </div>
            </div>
        </div>
    </div>
</section>

