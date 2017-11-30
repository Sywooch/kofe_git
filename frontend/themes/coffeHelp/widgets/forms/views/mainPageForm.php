<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<section class="section_form_order_bottom">
    <div class="form-order-cont">
        <span class="form-order-title">заказать звонок</span>
        <?php

        use yii\helpers\Html;
        use yii\widgets\ActiveForm;
        use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                    'id' => 'main-form',
                    //'options' => ['class' => 'form form_request callback'],
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
                'placeholder' => 'Номер телефона',
                'type' => 'tel',
            ],
        ])->label('')
        ?>
        <?= Html::submitInput('Отправить', ['class' => 'call-master', 'type' => 'submit']) ?>
        <?php ActiveForm::end() ?>
        <span class="form-order-desc">Мы перезвоним вам в течение 5 минут</span>
    </div>
</section>