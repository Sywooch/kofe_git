<div class="choose" id="choose">
    <div class="container">
        <h2 class="choose__title">Выберите неисправность или услугу</h2>
        <div class="choose__nav">
            <div class="lists">
                <ul class="list" id="kofe">
                    <li class="list__item active" rel="neispravnost" >Неисправности</li>
                    <li class="list__item" rel="uslugi" >Услуги</li>
                    <li class="list__item" rel="ostalniyeuslugi" >Остальные услуги</li>
                </ul>
            </div>
        </div>
        <div class="choose__body">
            <div class="choose__grids" id="content-grid">
                <div class="choose__grid" id="neispravnost">
                    <?php foreach ($services['faults'] as $faultsService): ?>
                        <div class="item">
                            <div class="item__wrap" data-title="<?= $faultsService['title']; ?>" data-time="<?= $faultsService['time']; ?>">
                                <div class="item__title"><?= $faultsService['title']; ?></div>
                                <div class="bottom">
                                    <div class="price"><?= number_format($faultsService['price'], 0, ' ', ' '); ?> руб.
                                    </div>
                                    <div class="time"><?= $faultsService['time']; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="choose__grid" id="uslugi">
                    <?php foreach ($services['popularServices'] as $popularService): ?>
                        <div class="item">
                            <div class="item__wrap" data-title="<?= $popularService['title']; ?>" data-time="<?= $popularService['time']; ?>">
                                <div class="item__title"><?= $popularService['title']; ?></div>
                                <div class="bottom">
                                    <div class="price"><?= number_format($popularService['price'], 0, ' ', ' '); ?> руб.
                                    </div>
                                    <div class="time"><?= $popularService['time']; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>                
                <div class="choose__grid" id="ostalniyeuslugi">
                    <?php foreach ($services['services'] as $service): ?>
                        <div class="item">
                            <div class="item__wrap" data-title="<?= $service['title']; ?>" data-time="<?= $service['time']; ?>">
                                <div class="item__title"><?= $service['title']; ?></div>
                                <div class="bottom">
                                    <div class="price"><?= number_format($service['price'], 0, ' ', ' '); ?> руб.
                                    </div>
                                    <div class="time"><?= $service['time']; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="choose__forms">
                <?php

                use yii\helpers\Html;
                use yii\widgets\ActiveForm;
                use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                            'id' => 'landing-form1',
                            'options' => ['class' => 'form'],
                            'enableClientValidation' => true,
                            'fieldConfig' => [
                                'template' => '{input}',
                            ],
                ]);
                ?>

                <div class="form__title">Заказать ремонт кофемашины по акции</div>
                <div class="form__subtitle">Закажите ремонт сейчас и получите скидку  30%</div>
                <div class="form__field">
                    <?=
                    $form->field($model, 'phone')->widget(MaskedInput::className(), [
                        'name' => 'phone',
                        'mask' => '+7 (999) 999-99-99',
                        'options' => [
                            'placeholder' => 'Телефон',
                            'type' => 'tel',
                            'size' => 40,
                            'class' => 'form__input form__input--fw'
                        ],
                    ])->label('')
                    ?>                        
                </div>                
                <div class="form__field form__field--btn">
                    <?= Html::submitButton('Получить скидку 30%', ['class' => 'btn btn--fw', 'type' => 'submit']) ?>
                </div>
                <div class="policy">
                    <input class="policy__input" type="checkbox" name="policy" id="policy-form1" checked="checked"/>
                    <label class="policy__label" for="policy-form1">
                        <span class="box"></span>
                        <span class="text">Я согласен с условиями  <a href="/">политики конфиденциальности</a></span>
                    </label>
                </div>
                <?php ActiveForm::end() ?>
            </div>
        </div>
        <div class="desc">
            <div class="desc__text">С вашей кофемашиной что-то другое?</div>
            <div class="desc__contact">Позвоните, мы обязательно Вам поможем!<span class="call_phone_2"><a class="roistat" href="tel:74951323202">+7 495 132-32-02</a></span></div>
        </div>
    </div>
</div>