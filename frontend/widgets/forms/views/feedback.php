<?php 
$assets = Yii::getAlias('@web'); 
$regions = \Yii::$app->params['regions'];
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="<?= $class; ?>">
    <div class="call-widget__right-col">
        <div class="call-widget__photo">
            <img src="<?= $assets ?>/img/src/photo.png" alt="Алексей Владимиров" />
        </div>
        <div class="call-widget__info">
            <span>Алексей<br /> Владимиров</span>
            <small>юрист компании</small>
        </div>
    </div>    
    <div class="call-widget__left-col">
        <p>		
		  <strong>Нужна бесплатная консультация?</strong> <br>Звоните по телефону <?= \Yii::$app->session['region']['tel']; ?> или отправьте нам телефон, и мы свяжемся с вами в течение 15 минут.           
        </p>

        <?php

        use yii\helpers\Html;
        use yii\widgets\ActiveForm;
        use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                    'id' => 'feedback-form2',
                    'options' => ['class' => 'global-form'],
                    //'enableClientValidation' => true,
                    'fieldConfig' => [
                        'template' => '{input}',
                    ],
                ])
        ?> 
        <fieldset>
            <?=
            $form->field($model, 'phone')->widget(MaskedInput::className(), [
                'name' => 'phone',
                'mask' => '+7 (999) 999-99-99',
                'options' => [
                    'placeholder' => 'Ваш телефон', 'type' => 'tel'
                ],
            ])->label('Номер телефона <span class="required">*</span>')
            ?>
        </fieldset>
        <fieldset>
        <?= Html::submitButton('Отправить') ?>
        </fieldset>
<?php ActiveForm::end() ?>
<!--<a class="politica" href="javascript:void(0)" >Вы подтверждаете своё согласие на обработку персональных данных согласно политике.</a>-->
    </div>
</div>