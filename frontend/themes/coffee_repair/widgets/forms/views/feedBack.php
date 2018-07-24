<?php 
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="feedback-order" id="konsult">
    <div class="page-wrap">
        <img src="/<?= $siteConfig['theme'] . '/'; ?>images/service-engineer.png" alt="Консультация сервисного инженера по ремонту кофемашин, кофейных аппаратов и кофеварок">
        <?php

        use yii\helpers\Html;
        use yii\widgets\ActiveForm;
        use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                    'id' => 'feed-back-form',
                    'options' => ['class' => 'ajax_form'],
                    'enableClientValidation' => true,
                    'fieldConfig' => [
                        'template' => '{input}',
                    ],
        ]);
        ?>
        <?= $form->field($model, 'comment')->textarea(['placeholder' => 'Задать вопрос сервис-инженеру рожковых кофемашин', 'cols' => 30, 'rows' => 10])->label(''); ?>
        <?=
        $form->field($model, 'phone')->widget(MaskedInput::className(), [
            'name' => 'phone',
            'mask' => '+7 (999) 999-99-99',
            'options' => [
                'placeholder' => 'Введите номер телефона для связи',
                'class' => 'js-validate-phone', 'type' => 'tel'
            ],
        ])->label('')
        ?>
        <button type="submit" class="btn">Спросить у инженера</button>
        <?php ActiveForm::end() ?>
    </div>
</div>