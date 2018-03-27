<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="popup popup_request">
    <div class="popup__bg"></div>
    <div class="popup__main">
        <?php

        use yii\helpers\Html;
        use yii\widgets\ActiveForm;
        use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                    'id' => 'popup-form',
                    'options' => ['class' => 'form form_request callback'],
                    'enableClientValidation' => true,
                    'fieldConfig' => [
                        'template' => '{input}',
                    ],
        ]);
        ?>    
        <div class="form_b">
            <h3 class="form_t">Заявка на ремонт</h3>
            <div class="form_r">
                <label class="form_yelem form_yelem-inp">
                    <?=
                    $form->field($model, 'phone')->widget(MaskedInput::className(), [
                        'name' => 'phone',
                        'mask' => '+7 (999) 999-99-99',
                        'options' => [
                            'placeholder' => 'Ваш телефон',
                            'class' => 'form_input Form-inp-ph-m', 'type' => 'tel',
                            'size' => 40,
                        ],
                    ])->label('')
                    ?>
                </label>
            </div>
            <div class="form_r Form-row-sub">
                <?= Html::submitInput('Заказать', ['class' => 'm_btn btn_war Btn-w Btn-big Btn-txt', 'type' => 'submit']) ?>
            </div>
            <span id="messenger"></span>
            <div class="personalData">
               <div style="display: inline-block;"><?= $form->field($model, 'agree')->checkbox(['checked' => true, 'label' => null])->label(false); ?></div><span>Согласен с условиями <a href="/policy" target="_blank">обработки персональных данных</a></span>
            </div>
        </div>
        <?php ActiveForm::end() ?>
        <div class="popup__close"></div>
    </div>
</div>