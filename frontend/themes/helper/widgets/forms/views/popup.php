<?php
    $siteConfig = app\components\CController::getSiteConfig();
?>
<div class="fancybox-container fancybox-is-open" style="display: none;" id="popup" >
    <div class="fancybox-bg"></div>
    <div class="fancybox-inner">
        <div class="fancybox-stage">
            <div class="fancybox-slide fancybox-slide--html fancybox-slide--current fancybox-slide--complete" style="">
                <div class="alert alert-form">
                    <div class="alert-item">
                        <p class="alert-item--title">Заявка на ремонт</p>
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
                        <?=
                        $form->field($model, 'phone')->widget(MaskedInput::className(), [
                            'name' => 'phone',
                            'mask' => '+7 (999) 999-99-99',
                            'options' => [
                                'placeholder' => 'Ваш телефон',
                                'class' => 'input--block', 'type' => 'tel'
                            ],
                        ])->label('')
                        ?>
                        <?= Html::submitButton('Оставить заявку', ['class' => 'button button--yellow js-privacy-button', 'type' => 'submit']) ?>
                        <label for="privacy_checkbox"><?= $form->field($model, 'agree')->checkbox(['checked' => true, 'label' => null, 'class' => 'js-privacy-toggle', 'checked' => 'checked'])->label(false); ?> Я согласен с </label> <noindex><a href="/politika" rel="nofollow" target="_blank">правилами обработки персональных данных</a></noindex>
                        <?php ActiveForm::end() ?>
                    </div>
                    <button data-fancybox-close="" class="fancybox-close-small close1" title="Close"></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fancybox-container fancybox-is-open" style="display: none;" id="popup-send" >
    <div class="fancybox-bg"></div>
    <div class="fancybox-inner">
        <div class="fancybox-stage">
            <div class="fancybox-slide fancybox-slide--html fancybox-slide--current fancybox-slide--complete" style="">
                <div class="alert alert-form">
                    <div class="alert-item">
                        <p class="alert-item--title">Заявка отправлена</p>
                        <p style="text-align: left; margin-top: 15px; display: flex;"><img style="width: 40px; height: 40px; margin: 0px 10px 0px 0px;" src="<?= $siteConfig['theme']; ?>/images/checked.svg" alt=""><span>Спасибо за заявку, наш оператор свяжется с вами в течение 30 минут.</span></p>
                    </div>
                    <button data-fancybox-close="" class="fancybox-close-small close2" title="Close"></button>
                </div>
            </div>
        </div>
    </div>
</div>