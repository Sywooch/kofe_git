<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$siteConfig = app\components\CController::getSiteConfig();
$form = ActiveForm::begin([
            'id' => $id,
            'options' => ['class' => 'global-form'],
            'enableClientValidation' => true,
            'fieldConfig' => [
                'template' => '{input}',
            ],
        ]);
$position = \yii\web\View::POS_END;
//        $validatejs = "$('#order-form').on('afterValidateAttribute', function(event, attribute, messages) {
//                    if(messages.length == 0){
//                        yaCounter45675441.reachGoal(\"popup-prices\");
//                    }
//                });";
//if (!$siteConfig['mono'])
//$this->registerJs($validatejs, $position);
?>
<div class="number">
    <span>Ваш телефон:</span>
    <?=
    $form->field($model, 'phone')->widget(MaskedInput::className(), [
        'name' => 'phone',
        'mask' => '+7 (999) 999-99-99',
        'options' => [
            'placeholder' => '+7 (___) ___-__-__',
            'class' => 'phone colorborderhover', 'type' => 'tel'
        ],
    ])->label('')
    ?>
</div>
<?= Html::submitButton('Заказать', ['class' => 'btn green zakaz colorbg colorbghover', 'type' => 'submit']) ?>
<?php ActiveForm::end() ?>