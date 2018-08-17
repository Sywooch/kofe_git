<div class="right-block">
    <div class="right-block__price-this-service">
        <p>Обслуживание <span>рожковых кофемашин</span></p>
        <ul>
            <li>Бесплатный выезд мастера</li>
            <li>Бесплатная диагностика</li>
            <li>Бесплатная доставка в сервис</li>
            <li>Гарантия до 3-х лет</li>
        </ul>
    </div>
    <hr>
    <div class="right-block__contacts-order">
        <span class="right-block__contacts-order-title">Круглосуточный прием заявок</span>
        <span class="right-block__contacts-order-phone"><a href="#">+7 (495) 215-52-37</a></span>
        <?php

        use yii\helpers\Html;
        use yii\widgets\ActiveForm;
        use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                    'id' => 'aside-form',
                    'options' => ['class' => 'ajax_form'],
                    'enableClientValidation' => true,
                    'fieldConfig' => [
                        'template' => '{input}',
                    ],
        ]);
        ?>
        <?=
        $form->field($model, 'phone')->widget(MaskedInput::className(), [
            'name' => 'phone',
            'mask' => '+7 (999) 999-99-99',
            'options' => [
                'placeholder' => 'Номер телефона',
                'class' => 'phone', 'type' => 'tel'
            ],
        ])->label('')
        ?>
        <button type="submit" class="btn" data-style="success">Вызвать мастера на дом</button>
        <?php ActiveForm::end() ?>
    </div>
</div>