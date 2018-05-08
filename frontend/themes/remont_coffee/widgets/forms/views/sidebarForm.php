<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="right-form">
    <div class="close-form"><i class="fa fa-close"></i></div>
    <p class="first-text"><b>ЗАКАЖИТЕ РЕМОНТ</b> СЕЙЧАС И ПОЛУЧИТЕ <span>ПОДАРОК!</span></p>
    <?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                'id' => 'sidebar-form',
                'options' => ['class' => 'Forma-gruppa'],
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
            'class' => 'Ww-tekst Ww-shart Ww-shart2 inp telefon', 'type' => 'tel',
            'size' => 40,
        ],
    ])->label('')
    ?>

    <?= Html::submitButton('Заказать', ['class' => 'Ww-tekst Ww-jonat jonat', 'type' => 'submit']) ?>


    <?php ActiveForm::end() ?>
    <p>Оставьте заявку, и наш оператор перезвонит Вам через 2 минуты.</p>
</div>