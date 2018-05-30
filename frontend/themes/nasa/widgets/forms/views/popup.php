<div class="fade modal" id="modalPromo">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body"><button aria-label="Close" class="close" data-dismiss="modal" type=button><span aria-hidden="true">&times;</span> </button>
                <div class="px-5 py-5">
                    <h3>Дарим 25% скидку на ремонт кофемашины</h3>
                    <p>Просто введите Ваш номер телефона и мы свяжемся с Вами в течение 2 минут.</p>
                    <?php

                    use yii\helpers\Html;
                    use yii\widgets\ActiveForm;
                    use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                                'id' => 'popup-form',
                                'options' => ['class' => 'alert-item--form js-feedback-form'],
                                'enableClientValidation' => true,
                                'fieldConfig' => [
                                    'template' => '{input}',
                                ],
                    ]);
                    ?>
                    <div class="form-group mb-md-4">
                        <?=
                        $form->field($model, 'phone')->widget(MaskedInput::className(), [
                            'name' => 'phone',
                            'mask' => '+7 (999) 999-99-99',
                            'options' => [
                                'placeholder' => 'Ваш телефон',
                                'class' => 'form-control', 'type' => 'tel'
                            ],
                        ])->label('')
                        ?>                            
                    </div> 
                    <?= Html::submitButton('Заказать ремонт', ['class' => 'btn btn-block btn-primary', 'type' => 'submit']) ?>
                    <?php ActiveForm::end() ?>
                </div>
            </div>
        </div>
    </div>
</div>