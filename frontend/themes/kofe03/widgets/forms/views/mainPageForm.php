<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="hero-form">
    <?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                'id' => 'main-form',
                'options' => ['class' => 'global-form'],
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
            'placeholder' => 'Ваш телефон',
            'class' => 'wpcf7-form-control wpcf7-text wpcf7-validates-as-required input phone', 'type' => 'tel',
            'size' => 40,
        ],
    ])->label('')
    ?>
    <?= Html::submitButton('Заказать', ['class' => 'hero-form__btnbtn', 'type' => 'button']) ?>                
    <?php ActiveForm::end() ?>
    <p>Оставьте заявку, и наш оператор перезвонит Вам через 2 минуты.</p>
</div>