<div class="new-widget">
    <div class="container">
        <h2 class="top__title">Другие сервисные центры зарабатывают 100-120% от перепродажи наших услуг и комплектующих.</h2>
        <div class="clients__subtitle">Получите <span>эксклюзивную цену</span> на ремонт кофемашины<br>Закажите бесплатную диагностику кофемашины</div>
        <?php

        use yii\helpers\Html;
        use yii\widgets\ActiveForm;
        use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                    'id' => 'other-form',
                    'options' => ['class' => 'form default'],
                    'enableClientValidation' => true,
                    'fieldConfig' => [
                        'template' => '{input}',
                    ],
        ]);
        ?>
        <div class="form__field">
            <div class="form-group field-askform2-phone required has-error">
                <?=
                $form->field($model, 'phone')->widget(MaskedInput::className(), [
                    'name' => 'phone',
                    'mask' => '+7 (999) 999-99-99',
                    'options' => [
                        'placeholder' => 'Номер телефона *',
                        'class' => 'form__input form__input--fw', 'type' => 'tel'
                    ],
                ])->label('')
                ?>
            </div>
        </div>
        <div class="form__field form__field--btn">
            <?= Html::submitButton('Получить эксклюзивную цену', ['class' => 'btn btn--fw', 'type' => 'submit']) ?>            
        </div>
        <div class="policy"><input class="policy__input" type="checkbox" name="policy" id="policy-free" checked="checked">
            <label class="policy__label" for="policy-free">
                <span class="box"></span>
                <span class="text">Я согласен с условиями  <a href="/">политики конфиденциальности </a></span>
            </label>
        </div>
        <?php ActiveForm::end() ?> 
        <div style="margin-top: 15px; margin-bottom: 0px;" class="clients__subtitle">За сегодня экслюзивной ценой воспользовались - <span>14</span> человек</div>
    </div>
</div>