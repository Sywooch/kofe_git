<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="poster__request">
    <?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                'id' => 'main-form',
                'options' => ['class' => 'form form_request callback'],
                'enableClientValidation' => true,
                'fieldConfig' => [
                    'template' => '{input}',
                ],
    ]);
    ?>    
    <div class="form__box">
        <h3 class="form__title">Закажите ремонт сейчас и получите средство по уходу за кофемашиной в подарок! 🎁</h3>
        <div class="form__row">
            <label class="form__element form__element_input">
                <?=
                $form->field($model, 'phone')->widget(MaskedInput::className(), [
                    'name' => 'phone',
                    'mask' => '+7 (999) 999-99-99',
                    'options' => [
                        'placeholder' => 'Ваш телефон',
                        'class' => 'form__input form__input_phone-mask', 'type' => 'tel',
                        'size' => 40,
                    ],
                ])->label('')
                ?>
            </label>
        </div>
        <div class="form__row form__row_submit">
            <?= Html::submitInput('Заказать', ['class' => 'button button_warning button_wide button_big button_text', 'type' => 'submit']) ?>
        </div>
        <span id="messenger"></span>
        
        <div class="personalData"><?= $form->field($model, 'agree')->checkbox(['checked' => true, 'label' => null])->label(false); ?><span>Согласен с условиями <a href="/policy" target="_blank">обработки персональных данных</a></span></div>
    </div>
    <?php ActiveForm::end() ?>
</div>