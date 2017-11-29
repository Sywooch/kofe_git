<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<?php

        use yii\helpers\Html;
        use yii\widgets\ActiveForm;
        use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                    'id' => 'popup-form',
                    //'options' => ['class' => 'form form_request callback'],
                    'enableClientValidation' => true,
                    'fieldConfig' => [
                        'template' => '{input}',
                    ],
        ]);
        ?>
    <div id="form_order" class="order_form">
        <h3>Онлайн-заказ</h3>
        <div class="row">
            <div class="col-xs-12" style="padding-right: 14px;">
                <div class="input-group-lg"> <input id="order_name" type="text" class="form-control" placeholder="Как вас зовут?" name="name"></div>
                <br>
                <div class="input-group-lg"> 
                    <?=
                    $form->field($model, 'phone')->widget(MaskedInput::className(), [
                        'name' => 'phone',
                        'mask' => '+7 (999) 999-99-99',
                        'options' => [
                            'placeholder' => 'Ваш телефон',
                            'class' => 'form-control', 'type' => 'tel',
                            'size' => 40,
                        ],
                    ])->label('')
                    ?>
                    
                </div>
                <br>
            </div>
            <div class="col-xs-12">
                <div class="input-group-lg">
                    <?= $form->field($model, 'comment')->textarea(['class' => 'form-control', 'placeholder' => 'Опишите пожалуйста, что нужно сделать', 'style' => 'height: 110px;', 'rows' => 4]); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12" style="text-align: center;"> 
                <?= Html::submitButton('ОТПРАВИТЬ ЗАЯВКУ', ['class' => 'btn btn-default call-master', 'type' => 'submit']) ?>
            </div>
            <div class="col-xs-12" style="text-align: center;">
                <p>Работаем с физическими и юридическими лицами. Наличный и безналичный расчет.</p>
            </div>
        </div>
    </div>
<?php ActiveForm::end() ?>