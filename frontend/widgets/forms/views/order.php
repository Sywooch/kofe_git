<div class="popup phone animated">
    <div class="wight">
        <h4>Заказать звонок</h4>
        <p>Закажите бесплатный обратный звонок. Введите Ваш номер телефона.</p>
        <?php

        use yii\helpers\Html;
        use yii\widgets\ActiveForm;
        use yii\widgets\MaskedInput;
$siteConfig = app\components\CController::getSiteConfig();
$form = ActiveForm::begin([
                    'id' => 'order-form',
                    'options' => ['class' => 'global-form'],
                    'enableClientValidation' => true,
                    'fieldConfig' => [
                        'template' => '{input}',
                    ],
        ]);
        $position = \yii\web\View::POS_END;
//        $validatejs = "$('#order-form').on('afterValidateAttribute', function(event, attribute, messages) {
//                    if(messages.length == 0){
//                        yaCounter45675441.reachGoal(\"popup-prices\");
//                    }
//                });";
        //if (!$siteConfig['mono'])
        //$this->registerJs($validatejs, $position);
        ?> 
        <?=
        $form->field($model, 'phone')->widget(MaskedInput::className(), [
            'name' => 'phone',
            'mask' => '+7 (999) 999-99-99',
            'options' => [
                'placeholder' => 'Ваш телефон',
                'class' => 'phone', 'type' => 'tel'
            ],
        ])->label('')
        ?>
        <?= Html::submitButton('Заказать', ['class' => 'hero-form__btn', 'type' => 'button']) ?>        
        <?php ActiveForm::end() ?>
        <p>Мы свяжемся с Вами в течение 5 минут.</p>
        <!--<a class="politica" href="javascript:void(0)" >Вы подтверждаете своё согласие на обработку персональных данных согласно политике.</a>-->
        <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
    </div>
    <div class="zakrit"></div>
</div>