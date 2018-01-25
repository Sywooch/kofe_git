<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
            'id' => 'popup-new-form',
            //'options' => ['class' => 'form form_request callback'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);
?>
<div class="col-xs-3"> <span style="color: #4c5052; font-size: 13px;">Обратный звонок</span></div>
<div class="col-xs-5"> 
    <?=
    $form->field($model, 'phone')->widget(MaskedInput::className(), [
        'name' => 'phone',
        'mask' => '+7 (999) 999-99-99',
        'options' => [
            'placeholder' => 'Номер телефона',
            'type' => 'tel',
            'size' => 40,
            'class' => 'form-control phone text'
        ],
    ])->label('')
    ?>
    <?= Html::submitButton('>', ['class' => 'btn btn-small call-master', 'type' => 'button']) ?>
</div>
<div class="col-xs-4"> <span style="color: #b4a588; font-size: 13px;">Перезвоним за минуту!</span></div>
<?php ActiveForm::end() ?>