<div class="content7">
    <div class="left">
        <div class="map">
            <div id="map" style="width:100%; height:788px;">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor:ca8df37dbbfb52d82acd0b9bfb8e05a8d36d38665066643826b49abf1d0701a0&amp;width=100%&amp;height=788&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
        </div>
    </div>
    <div class="right">
        <h2>Контактная информация</h2>
        <p>Выездной ремонт кофемашин Saeco в&nbsp;Москве и&nbsp;Московской&nbsp;области</p>
        <p>Адрес: г. Москва, Октябрьская улица, дом 7 (вход&nbsp;со&nbsp;двора)</p>
        <div class="item">
            <span>График работы</span>
            <p>ПН-ВC c 9.00 до 22.00</p>
        </div>
        <div class="item">
            <span>Телефон</span>
            <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
        </div>
        <h3>5% скидка на работы + запчасти при заявке с сайта</h3>
        <?php

        use yii\helpers\Html;
        use yii\widgets\ActiveForm;
        use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                    'id' => 'map-form',
                    'options' => ['class' => 'zayavka_footer ajax_form'],
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
        <?= Html::submitButton('Отправить', ['type' => 'submit']) ?>
        <?php ActiveForm::end() ?> 
    </div>
</div>