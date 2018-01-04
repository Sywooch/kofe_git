<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
            'id' => 'ask-formm',
            'options' => ['class' => 'global-form'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);
$position = \yii\web\View::POS_END;
$validatejs = "$('#ask-form').on('afterValidateAttribute', function(event, attribute, messages) {
                    if(messages.length == 0){
                        yaCounter45675441.reachGoal(\"ask-form\");
                    }
                });";
//if (!$siteConfig['mono'])
//$this->registerJs($validatejs, $position);
?>
<?=

$form->field($model, 'phone')->widget(MaskedInput::className(), [
    'name' => 'phone',
    'mask' => '+7 (999) 999-99-99',
    'options' => [
        'placeholder' => 'Ваш телефон',
        'type' => 'tel'
    ],
])->label('')
?><?= Html::submitButton('Заказать сейчас', ['class' => 'colorbg', 'type' => 'button']) ?>                
<?php ActiveForm::end() ?>