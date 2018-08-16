<div class="preliminary-order" id="order">
    <div class="page-wrap clearfix">
        <div class="preliminary-order__left">
            <h4>Вызов мастера<br>займет у вас <span>2 минуты</span></h4>
            <?php

            use yii\helpers\Html;
            use yii\widgets\ActiveForm;
            use yii\widgets\MaskedInput;

$siteConfig = app\components\CController::getSiteConfig();
            $form = ActiveForm::begin([
                        'id' => 'order-form',
                        //'options' => ['class' => 'form-order'],
                        'enableClientValidation' => true,
                        'fieldConfig' => [
                            'template' => '{input}',
                        ],
            ]);
            ?>
            <span>Вызвать мастера и получить скидку</span>
            <?=
            $form->field($model, 'phone')->widget(MaskedInput::className(), [
                'name' => 'phone',
                'mask' => '+7 (999) 999-99-99',
                'options' => [
                    'placeholder' => 'Ваш телефон',
                    'class' => ' ', 'type' => 'tel'
                ],
            ])->label('')
            ?>
            <?= Html::submitButton('Вызвать мастера', ['class' => 'btn', 'type' => 'submit']) ?>
            <?php ActiveForm::end() ?>
        </div>
        <div class="preliminary-order__right">
            <img src="/<?= $siteConfig['theme'] . '/'; ?>images/bg/cup-of-coffee-hand.png" alt="Кружечка вкусного кофе после ремонта кофемашины" />
            <p>Выпить кружечку<br>кофе <span>5 минут</span></p>
        </div>
    </div>
</div>