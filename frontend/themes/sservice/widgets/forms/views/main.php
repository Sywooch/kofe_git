<?php use \app\components\CController; ?>
<div class="content_head">
    <div class="left">
        <h1><?= !empty($pageInfo['meta_h1']) ? str_replace('#brand_en#', CController::$monoBrand['title'], $pageInfo['meta_h1']) : 'РЕМОНТ КОФЕМАШИН <span>' . CController::$monoBrand['title'] . '</span> В ' . Yii::$app->session['region']['titleRod']; ?></h1>
        <ul class="icon">
            <li><i class="help-icon"></i><span>В ДЕНЬ ОБРАЩЕНИЯ</span></li>
            <li><i class="garantiya-icon"></i><span>ГАРАНТИЯ  ОДИН ГОД</span></li>
            <li><i class="deagnostika"></i><span>БЕСПЛАТНАЯ ДИАГНОСТИКА</span></li>
        </ul>
    </div>
    <div class="right">
        <div class="form">
            <?php

            use yii\helpers\Html;
            use yii\widgets\ActiveForm;
            use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                        'id' => 'main-form',
                        'options' => ['class' => 'form-order'],
                        'enableClientValidation' => true,
                        'fieldConfig' => [
                            'template' => '{input}',
                        ],
            ]);
            ?>
            <div class="h3">ВЫЗВАТЬ МАСТЕРА НА ДОМ</div>
            <ul>
                <li>Диагностика - 1500р 0р</li>
                <li>Забор и доставка кофемашины - 1000р 0р</li>
                <li>На время ремонта предоставляем кофемашину - БЕСПЛАТНО!</li>
                <li>Гарантия 24 месяца* (в зависимости от типа ремонта)</li>
            </ul>
            <?=
            $form->field($model, 'phone')->widget(MaskedInput::className(), [
                'name' => 'phone',
                'mask' => '+7 (999) 999-99-99',
                'options' => [
                    'placeholder' => 'Телефон',
                    'class' => 'phone', 'type' => 'tel'
                ],
            ])->label('')
            ?>
            <?= Html::submitButton('Отправить', ['type' => 'submit']) ?>
            <span class="pol">Ваши данные защищены <a class="polit" href="#">Политика конфиденциальности</a></span>
            <?php ActiveForm::end() ?> 
        </div>
    </div>
</div>