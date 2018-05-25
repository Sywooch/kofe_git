<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
            'id' => 'main-form',
            'options' => ['class' => 'js-feedback-form'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);
?>
<input type="hidden" name="feedback[subject]" value="Заявка на ремонт">
<div class="row row--small">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <?= $form->field($model, 'name')->input('text', ['class' => 'input input--block input--transparent', 'placeholder' => 'Ваше имя']); ?>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <?=
        $form->field($model, 'phone')->widget(MaskedInput::className(), [
            'name' => 'phone',
            'mask' => '+7 (999) 999-99-99',
            'options' => [
                'placeholder' => 'Ваш телефон',
                'class' => 'input input--block input--transparent', 'type' => 'tel'
            ],
        ])->label('')
        ?>
    </div>
</div>
<?= Html::submitButton('Заказать сейчас', ['class' => 'button button--yellow js-privacy-button', 'type' => 'submit']) ?>
<p>
    <?= $form->field($model, 'agree')->checkbox(['checked' => true, 'label' => null, 'class' => 'js-privacy-toggle'])->label(false); ?>
    <noindex><label for="privacy_checkbox">Я согласен с <a href="/politika" rel="nofollow" target="_blank">правилами обработки персональных данных</a></label></noindex>
</p>
<?php ActiveForm::end() ?>