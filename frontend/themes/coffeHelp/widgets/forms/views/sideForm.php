<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<?php

            use yii\helpers\Html;
            use yii\widgets\ActiveForm;
            use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                        'id' => 'side-form',
                        'options' => ['class' => 'tb_sidebar_form'],
                        'enableClientValidation' => true,
                        'fieldConfig' => [
                            'template' => '{input}',
                        ],
            ]);
            ?>
    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>img/icons/sidebar_head.png"> 
    <span class="tb_sidebar_title">Нужна консультация?</span> 
    <span class="tb_sidebar_extra_text">Если у Вас возникли вопросы, обратитесь к нашим специалистам.</span> 
    <?=
            $form->field($model, 'phone')->widget(MaskedInput::className(), [
                'name' => 'phone',
                'mask' => '+7 (999) 999-99-99',
                'options' => [
                    'placeholder' => 'Номер телефона',
                    'type' => 'tel',
                    'size' => 40,
                ],
            ])->label('')
            ?>
    <?= Html::submitInput('Отправить', ['class' => 'call-master', 'type' => 'button']) ?>
<?php ActiveForm::end() ?>