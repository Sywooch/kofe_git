<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
            'id' => 'main-form',
            //'options' => ['class' => 'form-order'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);
?>
<span class="order-form__title-small">Наш специалист свяжется с вами</span>
<div class="row">
    <div class="for-50">
        <?=
        $form->field($model, 'phone')->widget(MaskedInput::className(), [
            'name' => 'phone',
            'mask' => '+7 (999) 999-99-99',
            'options' => [
                'placeholder' => 'Введите номер',
                'class' => ' ', 'type' => 'tel'
            ],
        ])->label('')
        ?>
    </div>
    <div class="for-50">
        <?= Html::submitButton('Заказать со скидкой', ['class' => 'btn', 'type' => 'submit']) ?>
    </div>
</div>
<span class="order-form__info">или свяжитесь с нашим call-центром: <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a></span>
<?php ActiveForm::end() ?>