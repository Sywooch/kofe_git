<div class="main_container">
    <div id="rumiservice12" class="inner_container">
        <div id="rumiservice12_left">
            <div class="rumiservice12_left_header">Заказать услуги в <span class="colortext"><?= $_SERVER['SERVER_NAME']; ?></span><br><a class="colortext" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a></div>
            <div class="rumiservice12_left_text"></div>
        </div>   
        <div id="rumiservice12_right">
            <div class="rumiservice12_right_right">
                <?php

                use yii\helpers\Html;
                use yii\widgets\ActiveForm;
                use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                            'id' => 'footer-form',
                            //'options' => ['class' => 'global-form'],
                            'enableClientValidation' => true,
                            'fieldConfig' => [
                                'template' => '{input}',
                            ],
                        ])
                ?> 
                <div class="rumiservice12_right_zagolovok">Введите ваш номер телефона:</div>
                <div class="rumiservice12_right_input">
                    <?=
                    $form->field($model, 'phone')->widget(MaskedInput::className(), [
                        'name' => 'phone',
                        'mask' => '+7 (999) 999-99-99',
                        'options' => [
                            'placeholder' => 'Ваш телефон', 'type' => 'tel', 'class' => 'rumiservice12_right_input_2'
                        ],
                    ])->label('Номер телефона <span class="required">*</span>')
                    ?>                    
                    <div class="rumiservice12_right_input_2_error">Введите номер телефона!</div>
                </div>
                <?= Html::submitButton('Заказать ремонт', ['class' => 'rumiservice12_right_submit colorbg']) ?>
                <div class="rumiservice12_right_bottomtext">
                    Возможна отправка и доставка<br>курьером
                </div>
                <?php ActiveForm::end() ?>
            </div>   
        </div>   
    </div>
</div>