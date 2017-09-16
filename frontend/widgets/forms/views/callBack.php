<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$siteConfig = app\components\CController::getSiteConfig();
$form = ActiveForm::begin([
            'id' => 'callback-form',
            'options' => ['class' => 'global-form'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);

$position = \yii\web\View::POS_END;
$validatejs = "$('#callback-form').on('afterValidateAttribute', function(event, attribute, messages) {
                    if(messages.length == 0){
                        yaCounter45675441.reachGoal(\"$metrika\");
                    }
                });";
if (!$siteConfig['mono'])
    $this->registerJs($validatejs, $position);
?> 
<?=

$form->field($model, 'phone')->widget(MaskedInput::className(), [
    'name' => 'phone',
    'mask' => '+7 (999) 999-99-99',
    'options' => [
        'placeholder' => 'Ваш телефон',
        'class' => 'phone',
        'type' => 'tel'
    ],
])->label('')
?>
<?= Html::submitButton('Заказать', ['class' => 'hero-form__btn']) ?>

<?php ActiveForm::end() ?>