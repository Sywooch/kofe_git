<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
            'id' => 'main-form',
            'options' => ['class' => 'slider-form js-feedback-form b-v'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);
?>

<p class="slider-form--title">Закажите ремонт кофемашины прямо сейчас - </p>
<p class="slider-form--description">и получите скидку до 50%! А так же выполним комплексное обслуживание совершенно БЕСПЛАТНО!</span></p>
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
    <?= Html::submitButton('Получить скидку', ['class' => 'button button--yellow js-privacy-button', 'type' => 'submit']) ?>
<p>
    <?= $form->field($model, 'agree')->checkbox(['checked' => true, 'label' => null, 'class' => 'js-privacy-toggle'])->label(false); ?>
    <label for="privacy_checkbox">Я согласен с <a href="/politika" target="_blank">правилами обработки персональных данных</a></label>
</p>
<?php ActiveForm::end() ?>