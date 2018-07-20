<div class="address-offices">
    <div class="box-map-address"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae86ef23702529a7b29452fc413b7aaffb164368d5513e8553fa69fd47e2d43d8&amp;source=constructor" width="100%" height="529" frameborder="0"></iframe></div>
    <div class="address-offices__addresses" style="min-height:529px;">
        <div class="center">
            <h2>Контактная информация</h2>
            <p>Выезжаем на ремонт кофемашин  в каждый округ Москвы и 20 км. от МКАД.</p>
            <p><b>Адрес:</b> г. Москва, Октябрьская улица, дом 9/1</p>
            <p><b>Телефон:</b> <span>+7 (495)</span> 215-52-37</p>
            <?php

            use yii\helpers\Html;
            use yii\widgets\ActiveForm;
            use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                        'id' => 'footer-form',
                        //'options' => ['class' => 'form-order'],
                        'enableClientValidation' => true,
                        'fieldConfig' => [
                            'template' => '{input}',
                        ],
            ]);
            ?>
            <h2>Оставить заявку</h2>
            <br>
            <span class="row">
                <span class="for-50">
                    <?=
                    $form->field($model, 'phone')->widget(MaskedInput::className(), [
                        'name' => 'phone',
                        'mask' => '+7 (999) 999-99-99',
                        'options' => [
                            'placeholder' => 'Введите номер',
                            'class' => 'js-validate-phone', 'type' => 'tel'
                        ],
                    ])->label('')
                    ?>
                </span>
                <span class="for-50">
                    <?= Html::submitButton('Вызвать мастера', ['class' => 'btn', 'type' => 'submit']) ?>
                </span>
            </span>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>