<div class="post__content">
    <ul>
        <li>Для получения оперативной информации о статусе ремонта вашей кофемашины, позвоните на номер <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a> или заполните нижеследующую форму:</li>
    </ul>
    <?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\widgets\MaskedInput;

$form = ActiveForm::begin([
                'id' => 'status-form',
                'options' => ['class' => 'form form_feedback ajax_form'],
                'enableClientValidation' => true,
                'fieldConfig' => [
                    'template' => '{input}',
                ],
    ]);
    ?>
    <div class="form__row">
        <label class="form__element form__element_input">
            <?= $form->field($model, 'orderNumber')->textInput(['class' => 'form__input form__input_big', 'placeholder' => 'Номер заказа'])->label(false); ?>
        </label> 
        <label class="form__element form__element_input form__element_valid"> 
            <?=
                $form->field($model, 'phone')->widget(MaskedInput::className(), [
                    'name' => 'phone',
                    'mask' => '+7 (999) 999-99-99',
                    'options' => [
                        'placeholder' => '+7 (___) ___-__-__',
                        'class' => 'form__input form__input_big form__input_phone-mask', 'type' => 'tel',
                        'size' => 40,
                    ],
                ])->label('')
                ?>
        </label>
    </div>
    <div class="personalData">
        <label class="form__element form__element_input form__element_valid">
            <?= $form->field($model, 'agree')->checkbox(['checked' => true, 'label' => null])->label(false); ?>
            <span class="f14">Согласен с условиями <a href="/policy" target="_blank">обработки персональных данных</a></span>
        </label>
    </div>
    <div class="form__row form__row_submit">
        <label class="form__element form__element_input form__element_valid">
            <?= Html::submitInput('Отправить', ['class' => 'button button_success button_text button_big', 'type' => 'submit']) ?>
        </label>
    </div>
    <label class="form__element form__element_input form__element_valid"> </label>
    <?php ActiveForm::end() ?>
</div>
