<div class="wrapper__order-map">
    <div class="container">
        <div class="row">
            <div class="order-map">
                <div class="order-map__title col-lg-14 col-sm-17 col-xs-24">
                    Работаем по всей Москве и ближайшему Подмосковью
                </div>
                <div class="clearfix"></div>
                <div class="order-map__phone col-lg-24">
                    <a rel="nofollow" href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a>
                </div>
                <div class="clearfix"></div>
                <div class="order-map__time col-lg-11 col-sm-14 col-xs-24">
                    <div class="order-map__column">
                        <div class="map-column__title">
                            Выезд на ремонт:
                        </div>
                        <div class="map-column__description">
                            <span>Пн—Вс:</span>с 10:00 до 20:00
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="request">
                    <div class="request__title col-lg-4 col-sm-4">
                        Закажите мастера по ремонту кофемашин
                    </div>
                    <div class="request__form col-lg-13 col-sm-14">
                        <?php

                        use yii\helpers\Html;
                        use yii\widgets\ActiveForm;
                        use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                                    'id' => 'order-map-form',
                                    'options' => ['class' => 'request-form'],
                                    'enableClientValidation' => true,
                                    'fieldConfig' => [
                                        'template' => '{input}',
                                    ],
                        ]);
                        ?>
                        <ul>
                            <li>
                                <label for="id_phone">Телефон</label>
                                <?=
                                $form->field($model, 'phone')->widget(MaskedInput::className(), [
                                    'name' => 'phone',
                                    'mask' => '+7 (999) 999-99-99',
                                    'options' => [
                                        'placeholder' => 'Телефон',
                                        'maxlength' => 15,
                                        'type' => 'tel'
                                    ],
                                ])->label('')
                                ?>
                            </li>
                        </ul>
                        <input type="submit" value="Заказать мастера"/>
                        <?php ActiveForm::end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>