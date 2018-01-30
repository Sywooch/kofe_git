<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="remodal" data-remodal-id="call-modal-form">
    <div id="form-modal">
        <div class="modal-content">
            <p class="modal-title">Вызов мастера</p>
            <p class="modal-desc">Мы перезвоним вам в течение минуты для подтверждения заказа.</p>
            <?php

            use yii\helpers\Html;
            use yii\widgets\ActiveForm;
            use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                        'id' => 'popup-new-form22',
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
                    'size' => 40,
                ],
            ])->label('')
            ?>            
            <?= Html::submitInput('Вызвать мастера', ['class' => 'call-master', 'type' => 'button']) ?>
            <?php ActiveForm::end() ?>
            <img data-remodal-action="close" class="remodal-close" src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/close_modal.png"/>
        </div>
    </div>
</div>