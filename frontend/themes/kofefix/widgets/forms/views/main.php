<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
            'id' => 'main-form',
            'options' => ['class' => 'request-form'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);
?>
    <ul>
        <li>
            <label for="id_phone">Телефон</label>
            <?=
        $form->field($model, 'phone')->widget(MaskedInput::className(), [
            'name' => 'phone',
            'mask' => '+7 (999) 999-99-99',
            'options' => [
                'placeholder' => 'Телефон',
                'maxlength' => 15,
                'type' => 'tel'
            ],
        ])->label('')
        ?>
        </li>
    </ul>
    <input type="submit" value="Перезвоните мне"/>
<?php ActiveForm::end() ?>